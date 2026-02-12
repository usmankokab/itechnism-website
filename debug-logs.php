<?php
echo "<h2>PHP Error Log Location:</h2>";
echo "<p><strong>Error Log Path:</strong> " . ini_get('error_log') . "</p>";
echo "<p><strong>Log Errors:</strong> " . (ini_get('log_errors') ? 'Enabled' : 'Disabled') . "</p>";

// Test error logging
error_log('TEST: This is a test log entry from iTechnism');
echo "<p>Test log entry written. Check the error log file above.</p>";

echo "<h3>Recent Error Log Entries:</h3>";
$logFile = ini_get('error_log');
if (file_exists($logFile)) {
    $lines = file($logFile);
    $recentLines = array_slice($lines, -20); // Last 20 lines
    echo "<pre style='background:#f5f5f5; padding:10px; max-height:300px; overflow:auto;'>";
    foreach ($recentLines as $line) {
        echo htmlspecialchars($line);
    }
    echo "</pre>";
} else {
    echo "<p>Error log file not found at: $logFile</p>";
}
?>