<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($service['title']) ?> - iTech QA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>
    
    <div class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-8 py-12">
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mr-6">
                            <i class="<?= $service['icon'] ?> text-white text-2xl"></i>
                        </div>
                        <h1 class="text-3xl font-bold text-white"><?= htmlspecialchars($service['title']) ?></h1>
                    </div>
                    <p class="text-blue-100 text-lg"><?= htmlspecialchars($service['short_desc']) ?></p>
                </div>
                
                <div class="px-8 py-12">
                    <div class="prose prose-lg max-w-none">
                        <?= nl2br(htmlspecialchars($service['content'])) ?>
                    </div>
                    
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/contact" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                Get Started
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="/services" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition-colors">
                                View All Services
                            </a>
                        </div>
                    </div>
                </div>
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