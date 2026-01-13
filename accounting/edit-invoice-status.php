<?php
$page_title = 'Update Invoice Status';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/db_config.php';

$invoice_id = $_GET['id'] ?? null;
$success = false;
$error = '';
$invoice = null;

if (!$invoice_id) {
    header('Location: dashboard.php');
    exit;
}

// Fetch invoice details
try {
    $pdo = getDBConnection();
    $stmt = $pdo->prepare("SELECT * FROM invoices WHERE id = ?");
    $stmt->execute([$invoice_id]);
    $invoice = $stmt->fetch();
    
    if (!$invoice) {
        header('Location: dashboard.php');
        exit;
    }
} catch (Exception $e) {
    $error = 'Database error: ' . $e->getMessage();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $new_status = $_POST['status'] ?? '';
    
    if (empty($new_status)) {
        $error = 'Please select a status.';
    } else {
        try {
            $stmt = $pdo->prepare("UPDATE invoices SET status = ? WHERE id = ?");
            $stmt->execute([$new_status, $invoice_id]);
            $success = true;
            
            // Refresh invoice data
            $stmt = $pdo->prepare("SELECT * FROM invoices WHERE id = ?");
            $stmt->execute([$invoice_id]);
            $invoice = $stmt->fetch();
        } catch (Exception $e) {
            $error = 'Failed to update status: ' . $e->getMessage();
        }
    }
}
?>

<!-- Page Actions -->
<section class="page-actions">
    <div class="container">
        <a href="dashboard.php" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>
</section>

<!-- Main Content -->
<section class="dashboard-section">
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-header">
                <div>
                    <p class="card-title"><i class="fas fa-edit"></i> Update Invoice Status</p>
                    <p class="card-sub">Change status for invoice <?php echo htmlspecialchars($invoice['invoice_no']); ?></p>
                </div>
            </div>
            
            <div class="card-body" style="padding: 30px;">
                <?php if ($success): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    Invoice status updated successfully!
                </div>
                <?php endif; ?>
                
                <?php if ($error): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-triangle"></i>
                    <?php echo htmlspecialchars($error); ?>
                </div>
                <?php endif; ?>
                
                <!-- Invoice Details -->
                <div class="invoice-summary" style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 30px;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                        <div>
                            <p style="font-size: 11px; color: #6c757d; margin-bottom: 5px;">INVOICE NUMBER</p>
                            <p style="font-weight: bold; font-size: 14px;"><?php echo htmlspecialchars($invoice['invoice_no']); ?></p>
                        </div>
                        <div>
                            <p style="font-size: 11px; color: #6c757d; margin-bottom: 5px;">CLIENT</p>
                            <p style="font-weight: bold; font-size: 14px;"><?php echo htmlspecialchars($invoice['client_name']); ?></p>
                        </div>
                        <div>
                            <p style="font-size: 11px; color: #6c757d; margin-bottom: 5px;">AMOUNT</p>
                            <p style="font-weight: bold; font-size: 14px;">
                                <?php echo ($invoice['currency'] === 'GHS' ? 'GH₵' : '$'); ?>
                                <?php echo number_format($invoice['amount'], 2); ?>
                            </p>
                        </div>
                        <div>
                            <p style="font-size: 11px; color: #6c757d; margin-bottom: 5px;">CURRENT STATUS</p>
                            <p>
                                <?php
                                    $status = strtolower($invoice['status']);
                                    $icon = 'fa-clock';
                                    if ($status === 'paid') { $icon = 'fa-check-circle'; }
                                    elseif ($status === 'overdue') { $icon = 'fa-exclamation-triangle'; }
                                    elseif ($status === 'draft') { $icon = 'fa-file-alt'; }
                                    elseif ($status === 'sent') { $icon = 'fa-paper-plane'; }
                                ?>
                                <span class="status-badge status-<?php echo $status; ?>">
                                    <i class="fas <?php echo $icon; ?>"></i>
                                    <?php echo htmlspecialchars($invoice['status']); ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Status Update Form -->
                <form method="POST" style="margin-top: 20px;">
                    <div class="form-group">
                        <label for="status">New Status <span style="color: #dc3545;">*</span></label>
                        <select name="status" id="status" class="form-control" required onchange="updateStatusInfo(this.value)">
                            <option value="">-- Select Status --</option>
                            <option value="Draft" <?php echo $invoice['status'] === 'Draft' ? 'selected' : ''; ?>>Draft</option>
                            <option value="Pending" <?php echo $invoice['status'] === 'Pending' ? 'selected' : ''; ?>>Pending</option>
                            <option value="Sent" <?php echo $invoice['status'] === 'Sent' ? 'selected' : ''; ?>>Sent</option>
                            <option value="Paid" <?php echo $invoice['status'] === 'Paid' ? 'selected' : ''; ?>>Paid</option>
                            <option value="Overdue" <?php echo $invoice['status'] === 'Overdue' ? 'selected' : ''; ?>>Overdue</option>
                            <option value="Cancelled" <?php echo $invoice['status'] === 'Cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                        </select>
                        <div id="status-info" style="margin-top: 12px; padding: 12px; background: #f8f9fa; border-left: 3px solid #2C5282; border-radius: 4px; display: none;">
                            <p style="margin: 0; font-size: 13px; color: #495057;"></p>
                        </div>
                    </div>
                    
                    <div style="margin-top: 30px; display: flex; gap: 10px;">
                        <button type="submit" name="update_status" class="btn-primary">
                            <i class="fas fa-save"></i> Update Status
                        </button>
                        <a href="dashboard.php" class="btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
.alert {
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
}

.form-control {
    width: 100%;
    padding: 10px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 6px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.form-control:focus {
    outline: none;
    border-color: #2C5282;
}

.btn-primary, .btn-secondary {
    padding: 12px 24px;
    border: none;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary {
    background: #2C5282;
    color: white;
}

.btn-primary:hover {
    background: #1e3a5f;
    transform: translateY(-1px);
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background: #5a6268;
}
</style>

<script>
function updateStatusInfo(status) {
    const statusInfo = document.getElementById('status-info');
    const infoText = statusInfo.querySelector('p');
    const descriptions = {
        'Draft': '<strong>Draft:</strong> Invoice is being prepared and not yet finalized. Use this when creating or editing an invoice before sending it to the client.',
        'Pending': '<strong>Pending:</strong> Invoice is finalized and ready to be sent, but has NOT been delivered to the client yet. Use this for invoices waiting to be emailed or handed over.',
        'Sent': '<strong>Sent:</strong> Invoice has been delivered/emailed to the client and is awaiting payment. Use this after you have actually sent the invoice to the client.',
        'Paid': '<strong>Paid:</strong> Client has paid the invoice in full. All payments have been received and recorded.',
        'Overdue': '<strong>Overdue:</strong> Payment due date has passed and the invoice remains unpaid. Requires follow-up with the client.',
        'Cancelled': '<strong>Cancelled:</strong> Invoice has been voided or cancelled. No payment is expected or required.'
    };
    
    if (status && descriptions[status]) {
        infoText.innerHTML = descriptions[status];
        statusInfo.style.display = 'block';
    } else {
        statusInfo.style.display = 'none';
    }
}

// Show description for current selection on page load
document.addEventListener('DOMContentLoaded', function() {
    const select = document.getElementById('status');
    if (select.value) {
        updateStatusInfo(select.value);
    }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
