<?php
header('Content-Type: application/json');
require_once '../controllers/ContactController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = new ContactController();
    
    $data = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'company' => $_POST['company'] ?? '',
        'service' => $_POST['service'] ?? '',
        'budget' => $_POST['budget'] ?? '',
        'message' => $_POST['message'] ?? ''
    ];
    
    // Basic validation
    if (empty($data['name']) || empty($data['email']) || empty($data['message'])) {
        echo json_encode(['success' => false, 'message' => 'Name, email, and message are required']);
        exit;
    }
    
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email address']);
        exit;
    }
    
    $result = $contact->submitMessage($data);
    echo json_encode($result);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>