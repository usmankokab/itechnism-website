<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development Services - iTechnism | iOS & Android Apps</title>
    <meta name="description" content="Professional mobile app development services by iTechnism. Native iOS, Android apps and cross-platform solutions using React Native, Flutter, Swift, Kotlin.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'views/partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-green-900 via-teal-900 to-blue-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-mobile-alt text-white text-xl"></i>
                        </div>
                        <span class="bg-green-500 bg-opacity-30 text-green-200 px-4 py-2 rounded-full text-sm font-medium">Mobile Development</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Build <span class="text-yellow-400">Million-Dollar</span> Mobile Apps 
                        <span class="text-green-300">That Users Love</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Stop losing customers to competitors with better mobile experiences. Get native iOS and Android apps that drive engagement, retention, and revenue growth.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get App Quote
                        </a>
                        <a href="#portfolio" class="border-2 border-green-300 text-green-300 px-8 py-4 rounded-lg font-bold hover:bg-green-300 hover:text-green-900 transition-colors">
                            View App Portfolio
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">200+</div>
                                <div class="text-green-200 text-sm">Apps Launched</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">4.8★</div>
                                <div class="text-green-200 text-sm">Average App Rating</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">10M+</div>
                                <div class="text-green-200 text-sm">App Downloads</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                <div class="text-green-200 text-sm">App Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="py-16 bg-red-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Missing Out on the <span class="text-red-600">$935 Billion</span> Mobile App Market?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    90% of mobile time is spent in apps, not websites. Without a mobile app, you're invisible to customers who spend 7+ hours daily on their phones, while competitors capture your market share.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-eye-slash text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile-First Customer Behavior</h3>
                    <p class="text-gray-600">Your customers expect native mobile experiences. Without an app, you're losing 70% of potential engagement and sales.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-users text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Poor Customer Retention</h3>
                    <p class="text-gray-600">Mobile websites have 20% retention rates vs 90% for apps. You're losing customers who could become loyal brand advocates.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line-down text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Revenue Leakage</h3>
                    <p class="text-gray-600">App users spend 3x more than mobile web users. Every day without an app costs you thousands in lost revenue.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-green-600">Mobile Development</span> Services
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From native iOS and Android apps to cross-platform solutions - we build mobile experiences that drive business growth.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fab fa-apple text-gray-800 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Native iOS Development</h3>
                    <p class="text-gray-600 mb-4">Swift-based iOS apps optimized for iPhone and iPad with App Store approval guarantee.</p>
                    <div class="text-green-600 font-semibold">Starting at $14,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fab fa-android text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Native Android Development</h3>
                    <p class="text-gray-600 mb-4">Kotlin-based Android apps with Material Design and Google Play Store optimization.</p>
                    <div class="text-green-600 font-semibold">Starting at $12,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-mobile text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cross-Platform Apps</h3>
                    <p class="text-gray-600 mb-4">React Native and Flutter apps that work on both iOS and Android with shared codebase.</p>
                    <div class="text-green-600 font-semibold">Starting at $19,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shopping-bag text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">E-commerce Mobile Apps</h3>
                    <p class="text-gray-600 mb-4">Shopping apps with payment integration, inventory sync, and push notifications.</p>
                    <div class="text-green-600 font-semibold">Starting at $24,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-gamepad text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Gaming & Entertainment</h3>
                    <p class="text-gray-600 mb-4">Interactive games, AR/VR experiences, and entertainment apps with monetization.</p>
                    <div class="text-green-600 font-semibold">Starting at $29,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-briefcase text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Enterprise Mobile Solutions</h3>
                    <p class="text-gray-600 mb-4">Custom business apps with CRM integration, offline sync, and enterprise security.</p>
                    <div class="text-green-600 font-semibold">Starting at $39,997</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack Section -->
    <section class="py-16 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    <span class="text-green-600">Cutting-Edge</span> Mobile Technologies
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We use the latest mobile development frameworks and tools to build fast, secure, and scalable apps.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Native Development</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium">Swift</span>
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">Kotlin</span>
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Objective-C</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Java</span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Cross-Platform</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">React Native</span>
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Flutter</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">Xamarin</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Ionic</span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Backend & Cloud</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">Firebase</span>
                                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">AWS Mobile</span>
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Azure Mobile</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Node.js</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">Why Our Tech Stack Delivers</h4>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-rocket text-yellow-400 mr-3"></i>
                                <span>60% faster app performance with native optimization</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-shield-check text-yellow-400 mr-3"></i>
                                <span>Bank-level security with biometric authentication</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-sync-alt text-yellow-400 mr-3"></i>
                                <span>Real-time data sync across all devices</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-bell text-yellow-400 mr-3"></i>
                                <span>Smart push notifications that drive engagement</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Features Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Essential <span class="text-green-600">App Features</span> We Build
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Every app we build includes these engagement-driving features that keep users coming back.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bell text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Push Notifications</h3>
                    <p class="text-gray-600">Smart, personalized notifications that increase user engagement by 300%</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wifi text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Offline Functionality</h3>
                    <p class="text-gray-600">Apps work seamlessly without internet, syncing when connection returns</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-fingerprint text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Biometric Security</h3>
                    <p class="text-gray-600">Face ID, Touch ID, and fingerprint authentication for secure access</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-bar text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Analytics Integration</h3>
                    <p class="text-gray-600">Detailed user behavior tracking and conversion optimization</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Mobile App <span class="text-green-600">Success Stories</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    See how our mobile apps transformed businesses and drove real results.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shopping-cart text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">E-commerce Fashion App</h3>
                    <p class="text-gray-600 mb-4">Native iOS/Android app with AR try-on feature increased mobile sales by 400% and user retention by 250%.</p>
                    <div class="text-green-600 font-semibold">ROI: $2M+ Additional Revenue</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-utensils text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Food Delivery Platform</h3>
                    <p class="text-gray-600 mb-4">Cross-platform app with real-time tracking reached 100K downloads in 6 months with 4.9★ rating.</p>
                    <div class="text-green-600 font-semibold">ROI: 500% Increase in Orders</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-dumbbell text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fitness & Wellness App</h3>
                    <p class="text-gray-600 mb-4">Health tracking app with wearable integration achieved 1M+ downloads and $500K monthly revenue.</p>
                    <div class="text-green-600 font-semibold">ROI: $6M Annual Revenue</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="fade-up">
                <div class="mb-8">
                    <div class="flex justify-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <blockquote class="text-2xl font-medium text-gray-900 mb-6">
                        "iTechnism built our e-commerce app that generated $3M in mobile sales within the first year. The app's performance and user experience exceeded all our expectations."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            MJ
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Marcus Johnson</div>
                            <div class="text-gray-600">CEO, RetailTech Solutions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Mobile App <span class="text-green-600">Development Pricing</span>
                </h2>
                <p class="text-lg text-gray-600">Transparent pricing for every app complexity level</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Simple App</h3>
                        <div class="text-4xl font-bold text-green-600 mb-2">$12,997</div>
                        <div class="text-gray-600 mb-6">Basic functionality</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Single platform (iOS or Android)</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>5-7 screens</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Basic UI/UX design</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>App store submission</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>3 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors block text-center">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border-2 border-green-500 relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm font-medium">Most Popular</span>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional App</h3>
                        <div class="text-4xl font-bold text-green-600 mb-2">$24,997</div>
                        <div class="text-gray-600 mb-6">Advanced features</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Both iOS and Android</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>15-20 screens</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Custom UI/UX design</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>API integrations</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Push notifications</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>6 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors block text-center">
                            Start Project
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise App</h3>
                        <div class="text-4xl font-bold text-green-600 mb-2">Custom</div>
                        <div class="text-gray-600 mb-6">Complex solutions</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Multi-platform deployment</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Unlimited screens</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Advanced integrations</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Enterprise security</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Analytics & reporting</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>12 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors block text-center">
                            Contact Sales
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Frequently Asked Questions
                </h2>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How long does it take to develop a mobile app?</h3>
                        <p class="text-gray-600">Simple apps take 8-12 weeks, while complex apps with advanced features can take 16-24 weeks depending on requirements.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Do you handle app store submissions?</h3>
                        <p class="text-gray-600">Yes, we handle the complete app store submission process for both iOS App Store and Google Play Store, including approval optimization.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Should I choose native or cross-platform development?</h3>
                        <p class="text-gray-600">Native offers best performance and platform-specific features. Cross-platform is cost-effective for simpler apps. We'll recommend based on your needs.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Do you provide ongoing app maintenance?</h3>
                        <p class="text-gray-600">Yes, we offer comprehensive maintenance including OS updates, bug fixes, security patches, and feature enhancements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-green-600 to-teal-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Build Your Million-Dollar Mobile App?
            </h2>
            <p class="text-xl text-green-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Stop losing customers to competitors. Get a mobile app that drives engagement, retention, and revenue.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Get App Quote
                </a>
                <a href="tel:+15551234567" class="border-2 border-green-300 text-green-300 px-8 py-4 rounded-lg font-bold hover:bg-green-300 hover:text-green-900 transition-colors">
                    Call: (555) 123-4567
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-green-200">App Consultation & Quote</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">8-12</div>
                    <div class="text-green-200">Weeks to Launch</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">4.8★</div>
                    <div class="text-green-200">Average App Rating</div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'views/partials/footer.php'; ?>
    
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