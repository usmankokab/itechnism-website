<?php
// Handle different paths when called from different locations
if (file_exists('config/database.php')) {
    require_once 'config/database.php';
} elseif (file_exists('../config/database.php')) {
    require_once '../config/database.php';
} elseif (file_exists(__DIR__ . '/../config/database.php')) {
    require_once __DIR__ . '/../config/database.php';
} else {
    throw new Exception('Database config file not found');
}

class NewsletterController {
    private $conn;
    
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    
    public function subscribe($email, $name = null, $source = 'website') {
        // Rate limiting check
        if (!$this->checkRateLimit()) {
            return ['success' => false, 'message' => 'Too many requests. Please try again later.'];
        }
        
        // Validate email
        if (!$this->validateEmail($email)) {
            return ['success' => false, 'message' => 'Please enter a valid email address.'];
        }
        
        // Check if already subscribed
        if ($this->isSubscribed($email)) {
            return ['success' => false, 'message' => 'This email is already subscribed to our newsletter.'];
        }
        
        try {
            $unsubscribeToken = bin2hex(random_bytes(32));
            $ipAddress = $_SERVER['REMOTE_ADDR'] ?? '';
            
            $query = "INSERT INTO newsletter_subscribers (email, name, source, ip_address, unsubscribe_token) 
                     VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $email);
            $stmt->bindParam(2, $name);
            $stmt->bindParam(3, $source);
            $stmt->bindParam(4, $ipAddress);
            $stmt->bindParam(5, $unsubscribeToken);
            
            if ($stmt->execute()) {
                return ['success' => true, 'message' => 'Successfully subscribed to our newsletter!'];
            } else {
                $errorInfo = $stmt->errorInfo();
                return ['success' => false, 'message' => 'Database error: ' . $errorInfo[2]];
            }
        } catch (Exception $e) {
            error_log('Newsletter Subscribe Error: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
        }
    }
    
    public function unsubscribe($token) {
        try {
            $query = "UPDATE newsletter_subscribers SET status = 'unsubscribed' WHERE unsubscribe_token = ? AND status = 'active'";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $token);
            
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                return ['success' => true, 'message' => 'Successfully unsubscribed from newsletter.'];
            } else {
                return ['success' => false, 'message' => 'Invalid unsubscribe link or already unsubscribed.'];
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => 'An error occurred. Please try again.'];
        }
    }
    
    public function getSubscribers($status = 'active') {
        try {
            $query = "SELECT id, email, name, source, subscribed_at FROM newsletter_subscribers WHERE status = ? ORDER BY subscribed_at DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $status);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return [];
        }
    }
    
    public function getStats() {
        try {
            $stats = [];
            
            // Total active subscribers
            $query = "SELECT COUNT(*) as total FROM newsletter_subscribers WHERE status = 'active'";
            $result = $this->conn->query($query);
            $stats['total_active'] = $result->fetch(PDO::FETCH_ASSOC)['total'];
            
            // Total unsubscribed
            $query = "SELECT COUNT(*) as total FROM newsletter_subscribers WHERE status = 'unsubscribed'";
            $result = $this->conn->query($query);
            $stats['total_unsubscribed'] = $result->fetch(PDO::FETCH_ASSOC)['total'];
            
            // Recent subscriptions (last 30 days)
            $query = "SELECT COUNT(*) as total FROM newsletter_subscribers WHERE status = 'active' AND subscribed_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)";
            $result = $this->conn->query($query);
            $stats['recent_subscriptions'] = $result->fetch(PDO::FETCH_ASSOC)['total'];
            
            // By source
            $query = "SELECT source, COUNT(*) as count FROM newsletter_subscribers WHERE status = 'active' GROUP BY source";
            $result = $this->conn->query($query);
            $stats['by_source'] = $result->fetchAll(PDO::FETCH_ASSOC);
            
            return $stats;
        } catch (Exception $e) {
            return [];
        }
    }
    
    private function validateEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        
        // Check domain
        $domain = substr(strrchr($email, "@"), 1);
        return checkdnsrr($domain, "MX");
    }
    
    private function isSubscribed($email) {
        $query = "SELECT id FROM newsletter_subscribers WHERE email = ? AND status = 'active'";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
    
    private function checkRateLimit() {
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? '';
        $query = "SELECT COUNT(*) as count FROM newsletter_subscribers WHERE ip_address = ? AND subscribed_at >= DATE_SUB(NOW(), INTERVAL 1 HOUR)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $ipAddress);
        $stmt->execute();
        
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] < 5; // Max 5 subscriptions per hour per IP
    }
    

}
?>