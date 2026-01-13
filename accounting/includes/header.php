<?php
if (!isset($_SESSION)) {
    session_start();
}

// Fix path - go up one directory from includes/
require_once __DIR__ . '/db_config.php';

$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'E7 Billing System'; ?> - E7 Technology Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/billing.css">
</head>
<body>

<!-- Top Navigation Bar -->
<nav class="top-nav">
    <div class="container">
        <div class="nav-brand">
            <img src="assets/images/e7-logo1.png" alt="E7 Technology Solutions" class="logo">
            <div class="brand-text">
                <h1>E7 Billing System</h1>
                <p>Professional Invoicing & Receipts</p>
            </div>
        </div>
        <div class="nav-menu">
            <a href="dashboard.php" class="nav-link <?php echo $current_page === 'dashboard' ? 'active' : ''; ?>">
                <i class="fas fa-th-large"></i>
                <span>Dashboard</span>
            </a>
            <a href="create-invoice.php" class="nav-link <?php echo $current_page === 'create-invoice' ? 'active' : ''; ?>">
                <i class="fas fa-file-invoice"></i>
                <span>Create Invoice</span>
            </a>
            <a href="record-payment.php" class="nav-link <?php echo $current_page === 'record-payment' ? 'active' : ''; ?>">
                <i class="fas fa-receipt"></i>
                <span>Record Payment</span>
            </a>
        </div>
    </div>
</nav>

<?php
// Display flash messages
$flashMessage = getFlashMessage();
if ($flashMessage):
?>
<div class="flash-container">
    <div class="container">
        <div class="flash-message <?php echo htmlspecialchars($flashMessage['type']); ?>">
            <i class="fas fa-<?php echo $flashMessage['type'] === 'success' ? 'check-circle' : ($flashMessage['type'] === 'error' ? 'exclamation-circle' : 'info-circle'); ?>"></i>
            <span><?php echo htmlspecialchars($flashMessage['message']); ?></span>
        </div>
    </div>
</div>
<?php endif; ?>
