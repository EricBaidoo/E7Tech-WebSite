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
    $receiptNo = sanitizeInput($_POST['receipt_number'] ?? '');
    $invoiceRef = sanitizeInput($_POST['invoice_ref'] ?? '');
    $receiptDate = sanitizeInput($_POST['receipt_date'] ?? '');
    $amount = sanitizeInput($_POST['receipt_amount'] ?? '');
    $method = sanitizeInput($_POST['payment_method'] ?? 'Bank Transfer');
    $notes = sanitizeInput($_POST['receipt_notes'] ?? '');
    
    // Validation
    $errors = [];
    
    if (empty($receiptNo)) {
        $receiptNo = generateReceiptNumber($pdo);
    }
    
    if (empty($invoiceRef)) {
        $errors[] = "Invoice reference is required";
    }
    
    if (!validateDate($receiptDate)) {
        $errors[] = "Invalid receipt date";
    }
    
    if (!validateAmount($amount)) {
        $errors[] = "Invalid amount";
    }
    
    if (!empty($errors)) {
        setFlashMessage('error', implode(', ', $errors));
        header('Location: billing.php');
        exit;
    }
    
    // Find invoice by invoice_no
    $stmt = $pdo->prepare("SELECT id, balance, amount, client_name FROM invoices WHERE invoice_no = ?");
    $stmt->execute([$invoiceRef]);
    $invoice = $stmt->fetch();
    
    if (!$invoice) {
        setFlashMessage('error', "Invoice {$invoiceRef} not found");
        header('Location: billing.php');
        exit;
    }
    
    $invoiceId = $invoice['id'];
    $currentBalance = floatval($invoice['balance']);
    $receiptAmount = floatval($amount);
    
    // Check if receipt amount exceeds balance
    if ($receiptAmount > $currentBalance) {
        setFlashMessage('warning', "Receipt amount ($" . number_format($receiptAmount, 2) . ") exceeds invoice balance ($" . number_format($currentBalance, 2) . "). Proceeding anyway.");
    }
    
    // Begin transaction
    $pdo->beginTransaction();
    
    // Insert receipt
    $stmt = $pdo->prepare("
        INSERT INTO receipts 
        (receipt_no, invoice_id, amount, method, received_at, notes)
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    
    $stmt->execute([
        $receiptNo,
        $invoiceId,
        $receiptAmount,
        $method,
        $receiptDate,
        $notes
    ]);
    
    $receiptId = $pdo->lastInsertId();
    
    // Update invoice balance
    $newBalance = max(0, $currentBalance - $receiptAmount);
    $stmt = $pdo->prepare("UPDATE invoices SET balance = ? WHERE id = ?");
    $stmt->execute([$newBalance, $invoiceId]);
    
    // Update invoice status (paid, partial, etc.)
    updateInvoiceStatus($pdo, $invoiceId);
    
    // Log the action
    $stmt = $pdo->prepare("
        INSERT INTO billing_audit (entity_type, entity_id, action, ip_address)
        VALUES ('receipt', ?, 'create', ?)
    ");
    $stmt->execute([
        $receiptId,
        $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ]);
    
    $pdo->commit();
    
    setFlashMessage('success', "Receipt {$receiptNo} recorded successfully! Invoice {$invoiceRef} balance updated to $" . number_format($newBalance, 2));
    
} catch (PDOException $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    error_log("Receipt save error: " . $e->getMessage());
    setFlashMessage('error', "Database error: " . $e->getMessage());
} catch (Exception $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    error_log("Receipt save error: " . $e->getMessage());
    setFlashMessage('error', "An error occurred while saving the receipt");
}

header('Location: ../index.php');
exit;
