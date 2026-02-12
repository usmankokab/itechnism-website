<?php
// Direct test of newsletter functionality
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h2>Testing Newsletter Subscription</h2>";

try {
    require_once 'controllers/NewsletterController.php';
    
    $newsletter = new NewsletterController();
    
    // Test with a sample email
    $result = $newsletter->subscribe('test@example.com', 'Test User', 'direct_test');
    
    echo "<h3>Result:</h3>";
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    
} catch (Exception $e) {
    echo "<h3 style='color:red;'>Exception:</h3>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
} catch (Error $e) {
    echo "<h3 style='color:red;'>Fatal Error:</h3>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
?>