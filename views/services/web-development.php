<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Services - iTechnism | Custom Web Applications & Websites</title>
    <meta name="description" content="Professional web development services by iTechnism. Custom web applications, e-commerce sites, responsive websites using React, Node.js, PHP, and modern frameworks.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'views/partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-code text-white text-xl"></i>
                        </div>
                        <span class="bg-blue-500 bg-opacity-30 text-blue-200 px-4 py-2 rounded-full text-sm font-medium">Web Development</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Build <span class="text-yellow-400">High-Performance</span> Web Applications 
                        <span class="text-blue-300">That Drive Results</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Stop losing customers to slow, outdated websites. Get modern, lightning-fast web applications that convert visitors into customers and scale with your business growth.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get Free Consultation
                        </a>
                        <a href="#portfolio" class="border-2 border-blue-300 text-blue-300 px-8 py-4 rounded-lg font-bold hover:bg-blue-300 hover:text-blue-900 transition-colors">
                            View Portfolio
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">500+</div>
                                <div class="text-blue-200 text-sm">Websites Delivered</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">99.9%</div>
                                <div class="text-blue-200 text-sm">Uptime Guarantee</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">3x</div>
                                <div class="text-blue-200 text-sm">Faster Load Times</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                <div class="text-blue-200 text-sm">Support & Maintenance</div>
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
                    Is Your <span class="text-red-600">Outdated Website</span> Killing Your Business?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Every second your website takes to load costs you customers. Slow, unresponsive sites drive away 40% of visitors and tank your search rankings, while competitors steal your market share.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-turtle text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Slow Loading Speeds</h3>
                    <p class="text-gray-600">Your website takes 5+ seconds to load, causing 40% of visitors to abandon before seeing your content.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Poor Mobile Experience</h3>
                    <p class="text-gray-600">60% of traffic comes from mobile, but your site looks broken on phones, losing potential customers daily.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line-down text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Low Conversion Rates</h3>
                    <p class="text-gray-600">Poor user experience and outdated design result in conversion rates below 1%, wasting your marketing budget.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-blue-600">Web Development</span> Services
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From simple websites to complex web applications - we build digital solutions that drive business growth.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-store text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">E-commerce Development</h3>
                    <p class="text-gray-600 mb-4">Custom online stores with payment integration, inventory management, and conversion optimization.</p>
                    <div class="text-blue-600 font-semibold">Starting at $4,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-laptop-code text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Custom Web Applications</h3>
                    <p class="text-gray-600 mb-4">Scalable web apps with advanced functionality, user management, and API integrations.</p>
                    <div class="text-blue-600 font-semibold">Starting at $9,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-globe text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Corporate Websites</h3>
                    <p class="text-gray-600 mb-4">Professional business websites with CMS, SEO optimization, and lead generation forms.</p>
                    <div class="text-blue-600 font-semibold">Starting at $2,497</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-rocket text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Progressive Web Apps</h3>
                    <p class="text-gray-600 mb-4">App-like experiences that work offline, send push notifications, and install on devices.</p>
                    <div class="text-blue-600 font-semibold">Starting at $7,497</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-cloud text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud-Based Solutions</h3>
                    <p class="text-gray-600 mb-4">Scalable applications hosted on AWS, Azure, or Google Cloud with auto-scaling.</p>
                    <div class="text-blue-600 font-semibold">Starting at $12,497</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-sync-alt text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Website Modernization</h3>
                    <p class="text-gray-600 mb-4">Transform legacy websites into modern, fast, and mobile-responsive applications.</p>
                    <div class="text-blue-600 font-semibold">Starting at $3,997</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack Section -->
    <section class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    <span class="text-blue-600">Modern Technology</span> Stack
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We use cutting-edge technologies to build fast, secure, and scalable web applications.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Frontend Technologies</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">React.js</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Vue.js</span>
                                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">JavaScript</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">TypeScript</span>
                                <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-medium">Tailwind CSS</span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Backend Technologies</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Node.js</span>
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">PHP</span>
                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Laravel</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">Express.js</span>
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">Python</span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Databases & Cloud</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">MySQL</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">MongoDB</span>
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">AWS</span>
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Azure</span>
                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Redis</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">Why Our Tech Stack Matters</h4>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-bolt text-yellow-400 mr-3"></i>
                                <span>3x faster loading speeds with modern frameworks</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-shield-check text-yellow-400 mr-3"></i>
                                <span>Enterprise-grade security and data protection</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-expand-arrows-alt text-yellow-400 mr-3"></i>
                                <span>Infinite scalability for business growth</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-mobile-alt text-yellow-400 mr-3"></i>
                                <span>Perfect mobile responsiveness on all devices</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-blue-600">Development Process</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From concept to launch, we follow a proven process that delivers results on time and on budget.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-xl">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Discovery & Planning</h3>
                    <p class="text-gray-600">We analyze your requirements, target audience, and business goals to create a detailed project roadmap.</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-xl">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Design & Prototyping</h3>
                    <p class="text-gray-600">Create wireframes, mockups, and interactive prototypes to visualize the final product before development.</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-xl">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Development & Testing</h3>
                    <p class="text-gray-600">Build your application using agile methodology with continuous testing and quality assurance.</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-xl">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Launch & Support</h3>
                    <p class="text-gray-600">Deploy your application with monitoring, maintenance, and ongoing support to ensure optimal performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-gray-100">
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
                        "iTechnism transformed our outdated website into a modern, lightning-fast e-commerce platform. Our conversion rate increased 250% and mobile sales tripled within 3 months of launch."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            JC
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Jennifer Chen</div>
                            <div class="text-gray-600">CEO, TechStyle Fashion</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Web Development <span class="text-blue-600">Pricing</span>
                </h2>
                <p class="text-lg text-gray-600">Transparent pricing for every project size</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Starter Website</h3>
                        <div class="text-4xl font-bold text-blue-600 mb-2">$2,497</div>
                        <div class="text-gray-600 mb-6">Perfect for small businesses</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Up to 5 pages</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Mobile responsive design</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Contact forms</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>SEO optimization</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>3 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors block text-center">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border-2 border-blue-500 relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-medium">Most Popular</span>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional Website</h3>
                        <div class="text-4xl font-bold text-blue-600 mb-2">$7,497</div>
                        <div class="text-gray-600 mb-6">For growing businesses</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Up to 15 pages</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Custom design & animations</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>CMS integration</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>E-commerce functionality</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>6 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors block text-center">
                            Start Project
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Solution</h3>
                        <div class="text-4xl font-bold text-blue-600 mb-2">Custom</div>
                        <div class="text-gray-600 mb-6">For large organizations</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Unlimited pages</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Custom web application</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>API integrations</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>Cloud hosting</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i>12 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors block text-center">
                            Contact Sales
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Frequently Asked Questions
                </h2>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How long does it take to build a website?</h3>
                        <p class="text-gray-600">Simple websites take 2-4 weeks, while complex web applications can take 8-16 weeks depending on features and requirements.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Do you provide ongoing maintenance?</h3>
                        <p class="text-gray-600">Yes, we offer comprehensive maintenance packages including security updates, backups, performance monitoring, and content updates.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Will my website be mobile-friendly?</h3>
                        <p class="text-gray-600">Absolutely. All our websites are built with mobile-first design principles and are fully responsive across all devices.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Can you integrate with existing systems?</h3>
                        <p class="text-gray-600">Yes, we specialize in API integrations and can connect your website with CRM, ERP, payment systems, and other business tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-blue-600 to-purple-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Build Your Dream Website?
            </h2>
            <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Stop losing customers to slow, outdated websites. Get a modern web application that converts and scales.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Get Free Consultation
                </a>
                <a href="tel:+15551234567" class="border-2 border-blue-300 text-blue-300 px-8 py-4 rounded-lg font-bold hover:bg-blue-300 hover:text-blue-900 transition-colors">
                    Call: (555) 123-4567
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-blue-200">Consultation & Quote</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">2-4</div>
                    <div class="text-blue-200">Weeks Delivery</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">99.9%</div>
                    <div class="text-blue-200">Uptime Guarantee</div>
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