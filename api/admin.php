<?php
header('Content-Type: application/json');

require_once '../controllers/AdminController.php';

$admin = new AdminController();

// Handle POST requests for updates
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    switch ($action) {
        case 'update_content':
            if (!isset($_POST['id']) || !isset($_POST['data'])) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Missing required data']);
                exit;
            }
            
            $data = json_decode($_POST['data'], true);
            $result = $admin->updateWebsiteContent($_POST['id'], $data);
            echo json_encode(['success' => $result]);
            break;
            
        case 'update_menu':
            if (!isset($_POST['id']) || !isset($_POST['data'])) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Missing required data']);
                exit;
            }
            
            $data = json_decode($_POST['data'], true);
            $result = $admin->updateNavMenu($_POST['id'], $data);
            echo json_encode(['success' => $result]);
            break;
            
        default:
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
    }
}

// Handle GET requests for data retrieval
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = $_GET['action'] ?? '';
    
    switch ($action) {
        case 'get_content':
            $section = $_GET['section'] ?? null;
            echo json_encode($admin->getWebsiteContent($section));
            break;
            
        case 'get_menu':
            echo json_encode($admin->getNavMenu());
            break;
            
        default:
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
    }
}
?>