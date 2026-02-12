<?php
header('Content-Type: application/json');

try {
    require_once '../controllers/AdminController.php';
    
    $admin = new AdminController();
    if (!$admin->isLoggedIn()) {
        echo json_encode(['success' => false, 'message' => 'Unauthorized']);
        exit;
    }
    
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode(['success' => false, 'message' => 'Method not allowed']);
        exit;
    }
    
    $section = $_POST['section'] ?? '';
    $title = $_POST['title'] ?? '';
    $subtitle = $_POST['subtitle'] ?? '';
    $content = $_POST['content'] ?? '';
    $buttonText = $_POST['button_text'] ?? '';
    $buttonLink = $_POST['button_link'] ?? '';
    
    if (empty($section)) {
        echo json_encode(['success' => false, 'message' => 'Section is required']);
        exit;
    }
    
    $result = $admin->updateHomeContent($section, $title, $subtitle, $content, $buttonText, $buttonLink);
    echo json_encode($result);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Update error: ' . $e->getMessage()]);
}
?>