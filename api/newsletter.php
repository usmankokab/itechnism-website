<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    require_once '../controllers/NewsletterController.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        echo json_encode(['success' => false, 'message' => 'Method not allowed']);
        exit;
    }

    // Honeypot check
    if (!empty($_POST['website'])) {
        echo json_encode(['success' => false, 'message' => 'Spam detected']);
        exit;
    }

    $email = trim($_POST['email'] ?? '');
    $name = trim($_POST['name'] ?? '');
    $source = $_POST['source'] ?? 'website';

    if (empty($email)) {
        echo json_encode(['success' => false, 'message' => 'Email is required']);
        exit;
    }

    $newsletter = new NewsletterController();
    $result = $newsletter->subscribe($email, $name, $source);

    echo json_encode($result);
    
} catch (Exception $e) {
    error_log('Newsletter API Error: ' . $e->getMessage());
    echo json_encode([
        'success' => false, 
        'message' => 'Error: ' . $e->getMessage(),
        'debug' => $e->getTraceAsString()
    ]);
} catch (Error $e) {
    error_log('Newsletter API Fatal Error: ' . $e->getMessage());
    echo json_encode([
        'success' => false, 
        'message' => 'Fatal Error: ' . $e->getMessage(),
        'debug' => $e->getTraceAsString()
    ]);
}
?>