<?php
// Auto-detect base URL based on environment
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];

// Check if running on localhost
if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
    define('BASE_URL', '/itech');
} else {
    define('BASE_URL', '');
}

define('SITE_URL', $protocol . '://' . $host . BASE_URL);

// Helper function for URLs
function url($path = '') {
    return BASE_URL . $path;
}
?>
