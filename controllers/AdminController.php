<?php
session_start();

// Handle different paths when called from different locations
if (file_exists('config/database.php')) {
    require_once 'config/database.php';
} elseif (file_exists('../config/database.php')) {
    require_once '../config/database.php';
} elseif (file_exists(__DIR__ . '/../config/database.php')) {
    require_once __DIR__ . '/../config/database.php';
}

class AdminController {
    private $conn;
    
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    
    public function login($username, $password) {
        try {
            $query = "SELECT id, username, password, role FROM admin_users WHERE username = ? AND status = 'active'";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $username);
            $stmt->execute();
            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_username'] = $user['username'];
                $_SESSION['admin_role'] = $user['role'];
                return ['success' => true, 'message' => 'Login successful'];
            } else {
                return ['success' => false, 'message' => 'Invalid username or password'];
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => 'Login error: ' . $e->getMessage()];
        }
    }
    
    public function logout() {
        session_destroy();
        return ['success' => true, 'message' => 'Logged out successfully'];
    }
    
    public function isLoggedIn() {
        return isset($_SESSION['admin_id']);
    }
    
    public function getWebsiteContent($section = null) {
        try {
            if ($section) {
                $query = "SELECT * FROM website_content WHERE section = ? AND status = 'active' ORDER BY subsection";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(1, $section);
            } else {
                $query = "SELECT * FROM website_content WHERE status = 'active' ORDER BY section, subsection";
                $stmt = $this->conn->prepare($query);
            }
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return [];
        }
    }
    
    public function updateWebsiteContent($id, $data) {
        try {
            $query = "UPDATE website_content SET title = ?, subtitle = ?, content = ?, button_text = ?, button_link = ?, image_url = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            return $stmt->execute([
                $data['title'] ?? '',
                $data['subtitle'] ?? '',
                $data['content'] ?? '',
                $data['button_text'] ?? '',
                $data['button_link'] ?? '',
                $data['image_url'] ?? '',
                $id
            ]);
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function getNavMenu() {
        try {
            $query = "SELECT * FROM nav_menu WHERE status = 'active' ORDER BY position";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return [];
        }
    }
    
    public function updateNavMenu($id, $data) {
        try {
            $query = "UPDATE nav_menu SET title = ?, url = ?, position = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            return $stmt->execute([
                $data['title'],
                $data['url'],
                $data['position'],
                $id
            ]);
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function handleRequest() {
        if (!$this->isLoggedIn()) {
            http_response_code(401);
            echo json_encode(['success' => false, 'message' => 'Unauthorized']);
            return;
        }
        
        $action = $_POST['action'] ?? $_GET['action'] ?? '';
        
        switch ($action) {
            case 'get_content':
                $section = $_GET['section'] ?? null;
                echo json_encode($this->getWebsiteContent($section));
                break;
                
            case 'update_content':
                if (!isset($_POST['id']) || !isset($_POST['data'])) {
                    http_response_code(400);
                    echo json_encode(['success' => false, 'message' => 'Missing required data']);
                    return;
                }
                
                $result = $this->updateWebsiteContent($_POST['id'], $_POST['data']);
                echo json_encode(['success' => $result]);
                break;
                
            case 'get_menu':
                echo json_encode($this->getNavMenu());
                break;
                
            case 'update_menu':
                if (!isset($_POST['id']) || !isset($_POST['data'])) {
                    http_response_code(400);
                    echo json_encode(['success' => false, 'message' => 'Missing required data']);
                    return;
                }
                
                $result = $this->updateNavMenu($_POST['id'], $_POST['data']);
                echo json_encode(['success' => $result]);
                break;
                
            default:
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Invalid action']);
        }
    }
}
?>