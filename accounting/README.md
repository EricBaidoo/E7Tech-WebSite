# E7 Billing & Accounting System

**Standalone folder for dedicated subdomain deployment**

## 📍 Deployment Structure
- **Main Site:** `e7world.tech` → Separate folder (main website)
- **Accounting:** `account.e7world.tech` → This folder (independent deployment)

**This folder is designed to run independently from the main site.**

## ✨ Features
- ✅ Invoice management (Draft → Sent → Paid)
- ✅ Receipt recording with automatic balance updates
- ✅ **USD & GHS (Ghana Cedis) support only**
- ✅ Professional PDF generation with currency symbols
- ✅ Email delivery with branded templates
- ✅ Real-time statistics dashboard
- ✅ Auto-generated invoice/receipt numbers

## 📁 Folder Structure
```
accounting/
├── index.php                    # Main billing dashboard
├── download-pdf.php             # PDF generation endpoint
├── send-email.php               # Email delivery endpoint
├── invoice.css                  # Billing UI styles
├── database/
│   └── billing_schema.sql       # MySQL schema (USD/GHS only)
├── handlers/
│   ├── save-invoice.php         # Invoice CRUD
│   └── save-receipt.php         # Receipt CRUD
├── includes/
│   ├── db_config.php            # Database connection
│   ├── email_sender.php         # PHPMailer integration
│   └── pdf_generator.php        # FPDF with currency support
└── temp/                        # Temporary PDF storage
```

## 🚀 Quick Setup

### 1. Database
```bash
mysql -u root < database/billing_schema.sql
```

### 2. Dependencies
```bash
cd "c:/xampp/htdocs/E7 TECH"
composer require phpmailer/phpmailer
```

### 3. FPDF Library
- Download from http://www.fpdf.org/
- Extract to `../libs/fpdf/`

### 4. Email Configuration
Edit `includes/email_sender.php`:
```php
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
```

## 💰 Currency Support

**Restricted to:**
- **USD** - US Dollar ($)
- **GHS** - Ghana Cedi (GH₵)

The database enforces this via ENUM constraint. PDFs and emails display correct currency symbols.

## 🌐 Subdomain Setup

### Apache Virtual Host
Add to `httpd-vhosts.conf`:
```apache
<VirtualHost *:80>
    ServerName account.e7world.tech
    DocumentRoot "/var/www/account.e7world.tech"
    <Directory "/var/www/account.e7world.tech">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:443>
    ServerName account.e7world.tech
    DocumentRoot "/var/www/account.e7world.tech"
    
    SSLEngine on
    SSLCertificateFile "/path/to/cert.crt"
    SSLCertificateKeyFile "/path/to/private.key"
    
    <Directory "/var/www/account.e7world.tech">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

**Note:** Move this entire `accounting/` folder to your deployment location (e.g., `/var/www/account.e7world.tech`)

## 📊 Usage

### Create Invoice
1. Fill "Create / Update Invoice" form
2. Select USD or GHS
3. Click "Save invoice"
4. Auto-generates invoice number (INV-2026-XXX)

### Record Payment
1. Enter invoice number
2. Enter amount received
3. Click "Save receipt"
4. Invoice balance updates automatically

### Send via Email
- Click paper plane (✉) icon next to invoice
- PDF attached automatically
- Status updates to "Sent"

### Download PDF
- Click PDF (📄) icon
- Professional E7-branded document
- Shows correct currency symbol

## 🔒 Security Notes

**For Production:**
1. Change database credentials
2. Enable HTTPS
3. Add authentication system
4. Implement CSRF tokens
5. Regular backups
6. Set proper file permissions

## 🆘 Support
- Email: connect@e7world.tech
- Phone: +233 243 838 490

---
**E7 Technology Solutions** - Innovation Through Technology
