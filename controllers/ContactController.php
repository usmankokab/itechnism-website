<?php
require_once 'config/database.php';

class ContactController {
    private $conn;
    
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    
    public function submitMessage($data) {
        try {
            $query = "INSERT INTO contact_messages (name, email, phone, company, service, budget, message) 
                     VALUES (?, ?, ?, ?, ?, ?, ?)";
            
            $stmt = $this->conn->prepare($query);
            $result = $stmt->execute([
                $data['name'],
                $data['email'],
                $data['phone'] ?? '',
                $data['company'] ?? '',
                $data['service'] ?? '',
                $data['budget'] ?? '',
                $data['message']
            ]);
            
            if ($result) {
                // Send email notification
                $this->sendEmailNotification($data);
                return ['success' => true, 'message' => 'Message sent successfully!'];
            } else {
                return ['success' => false, 'message' => 'Failed to send message'];
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
        }
    }
    
    private function sendEmailNotification($data) {
        $to = 'usman.kokab@gmail.com';
        $source = $data['source'] ?? 'Contact Page';
        $subject = "New Contact Form Submission - iTechnism ({$source})";
        
        $message = "New contact form submission from iTechnism website:\n\n";
        $message .= "Source: {$source}\n";
        $message .= "Name: {$data['name']}\n";
        $message .= "Email: {$data['email']}\n";
        $message .= "Phone: " . ($data['phone'] ?: 'Not provided') . "\n";
        $message .= "Company: " . ($data['company'] ?: 'Not provided') . "\n";
        $message .= "Service Interest: " . ($data['service'] ?: 'Not specified') . "\n";
        $message .= "Budget: " . ($data['budget'] ?: 'Not specified') . "\n";
        $message .= "Message:\n{$data['message']}\n\n";
        $message .= "Submitted: " . date('Y-m-d H:i:s') . "\n";
        $message .= "Reply to: {$data['email']}";
        
        $headers = "From: noreply@itechnism.com\r\n";
        $headers .= "Reply-To: {$data['email']}\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // For local testing - save email to file instead of sending
        if ($_SERVER['HTTP_HOST'] === 'localhost' || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false) {
            $this->saveEmailToFile($to, $subject, $message, $headers);
        } else {
            mail($to, $subject, $message, $headers);
        }
    }
    
    private function saveEmailToFile($to, $subject, $message, $headers) {
        $emailContent = "=== EMAIL TEST LOG ===\n";
        $emailContent .= "To: $to\n";
        $emailContent .= "Subject: $subject\n";
        $emailContent .= "Headers: $headers\n";
        $emailContent .= "Time: " . date('Y-m-d H:i:s') . "\n";
        $emailContent .= "\n--- MESSAGE ---\n";
        $emailContent .= $message;
        $emailContent .= "\n\n" . str_repeat('=', 50) . "\n\n";
        
        file_put_contents(__DIR__ . '/../logs/email_test.log', $emailContent, FILE_APPEND | LOCK_EX);
    }
    
    public function getMessages($status = null) {
        try {
            if ($status) {
                $query = "SELECT * FROM contact_messages WHERE status = ? ORDER BY created_at DESC";
                $stmt = $this->conn->prepare($query);
                $stmt->execute([$status]);
            } else {
                $query = "SELECT * FROM contact_messages ORDER BY created_at DESC";
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
            }
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return [];
        }
    }
    
    public function markAsRead($id) {
        try {
            $query = "UPDATE contact_messages SET status = 'read' WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            return $stmt->execute([$id]);
        } catch (Exception $e) {
            return false;
        }
    }
}
?>