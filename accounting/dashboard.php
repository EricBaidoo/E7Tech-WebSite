<?php
$page_title = 'Dashboard';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/db_config.php';

// Connect to database and fetch live data
try {
    $pdo = getDBConnection();
    
    // Auto-update overdue invoices on page load
    autoUpdateOverdueInvoices($pdo);
    
    // Fetch invoices
    $stmt = $pdo->query("SELECT * FROM invoices ORDER BY created_at DESC LIMIT 50");
    $invoices = $stmt->fetchAll();
    
    // Fetch receipts with invoice info
    $stmt = $pdo->query("
        SELECT r.*, i.invoice_no, i.client_name, i.currency, i.description
        FROM receipts r 
        JOIN invoices i ON r.invoice_id = i.id 
        ORDER BY r.created_at DESC LIMIT 50
    ");
    $receipts = $stmt->fetchAll();
    
    // Calculate totals
    $totals = [
        'outstanding_usd' => 0,
        'outstanding_ghs' => 0,
        'overdue' => 0,
        'paid' => 0,
        'draft' => 0,
        'total_invoices' => count($invoices),
        'total_receipts' => count($receipts)
    ];
    
    foreach ($invoices as $invoice) {
        if ($invoice['status'] !== 'Paid' && $invoice['status'] !== 'Cancelled') {
            if ($invoice['currency'] === 'USD') {
                $totals['outstanding_usd'] += floatval($invoice['balance']);
            } else {
                $totals['outstanding_ghs'] += floatval($invoice['balance']);
            }
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
    $invoices = [];
    $receipts = [];
    $totals = ['outstanding_usd' => 0, 'outstanding_ghs' => 0, 'overdue' => 0, 'paid' => 0, 'draft' => 0, 'total_invoices' => 0, 'total_receipts' => 0];
}
?>

<!-- Page Actions -->


<!-- Dashboard Content -->
<section class="dashboard-section">
    <div class="container">
        <!-- Metrics Grid -->
        <div class="metric-grid">
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="label">Outstanding (USD)</div>
                <div class="value">$<?php echo number_format($totals['outstanding_usd'], 2); ?></div>
                <div class="trend down"><i class="fas fa-hourglass-half"></i> Awaiting payment</div>
            </div>
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="label">Outstanding (GHS)</div>
                <div class="value">GH₵<?php echo number_format($totals['outstanding_ghs'], 2); ?></div>
                <div class="trend down"><i class="fas fa-hourglass-half"></i> Awaiting payment</div>
            </div>
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="label">Overdue Invoices</div>
                <div class="value"><?php echo $totals['overdue']; ?></div>
                <div class="trend down"><i class="fas fa-bell"></i> Requires attention</div>
            </div>
            <div class="metric-card">
                <div class="icon-wrapper">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="label">Paid Invoices</div>
                <div class="value"><?php echo $totals['paid']; ?></div>
                <div class="trend up"><i class="fas fa-check"></i> Completed</div>
            </div>
        </div>

        <!-- Recent Invoices & Receipts -->
        <div class="panel-grid">
            <!-- Invoices Table -->
            <div class="card">
                <div class="card-header">
                    <div>
                        <p class="card-title"><i class="fas fa-file-invoice"></i> Recent Invoices</p>
                        <p class="card-sub">Latest billing documents</p>
                    </div>
                    <div class="table-controls">
                        <input type="text" id="invoice-search" placeholder="Filter invoices..." aria-label="Filter invoices">
                        <select id="invoice-status-filter" aria-label="Filter by status">
                            <option value="">All Statuses</option>
                            <option value="draft">Draft</option>
                            <option value="pending">Pending</option>
                            <option value="sent">Sent</option>
                            <option value="paid">Paid</option>
                            <option value="overdue">Overdue</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                        <select id="invoice-currency-filter" aria-label="Filter by currency">
                            <option value="">All Currencies</option>
                            <option value="USD">USD</option>
                            <option value="GHS">GHS</option>
                        </select>
                    </div>
                    <a class="btn-link solid" href="create-invoice.php">
                        <i class="fas fa-plus"></i> Create New
                    </a>
                </div>
                <div class="table-wrapper scrollable">
                <table class="table" id="invoices-table">
                    <thead>
                        <tr>
                            <th>Invoice #</th>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($invoices)): ?>
                        <tr>
                            <td colspan="6" class="empty-state">
                                <i class="fas fa-inbox"></i>
                                <p>No invoices found. Create your first invoice to get started.</p>
                            </td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($invoices as $invoice): ?>
                        <tr class="data-row" data-status="<?php echo strtolower($invoice['status']); ?>" data-currency="<?php echo $invoice['currency']; ?>">
                            <td><strong><?php echo htmlspecialchars($invoice['invoice_no']); ?></strong></td>
                            <td><?php echo htmlspecialchars($invoice['client_name']); ?></td>
                            <td><?php echo date('M d, Y', strtotime($invoice['issue_date'])); ?></td>
                            <td><strong><?php echo ($invoice['currency'] === 'GHS' ? 'GH₵' : '$'); ?><?php echo number_format($invoice['amount'], 2); ?></strong></td>
                            <td>
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
                            </td>
                            <td class="actions">
                                <a class="btn-link" href="edit-invoice-status.php?id=<?php echo $invoice['id']; ?>" title="Update Status">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn-link" href="download-pdf.php?type=invoice&id=<?php echo $invoice['id']; ?>" title="Download PDF">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                                <a class="btn-link" href="send-email.php?type=invoice&id=<?php echo $invoice['id']; ?>" title="Send Email">
                                    <i class="fas fa-paper-plane"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                </div>
                <div id="invoice-pagination" class="pagination"></div>
            </div>

            <!-- Receipts Table -->
            <div class="card">
                <div class="card-header">
                    <div>
                        <p class="card-title"><i class="fas fa-receipt"></i> Recent Receipts</p>
                        <p class="card-sub">Payment confirmations</p>
                    </div>
                    <div class="table-controls">
                        <input type="text" id="receipt-search" placeholder="Filter receipts..." aria-label="Filter receipts">
                        <select id="receipt-currency-filter" aria-label="Filter receipts by currency">
                            <option value="">All Currencies</option>
                            <option value="USD">USD</option>
                            <option value="GHS">GHS</option>
                        </select>
                    </div>
                    <a class="btn-link solid" href="record-payment.php">
                        <i class="fas fa-plus"></i> Record New
                    </a>
                </div>
                <div class="table-wrapper scrollable">
                <table class="table" id="receipts-table">
                    <thead>
                        <tr>
                            <th>Receipt #</th>
                            <th>Invoice</th>
                            <th>Client</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($receipts)): ?>
                        <tr>
                            <td colspan="7" class="empty-state">
                                <i class="fas fa-inbox"></i>
                                <p>No receipts recorded yet.</p>
                            </td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($receipts as $receipt): ?>
                        <tr class="data-row" data-currency="<?php echo $receipt['currency']; ?>">
                            <td><strong><?php echo htmlspecialchars($receipt['receipt_no']); ?></strong></td>
                            <td><?php echo htmlspecialchars($receipt['invoice_no']); ?></td>
                            <td><?php echo htmlspecialchars($receipt['client_name']); ?></td>
                            <td><?php echo htmlspecialchars(substr($receipt['description'] ?? 'N/A', 0, 50)); ?><?php echo strlen($receipt['description'] ?? '') > 50 ? '...' : ''; ?></td>
                            <td><?php echo date('M d, Y', strtotime($receipt['received_at'])); ?></td>
                            <td><strong><?php echo ($receipt['currency'] === 'GHS' ? 'GH₵' : '$'); ?><?php echo number_format($receipt['amount'], 2); ?></strong></td>
                            <td class="actions">
                                <a class="btn-link" href="download-pdf.php?type=receipt&id=<?php echo $receipt['id']; ?>" title="Download PDF">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                                <a class="btn-link" href="send-email.php?type=receipt&id=<?php echo $receipt['id']; ?>" title="Send Email">
                                    <i class="fas fa-paper-plane"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                </div>
                <div id="receipt-pagination" class="pagination"></div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="info-cards">
            <div class="info-card">
                <i class="fas fa-file-invoice"></i>
                <div>
                    <h3><?php echo $totals['total_invoices']; ?></h3>
                    <p>Total Invoices</p>
                </div>
            </div>
            <div class="info-card">
                <i class="fas fa-receipt"></i>
                <div>
                    <h3><?php echo $totals['total_receipts']; ?></h3>
                    <p>Total Receipts</p>
                </div>
            </div>
            <div class="info-card">
                <i class="fas fa-file-alt"></i>
                <div>
                    <h3><?php echo $totals['draft']; ?></h3>
                    <p>Draft Invoices</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
.table-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}

.table-controls input {
    padding: 10px 12px;
    border: 1px solid #d7d7d7;
    border-radius: 6px;
    font-size: 13px;
    min-width: 220px;
    height: 38px;
}

.table-controls select {
    padding: 10px 10px;
    border: 1px solid #d7d7d7;
    border-radius: 6px;
    font-size: 13px;
    background: #fff;
    height: 38px;
}

.card .card-header {
    display: flex;
    align-items: flex-end;
    gap: 12px;
    flex-wrap: wrap;
}

.card .card-header > div:first-child {
    flex: 1;
    min-width: 160px;
}

.card .card-header .btn-link.solid {
    height: 38px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}

.table-wrapper.scrollable {
    max-height: 360px;
    overflow-y: auto;
    border: 1px solid #f0f0f0;
    border-radius: 8px;
}

.dashboard-section .container {
    width: 90%;
    max-width: 1400px;
}

.pagination {
    display: flex;
    gap: 6px;
    padding: 10px 0 0;
}

.pagination button {
    border: 1px solid #d0d7de;
    background: #fff;
    padding: 6px 10px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 12px;
}

.pagination button.active {
    background: #2C5282;
    color: #fff;
    border-color: #2C5282;
}

.pagination button:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}
</style>

<script>
function setupTable(tableId, searchInputId, paginationId, options = {}) {
    const table = document.getElementById(tableId);
    const searchInput = document.getElementById(searchInputId);
    const pagination = document.getElementById(paginationId);
    if (!table || !searchInput || !pagination) return;

    const rowsPerPage = options.rowsPerPage || 10;
    const statusFilter = options.statusFilter ? document.getElementById(options.statusFilter) : null;
    const currencyFilter = options.currencyFilter ? document.getElementById(options.currencyFilter) : null;

    const allRows = Array.from(table.querySelectorAll('tbody tr.data-row'));
    const emptyState = table.querySelector('tbody tr.empty-state');
    const noResultsRow = document.createElement('tr');
    const colCount = table.querySelectorAll('thead th').length;
    noResultsRow.innerHTML = `<td colspan="${colCount}" class="empty-state">No matching records found.</td>`;
    noResultsRow.style.display = 'none';
    table.querySelector('tbody').appendChild(noResultsRow);

    function render(filteredRows, page = 1) {
        const totalPages = Math.max(1, Math.ceil(filteredRows.length / rowsPerPage));
        const currentPage = Math.min(page, totalPages);
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        // Hide all rows first
        allRows.forEach(r => r.style.display = 'none');

        // Show paginated slice
        filteredRows.slice(start, end).forEach(r => r.style.display = '');

        // Empty-state handling
        if (filteredRows.length === 0) {
            noResultsRow.style.display = '';
            if (emptyState) emptyState.style.display = 'none';
        } else {
            noResultsRow.style.display = 'none';
            if (emptyState) emptyState.style.display = 'none';
        }

        // Build pagination controls
        pagination.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.className = i === currentPage ? 'active' : '';
            btn.onclick = () => render(filteredRows, i);
            pagination.appendChild(btn);
        }
    }

    function filterRows(term) {
        const normalized = term.toLowerCase();
        const statusVal = statusFilter ? statusFilter.value.toLowerCase() : '';
        const currencyVal = currencyFilter ? currencyFilter.value : '';

        const filtered = allRows.filter(row => {
            const textMatch = row.textContent.toLowerCase().includes(normalized);
            const statusMatch = statusVal ? (row.dataset.status === statusVal) : true;
            const currencyMatch = currencyVal ? (row.dataset.currency === currencyVal) : true;
            return textMatch && statusMatch && currencyMatch;
        });
        render(filtered, 1);
    }

    // Initial render
    render(allRows, 1);

    // Wire up search
    searchInput.addEventListener('input', (e) => filterRows(e.target.value));
    statusFilter?.addEventListener('change', () => filterRows(searchInput.value));
    currencyFilter?.addEventListener('change', () => filterRows(searchInput.value));
}

document.addEventListener('DOMContentLoaded', function() {
    setupTable('invoices-table', 'invoice-search', 'invoice-pagination', {
        statusFilter: 'invoice-status-filter',
        currencyFilter: 'invoice-currency-filter',
        rowsPerPage: 10
    });
    setupTable('receipts-table', 'receipt-search', 'receipt-pagination', {
        currencyFilter: 'receipt-currency-filter',
        rowsPerPage: 10
    });
});
</script>
