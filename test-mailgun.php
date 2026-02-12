<?php
// Enable error display for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config/mailgun.php';

echo "<h2>Testing Mailgun Configuration</h2>";

$mailgun = new MailgunService();

// Test email
$result = $mailgun->sendEmail(
    'your-email@example.com', // Replace with your email
    'Test Email from iTechnism',
    '<h1>Test Email</h1><p>This is a test email from iTechnism.</p>',
    'Test Email - This is a test email from iTechnism.'
);

echo "<h3>Mailgun Response:</h3>";
echo "<pre>";
print_r($result);
echo "</pre>";

if (!$result['success']) {
    echo "<h3 style='color:red;'>Error Details:</h3>";
    echo "<p><strong>HTTP Code:</strong> " . $result['http_code'] . "</p>";
    echo "<p><strong>Error:</strong> " . ($result['error'] ?? 'Unknown') . "</p>";
    echo "<p><strong>Full Response:</strong></p>";
    echo "<pre>" . json_encode($result['response'], JSON_PRETTY_PRINT) . "</pre>";
}
?>