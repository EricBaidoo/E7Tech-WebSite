-- E7 Technology Solutions - Billing & Receipts Database Schema
-- Created: January 12, 2026
-- Database: e7_billing

CREATE DATABASE IF NOT EXISTS e7_billing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE e7_billing;

-- Invoices Table
CREATE TABLE IF NOT EXISTS invoices (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    invoice_no VARCHAR(50) NOT NULL UNIQUE,
    client_name VARCHAR(255) NOT NULL,
    client_email VARCHAR(255) DEFAULT NULL,
    client_phone VARCHAR(50) DEFAULT NULL,
    client_address TEXT DEFAULT NULL,
    
    issue_date DATE NOT NULL,
    due_date DATE NOT NULL,
    
    currency ENUM('USD', 'GHS') DEFAULT 'USD',
    subtotal DECIMAL(12, 2) NOT NULL DEFAULT 0.00,
    tax_rate DECIMAL(5, 2) DEFAULT 0.00,
    tax_amount DECIMAL(12, 2) DEFAULT 0.00,
    discount DECIMAL(12, 2) DEFAULT 0.00,
    amount DECIMAL(12, 2) NOT NULL,
    balance DECIMAL(12, 2) NOT NULL,
    
    status ENUM('Draft', 'Sent', 'Due', 'Overdue', 'Paid', 'Cancelled') DEFAULT 'Draft',
    
    description TEXT DEFAULT NULL,
    terms TEXT DEFAULT NULL,
    notes TEXT DEFAULT NULL,
    
    pdf_path VARCHAR(500) DEFAULT NULL,
    sent_at DATETIME DEFAULT NULL,
    paid_at DATETIME DEFAULT NULL,
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    INDEX idx_status (status),
    INDEX idx_client (client_name),
    INDEX idx_due_date (due_date),
    INDEX idx_created_at (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Invoice Line Items (optional for detailed invoicing)
CREATE TABLE IF NOT EXISTS invoice_items (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    invoice_id INT UNSIGNED NOT NULL,
    description VARCHAR(500) NOT NULL,
    quantity DECIMAL(10, 2) NOT NULL DEFAULT 1.00,
    unit_price DECIMAL(12, 2) NOT NULL,
    amount DECIMAL(12, 2) NOT NULL,
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (invoice_id) REFERENCES invoices(id) ON DELETE CASCADE,
    INDEX idx_invoice (invoice_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Receipts Table
CREATE TABLE IF NOT EXISTS receipts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    receipt_no VARCHAR(50) NOT NULL UNIQUE,
    invoice_id INT UNSIGNED NOT NULL,
    
    amount DECIMAL(12, 2) NOT NULL,
    method ENUM('Bank Transfer', 'Card', 'Mobile Money', 'Cash', 'Check', 'Other') DEFAULT 'Bank Transfer',
    
    received_at DATE NOT NULL,
    reference VARCHAR(255) DEFAULT NULL,
    notes TEXT DEFAULT NULL,
    
    attachment_path VARCHAR(500) DEFAULT NULL,
    pdf_path VARCHAR(500) DEFAULT NULL,
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    FOREIGN KEY (invoice_id) REFERENCES invoices(id) ON DELETE RESTRICT,
    INDEX idx_invoice (invoice_id),
    INDEX idx_received_at (received_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Audit Log (optional - tracks all changes)
CREATE TABLE IF NOT EXISTS billing_audit (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    entity_type ENUM('invoice', 'receipt') NOT NULL,
    entity_id INT UNSIGNED NOT NULL,
    action VARCHAR(50) NOT NULL,
    user_id INT UNSIGNED DEFAULT NULL,
    changes JSON DEFAULT NULL,
    ip_address VARCHAR(45) DEFAULT NULL,
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    INDEX idx_entity (entity_type, entity_id),
    INDEX idx_created_at (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data for testing
INSERT INTO invoices (invoice_no, client_name, client_email, issue_date, due_date, currency, amount, balance, status, description) VALUES
('INV-2025-001', 'Acme Manufacturing', 'billing@acme-mfg.com', '2024-12-20', '2025-01-05', 'USD', 3200.00, 3200.00, 'Overdue', 'SecureShield Assessment & Implementation'),
('INV-2025-002', 'Nova Retail', 'accounts@novaretail.com', '2024-12-28', '2025-01-20', 'GHS', 11500.00, 11500.00, 'Due', 'Data Analytics Dashboard Development'),
('INV-2025-003', 'BlueWave Capital', 'finance@bluewave.com', '2024-12-10', '2024-12-30', 'USD', 7420.00, 0.00, 'Paid', 'AI Advisory & Roadmap Consulting'),
('INV-2025-004', 'Helios Logistics', 'admin@helios-log.com', '2025-01-08', '2025-02-05', 'GHS', 80000.00, 80000.00, 'Draft', 'SecureCore Cloud Infrastructure Setup');

INSERT INTO receipts (receipt_no, invoice_id, amount, method, received_at, reference) VALUES
('RCPT-2025-015', 3, 7420.00, 'Bank Transfer', '2024-12-27', 'TXN-BW-2024-12-27-001'),
('RCPT-2025-016', 2, 4000.00, 'Mobile Money', '2025-01-06', 'MOMO-GH-202501060432');

-- Create view for invoice summary with receipt totals
CREATE OR REPLACE VIEW invoice_summary AS
SELECT 
    i.id,
    i.invoice_no,
    i.client_name,
    i.client_email,
    i.issue_date,
    i.due_date,
    i.currency,
    i.amount,
    i.balance,
    i.status,
    COALESCE(SUM(r.amount), 0) AS total_received,
    COUNT(r.id) AS receipt_count,
    DATEDIFF(NOW(), i.due_date) AS days_overdue
FROM invoices i
LEFT JOIN receipts r ON i.id = r.invoice_id
GROUP BY i.id;
