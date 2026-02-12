<?php
require_once '../controllers/AdminController.php';

$admin = new AdminController();
$admin->logout();

header('Location: /itech/admin/login');
exit;
?>