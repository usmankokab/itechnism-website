<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - iTech QA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>
    
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Quality Assurance Services</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive QA solutions to ensure your software meets the highest standards of quality, performance, and reliability.</p>
            </div>
            
            <?php
            require_once '../controllers/ServicesController.php';
            $servicesController = new ServicesController();
            $categories = $servicesController->getAllCategories();
            
            foreach($categories as $category):
                $services = $servicesController->getServicesByCategory($category['slug']);
            ?>
            <div class="mb-16">
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="<?= $category['icon'] ?> text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($category['title']) ?></h2>
                        <p class="text-gray-600"><?= htmlspecialchars($category['description']) ?></p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach($services as $index => $service): ?>
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                        <div class="p-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="<?= $service['icon'] ?> text-white text-lg"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-3"><?= htmlspecialchars($service['title']) ?></h3>
                            <p class="text-gray-600 mb-4 text-sm"><?= htmlspecialchars($service['short_desc']) ?></p>
                            <a href="/services/<?= $service['slug'] ?>" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm">
                                Learn More
                                <svg class="ml-2 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>