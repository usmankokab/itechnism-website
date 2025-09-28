<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTech QA - Quality Assurance & Development</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up">
                    Quality Assurance Excellence
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100" data-aos="fade-up" data-aos-delay="200">
                    Comprehensive QA solutions for reliable, high-performance software
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                    <a href="/services" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Our Services
                    </a>
                    <a href="/contact" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Preview -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Expertise</h2>
                <p class="text-lg text-gray-600">Specialized QA services tailored to your needs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check-circle text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Manual QA</h3>
                    <p class="text-gray-600 text-sm">Comprehensive manual testing</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-robot text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Automation</h3>
                    <p class="text-gray-600 text-sm">Selenium, Cypress, Playwright</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">API Testing</h3>
                    <p class="text-gray-600 text-sm">REST & SOAP validation</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">RPA Testing</h3>
                    <p class="text-gray-600 text-sm">Automation bot validation</p>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Initialize Swiper
        const swiper = new Swiper('.servicesSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
</body>
</html>