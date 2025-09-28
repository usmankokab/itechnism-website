<?php
// Simple router for the QA website
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

// Remove base path if running in subdirectory
$basePath = '/itech';
if (strpos($path, $basePath) === 0) {
    $path = substr($path, strlen($basePath));
}

switch ($path) {
    case '':
    case '/':
        include 'views/home-new.php';
        break;
    case '/services':
        include 'views/services.php';
        break;
    case (preg_match('/^\/services\/([a-z-]+)$/', $path, $matches) ? true : false):
        $slug = $matches[1];
        require_once 'controllers/ServicesController.php';
        $servicesController = new ServicesController();
        $service = $servicesController->getServiceBySlug($slug);
        
        if ($service) {
            include 'views/service-detail.php';
        } else {
            http_response_code(404);
            echo "Service not found";
        }
        break;
    case (preg_match('/^\/services\/category\/([a-z-]+)$/', $path, $matches) ? true : false):
        $categorySlug = $matches[1];
        require_once 'controllers/ServicesController.php';
        $servicesController = new ServicesController();
        $services = $servicesController->getServicesByCategory($categorySlug);
        include 'views/category-services.php';
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
?>