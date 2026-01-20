<?php
// config/config.php

define('SITE_NAME', 'LABTEK');
// Detect protocol and host for dynamic SITE_URL or use relative path logic
// For Vercel root deployment, it serves from root.
// A better approach for Vercel + Local XAMPP compatibility:
if (getenv('VERCEL') || $_SERVER['HTTP_HOST'] !== 'localhost') {
    if (!defined('SITE_URL')) define('SITE_URL', ''); // Relative for production
} else {
    // Check if localhost has subdirectory or root
    // For this specific setup which seems to be in a subdir:
    if (!defined('SITE_URL')) define('SITE_URL', 'http://localhost/LabTekWebPage');
}

// Database configuration
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'labtek_db');
?>
