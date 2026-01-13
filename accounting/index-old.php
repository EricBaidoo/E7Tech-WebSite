<?php
session_start();
$page_title = "Billing Control - E7 Technology Solutions";

// Standalone deployment - no dependency on main site
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="invoice.css?v=2">
</head>
<body>

<?php
require_once __DIR__ . '/includes/db_config.php';

// Get flash message if any
$flashMessage = getFlashMessage();

// Connect to database and fetch live data
try {
    $pdo = getDBConnection();
    
    // Fetch invoices
    $stmt = $pdo->query("SELECT * FROM invoices ORDER BY id DESC LIMIT 50");
    $invoices = $stmt->fetchAll();
    
    // Fetch receipts with invoice info
    $stmt = $pdo->query("
        SELECT r.*, i.invoice_no, i.client_name 
        FROM receipts r 
        JOIN invoices i ON r.invoice_id = i.id 
        ORDER BY r.id DESC LIMIT 50
    ");
    $receipts = $stmt->fetchAll();
    
    // Calculate totals
    $totals = [
        'outstanding' => 0,
        'overdue' => 0,
        'paid' => 0,
        'draft' => 0
    ];
    
    foreach ($invoices as $invoice) {
        if ($invoice['status'] !== 'Paid') {
            $totals['outstanding'] += floatval($invoice['balance']);
        }
        if ($invoice['status'] === 'Overdue') {
            $totals['overdue'] += 1;
        }
        if ($invoice['status'] === 'Paid') {
            $totals['paid'] += 1;
        }
        if ($invoice['status'] === 'Draft') {
            $totals['draft'] += 1;
        }
    }
    
} catch (Exception $e) {
    // Fallback to empty arrays if DB not set up yet
    $invoices = [];
    $receipts = [];
    $totals = ['outstanding' => 0, 'overdue' => 0, 'paid' => 0, 'draft' => 0];
    $flashMessage = ['type' => 'error', 'message' => 'Database not connected. Please run the SQL schema from database/billing_schema.sql first.'];
}
?>

<section class="billing-header">
    <div class="container">
        <?php if ($flashMessage): ?>
        <div class="flash-message <?php echo htmlspecialchars($flashMessage['type']); ?>">
            <i class="fas fa-<?php echo $flashMessage['type'] === 'success' ? 'check-circle' : ($flashMessage['type'] === 'error' ? 'exclamation-circle' : 'info-circle'); ?>"></i>
            <?php echo htmlspecialchars($flashMessage['message']); ?>
        </div>
        <?php endif; ?>
        
        <div class="billing-hero">
            <div class="left">
                <span class="eyebrow"><i class="fas fa-file-invoice-dollar"></i> Finance Workspace</span>
                <h1>Invoicing & Receipts Control</h1>
                <p>Professional billing management for E7 Technology Solutions. Create invoices, track payments, and manage receipts with automated PDF generation and email delivery.</p>
                
                <div class="hero-stats">
                    <div class="hero-stat">
                        <i class="fas fa-file-invoice"></i>
                        <div class="stat-info">
                            <div class="label">Total Invoices</div>
                            <div class="value"><?php echo count($invoices); ?></div>
                        </div>
                    </div>
                    <div class="hero-stat">
                        <i class="fas fa-receipt"></i>
                        <div class="stat-info">
                            <div class="label">Total Receipts</div>
                            <div class="value"><?php echo count($receipts); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dashboard-section">
    <div class="container">
        <div class="metric-grid">
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="label">Outstanding Balance</div>
                <div class="value">$<?php echo number_format($totals['outstanding'], 2); ?></div>
                <div class="trend down"><i class="fas fa-hourglass-half"></i> Awaiting settlement</div>
            </div>
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="label">Overdue Invoices</div>
                <div class="value"><?php echo $totals['overdue']; ?></div>
                <div class="trend down"><i class="fas fa-bell"></i> Needs follow-up</div>
            </div>
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="label">Paid This Month</div>
                <div class="value"><?php echo $totals['paid']; ?></div>
                <div class="trend up"><i class="fas fa-arrow-up"></i> Completed</div>
            </div>
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="label">Draft Invoices</div>
                <div class="value"><?php echo $totals['draft']; ?></div>
                <div class="trend up"><i class="fas fa-pen"></i> Ready to send</div>
            </div>
        </div>

        <div class="panel-grid">
            <div class="card">
                <div class="card-header">
                    <div>
                        <p class="card-title"><i class="fas fa-file-invoice"></i> Invoices</p>
                        <p class="card-sub">Manage client billing and track payment status</p>
                    </div>
                    <a class="btn-link solid" href="#create-invoice"><i class="fas fa-plus"></i> New Invoice</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Client</th>
                            <th>Issued</th>
                            <th>Due</th>
                            <th>Status</th>
                            <th>Balance</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($invoices)): ?>
                        <tr>
                            <td colspan="7" style="text-align: center; padding: 30px; color: var(--muted);">No invoices yet. Create one using the form below.</td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($invoices as $invoice): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($invoice['invoice_no']); ?></td>
                            <td><?php echo htmlspecialchars($invoice['client_name']); ?></td>
                            <td><?php echo htmlspecialchars($invoice['issue_date']); ?></td>
                            <td><?php echo htmlspecialchars($invoice['due_date']); ?></td>
                            <td>
                                <?php
                                    $status = strtolower($invoice['status']);
                                    $icon = 'fa-hourglass-half';
                                    if ($status === 'paid') { $icon = 'fa-circle-check'; }
                                    if ($status === 'overdue') { $icon = 'fa-bell'; }
                                    if ($status === 'draft') { $icon = 'fa-pen'; }
                                    if ($status === 'sent' || $status === 'due') { $icon = 'fa-clock'; }
                                ?>
                                <span class="status-badge status-<?php echo $status; ?>">
                                    <i class="fas <?php echo $icon; ?>"></i>
                                    <?php echo htmlspecialchars($invoice['status']); ?>
                                </span>
                            </td>
                            <td><?php echo ($invoice['currency'] === 'GHS' ? 'GH₵' : '$'); ?><?php echo number_format($invoice['balance'], 2); ?></td>
                            <td class="actions">
                                <a class="btn-link" href="download-pdf.php?type=invoice&id=<?php echo $invoice['id']; ?>" title="Download PDF"><i class="fas fa-file-pdf"></i></a>
                                <a class="btn-link solid" href="send-email.php?type=invoice&id=<?php echo $invoice['id']; ?>" title="Send via email"><i class="fas fa-paper-plane"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="card">
                <div class="card-header">
                    <div>
                        <p class="card-title"><i class="fas fa-receipt"></i> Receipts</p>
                        <p class="card-sub">Payment confirmations linked to invoices</p>
                    </div>
                    <a class="btn-link solid" href="#record-receipt"><i class="fas fa-plus"></i> Record Payment</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Receipt</th>
                            <th>Invoice</th>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($receipts)): ?>
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 30px; color: var(--muted);">No receipts yet. Record one using the form below.</td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($receipts as $receipt): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($receipt['receipt_no']); ?></td>
                            <td><?php echo htmlspecialchars($receipt['invoice_no']); ?></td>
                            <td><?php echo htmlspecialchars($receipt['client_name']); ?></td>
                            <td><?php echo htmlspecialchars($receipt['received_at']); ?></td>
                            <td>$<?php echo number_format($receipt['amount'], 2); ?></td>
                            <td>
                                <span class="status-badge status-paid">
                                    <i class="fas fa-circle-check"></i>
                                    Received
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="form-grid">
            <div class="card form-card" id="create-invoice">
                <h3><i class="fas fa-file-invoice"></i> Create New Invoice</h3>
                <form method="post" action="handlers/save-invoice.php">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="invoice-number">Invoice Number</label>
                            <input id="invoice-number" name="invoice_number" type="text" placeholder="Auto-generated if left blank">
                            <span class="helper-text"><i class="fas fa-info-circle"></i> Leave blank for auto-generation (INV-2026-XXX)</span>
                        </div>
                        <div class="form-group">
                            <label for="client-name">Client Name <span class="required">*</span></label>
                            <input id="client-name" name="client_name" type="text" placeholder="Enter client or company name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="client-email">Client Email</label>
                            <input id="client-email" name="client_email" type="email" placeholder="client@company.com">
                            <span class="helper-text"><i class="fas fa-envelope"></i> Required for email delivery</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="issue-date">Issue Date <span class="required">*</span></label>
                            <input id="issue-date" name="issue_date" type="date" required>
                        </div>
                        <div class="form-group">
                            <label for="due-date">Due Date <span class="required">*</span></label>
                            <input id="due-date" name="due_date" type="date" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="amount">Invoice Amount <span class="required">*</span></label>
                            <input id="amount" name="amount" type="number" step="0.01" placeholder="0.00" required>
                        </div>
                        <div class="form-group">
                            <label for="currency">Currency <span class="required">*</span></label>
                            <select id="currency" name="currency">
                                <option value="USD">USD - US Dollar ($)</option>
                                <option value="GHS">GHS - Ghana Cedi (GH₵)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status">
                                <option value="Draft">Draft</option>
                                <option value="Due">Due</option>
                                <option value="Sent">Sent</option>
                                <option value="Paid">Paid</option>
                                <option value="Overdue">Overdue</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description / Services</label>
                        <textarea id="description" name="description" placeholder="Describe the services or products..."></textarea>
                    </div>
                    <div style="display: flex; gap: 12px; margin-top: 24px;">
                        <button type="submit" class="btn-primary"><i class="fas fa-save"></i> Create Invoice</button>
                        <button type="reset" class="btn-secondary"><i class="fas fa-times"></i> Clear Form</button>
                    </div>
                </form>
            </div>

            <div class="card form-card" id="record-receipt">
                <h3><i class="fas fa-receipt"></i> Record Payment Receipt</h3>
                <form method="post" action="handlers/save-receipt.php">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="receipt-number">Receipt Number</label>
                            <input id="receipt-number" name="receipt_number" type="text" placeholder="Auto-generated if left blank">
                            <span class="helper-text"><i class="fas fa-info-circle"></i> Leave blank for auto-generation (RCPT-2026-XXX)</span>
                        </div>
                        <div class="form-group">
                            <label for="invoice-ref">Invoice Number <span class="required">*</span></label>
                            <input id="invoice-ref" name="invoice_ref" type="text" placeholder="INV-2026-001" required>
                            <span class="helper-text"><i class="fas fa-link"></i> Link receipt to existing invoice</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="receipt-date">Payment Date <span class="required">*</span></label>
                            <input id="receipt-date" name="receipt_date" type="date" required>
                        </div>
                        <div class="form-group">
                            <label for="payment-method">Payment Method</label>
                            <select id="payment-method" name="payment_method">
                                <option>Bank Transfer</option>
                                <option>Card</option>
                                <option>Mobile Money</option>
                                <option>Cash</option>
                                <option>Check</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="receipt-amount">Amount Received <span class="required">*</span></label>
                        <input id="receipt-amount" name="receipt_amount" type="number" step="0.01" placeholder="0.00" required>
                    </div>
                    <div class="form-group">
                        <label for="receipt-notes">Transaction Reference / Notes</label>
                        <textarea id="receipt-notes" name="receipt_notes" placeholder="Bank reference, transaction ID, or additional notes..."></textarea>
                    </div>
                    <div style="display: flex; gap: 12px; margin-top: 24px;">
                        <button type="submit" class="btn-primary"><i class="fas fa-check"></i> Record Payment</button>
                        <button type="reset" class="btn-secondary"><i class="fas fa-times"></i> Clear Form</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="note-card">
            <h4><i class="fas fa-lightbulb"></i> System Features</h4>
            <ul>
                <li><strong>Automated Numbering:</strong> Invoice and receipt numbers auto-generate if left blank</li>
                <li><strong>Currency Support:</strong> USD ($) and Ghana Cedis (GH₵) with proper symbols in PDFs</li>
                <li><strong>PDF Generation:</strong> Professional invoices and receipts with E7 branding</li>
                <li><strong>Email Delivery:</strong> Send invoices directly to clients (configure SMTP in email_config.php)</li>
                <li><strong>Balance Tracking:</strong> Invoice balances update automatically when receipts are recorded</li>
                <li><strong>Status Management:</strong> Track invoice lifecycle from Draft → Sent → Paid</li>
            </ul>
        </div>
    </div>
</section>

</body>
</html>
                <ul>
                    <li><strong>Location:</strong> /accounting/ subdomain-ready folder</li>
                    <li><strong>Database:</strong> e7_billing with invoices + receipts tables</li>
                    <li><strong>Currency:</strong> USD or GHS (Ghana Cedis) only</li>
                    <li><strong>PDF:</strong> FPDF library with E7 branding & currency symbols</li>
                    <li><strong>Email:</strong> PHPMailer with HTML templates</li>
                    <li><strong>Setup:</strong> Import database/billing_schema.sql first</li>
                </ul>
            </div>
        </div>
    </div>
</section>

</body>
</html>
