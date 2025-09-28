<?php
require_once 'config/database.php';

class ServicesController {
    private $db;
    private $conn;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    public function getAllCategories() {
        $query = "SELECT * FROM service_categories WHERE status = 'published' ORDER BY sort_order ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getServicesWithCategories() {
        $query = "SELECT s.*, c.title as category_title, c.slug as category_slug 
                 FROM services s 
                 JOIN service_categories c ON s.category_id = c.id 
                 WHERE s.status = 'published' AND c.status = 'published' 
                 ORDER BY c.sort_order, s.sort_order";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getServicesByCategory($categorySlug) {
        $query = "SELECT s.* FROM services s 
                 JOIN service_categories c ON s.category_id = c.id 
                 WHERE c.slug = :category_slug AND s.status = 'published' AND c.status = 'published' 
                 ORDER BY s.sort_order";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':category_slug', $categorySlug);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getServiceBySlug($slug) {
        $query = "SELECT s.*, c.title as category_title, c.slug as category_slug 
                 FROM services s 
                 JOIN service_categories c ON s.category_id = c.id 
                 WHERE s.slug = :slug AND s.status = 'published'";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':slug', $slug);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>