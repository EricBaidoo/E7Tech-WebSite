<?php
// Database configuration for E7 Billing System
define('DB_HOST', 'localhost');
define('DB_NAME', 'e7_billing');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf8mb4');

// Create PDO connection
function getDBConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        return new PDO($dsn, DB_USER, DB_PASS, $options);
    } catch (PDOException $e) {
        error_log("Database connection failed: " . $e->getMessage());
        die("Database connection failed. Please contact support.");
    }
}

// Flash message functions
function setFlashMessage($type, $message) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['flash_message'] = [
        'type' => $type,  // success, error, warning, info
        'message' => $message
    ];
}

function getFlashMessage() {
    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION['flash_message'])) {
        $flash = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        return $flash;
    }
    return null;
}

// Sanitization and validation helpers
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateDate($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

function validateAmount($amount) {
    return is_numeric($amount) && $amount >= 0;
}

// Update invoice status based on balance and due date
function updateInvoiceStatus($pdo, $invoiceId) {
    $stmt = $pdo->prepare("
        SELECT balance, due_date, status 
        FROM invoices 
        WHERE id = ?
    ");
    $stmt->execute([$invoiceId]);
    $invoice = $stmt->fetch();
    
    if (!$invoice) return false;
    
    $newStatus = $invoice['status'];
    
    // Auto-mark as Paid when balance reaches zero
    if ($invoice['balance'] <= 0 && $invoice['status'] !== 'Paid') {
        $newStatus = 'Paid';
        $paidAt = date('Y-m-d H:i:s');
        $stmt = $pdo->prepare("
            UPDATE invoices 
            SET status = ?, paid_at = ? 
            WHERE id = ?
        ");
        $stmt->execute([$newStatus, $paidAt, $invoiceId]);
    } 
    // Auto-mark as Overdue if past due date and unpaid
    elseif ($invoice['balance'] > 0 && $invoice['status'] !== 'Draft' && $invoice['status'] !== 'Cancelled' && $invoice['status'] !== 'Pending') {
        $dueDate = new DateTime($invoice['due_date']);
        $today = new DateTime();
        
        if ($today > $dueDate && $invoice['status'] !== 'Overdue') {
            $newStatus = 'Overdue';
            $stmt = $pdo->prepare("UPDATE invoices SET status = ? WHERE id = ?");
            $stmt->execute([$newStatus, $invoiceId]);
        }
    }
    
    return true;
}

// Auto-update all overdue invoices (call on dashboard load)
function autoUpdateOverdueInvoices($pdo) {
    $today = date('Y-m-d');
    
    // Update all invoices that are past due date, have balance > 0, and are not in terminal states
    $stmt = $pdo->prepare("
        UPDATE invoices 
        SET status = 'Overdue' 
        WHERE due_date < ? 
        AND balance > 0 
        AND status NOT IN ('Paid', 'Cancelled', 'Draft', 'Pending', 'Overdue')
    ");
    $stmt->execute([$today]);
    
    return $stmt->rowCount();
}

// Auto-increment invoice/receipt numbers
function generateInvoiceNumber($pdo) {
    $year = date('Y');
    $stmt = $pdo->prepare("
        SELECT invoice_no 
        FROM invoices 
        WHERE invoice_no LIKE ? 
        ORDER BY id DESC 
        LIMIT 1
    ");
    $stmt->execute(["INV-{$year}-%"]);
    $last = $stmt->fetch();
    
    if ($last) {
        preg_match('/INV-\d{4}-(\d+)/', $last['invoice_no'], $matches);
        $num = isset($matches[1]) ? intval($matches[1]) + 1 : 1;
    } else {
        $num = 1;
    }
    
    return sprintf("INV-%s-%03d", $year, $num);
}

function generateReceiptNumber($pdo) {
    $year = date('Y');
    $stmt = $pdo->prepare("
        SELECT receipt_no 
        FROM receipts 
        WHERE receipt_no LIKE ? 
        ORDER BY id DESC 
        LIMIT 1
    ");
    $stmt->execute(["RCPT-{$year}-%"]);
    $last = $stmt->fetch();
    
    if ($last) {
        preg_match('/RCPT-\d{4}-(\d+)/', $last['receipt_no'], $matches);
        $num = isset($matches[1]) ? intval($matches[1]) + 1 : 1;
    } else {
        $num = 1;
    }
    
    return sprintf("RCPT-%s-%03d", $year, $num);
}
