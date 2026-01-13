<?php
$page_title = 'Record Payment';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/db_config.php';

// Fetch unpaid invoices for dropdown
try {
    $pdo = getDBConnection();
    $stmt = $pdo->query("SELECT id, invoice_no, client_name, currency, balance FROM invoices WHERE status != 'Paid' AND status != 'Cancelled' ORDER BY invoice_no DESC");
    $unpaid_invoices = $stmt->fetchAll();
} catch (Exception $e) {
    $unpaid_invoices = [];
}
?>


<!-- Record Payment Form -->
<section class="form-section">
    <div class="container">
        <div class="form-container">
            <div class="card form-card">
                <form method="post" action="handlers/save-receipt.php">
                    <!-- Receipt Information -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-hashtag"></i> Receipt Information</h3>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="receipt-number">Receipt Number</label>
                            <input id="receipt-number" name="receipt_number" type="text" placeholder="Leave blank for auto-generation">
                            <span class="helper-text"><i class="fas fa-magic"></i> Auto-generates as RCPT-2026-XXX if left blank</span>
                        </div>
                        <div class="form-group">
                            <label for="receipt-date">Payment Date <span class="required">*</span></label>
                            <input id="receipt-date" name="receipt_date" type="date" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                    </div>

                    <!-- Invoice Linkage -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-link"></i> Link to Invoice</h3>
                    </div>

                    <?php if (!empty($unpaid_invoices)): ?>
                    <div class="form-group">
                        <label for="invoice-select">Select Invoice</label>
                        <select id="invoice-select" class="invoice-select">
                            <option value="">-- Choose an invoice --</option>
                            <?php foreach ($unpaid_invoices as $inv): ?>
                            <option value="<?php echo htmlspecialchars($inv['invoice_no']); ?>" 
                                    data-client="<?php echo htmlspecialchars($inv['client_name']); ?>"
                                    data-balance="<?php echo $inv['balance']; ?>"
                                    data-currency="<?php echo $inv['currency']; ?>">
                                <?php echo htmlspecialchars($inv['invoice_no']); ?> - 
                                <?php echo htmlspecialchars($inv['client_name']); ?> - 
                                <?php echo ($inv['currency'] === 'GHS' ? 'GH₵' : '$'); ?><?php echo number_format($inv['balance'], 2); ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="helper-text"><i class="fas fa-info-circle"></i> Or enter invoice number manually below</span>
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="invoice-ref">Invoice Number <span class="required">*</span></label>
                        <input id="invoice-ref" name="invoice_ref" type="text" placeholder="INV-2026-001" required>
                        <span class="helper-text"><i class="fas fa-link"></i> Must match an existing invoice</span>
                    </div>

                    <!-- Payment Details -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-money-bill-wave"></i> Payment Details</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="receipt-amount">Amount Received <span class="required">*</span></label>
                            <input id="receipt-amount" name="receipt_amount" type="number" step="0.01" min="0" placeholder="0.00" required>
                            <span class="helper-text"><i class="fas fa-info-circle"></i> Enter the amount received</span>
                        </div>
                        <div class="form-group">
                            <label for="payment-method">Payment Method</label>
                            <select id="payment-method" name="payment_method">
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Mobile Money">Mobile Money (MTN/Vodafone/AirtelTigo)</option>
                                <option value="Card">Credit/Debit Card</option>
                                <option value="Cash">Cash</option>
                                <option value="Check">Check</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Transaction Details -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-file-alt"></i> Transaction Reference</h3>
                    </div>

                    <div class="form-group">
                        <label for="reference">Reference / Transaction ID</label>
                        <input id="reference" name="reference" type="text" placeholder="e.g., TXN-123456, Bank Ref: ABC789">
                        <span class="helper-text"><i class="fas fa-info-circle"></i> Bank reference, mobile money ID, or check number</span>
                    </div>

                    <div class="form-group">
                        <label for="receipt-notes">Additional Notes (Optional)</label>
                        <textarea id="receipt-notes" name="receipt_notes" rows="4" placeholder="Any additional information about this payment..."></textarea>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-check"></i> Record Payment
                        </button>
                        <button type="reset" class="btn-secondary">
                            <i class="fas fa-times"></i> Clear Form
                        </button>
                        <a href="dashboard.php" class="btn-link">
                            <i class="fas fa-arrow-left"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<script>
// Auto-fill invoice number when selected from dropdown
document.getElementById('invoice-select')?.addEventListener('change', function() {
    const invoiceRef = document.getElementById('invoice-ref');
    if (this.value) {
        invoiceRef.value = this.value;
        
        // Optional: Show balance info
        const option = this.options[this.selectedIndex];
        const balance = option.dataset.balance;
        const currency = option.dataset.currency;
        const symbol = currency === 'GHS' ? 'GH₵' : '$';
        
        const amountInput = document.getElementById('receipt-amount');
        amountInput.placeholder = `Balance: ${symbol}${parseFloat(balance).toFixed(2)}`;
    }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
