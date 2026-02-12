<?php
// Load configuration
require_once 'config/config.php';

// Simple router for the QA website
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

// Remove base path if running in subdirectory
if (BASE_URL !== '' && strpos($path, BASE_URL) === 0) {
    $path = substr($path, strlen(BASE_URL));
}

switch ($path) {
    case '':
    case '/':
        include 'views/home-new.php';
        break;
    case '/services':
        include 'views/services.php';
        break;
    case '/about':
        include 'views/about.php';
        break;
    case '/contact':
        include 'views/contact.php';
        break;
    case '/contact/submit':
        require_once 'controllers/ContactController.php';
        
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
                header('Location: ' . url('/contact?error=Name, email, and message are required'));
                exit;
            }
            
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                header('Location: ' . url('/contact?error=Invalid email address'));
                exit;
            }
            
            $result = $contact->submitMessage($data);
            
            if ($result['success']) {
                header('Location: ' . url('/contact?success=1'));
            } else {
                header('Location: ' . url('/contact?error=' . urlencode($result['message'])));
            }
        } else {
            header('Location: ' . url('/contact'));
        }
        exit;
        break;
    case '/home/contact':
        require_once 'controllers/ContactController.php';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contact = new ContactController();
            
            $data = [
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'phone' => '',
                'company' => '',
                'service' => $_POST['service'] ?? '',
                'budget' => '',
                'message' => $_POST['message'] ?? '',
                'source' => 'Home Page'
            ];
            
            if (empty($data['name']) || empty($data['email']) || empty($data['message'])) {
                header('Location: ' . url('/?error=Name, email, and message are required'));
                exit;
            }
            
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                header('Location: ' . url('/?error=Invalid email address'));
                exit;
            }
            
            $result = $contact->submitMessage($data);
            
            if ($result['success']) {
                header('Location: ' . url('/?success=1'));
            } else {
                header('Location: ' . url('/?error=' . urlencode($result['message'])));
            }
        } else {
            header('Location: ' . url('/'));
        }
        exit;
        break;
    case '/blog':
        include 'views/blog.php';
        break;
    case '/newsletter/subscribe':
        require_once 'controllers/NewsletterController.php';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newsletter = new NewsletterController();
            $email = $_POST['email'] ?? '';
            $name = $_POST['name'] ?? null;
            $source = $_POST['source'] ?? 'website';
            
            $result = $newsletter->subscribe($email, $name, $source);
            
            // Return JSON for AJAX requests
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                header('Content-Type: application/json');
                echo json_encode($result);
            } else {
                // Redirect back with message
                $referer = $_SERVER['HTTP_REFERER'] ?? url('/');
                if ($result['success']) {
                    header('Location: ' . $referer . (strpos($referer, '?') ? '&' : '?') . 'newsletter=success');
                } else {
                    header('Location: ' . $referer . (strpos($referer, '?') ? '&' : '?') . 'newsletter=error&msg=' . urlencode($result['message']));
                }
            }
        } else {
            header('Location: ' . url('/'));
        }
        exit;
        break;
    case '/newsletter/unsubscribe':
        require_once 'controllers/NewsletterController.php';
        $newsletter = new NewsletterController();
        $token = $_GET['token'] ?? '';
        $result = $newsletter->unsubscribe($token);
        include 'views/unsubscribe.php';
        break;
    case '/admin/newsletter':
        session_start();
        if (!isset($_SESSION['admin_id'])) {
            header('Location: ' . url('/admin/login'));
            exit;
        }
        include 'views/admin/newsletter.php';
        break;
    case '/admin/login':
        include 'views/admin/login.php';
        break;
    case '/admin/dashboard':
    case '/admin':
        session_start();
        if (!isset($_SESSION['admin_id'])) {
            header('Location: ' . url('/admin/login'));
            exit;
        }
        include 'views/admin/dashboard.php';
        break;
    case '/admin/logout':
        require_once 'controllers/AdminController.php';
        $admin = new AdminController();
        $admin->logout();
        header('Location: ' . url('/admin/login'));
        exit;
        break;
    case '/admin/messages':
        session_start();
        if (!isset($_SESSION['admin_id'])) {
            header('Location: ' . url('/admin/login'));
            exit;
        }
        include 'views/admin/messages.php';
        break;
    case '/privacy':
        include 'views/privacy.php';
        break;
    case '/terms':
        include 'views/terms.php';
        break;
    case '/sitemap':
        include 'views/sitemap.php';
        break;
    case (preg_match('/^\/services\/([a-z0-9-]+)$/', $path, $matches) ? true : false):
        $slug = $matches[1];
        
        // Check for specific pages first
        if ($slug === 'n8n') {
            include 'views/n8n.php';
        } elseif ($slug === 'make-automation') {
            include 'views/make-automation.php';
        } elseif ($slug === 'claim-your-business') {
            include 'views/claim-your-business.php';
        } elseif ($slug === 'guest-posting') {
            include 'views/guest-posting.php';
        } elseif ($slug === 'mobile-testing') {
            include 'views/mobile-testing.php';
        } elseif ($slug === 'project-management') {
            include 'views/project-management.php';
        } elseif ($slug === 'zapier-automation') {
            include 'views/zapier-automation.php';
        } elseif ($slug === 'sem-ppc') {
            include 'views/sem-ppc.php';
        } elseif ($slug === 'social-media-marketing') {
            include 'views/social-media-marketing.php';
        } elseif ($slug === 'content-marketing') {
            include 'views/content-marketing.php';
        } elseif ($slug === 'email-marketing-automation') {
            include 'views/email-marketing-automation.php';
        } elseif ($slug === 'conversion-rate-optimization') {
            include 'views/conversion-rate-optimization.php';
        } elseif ($slug === 'analytics-reporting') {
            include 'views/analytics-reporting.php';
        } else {
            // Check if specific service page exists
            $servicePage = 'views/services/' . $slug . '.php';
            
            if (file_exists($servicePage)) {
                include $servicePage;
            } else {
                // Try database-driven service detail with error handling
                try {
                    require_once 'controllers/ServicesController.php';
                    $servicesController = new ServicesController();
                    $service = $servicesController->getServiceBySlug($slug);
                    
                    if ($service) {
                        include 'views/service-detail.php';
                    } else {
                        http_response_code(404);
                        echo "Service not found";
                    }
                } catch (Exception $e) {
                    // Database table doesn't exist, show 404
                    http_response_code(404);
                    echo "Service not found";
                }
            }
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