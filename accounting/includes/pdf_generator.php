<?php
// Professional PDF Generation Library for E7 Billing System
// Modern design with clean layout and professional styling

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/db_config.php';

class InvoicePDF extends FPDF {
    private $invoiceData;
    
    function setInvoiceData($data) {
        $this->invoiceData = $data;
    }
    
    function Header() {
        // Modern header with brand bar
        $this->SetFillColor(44, 82, 130); // E7 Navy
        $this->Rect(0, 0, 210, 40, 'F');
        
        // E7 Logo
        if (file_exists(__DIR__ . '/../../assets/images/e7-logo1.png')) {
            $this->Image(__DIR__ . '/../../assets/images/e7-logo1.png', 15, 8, 25);
        }
        
        // Company information
        $this->SetFont('Arial', 'B', 16);
        $this->SetTextColor(255, 255, 255);
        $this->SetXY(45, 12);
        $this->Cell(0, 6, 'E7 TECHNOLOGY SOLUTIONS', 0, 1, 'L');
        
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(230, 230, 230);
        $this->SetX(45);
        $this->Cell(0, 4, 'Accra, Ghana', 0, 1);
        $this->SetX(45);
        $this->Cell(0, 4, 'connect@e7world.tech | +233 243 838 490', 0, 1);
        
        $this->Ln(15);
    }
    
    function Footer() {
        $this->SetY(-25);
        $this->SetDrawColor(230, 230, 230);
        $this->SetLineWidth(0.3);
        $this->Line(15, $this->GetY(), 195, $this->GetY());
        $this->Ln(2);
        
        $this->SetFont('Arial', 'I', 7);
        $this->SetTextColor(130, 130, 130);
        $this->Cell(0, 3, 'Thank you for your business with E7 Technology Solutions.', 0, 1, 'C');
        $this->SetFont('Arial', '', 7);
        $this->Cell(0, 3, 'For inquiries, please contact us at connect@e7world.tech', 0, 1, 'C');
        
        $this->SetY(-10);
        $this->SetFont('Arial', '', 7);
        $this->SetTextColor(150, 150, 150);
        $this->Cell(90, 3, 'E7 Technology Solutions | Official Invoice', 0, 0, 'L');
        $this->Cell(90, 3, 'Page ' . $this->PageNo(), 0, 0, 'R');
    }
    
    function InvoiceBody() {
        $data = $this->invoiceData;
        $currencySymbol = ($data['currency'] === 'GHS') ? 'GH₵' : '$';
        
        // Invoice title
        $this->SetFont('Arial', 'B', 24);
        $this->SetTextColor(44, 82, 130);
        $this->Cell(120, 10, 'INVOICE', 0, 0);
        
        // Status badge
        $statusColors = [
            'Paid' => ['bg' => [200, 240, 220], 'text' => [16, 120, 70]],
            'Overdue' => ['bg' => [255, 220, 220], 'text' => [180, 30, 30]],
            'Pending' => ['bg' => [255, 240, 200], 'text' => [180, 120, 30]]
        ];
        $colors = $statusColors[$data['status']] ?? $statusColors['Pending'];
        $this->SetFillColor($colors['bg'][0], $colors['bg'][1], $colors['bg'][2]);
        $this->SetTextColor($colors['text'][0], $colors['text'][1], $colors['text'][2]);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(40, 8, strtoupper($data['status']), 0, 1, 'C', true);
        $this->Ln(3);
        
        // Invoice details box
        $this->SetFillColor(248, 250, 252);
        $this->Rect(15, $this->GetY(), 85, 35, 'F');
        
        $detailY = $this->GetY();
        $this->SetXY(20, $detailY + 3);
        $this->SetFont('Arial', '', 7);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'INVOICE NUMBER', 0, 1);
        $this->SetX(20);
        $this->SetFont('Arial', 'B', 11);
        $this->SetTextColor(30, 30, 30);
        $this->Cell(0, 5, $data['invoice_no'], 0, 1);
        
        $this->SetX(20);
        $this->SetFont('Arial', '', 7);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'ISSUE DATE', 0, 1);
        $this->SetX(20);
        $this->SetFont('Arial', '', 9);
        $this->SetTextColor(50, 50, 50);
        $this->Cell(0, 4, date('F d, Y', strtotime($data['issue_date'])), 0, 1);
        
        $this->SetX(20);
        $this->SetFont('Arial', '', 7);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'DUE DATE', 0, 1);
        $this->SetX(20);
        $this->SetFont('Arial', 'B', 9);
        $isDue = strtotime($data['due_date']) < time() && $data['balance'] > 0;
        $this->SetTextColor($isDue ? 220 : 50, $isDue ? 53 : 50, $isDue ? 69 : 50);
        $this->Cell(0, 4, date('F d, Y', strtotime($data['due_date'])), 0, 1);
        
        // Client information box
        $this->SetFillColor(248, 250, 252);
        $this->Rect(110, $detailY, 85, 35, 'F');
        
        $this->SetXY(115, $detailY + 3);
        $this->SetFont('Arial', '', 7);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'BILL TO', 0, 1);
        
        $this->SetX(115);
        $this->SetFont('Arial', 'B', 11);
        $this->SetTextColor(30, 30, 30);
        $this->Cell(0, 5, $data['client_name'], 0, 1);
        
        if (!empty($data['client_email'])) {
            $this->SetX(115);
            $this->SetFont('Arial', '', 8);
            $this->SetTextColor(100, 100, 100);
            $this->Cell(0, 4, $data['client_email'], 0, 1);
        }
        
        $this->SetY($detailY + 38);
        $this->Ln(3);
        
        // Description section
        if (!empty($data['description'])) {
            $this->SetDrawColor(230, 230, 230);
            $this->SetLineWidth(0.3);
            $this->Line(15, $this->GetY(), 195, $this->GetY());
            $this->Ln(5);
            
            $this->SetFont('Arial', 'B', 8);
            $this->SetTextColor(44, 82, 130);
            $this->Cell(0, 4, 'SERVICE DESCRIPTION', 0, 1);
            $this->Ln(1);
            
            $this->SetFont('Arial', '', 9);
            $this->SetTextColor(60, 60, 60);
            $this->MultiCell(0, 4, $data['description'], 0, 'L');
            
            $this->Ln(5);
        }
        
        // Financial summary section
        $this->SetDrawColor(44, 82, 130);
        $this->SetLineWidth(0.5);
        $this->Line(15, $this->GetY(), 195, $this->GetY());
        $this->Ln(5);
        
        // Invoice Total
        $summaryY = $this->GetY();
        $this->SetXY(15, $summaryY);
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'TOTAL AMOUNT DUE', 0, 1);
        $this->SetX(15);
        $this->SetFont('Arial', 'B', 20);
        $this->SetTextColor(44, 82, 130);
        $this->Cell(0, 10, $currencySymbol . ' ' . number_format($data['amount'], 2), 0, 0);
        
        $this->SetY($summaryY + 13);
        $this->Ln(5);
        
        // Payment information
        $this->SetDrawColor(230, 230, 230);
        $this->SetLineWidth(0.3);
        $this->Line(15, $this->GetY(), 195, $this->GetY());
        $this->Ln(4);
        
        $this->SetFont('Arial', 'B', 8);
        $this->SetTextColor(44, 82, 130);
        $this->Cell(0, 3, 'PAYMENT INFORMATION', 0, 1);
        $this->Ln(1);
        
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(80, 80, 80);
        $this->MultiCell(0, 3.5, 'Payment is due within 30 days from the invoice date. Please include the invoice number as a reference when making payment. For mobile money payments, use the number provided. Bank transfer details are available upon request.', 0, 'L');
        $this->Ln(2);
        
        $this->SetFont('Arial', 'I', 7);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'Thank you for your business. We appreciate your trust in E7 Technology Solutions.', 0, 1, 'L');
    }
}

class ReceiptPDF extends FPDF {
    private $receiptData;
    
    function __construct() {
        parent::__construct('L', 'mm', array(280, 140));
    }
    
    function setReceiptData($data) {
        $this->receiptData = $data;
    }
    
    function Header() {
        // Navy blue header bar
        $this->SetFillColor(44, 82, 130);
        $this->Rect(0, 0, 280, 22, 'F');
        
        // Logo
        if (file_exists(__DIR__ . '/../../assets/images/e7-logo1.png')) {
            $this->Image(__DIR__ . '/../../assets/images/e7-logo1.png', 10, 3, 16);
        }
        
        // Company name
        $this->SetFont('Arial', 'B', 12);
        $this->SetTextColor(255, 255, 255);
        $this->SetXY(30, 4);
        $this->Cell(150, 4, 'E7 TECHNOLOGY SOLUTIONS', 0, 1, 'L');
        
        // Contact info
        $this->SetFont('Arial', '', 7);
        $this->SetTextColor(220, 220, 220);
        $this->SetXY(30, 10);
        $this->Cell(150, 2.5, 'Accra, Ghana | connect@e7world.tech | +233 243 838 490', 0, 1, 'L');
        
        // Right side - badge
        $this->SetFont('Arial', 'B', 9);
        $this->SetTextColor(255, 255, 255);
        $this->SetXY(200, 6);
        $this->Cell(70, 10, 'OFFICIAL RECEIPT', 0, 0, 'C');
        
        $this->Ln(4);
    }
    
    function Footer() {
        $this->SetY(-10);
        $this->SetDrawColor(220, 220, 220);
        $this->SetLineWidth(0.3);
        $this->Line(10, $this->GetY(), 270, $this->GetY());
        $this->Ln(1);
        
        $this->SetFont('Arial', '', 6);
        $this->SetTextColor(150, 150, 150);
        $this->Cell(0, 2, 'Official Receipt | Retain for records | E7 Technology Solutions', 0, 0, 'C');
    }
    
    function ReceiptBody() {
        $data = $this->receiptData;
        
        // Get currency, balance, and description
        $pdo = getDBConnection();
        $stmt = $pdo->prepare("SELECT currency, balance, description FROM invoices WHERE id = (SELECT invoice_id FROM receipts WHERE id = ?)");
        $stmt->execute([$data['id'] ?? 0]);
        $invoice = $stmt->fetch();
        $currency = $invoice['currency'] ?? 'USD';
        $balance = $invoice['balance'] ?? 0;
        $description = $invoice['description'] ?? '';
        $currencySymbol = ($currency === 'GHS') ? 'GH₵' : '$';
        
        $this->Ln(18);
        
        // Receipt number and date
        $this->SetFont('Arial', 'B', 11);
        $this->SetTextColor(30, 30, 30);
        $this->SetX(10);
        $this->Cell(80, 5, 'Receipt #' . $data['receipt_no'], 0, 0);
        
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(60, 60, 60);
        $this->Cell(0, 5, date('F d, Y', strtotime($data['received_at'])), 0, 1, 'R');
        $this->Ln(2);
        
        // Divider
        $this->SetDrawColor(230, 230, 230);
        $this->SetLineWidth(0.3);
        $this->Line(10, $this->GetY(), 270, $this->GetY());
        $this->Ln(2);
        
        // Client name
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(120, 120, 120);
        $this->SetX(10);
        $this->Cell(0, 3, 'RECEIVED FROM', 0, 1);
        
        $this->SetFont('Arial', 'B', 14);
        $this->SetTextColor(30, 30, 30);
        $this->SetX(10);
        $this->Cell(0, 6, $data['client_name'], 0, 1);
        $this->Ln(1);
        
        // Transaction details - three columns horizontal
        $startY = $this->GetY();
        
        // Invoice
        $this->SetXY(10, $startY);
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'INVOICE NUMBER', 0, 1);
        $this->SetX(10);
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(40, 40, 40);
        $this->Cell(0, 4, $data['invoice_no'], 0, 1);
        
        // Payment method
        $this->SetXY(80, $startY);
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'PAYMENT METHOD', 0, 1);
        $this->SetX(80);
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(40, 40, 40);
        $this->Cell(0, 4, $data['method'], 0, 1);
        
        // Reference
        $this->SetXY(150, $startY);
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'REFERENCE', 0, 1);
        $this->SetX(150);
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(40, 40, 40);
        $refText = !empty($data['reference']) ? $data['reference'] : 'N/A';
        $this->Cell(0, 4, $refText, 0, 1);
        
        $this->SetY($startY + 9);
        $this->Ln(1);
        
        // Payment description section
        if (!empty($description)) {
            $this->SetFont('Arial', '', 8);
            $this->SetTextColor(120, 120, 120);
            $this->SetX(10);
            $this->Cell(0, 3, 'PAYMENT DESCRIPTION', 0, 1);
            
            $this->SetFont('Arial', '', 9);
            $this->SetTextColor(40, 40, 40);
            $this->SetX(10);
            $this->MultiCell(260, 3.5, $description);
            $this->Ln(0.5);
        }
        
        // Payment summary divider
        $this->SetDrawColor(230, 230, 230);
        $this->Line(10, $this->GetY(), 270, $this->GetY());
        $this->Ln(2);
        
        // Payment amounts - two columns
        $amountY = $this->GetY();
        
        // Amount Received
        $this->SetXY(10, $amountY);
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'AMOUNT RECEIVED', 0, 1);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 20);
        $this->SetTextColor(44, 82, 130);
        $this->Cell(130, 10, $currencySymbol . ' ' . number_format($data['amount'], 2), 0, 0);
        
        // Balance Due
        $this->SetXY(140, $amountY);
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(120, 120, 120);
        $this->Cell(0, 3, 'BALANCE DUE', 0, 1);
        $this->SetX(140);
        $this->SetFont('Arial', 'B', 20);
        if ($balance > 0) {
            $this->SetTextColor(220, 53, 69);
        } else {
            $this->SetTextColor(40, 167, 69);
        }
        $this->Cell(130, 10, $currencySymbol . ' ' . number_format($balance, 2), 0, 0);
        
        $this->SetY($amountY + 13);
        $this->Ln(1);
        
        // Notes if present
        if (!empty($data['notes'])) {
            $this->SetDrawColor(230, 230, 230);
            $this->Line(10, $this->GetY(), 270, $this->GetY());
            $this->Ln(1.5);
            
            $this->SetFont('Arial', '', 8);
            $this->SetTextColor(120, 120, 120);
            $this->SetX(10);
            $this->Cell(0, 3, 'NOTES', 0, 1);
            
            $this->SetFont('Arial', '', 9);
            $this->SetTextColor(60, 60, 60);
            $this->SetX(10);
            $this->MultiCell(260, 3.5, $data['notes']);
            $this->Ln(0.5);
        }
        
        // Footer
        $this->SetDrawColor(230, 230, 230);
        $this->Line(10, $this->GetY(), 270, $this->GetY());
        $this->Ln(1.5);
        
        $footerY = $this->GetY();
        
        // Terms
        $this->SetXY(10, $footerY);
        $this->SetFont('Arial', '', 7.5);
        $this->SetTextColor(130, 130, 130);
        $this->MultiCell(170, 2.5, 'This receipt confirms payment received. Outstanding balances remain due per original invoice terms. Thank you for your business with E7 Technology Solutions. Please retain this receipt for your records.');
        
        // Signature
        $this->SetXY(200, $footerY);
        if (file_exists(__DIR__ . '/../assets/images/Sign.png')) {
            $this->Image(__DIR__ . '/../assets/images/Sign.png', 210, $footerY, 35);
            $this->SetXY(200, $footerY + 15);
        } else {
            $this->SetXY(200, $footerY + 2);
        }
        
        $this->SetDrawColor(180, 180, 180);
        $this->SetLineWidth(0.3);
        $this->Line(200, $this->GetY(), 265, $this->GetY());
        
        $this->SetXY(200, $this->GetY() + 1);
        $this->SetFont('Arial', '', 7);
        $this->SetTextColor(130, 130, 130);
        $this->Cell(65, 2, 'Authorized Signature', 0, 0, 'C');
    }
}

// Generate invoice PDF
function generateInvoicePDF($invoiceId, $savePath = null, $output = 'D') {
    $pdo = getDBConnection();
    $stmt = $pdo->prepare("SELECT * FROM invoices WHERE id = ?");
    $stmt->execute([$invoiceId]);
    $invoice = $stmt->fetch();
    
    if (!$invoice) {
        throw new Exception("Invoice not found");
    }
    
    $pdf = new InvoicePDF();
    $pdf->setInvoiceData($invoice);
    $pdf->AddPage();
    $pdf->InvoiceBody();
    
    if ($savePath) {
        $pdf->Output('F', $savePath);
        return $savePath;
    } else {
        // D = download, I = inline/print
        $pdf->Output($output, $invoice['invoice_no'] . '.pdf');
    }
}

// Generate receipt PDF
function generateReceiptPDF($receiptId, $savePath = null, $output = 'D') {
    $pdo = getDBConnection();
    $stmt = $pdo->prepare("
        SELECT r.*, i.invoice_no, i.client_name, i.currency
        FROM receipts r
        JOIN invoices i ON r.invoice_id = i.id
        WHERE r.id = ?
    ");
    $stmt->execute([$receiptId]);
    $receipt = $stmt->fetch();
    
    if (!$receipt) {
        throw new Exception("Receipt not found");
    }
    
    $pdf = new ReceiptPDF();
    $pdf->setReceiptData($receipt);
    $pdf->AddPage();
    $pdf->ReceiptBody();
    
    if ($savePath) {
        $pdf->Output('F', $savePath);
        return $savePath;
    } else {
        // D = download, I = inline/print
        $pdf->Output($output, $receipt['receipt_no'] . '.pdf');
    }
}
