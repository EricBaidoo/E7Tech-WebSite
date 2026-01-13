<?php
session_start();
require_once __DIR__ . '/../includes/db_config.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: billing.php');
    exit;
}

$pdo = getDBConnection();

try {
    // Get and validate form data
    $invoiceNo = sanitizeInput($_POST['invoice_number'] ?? '');
    $clientName = sanitizeInput($_POST['client_name'] ?? '');
    $clientEmail = sanitizeInput($_POST['client_email'] ?? '');
    $issueDate = sanitizeInput($_POST['issue_date'] ?? '');
    $dueDate = sanitizeInput($_POST['due_date'] ?? '');
    $amount = sanitizeInput($_POST['amount'] ?? '');
    $currency = sanitizeInput($_POST['currency'] ?? 'USD');
    $status = sanitizeInput($_POST['status'] ?? 'Draft');
    $description = sanitizeInput($_POST['description'] ?? '');
    
    // Validation
    $errors = [];
    
    if (empty($invoiceNo)) {
        $invoiceNo = generateInvoiceNumber($pdo);
    }
    
    if (empty($clientName)) {
        $errors[] = "Client name is required";
    }
    
    if (!empty($clientEmail) && !validateEmail($clientEmail)) {
        $errors[] = "Invalid email address";
    }
    
    if (!validateDate($issueDate)) {
        $errors[] = "Invalid issue date";
    }
    
    if (!validateDate($dueDate)) {
        $errors[] = "Invalid due date";
    }
    
    if (!validateAmount($amount)) {
        $errors[] = "Invalid amount";
    }
    
    if (!empty($errors)) {
        setFlashMessage('error', implode(', ', $errors));
        header('Location: billing.php');
        exit;
    }
    
    // Check if updating existing invoice
    $invoiceId = $_POST['invoice_id'] ?? null;
    
    if ($invoiceId) {
        // Update existing invoice
        $stmt = $pdo->prepare("
            UPDATE invoices 
            SET invoice_no = ?, 
                client_name = ?, 
                client_email = ?,
                issue_date = ?, 
                due_date = ?, 
                currency = ?, 
                amount = ?, 
                balance = ?,
                status = ?, 
                description = ?
            WHERE id = ?
        ");
        
        // Get current balance (in case amount changed)
        $stmtBal = $pdo->prepare("SELECT amount, balance FROM invoices WHERE id = ?");
        $stmtBal->execute([$invoiceId]);
        $current = $stmtBal->fetch();
        
        // Adjust balance based on amount difference
        $amountDiff = floatval($amount) - floatval($current['amount']);
        $newBalance = floatval($current['balance']) + $amountDiff;
        
        $stmt->execute([
            $invoiceNo,
            $clientName,
            $clientEmail,
            $issueDate,
            $dueDate,
            $currency,
            $amount,
            $newBalance,
            $status,
            $description,
            $invoiceId
        ]);
        
        updateInvoiceStatus($pdo, $invoiceId);
        setFlashMessage('success', "Invoice {$invoiceNo} updated successfully!");
        
    } else {
        // Create new invoice
        $stmt = $pdo->prepare("
            INSERT INTO invoices 
            (invoice_no, client_name, client_email, issue_date, due_date, currency, amount, balance, status, description)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        
        $stmt->execute([
            $invoiceNo,
            $clientName,
            $clientEmail,
            $issueDate,
            $dueDate,
            $currency,
            $amount,
            $amount,  // Initial balance equals amount
            $status,
            $description
        ]);
        
        $invoiceId = $pdo->lastInsertId();
        setFlashMessage('success', "Invoice {$invoiceNo} created successfully!");
    }
    
    // Log the action
    $stmt = $pdo->prepare("
        INSERT INTO billing_audit (entity_type, entity_id, action, ip_address)
        VALUES ('invoice', ?, ?, ?)
    ");
    $stmt->execute([
        $invoiceId,
        $invoiceId ? 'update' : 'create',
        $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ]);
    
} catch (PDOException $e) {
    error_log("Invoice save error: " . $e->getMessage());
    setFlashMessage('error', "Database error: " . $e->getMessage());
} catch (Exception $e) {
    error_log("Invoice save error: " . $e->getMessage());
    setFlashMessage('error', "An error occurred while saving the invoice");
}

header('Location: ../index.php');
exit;
