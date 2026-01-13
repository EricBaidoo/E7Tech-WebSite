<?php
// Email Configuration for E7 Billing System

return [
    // SMTP Server Settings
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_secure' => 'tls',
    
    // Email Account (update when ready to use)
    'smtp_username' => 'connect@e7world.tech',
    'smtp_password' => '',  // Add your Gmail App Password here when ready
    
    // Sender Details
    'from_email' => 'connect@e7world.tech',
    'from_name' => 'E7 Technology Solutions',
    'reply_to' => 'connect@e7world.tech',
    
    // Email Settings
    'enable_email' => false,  // DISABLED for local development - set to true in production
    'debug_mode' => false,
];
