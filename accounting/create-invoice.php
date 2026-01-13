<?php
$page_title = 'Create Invoice';
require_once __DIR__ . '/includes/header.php';
?>



<!-- Create Invoice Form -->
<section class="form-section">
    <div class="container">
        <div class="form-container">
            <div class="card form-card">
                <form method="post" action="handlers/save-invoice.php">
                    <!-- Client Information -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-user"></i> Client Information</h3>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="client-name">Client Name <span class="required">*</span></label>
                            <input id="client-name" name="client_name" type="text" placeholder="Enter client or company name" required>
                        </div>
                        <div class="form-group">
                            <label for="client-email">Client Email</label>
                            <input id="client-email" name="client_email" type="email" placeholder="client@company.com">
                            <span class="helper-text"><i class="fas fa-info-circle"></i> Required for email delivery</span>
                        </div>
                    </div>

                    <!-- Invoice Details -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-file-alt"></i> Invoice Details</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="invoice-number">Invoice Number</label>
                            <input id="invoice-number" name="invoice_number" type="text" placeholder="Leave blank for auto-generation">
                            <span class="helper-text"><i class="fas fa-magic"></i> Auto-generates as INV-2026-XXX if left blank</span>
                        </div>
                        <div class="form-group">
                            <label for="issue-date">Issue Date <span class="required">*</span></label>
                            <input id="issue-date" name="issue_date" type="date" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="due-date">Due Date <span class="required">*</span></label>
                            <input id="due-date" name="due_date" type="date" value="<?php echo date('Y-m-d', strtotime('+30 days')); ?>" required>
                        </div>
                    </div>

                    <!-- Financial Information -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-calculator"></i> Financial Details</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="currency">Currency <span class="required">*</span></label>
                            <select id="currency" name="currency" required>
                                <option value="USD">USD - United States Dollar ($)</option>
                                <option value="GHS">GHS - Ghana Cedi (GH₵)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Invoice Amount <span class="required">*</span></label>
                            <input id="amount" name="amount" type="number" step="0.01" min="0" placeholder="0.00" required>
                            <span class="helper-text"><i class="fas fa-info-circle"></i> Enter the total amount</span>
                        </div>
                        <div class="form-group">
                            <label for="status">Invoice Status</label>
                            <select id="status" name="status">
                                <option value="Draft">Draft (in preparation)</option>
                                <option value="Pending">Pending (ready but not sent)</option>
                                <option value="Sent">Sent (awaiting payment)</option>
                                <option value="Paid">Paid (fully settled)</option>
                                <option value="Overdue">Overdue (past due date)</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-section-header">
                        <h3><i class="fas fa-align-left"></i> Service Description</h3>
                    </div>

                    <div class="form-group">
                        <label for="description">Description / Services Provided</label>
                        <textarea id="description" name="description" rows="5" placeholder="Describe the services, products, or work performed...&#10;&#10;Example:&#10;- Website Development&#10;- Security Assessment&#10;- Cloud Infrastructure Setup"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="notes">Additional Notes (Optional)</label>
                        <textarea id="notes" name="notes" rows="3" placeholder="Payment terms, thank you message, or other notes..."></textarea>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-save"></i> Create Invoice
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

<?php require_once __DIR__ . '/includes/footer.php'; ?>
