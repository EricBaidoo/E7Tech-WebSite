<?php
// PDF Download Handler
require_once __DIR__ . '/includes/db_config.php';
require_once __DIR__ . '/includes/pdf_generator.php';

$type = $_GET['type'] ?? '';
$id = $_GET['id'] ?? 0;
$print = isset($_GET['print']) ? true : false;

try {
    if ($type === 'invoice' && $id > 0) {
        if ($print) {
            generateInvoicePDF($id, null, 'I'); // I = Print dialog
        } else {
            generateInvoicePDF($id); // D = Download
        }
    } elseif ($type === 'receipt' && $id > 0) {
        if ($print) {
            generateReceiptPDF($id, null, 'I'); // I = Print dialog
        } else {
            generateReceiptPDF($id); // D = Download
        }
    } else {
        throw new Exception("Invalid request");
    }
} catch (Exception $e) {
    header('HTTP/1.1 404 Not Found');
    echo "Error: " . htmlspecialchars($e->getMessage());
}