<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Automation Services - iTechnism | Selenium, Cypress & More</title>
    <meta name="description" content="Professional test automation services by iTechnism. Selenium, Cypress, Playwright automation solutions that reduce testing time by 80% and eliminate human errors.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'views/partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-purple-900 via-indigo-900 to-blue-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-robot text-white text-xl"></i>
                        </div>
                        <span class="bg-purple-500 bg-opacity-30 text-purple-200 px-4 py-2 rounded-full text-sm font-medium">Test Automation</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        <span class="text-yellow-400">80% Faster</span> Testing With 
                        <span class="text-purple-300">Zero Human Errors</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Stop wasting weeks on repetitive manual testing. Our intelligent test automation solutions run thousands of tests in minutes, catching bugs before they reach production.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get Automation Quote
                        </a>
                        <a href="#demo" class="border-2 border-purple-300 text-purple-300 px-8 py-4 rounded-lg font-bold hover:bg-purple-300 hover:text-purple-900 transition-colors">
                            See Live Demo
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">80%</div>
                                <div class="text-purple-200 text-sm">Time Reduction</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">99.9%</div>
                                <div class="text-purple-200 text-sm">Accuracy Rate</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                <div class="text-purple-200 text-sm">Continuous Testing</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">$50K+</div>
                                <div class="text-purple-200 text-sm">Average Savings</div>
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
                    Is Manual Testing <span class="text-red-600">Killing Your Release Schedule?</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    While your competitors ship features weekly, you're stuck in endless testing cycles. Every release becomes a nightmare of delays, overtime, and missed deadlines.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-clock text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Endless Testing Cycles</h3>
                    <p class="text-gray-600">Manual regression testing takes weeks for each release, creating bottlenecks that delay time-to-market and frustrate stakeholders.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-user-times text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Human Error Risk</h3>
                    <p class="text-gray-600">Tired testers miss critical bugs, inconsistent test execution leads to escaped defects, and manual processes are prone to oversight.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-dollar-sign text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Skyrocketing Costs</h3>
                    <p class="text-gray-600">Large testing teams, overtime costs, and post-production bug fixes drain your budget while slowing down innovation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="demo" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-purple-600">Intelligent Automation</span> Transforms Testing
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From weeks to minutes. From human errors to perfect precision. Our automation frameworks revolutionize how you test software.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div data-aos="fade-right">
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Smart Test Design</h3>
                                <p class="text-gray-600">AI-powered test case generation identifies critical user journeys and edge cases automatically, ensuring comprehensive coverage.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-Platform Execution</h3>
                                <p class="text-gray-600">Run tests simultaneously across browsers, devices, and environments with parallel execution capabilities.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Continuous Integration</h3>
                                <p class="text-gray-600">Seamless CI/CD pipeline integration triggers automated tests on every code commit, preventing bugs from reaching production.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">Automation Technologies</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <i class="fas fa-robot text-yellow-400 mr-2"></i>
                                <span>Selenium WebDriver</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-leaf text-yellow-400 mr-2"></i>
                                <span>Cypress</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-theater-masks text-yellow-400 mr-2"></i>
                                <span>Playwright</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-mobile-alt text-yellow-400 mr-2"></i>
                                <span>Appium</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-vial text-yellow-400 mr-2"></i>
                                <span>TestNG/JUnit</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-code-branch text-yellow-400 mr-2"></i>
                                <span>Jenkins/GitHub Actions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Why Choose <span class="text-green-600">iTechnism Test Automation?</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Transform your testing process from a bottleneck into a competitive advantage with measurable ROI.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tachometer-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Lightning Fast</h3>
                    <p class="text-gray-600">Execute 1000+ test cases in minutes instead of weeks</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">100% Consistent</h3>
                    <p class="text-gray-600">Eliminate human errors with precise, repeatable test execution</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Massive ROI</h3>
                    <p class="text-gray-600">Reduce testing costs by 60% while improving quality</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-sync text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">24/7 Testing</h3>
                    <p class="text-gray-600">Continuous testing ensures instant feedback on code changes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Process Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Complete <span class="text-purple-600">Automation Coverage</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        From UI interactions to API validations, our comprehensive automation suite covers every aspect of your application.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-desktop text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Web UI Automation</h4>
                                <p class="text-gray-600">Cross-browser testing with Selenium, Cypress, and Playwright</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-mobile-alt text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Mobile App Testing</h4>
                                <p class="text-gray-600">Native and hybrid mobile app automation with Appium</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-plug text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">API Test Automation</h4>
                                <p class="text-gray-600">REST/SOAP API validation with comprehensive data testing</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-database text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Database Testing</h4>
                                <p class="text-gray-600">Automated data validation and integrity checks</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 border">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Automation Deliverables</h3>
                        <div class="space-y-4">
                            <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                <i class="fas fa-code text-purple-600 mr-3"></i>
                                <span class="font-medium">Automated Test Scripts</span>
                            </div>
                            <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                <i class="fas fa-cogs text-purple-600 mr-3"></i>
                                <span class="font-medium">CI/CD Pipeline Integration</span>
                            </div>
                            <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                <i class="fas fa-chart-bar text-purple-600 mr-3"></i>
                                <span class="font-medium">Test Execution Reports</span>
                            </div>
                            <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                <i class="fas fa-book text-purple-600 mr-3"></i>
                                <span class="font-medium">Maintenance Documentation</span>
                            </div>
                            <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                <i class="fas fa-graduation-cap text-purple-600 mr-3"></i>
                                <span class="font-medium">Team Training & Knowledge Transfer</span>
                            </div>
                        </div>
                    </div>
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
                        "iTechnism's test automation reduced our release cycle from 3 weeks to 2 days. We now deploy with confidence and caught 95% more bugs before production."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            DK
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">David Kim</div>
                            <div class="text-gray-600">VP Engineering, CloudTech Solutions</div>
                        </div>
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
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How long does it take to set up test automation?</h3>
                        <p class="text-gray-600">Typically 2-4 weeks for initial framework setup and first test suite. We prioritize high-impact test cases for immediate ROI.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">What's the ROI of test automation?</h3>
                        <p class="text-gray-600">Most clients see 300-500% ROI within 6 months through reduced testing time, fewer production bugs, and faster releases.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Can you automate legacy applications?</h3>
                        <p class="text-gray-600">Yes, we have extensive experience with legacy systems, desktop applications, and complex enterprise software using specialized tools and techniques.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Do you provide maintenance and support?</h3>
                        <p class="text-gray-600">Absolutely. We offer ongoing maintenance, script updates, and 24/7 support to ensure your automation suite stays reliable and up-to-date.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-purple-600 to-indigo-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Accelerate Your Testing by 80%?
            </h2>
            <p class="text-xl text-purple-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Join 100+ companies who transformed their testing with our intelligent automation solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Start Automation Project
                </a>
                <a href="tel:+923344384943" class="border-2 border-purple-300 text-purple-300 px-8 py-4 rounded-lg font-bold hover:bg-purple-300 hover:text-purple-900 transition-colors">
                    Call: (334) 438-4943
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-purple-200">Automation Assessment</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">48hr</div>
                    <div class="text-purple-200">Proposal Delivery</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">100%</div>
                    <div class="text-purple-200">Success Guarantee</div>
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