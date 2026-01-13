<?php
// Send invoice or receipt via email
session_start();
require_once __DIR__ . '/includes/db_config.php';
require_once __DIR__ . '/includes/email_sender.php';

$type = $_GET['type'] ?? '';
$id = $_GET['id'] ?? 0;
$email = $_GET['email'] ?? null;

try {
    if ($type === 'invoice' && $id > 0) {
        sendInvoiceEmail($id, $email);
        setFlashMessage('success', 'Invoice sent successfully via email!');
    } elseif ($type === 'receipt' && $id > 0) {
        sendReceiptEmail($id, $email);
        setFlashMessage('success', 'Receipt sent successfully via email!');
    } else {
        throw new Exception("Invalid request");
    }
} catch (Exception $e) {
    setFlashMessage('error', 'Email sending failed: ' . $e->getMessage());
}

header('Location: index.php');
exit;
