<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTechnism - Quality Assurance & Development</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 text-white py-24 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6" data-aos="fade-up">
                    <span class="text-white">Quality</span> 
                    <span class="text-yellow-400">Assurance</span>
                    <br>
                    <span class="text-blue-300">Excellence</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Delivering <span class="text-yellow-400 font-semibold">world-class</span> QA solutions for 
                    <span class="text-blue-300 font-semibold">reliable</span>, high-performance software
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                    <a href="<?php echo url('/services'); ?>" class="bg-gradient-to-r from-yellow-400 to-orange-500 text-black px-8 py-4 rounded-lg font-bold hover:from-yellow-500 hover:to-orange-600 transition-all transform hover:scale-105 shadow-lg">
                        Explore Services
                    </a>
                    <a href="<?php echo url('/contact'); ?>" class="border-2 border-blue-300 text-blue-300 px-8 py-4 rounded-lg font-bold hover:bg-blue-300 hover:text-slate-900 transition-all transform hover:scale-105">
                        Get Started
                    </a>
                </div>
            </div>
            
            <!-- Services Slider -->
            <div class="relative" data-aos="fade-up" data-aos-delay="600">
                <div class="swiper servicesSwiper">
                    <div class="swiper-wrapper">
                        <!-- Software QA Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center border border-white border-opacity-20">
                                <div class="w-20 h-20 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-shield-alt text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-4">Software Quality Assurance</h3>
                                <p class="text-gray-200 mb-6">Comprehensive testing solutions ensuring software reliability and performance</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span class="bg-blue-500 bg-opacity-30 text-blue-200 px-3 py-1 rounded-full text-sm">Manual Testing</span>
                                    <span class="bg-blue-500 bg-opacity-30 text-blue-200 px-3 py-1 rounded-full text-sm">Test Automation</span>
                                    <span class="bg-blue-500 bg-opacity-30 text-blue-200 px-3 py-1 rounded-full text-sm">API Testing</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Data Extraction Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center border border-white border-opacity-20">
                                <div class="w-20 h-20 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-download text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-4">Data Extraction</h3>
                                <p class="text-gray-200 mb-6">ETL testing and data migration validation for accurate data processes</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span class="bg-green-500 bg-opacity-30 text-green-200 px-3 py-1 rounded-full text-sm">Web Scraping</span>
                                    <span class="bg-green-500 bg-opacity-30 text-green-200 px-3 py-1 rounded-full text-sm">API Extraction</span>
                                    <span class="bg-green-500 bg-opacity-30 text-green-200 px-3 py-1 rounded-full text-sm">Big Data</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Software Development Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center border border-white border-opacity-20">
                                <div class="w-20 h-20 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-code text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-4">Software Development</h3>
                                <p class="text-gray-200 mb-6">Custom software development using modern technologies and best practices</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span class="bg-purple-500 bg-opacity-30 text-purple-200 px-3 py-1 rounded-full text-sm">Web Development</span>
                                    <span class="bg-purple-500 bg-opacity-30 text-purple-200 px-3 py-1 rounded-full text-sm">Mobile Apps</span>
                                    <span class="bg-purple-500 bg-opacity-30 text-purple-200 px-3 py-1 rounded-full text-sm">Desktop Apps</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- RPA Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center border border-white border-opacity-20">
                                <div class="w-20 h-20 bg-gradient-to-r from-orange-400 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-robot text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-4">Robotic Process Automation</h3>
                                <p class="text-gray-200 mb-6">RPA development and testing for automated business processes</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span class="bg-orange-500 bg-opacity-30 text-orange-200 px-3 py-1 rounded-full text-sm">RPA Development</span>
                                    <span class="bg-orange-500 bg-opacity-30 text-orange-200 px-3 py-1 rounded-full text-sm">Bot Testing</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Workflow Automation Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center border border-white border-opacity-20">
                                <div class="w-20 h-20 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-cogs text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-4">Workflow Automation</h3>
                                <p class="text-gray-200 mb-6">No-code automation platforms for streamlined business processes</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span class="bg-teal-500 bg-opacity-30 text-teal-200 px-3 py-1 rounded-full text-sm">n8n</span>
                                    <span class="bg-teal-500 bg-opacity-30 text-teal-200 px-3 py-1 rounded-full text-sm">Make</span>
                                    <span class="bg-teal-500 bg-opacity-30 text-teal-200 px-3 py-1 rounded-full text-sm">Zapier</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Digital Marketing Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 text-center border border-white border-opacity-20">
                                <div class="w-20 h-20 bg-gradient-to-r from-pink-400 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-bullhorn text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-4">Digital Marketing</h3>
                                <p class="text-gray-200 mb-6">SEO optimization and marketing automation for digital growth</p>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span class="bg-pink-500 bg-opacity-30 text-pink-200 px-3 py-1 rounded-full text-sm">SEO & Local SEO</span>
                                    <span class="bg-pink-500 bg-opacity-30 text-pink-200 px-3 py-1 rounded-full text-sm">SEM & PPC</span>
                                    <span class="bg-pink-500 bg-opacity-30 text-pink-200 px-3 py-1 rounded-full text-sm">Social Media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation -->
                    <div class="swiper-pagination mt-8"></div>
                    <div class="swiper-button-next text-white"></div>
                    <div class="swiper-button-prev text-white"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Preview -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Expertise</h2>
                <p class="text-lg text-gray-600">Comprehensive services across all technology domains</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6">
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Software QA</h3>
                    <p class="text-gray-600 text-sm">Manual & automated testing solutions</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-download text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Data Extraction</h3>
                    <p class="text-gray-600 text-sm">Web scraping & API extraction</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Development</h3>
                    <p class="text-gray-600 text-sm">Web, mobile & desktop development</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-robot text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">RPA</h3>
                    <p class="text-gray-600 text-sm">Process automation & testing</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Workflow Automation</h3>
                    <p class="text-gray-600 text-sm">No-code automation platforms</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bullhorn text-pink-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Digital Marketing</h3>
                    <p class="text-gray-600 text-sm">SEO, SEM, SMM & analytics</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose iTechnism?</h2>
                <p class="text-lg text-gray-600">Industry-leading expertise with proven results</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-500 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Certified Experts</h3>
                    <p class="text-gray-600">Our team holds industry certifications in ISTQB, Selenium, AWS, and major testing frameworks.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-500 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fast Delivery</h3>
                    <p class="text-gray-600">Agile methodologies ensure rapid project delivery without compromising quality standards.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-purple-500 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                    <p class="text-gray-600">Round-the-clock technical support and maintenance for all your QA and development needs.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <div class="text-blue-200">Projects Completed</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <div class="text-blue-200">Happy Clients</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-bold mb-2">99%</div>
                    <div class="text-blue-200">Success Rate</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-blue-200">Support Available</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Technologies We Use -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Technologies We Master</h2>
                <p class="text-lg text-gray-600">Cutting-edge tools and frameworks organized by service category</p>
            </div>
            
            <div class="swiper techSwiper">
                <div class="swiper-wrapper">
                    <!-- Software QA Technologies -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl p-8 shadow-lg">
                            <h3 class="text-xl font-bold text-blue-600 mb-6 text-center">Software QA Testing</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-robot text-orange-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Selenium</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-js-square text-green-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Cypress</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-theater-masks text-purple-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Playwright</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-vial text-blue-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">RestAssured</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-mail-bulk text-orange-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Postman</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-mobile-alt text-green-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Appium</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-jira text-blue-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Jira</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-tasks text-purple-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">ClickUp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Data Extraction Technologies -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl p-8 shadow-lg">
                            <h3 class="text-xl font-bold text-green-600 mb-6 text-center">Data Extraction & Web Scraping</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-database text-blue-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">MySQL</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-indigo-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-elephant text-indigo-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">PostgreSQL</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-leaf text-green-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">MongoDB</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-yellow-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-python text-yellow-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Beautiful Soup</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-red-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-spider text-red-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Scrapy</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-globe text-purple-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Web Scraper</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-octopus-deploy text-orange-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Octoparse</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-teal-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-code-branch text-teal-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">ParseHub</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-pink-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-robot text-pink-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Diffbot</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-indigo-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-spider text-indigo-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Apify</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-file-excel text-green-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Excel</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-google text-blue-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Google Sheets</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Software Development Technologies -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl p-8 shadow-lg">
                            <h3 class="text-xl font-bold text-purple-600 mb-6 text-center">Software Development</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-php text-purple-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">PHP</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-cyan-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-react text-cyan-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">React</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-node-js text-green-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Node.js</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-bootstrap text-purple-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Bootstrap</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-teal-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-wind text-teal-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Tailwind CSS</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-html5 text-orange-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">HTML5</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-python text-blue-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Python</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-gray-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-server text-gray-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Express.js</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- RPA Technologies -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl p-8 shadow-lg">
                            <h3 class="text-xl font-bold text-orange-600 mb-6 text-center">RPA & Automation</h3>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-robot text-orange-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">UiPath</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-cube text-blue-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Blue Prism</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-red-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-cogs text-red-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Automation Anywhere</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-rocket text-green-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Robomotion</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fab fa-microsoft text-blue-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Power Automate</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-atom text-purple-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">WorkFusion</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-yellow-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-robot text-yellow-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Selenium</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-indigo-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-theater-masks text-indigo-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Playwright</span>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 mx-auto mb-2 bg-teal-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-android text-teal-600 text-xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Robot Framework</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation -->
                <div class="swiper-pagination mt-8"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    
    <!-- Portfolio Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Portfolio</h2>
                <p class="text-lg text-gray-600">Showcasing successful projects across diverse industries</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- E-commerce QA Project -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium mr-2">QA Testing</span>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">E-commerce</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">E-commerce Platform Testing</h3>
                        <p class="text-gray-600 text-sm mb-4">Comprehensive testing suite for a major retail platform including automated regression testing, API validation, and performance optimization.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>6 months</span>
                            </div>
                            <div class="flex items-center text-sm text-green-600">
                                <i class="fas fa-check-circle mr-1"></i>
                                <span>95% bug reduction</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Banking RPA Project -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-700 flex items-center justify-center">
                        <i class="fas fa-university text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-medium mr-2">RPA</span>
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-medium">Banking</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Banking Process Automation</h3>
                        <p class="text-gray-600 text-sm mb-4">UiPath-based automation solution for loan processing workflows, reducing manual effort by 80% and improving accuracy.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>4 months</span>
                            </div>
                            <div class="flex items-center text-sm text-green-600">
                                <i class="fas fa-robot mr-1"></i>
                                <span>80% automation</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Healthcare Data Extraction -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                        <i class="fas fa-heartbeat text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Data Extraction</span>
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-medium">Healthcare</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Medical Data Scraping</h3>
                        <p class="text-gray-600 text-sm mb-4">Large-scale medical research data extraction from multiple sources using Python and advanced scraping techniques.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>3 months</span>
                            </div>
                            <div class="flex items-center text-sm text-green-600">
                                <i class="fas fa-database mr-1"></i>
                                <span>1M+ records</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Real Estate Web App -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                        <i class="fas fa-home text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Web Development</span>
                            <span class="bg-teal-100 text-teal-600 px-3 py-1 rounded-full text-xs font-medium">Real Estate</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Property Management System</h3>
                        <p class="text-gray-600 text-sm mb-4">Full-stack web application for property management with React frontend, Node.js backend, and comprehensive testing suite.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>8 months</span>
                            </div>
                            <div class="flex items-center text-sm text-green-600">
                                <i class="fas fa-users mr-1"></i>
                                <span>10K+ users</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Digital Marketing Campaign -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="h-48 bg-gradient-to-br from-pink-500 to-pink-700 flex items-center justify-center">
                        <i class="fas fa-bullhorn text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Digital Marketing</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium">E-commerce</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">SEO & PPC Campaign</h3>
                        <p class="text-gray-600 text-sm mb-4">Complete digital marketing overhaul including SEO optimization, PPC campaigns, and conversion rate optimization for online retailer.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>12 months</span>
                            </div>
                            <div class="flex items-center text-sm text-green-600">
                                <i class="fas fa-chart-line mr-1"></i>
                                <span>300% ROI</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile App Testing -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                    <div class="h-48 bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Mobile Testing</span>
                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-medium">Education</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Educational App QA</h3>
                        <p class="text-gray-600 text-sm mb-4">Cross-platform mobile app testing using Appium for iOS and Android, ensuring seamless user experience across devices.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>5 months</span>
                            </div>
                            <div class="flex items-center text-sm text-green-600">
                                <i class="fas fa-star mr-1"></i>
                                <span>4.8/5 rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="<?php echo url('/contact'); ?>" class="inline-flex items-center bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    Contact Us for Projects
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Client Testimonials -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <p class="text-lg text-gray-600">Trusted by companies worldwide</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-blue-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"iTechnism delivered exceptional testing services for our e-commerce platform. Their attention to detail and automation expertise saved us months of development time."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">JD</div>
                        <div>
                            <div class="font-semibold text-gray-900">John Davis</div>
                            <div class="text-sm text-gray-500">CTO, TechCorp</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-green-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Outstanding RPA implementation and testing. The team's expertise in UiPath helped us automate 80% of our manual processes with zero errors."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">SM</div>
                        <div>
                            <div class="font-semibold text-gray-900">Sarah Miller</div>
                            <div class="text-sm text-gray-500">Operations Manager, DataFlow</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-purple-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Their API testing and database validation services are top-notch. We've seen a 95% reduction in production bugs since partnering with iTechnism."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">MJ</div>
                        <div>
                            <div class="font-semibold text-gray-900">Michael Johnson</div>
                            <div class="text-sm text-gray-500">Lead Developer, InnovateLab</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Process Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Proven Process</h2>
                <p class="text-lg text-gray-600">Streamlined workflow for exceptional results</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <i class="fas fa-comments text-white text-2xl"></i>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-sm">1</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Consultation</h3>
                    <p class="text-gray-600">Understanding your requirements and project scope</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <i class="fas fa-clipboard-list text-white text-2xl"></i>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-sm">2</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Planning</h3>
                    <p class="text-gray-600">Detailed strategy and timeline development</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <i class="fas fa-code text-white text-2xl"></i>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-sm">3</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Execution</h3>
                    <p class="text-gray-600">Implementation with continuous monitoring</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-sm">4</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Delivery</h3>
                    <p class="text-gray-600">Final testing, deployment, and support</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-slate-900 to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Ready to Transform Your Business?</h2>
            <p class="text-lg text-blue-200 mb-8" data-aos="fade-up" data-aos-delay="200">
                Join 50+ companies who trust iTechnism for their quality assurance and development needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-3 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Start Your Project
                </a>
                <a href="<?php echo url('/services'); ?>" class="border-2 border-blue-300 text-blue-300 px-8 py-3 rounded-lg font-bold hover:bg-blue-300 hover:text-slate-900 transition-colors">
                    Explore Services
                </a>
            </div>
        </div>
    </section>
    
    <!-- Industries We Serve -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Industries We Serve</h2>
                <p class="text-lg text-gray-600">Expertise across diverse business sectors</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="text-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shopping-cart text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm">E-commerce</h3>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow" data-aos="zoom-in" data-aos-delay="150">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heartbeat text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm">Healthcare</h3>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-university text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm">Banking</h3>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow" data-aos="zoom-in" data-aos-delay="250">
                    <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm">Education</h3>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow" data-aos="zoom-in" data-aos-delay="300">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm">Logistics</h3>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow" data-aos="zoom-in" data-aos-delay="350">
                    <div class="w-16 h-16 bg-teal-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-home text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm">Real Estate</h3>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600">Get answers to common questions about our services</p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(1)">
                        <span class="font-semibold text-gray-900">What types of testing do you provide?</span>
                        <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="icon-1"></i>
                    </button>
                    <div class="px-6 pb-4 hidden" id="faq-1">
                        <p class="text-gray-600">We provide comprehensive testing services including manual testing, test automation, API testing, database testing, mobile app testing, and performance testing across web and mobile platforms.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(2)">
                        <span class="font-semibold text-gray-900">How long does a typical project take?</span>
                        <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="icon-2"></i>
                    </button>
                    <div class="px-6 pb-4 hidden" id="faq-2">
                        <p class="text-gray-600">Project timelines vary based on scope and complexity. Simple testing projects can be completed in 1-2 weeks, while comprehensive automation suites may take 4-8 weeks. We provide detailed timelines during consultation.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(3)">
                        <span class="font-semibold text-gray-900">Do you work with agile development teams?</span>
                        <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="icon-3"></i>
                    </button>
                    <div class="px-6 pb-4 hidden" id="faq-3">
                        <p class="text-gray-600">Yes, we seamlessly integrate with agile workflows. Our team participates in sprint planning, daily standups, and retrospectives to ensure continuous testing throughout the development cycle.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(4)">
                        <span class="font-semibold text-gray-900">What RPA platforms do you specialize in?</span>
                        <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="icon-4"></i>
                    </button>
                    <div class="px-6 pb-4 hidden" id="faq-4">
                        <p class="text-gray-600">We specialize in UiPath, Blue Prism, Automation Anywhere, Microsoft Power Automate, and WorkFusion. Our certified experts can develop, test, and maintain RPA solutions across these platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="text-white" data-aos="fade-right">
                        <h2 class="text-3xl font-bold mb-4">Let's Discuss Your Project</h2>
                        <p class="text-blue-100 mb-6">Ready to enhance your software quality? Get in touch with our experts for a free consultation and project estimate.</p>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-phone text-yellow-400 mr-3"></i>
                                <span>+92 (334) 438-4943</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-yellow-400 mr-3"></i>
                                <span>usman.kokab@gmail.com</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-yellow-400 mr-3"></i>
                                <span>Sufiabad, Attari Saroba, Foroozpur Road, Lahore</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6" data-aos="fade-left">
                        <form class="space-y-4" action="<?php echo url('/home/contact'); ?>" method="POST">
                            <div>
                                <input type="text" name="name" placeholder="Your Name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Your Email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <select name="service" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Service</option>
                                    <option value="Software QA Testing">Software QA Testing</option>
                                    <option value="Data Extraction">Data Extraction</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="RPA Services">RPA Services</option>
                                    <option value="Workflow Automation">Workflow Automation</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                </select>
                            </div>
                            <div>
                                <textarea name="message" placeholder="Project Details" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">iTechnism</h3>
                    <p class="text-gray-300 mb-6 max-w-md">Leading provider of quality assurance, software development, and automation solutions. Delivering excellence through innovation and expertise.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-900 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="<?php echo url('/services/manual-testing'); ?>" class="hover:text-yellow-400 transition-colors">Manual Testing</a></li>
                        <li><a href="<?php echo url('/services/test-automation'); ?>" class="hover:text-yellow-400 transition-colors">Test Automation</a></li>
                        <li><a href="<?php echo url('/services/api-testing'); ?>" class="hover:text-yellow-400 transition-colors">API Testing</a></li>
                        <li><a href="<?php echo url('/services/uipath'); ?>" class="hover:text-yellow-400 transition-colors">RPA Development</a></li>
                        <li><a href="<?php echo url('/services/web-development'); ?>" class="hover:text-yellow-400 transition-colors">Web Development</a></li>
                        <li><a href="<?php echo url('/services/web-scraping-crawling'); ?>" class="hover:text-yellow-400 transition-colors">Web Scraping</a></li>
                    </ul>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="/itech" class="hover:text-yellow-400 transition-colors">Home</a></li>
                        <li><a href="<?php echo url('/services'); ?>" class="hover:text-yellow-400 transition-colors">All Services</a></li>
                        <li><a href="<?php echo url('/about'); ?>" class="hover:text-yellow-400 transition-colors">About Us</a></li>
                        <li><a href="<?php echo url('/contact'); ?>" class="hover:text-yellow-400 transition-colors">Contact</a></li>
                        <li><a href="<?php echo url('/contact'); ?>" class="hover:text-yellow-400 transition-colors">Careers</a></li>
                        <li><a href="<?php echo url('/blog'); ?>" class="hover:text-yellow-400 transition-colors">Blog</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter Subscription -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Stay Updated</h4>
                    <p class="text-gray-300 mb-4 text-sm">Subscribe to our newsletter for the latest QA insights and updates.</p>
                    <form class="space-y-3" onsubmit="subscribeNewsletter(event, 'footer')">
                        <div>
                            <input type="email" name="email" placeholder="Your email address" class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-yellow-400 focus:border-transparent" required>
                            <input type="text" name="website" style="display:none">
                        </div>
                        <button type="submit" class="w-full bg-yellow-400 text-black py-2 rounded-lg font-semibold hover:bg-yellow-500 transition-colors">
                            <span class="btn-text">Subscribe</span>
                            <span class="btn-loading hidden">Subscribing...</span>
                        </button>
                    </form>
                    <p class="text-gray-400 text-xs mt-2">We respect your privacy. Unsubscribe anytime.</p>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">&copy; 2024 iTechnism. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="<?php echo url('/contact'); ?>" class="text-gray-400 hover:text-yellow-400 text-sm transition-colors">Privacy Policy</a>
                    <a href="<?php echo url('/contact'); ?>" class="text-gray-400 hover:text-yellow-400 text-sm transition-colors">Terms of Service</a>
                    <a href="<?php echo url('/services'); ?>" class="text-gray-400 hover:text-yellow-400 text-sm transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Initialize Services Swiper
        const servicesSwiper = new Swiper('.servicesSwiper', {
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
        
        // Initialize Technologies Swiper
        const techSwiper = new Swiper('.techSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.techSwiper .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.techSwiper .swiper-button-next',
                prevEl: '.techSwiper .swiper-button-prev',
            }
        });
        
        // FAQ Toggle Function
        function toggleFAQ(id) {
            const faq = document.getElementById(`faq-${id}`);
            const icon = document.getElementById(`icon-${id}`);
            
            if (faq.classList.contains('hidden')) {
                faq.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                faq.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
        
        // Newsletter subscription
        function subscribeNewsletter(event, source) {
            event.preventDefault();
            
            const form = event.target;
            const formData = new FormData(form);
            formData.append('source', source);
            
            const button = form.querySelector('button[type="submit"]');
            const btnText = button.querySelector('.btn-text');
            const btnLoading = button.querySelector('.btn-loading');
            
            // Show loading state
            if (btnText && btnLoading) {
                btnText.classList.add('hidden');
                btnLoading.classList.remove('hidden');
            }
            button.disabled = true;
            
            fetch('/itech/api/newsletter.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status);
                return response.text();
            })
            .then(text => {
                console.log('Raw response:', text);
                try {
                    const data = JSON.parse(text);
                    console.log('Parsed data:', data);
                    if (data.success) {
                        showMessage(data.message, 'success');
                        form.reset();
                    } else {
                        showMessage(data.message, 'error');
                    }
                } catch (e) {
                    console.error('JSON parse error:', e);
                    showMessage('Server response error: ' + text, 'error');
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
                showMessage('Network error: ' + error.message, 'error');
            })
            .finally(() => {
                // Reset button state
                if (btnText && btnLoading) {
                    btnText.classList.remove('hidden');
                    btnLoading.classList.add('hidden');
                }
                button.disabled = false;
            });
        }
        
        function showMessage(message, type) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            messageDiv.textContent = message;
            
            document.body.appendChild(messageDiv);
            
            setTimeout(() => {
                messageDiv.remove();
            }, 5000);
        }
        
        // Handle contact form messages
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === '1') {
            showMessage('✅ Message sent successfully! We\'ll respond within 2 hours.', 'success');
        } else if (urlParams.get('error')) {
            showMessage('❌ Error: ' + urlParams.get('error'), 'error');
        }
    </script>
</body>
</html>