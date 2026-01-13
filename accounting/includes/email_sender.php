<?php
// Email functionality for E7 Billing System
// Uses PHPMailer for reliable email delivery

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/db_config.php';

// Load email configuration
$emailConfig = file_exists(__DIR__ . '/email_config.php') 
    ? require __DIR__ . '/email_config.php'
    : require __DIR__ . '/email_config.example.php';

function sendInvoiceEmail($invoiceId, $recipientEmail = null) {
    global $emailConfig;
    
    if (!$emailConfig['enable_email']) {
        throw new Exception("Email sending is disabled in configuration");
    }
    
    $pdo = getDBConnection();
    $stmt = $pdo->prepare("SELECT * FROM invoices WHERE id = ?");
    $stmt->execute([$invoiceId]);
    $invoice = $stmt->fetch();
    
    if (!$invoice) {
        throw new Exception("Invoice not found");
    }
    
    // Use invoice email if recipient not specified
    $to = $recipientEmail ?: $invoice['client_email'];
    
    if (empty($to)) {
        throw new Exception("No recipient email address");
    }
    
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $emailConfig['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $emailConfig['smtp_username'];
        $mail->Password = $emailConfig['smtp_password'];
        $mail->SMTPSecure = $emailConfig['smtp_secure'];
        $mail->Port = $emailConfig['smtp_port'];
        
        if ($emailConfig['debug_mode']) {
            $mail->SMTPDebug = 2;
        }
        
        // Recipients
        $mail->setFrom($emailConfig['from_email'], $emailConfig['from_name']);
        $mail->addAddress($to, $invoice['client_name']);
        $mail->addReplyTo($emailConfig['reply_to'], $emailConfig['from_name']);
        
        // Attach PDF
        $pdfPath = __DIR__ . '/../temp/' . $invoice['invoice_no'] . '.pdf';
        if (!file_exists(dirname($pdfPath))) {
            mkdir(dirname($pdfPath), 0755, true);
        }
        
        require_once __DIR__ . '/pdf_generator.php';
        generateInvoicePDF($invoiceId, $pdfPath);
        $mail->addAttachment($pdfPath);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Invoice ' . $invoice['invoice_no'] . ' from E7 Technology Solutions';
        
        $dueDate = date('F j, Y', strtotime($invoice['due_date']));
        $currencySymbol = ($invoice['currency'] === 'GHS') ? 'GH₵' : '$';
        $amount = $currencySymbol . number_format($invoice['amount'], 2);
        
        $mail->Body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #0a2540, #023e8a); color: white; padding: 30px; text-align: center; border-radius: 8px 8px 0 0; }
                .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 8px 8px; }
                .invoice-box { background: white; padding: 20px; margin: 20px 0; border-left: 4px solid #00b4d8; }
                .amount { font-size: 32px; font-weight: bold; color: #00b4d8; margin: 10px 0; }
                .btn { display: inline-block; padding: 12px 24px; background: #00b4d8; color: white; text-decoration: none; border-radius: 6px; margin: 10px 0; }
                .footer { text-align: center; color: #6c757d; font-size: 12px; margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>Invoice from E7 Technology Solutions</h1>
                </div>
                <div class='content'>
                    <p>Dear {$invoice['client_name']},</p>
                    <p>Thank you for your business. Please find attached invoice <strong>{$invoice['invoice_no']}</strong> for your recent services.</p>
                    
                    <div class='invoice-box'>
                        <p><strong>Invoice Number:</strong> {$invoice['invoice_no']}</p>
                        <p><strong>Issue Date:</strong> " . date('F j, Y', strtotime($invoice['issue_date'])) . "</p>
                        <p><strong>Due Date:</strong> {$dueDate}</p>
                        <p><strong>Amount Due:</strong></p>
                        <div class='amount'>{$invoice['currency']} {$amount}</div>
                    </div>
                    
                    <p><strong>Description:</strong><br>" . nl2br(htmlspecialchars($invoice['description'])) . "</p>
                    
                    <p>Please process payment by the due date. For payment details or questions, contact us at connect@e7world.tech or +233 243 838 490.</p>
                    
                    <p>Best regards,<br>
                    <strong>E7 Technology Solutions</strong><br>
                    Innovation Through Technology</p>
                    
                    <div class='footer'>
                        <p>E7 Technology Solutions | Accra, Ghana<br>
                        connect@e7world.tech | +233 243 838 490</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
        
        $mail->AltBody = "Invoice {$invoice['invoice_no']} from E7 Technology Solutions\n\n"
                       . "Amount Due: {$invoice['currency']} {$amount}\n"
                       . "Due Date: {$dueDate}\n\n"
                       . "Please see attached PDF for full details.";
        
        $mail->send();
        
        // Update invoice sent_at timestamp
        $stmt = $pdo->prepare("UPDATE invoices SET sent_at = NOW(), status = 'Sent' WHERE id = ?");
        $stmt->execute([$invoiceId]);
        
        // Clean up temp file
        if (file_exists($pdfPath)) {
            unlink($pdfPath);
        }
        
        return true;
        
    } catch (Exception $e) {
        // Clean up temp file on error
        if (isset($pdfPath) && file_exists($pdfPath)) {
            unlink($pdfPath);
        }
        throw new Exception("Email could not be sent. Error: {$mail->ErrorInfo}");
    }
}

function sendReceiptEmail($receiptId, $recipientEmail = null) {
    $pdo = getDBConnection();
    $stmt = $pdo->prepare("
        SELECT r.*, i.invoice_no, i.client_name, i.client_email, i.currency
        FROM receipts r
        JOIN invoices i ON r.invoice_id = i.id
        WHERE r.id = ?
    ");
    $stmt->execute([$receiptId]);
    $receipt = $stmt->fetch();
    
    if (!$receipt) {
        throw new Exception("Receipt not found");
    }
    
    $to = $recipientEmail ?: $receipt['client_email'];
    
    if (empty($to)) {
        throw new Exception("No recipient email address");
    }
    
    $mail = new PHPMailer(true);
    
    try {
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = SMTP_PORT;
        
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress($to, $receipt['client_name']);
        $mail->addReplyTo(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        
        // Attach PDF
        $pdfPath = __DIR__ . '/../temp/' . $receipt['receipt_no'] . '.pdf';
        if (!file_exists(dirname($pdfPath))) {
            mkdir(dirname($pdfPath), 0755, true);
        }
        
        require_once __DIR__ . '/pdf_generator.php';
        generateReceiptPDF($receiptId, $pdfPath);
        $mail->addAttachment($pdfPath);
        
        $mail->isHTML(true);
        $mail->Subject = 'Payment Receipt ' . $receipt['receipt_no'] . ' - E7 Technology Solutions';
        
        $amount = number_format($receipt['amount'], 2);
        $date = date('F j, Y', strtotime($receipt['received_at']));
        
        $mail->Body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #12b886, #0f9e6e); color: white; padding: 30px; text-align: center; border-radius: 8px 8px 0 0; }
                .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 8px 8px; }
                .receipt-box { background: white; padding: 20px; margin: 20px 0; border-left: 4px solid #12b886; }
                .amount { font-size: 32px; font-weight: bold; color: #12b886; margin: 10px 0; }
                .footer { text-align: center; color: #6c757d; font-size: 12px; margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>Payment Receipt</h1>
                </div>
                <div class='content'>
                    <p>Dear {$receipt['client_name']},</p>
                    <p>Thank you for your payment. This email confirms we have received your payment for invoice <strong>{$receipt['invoice_no']}</strong>.</p>
                    
                    <div class='receipt-box'>
                        <p><strong>Receipt Number:</strong> {$receipt['receipt_no']}</p>
                        <p><strong>Invoice Number:</strong> {$receipt['invoice_no']}</p>
                        <p><strong>Date Received:</strong> {$date}</p>
                        <p><strong>Payment Method:</strong> {$receipt['method']}</p>
                        <p><strong>Amount Received:</strong></p>
                        <div class='amount'>{$receipt['currency']} {$amount}</div>
                    </div>
                    
                    <p>Please keep this receipt for your records. If you have any questions, contact us at connect@e7world.tech or +233 243 838 490.</p>
                    
                    <p>Best regards,<br>
                    <strong>E7 Technology Solutions</strong><br>
                    Innovation Through Technology</p>
                    
                    <div class='footer'>
                        <p>E7 Technology Solutions | Accra, Ghana<br>
                        connect@e7world.tech | +233 243 838 490</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
        
        $mail->send();
        
        if (file_exists($pdfPath)) {
            unlink($pdfPath);
        }
        
        return true;
        
    } catch (Exception $e) {
        if (isset($pdfPath) && file_exists($pdfPath)) {
            unlink($pdfPath);
        }
        throw new Exception("Email could not be sent. Error: {$mail->ErrorInfo}");
    }
}
