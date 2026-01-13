<?php
// Email Configuration for E7 Billing System
// Copy this file to email_config.php and update with your SMTP settings

return [
    // SMTP Server Settings
    'smtp_host' => 'smtp.gmail.com',  // Gmail SMTP (or your email provider)
    'smtp_port' => 587,                // 587 for TLS, 465 for SSL
    'smtp_secure' => 'tls',            // 'tls' or 'ssl'
    
    // Email Account
    'smtp_username' => 'connect@e7world.tech',  // Your email address
    'smtp_password' => '',                       // Your app password (NOT regular password)
    
    // Sender Details
    'from_email' => 'connect@e7world.tech',
    'from_name' => 'E7 Technology Solutions - Billing',
    'reply_to' => 'connect@e7world.tech',
    
    // Email Settings
    'enable_email' => true,  // Set to false to disable email sending (for testing)
    'debug_mode' => false,   // Set to true to see SMTP debug output
];

/*
 * SETUP INSTRUCTIONS:
 * 
 * For Gmail:
 * 1. Enable 2-Step Verification in your Google Account
 * 2. Generate an App Password: https://myaccount.google.com/apppasswords
 * 3. Use the 16-character app password (not your regular Gmail password)
 * 4. Update 'smtp_username' and 'smtp_password' above
 * 
 * For Other Email Providers:
 * - Check your provider's SMTP settings documentation
 * - Common hosts: smtp.office365.com (Outlook), smtp.mail.yahoo.com (Yahoo)
 * 
 * Security Note:
 * - Never commit email_config.php to version control
 * - Keep your SMTP credentials secure
 * - Use app-specific passwords when available
 */
