<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Testing Services - iTechnism | REST, SOAP & GraphQL Testing</title>
    <meta name="description" content="Professional API testing services by iTechnism. Comprehensive REST, SOAP, GraphQL testing with Postman, RestAssured automation. Ensure API reliability and performance.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'views/partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-teal-900 via-cyan-900 to-blue-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-plug text-white text-xl"></i>
                        </div>
                        <span class="bg-teal-500 bg-opacity-30 text-teal-200 px-4 py-2 rounded-full text-sm font-medium">API Testing</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Bulletproof Your <span class="text-yellow-400">APIs</span> Before 
                        <span class="text-teal-300">They Break Production</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Don't let API failures crash your system at 3 AM. Our comprehensive API testing catches integration issues, performance bottlenecks, and security vulnerabilities before they impact users.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get API Testing Quote
                        </a>
                        <a href="#process" class="border-2 border-teal-300 text-teal-300 px-8 py-4 rounded-lg font-bold hover:bg-teal-300 hover:text-teal-900 transition-colors">
                            See Our Process
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">99.9%</div>
                                <div class="text-teal-200 text-sm">API Uptime</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">1000+</div>
                                <div class="text-teal-200 text-sm">APIs Tested</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">50ms</div>
                                <div class="text-teal-200 text-sm">Avg Response Time</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">Zero</div>
                                <div class="text-teal-200 text-sm">Production Failures</div>
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
                    Are <span class="text-red-600">Hidden API Issues</span> Sabotaging Your System?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Your frontend looks perfect, but behind the scenes, unstable APIs are creating a house of cards ready to collapse. One failed integration can bring down your entire platform.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Silent Integration Failures</h3>
                    <p class="text-gray-600">APIs fail silently in production, causing data corruption, transaction failures, and frustrated users without clear error messages.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-turtle text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Performance Bottlenecks</h3>
                    <p class="text-gray-600">Slow API responses create cascading delays, timeouts, and poor user experience that drives customers away.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Security Vulnerabilities</h3>
                    <p class="text-gray-600">Unvalidated API endpoints expose sensitive data, allow unauthorized access, and create entry points for cyber attacks.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="process" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-teal-600">Comprehensive API Testing</span> Approach
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From functional validation to security testing, we ensure your APIs are rock-solid and ready for production load.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div data-aos="fade-right">
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">API Discovery & Analysis</h3>
                                <p class="text-gray-600">Complete API inventory, documentation review, and endpoint mapping to understand your integration landscape.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Functional Validation</h3>
                                <p class="text-gray-600">Verify request/response formats, data validation, error handling, and business logic across all endpoints.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Performance & Security Testing</h3>
                                <p class="text-gray-600">Load testing, security scanning, and vulnerability assessment to ensure APIs perform under pressure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">API Testing Coverage</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <i class="fas fa-check text-yellow-400 mr-2"></i>
                                <span>REST APIs</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-yellow-400 mr-2"></i>
                                <span>SOAP Services</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-yellow-400 mr-2"></i>
                                <span>GraphQL APIs</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-yellow-400 mr-2"></i>
                                <span>Microservices</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-yellow-400 mr-2"></i>
                                <span>WebSocket APIs</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-yellow-400 mr-2"></i>
                                <span>Third-party APIs</span>
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
                    Why Choose <span class="text-green-600">iTechnism API Testing?</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Protect your system integrity and user experience with bulletproof API validation.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Deep Validation</h3>
                    <p class="text-gray-600">Comprehensive testing of data formats, business rules, and edge cases</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bolt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Performance Optimized</h3>
                    <p class="text-gray-600">Load testing ensures APIs handle peak traffic without degradation</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Security Hardened</h3>
                    <p class="text-gray-600">Vulnerability scanning and penetration testing for API endpoints</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-robot text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Automated Testing</h3>
                    <p class="text-gray-600">Continuous API monitoring with automated regression testing</p>
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
                        Complete <span class="text-teal-600">API Testing Suite</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Every aspect of your API ecosystem tested with industry-leading tools and methodologies.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-vial text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Functional Testing</h4>
                                <p class="text-gray-600">Request validation, response verification, and business logic testing</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-tachometer-alt text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Performance Testing</h4>
                                <p class="text-gray-600">Load, stress, and spike testing for optimal performance</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-shield-alt text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Security Testing</h4>
                                <p class="text-gray-600">Authentication, authorization, and vulnerability assessment</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                <i class="fas fa-link text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Integration Testing</h4>
                                <p class="text-gray-600">End-to-end workflow validation and data flow testing</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 border">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Testing Tools & Technologies</h3>
                        <div class="space-y-4">
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg">
                                <i class="fas fa-mail-bulk text-teal-600 mr-3"></i>
                                <span class="font-medium">Postman & Newman</span>
                            </div>
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg">
                                <i class="fas fa-vial text-teal-600 mr-3"></i>
                                <span class="font-medium">RestAssured</span>
                            </div>
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg">
                                <i class="fas fa-bug text-teal-600 mr-3"></i>
                                <span class="font-medium">SoapUI</span>
                            </div>
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg">
                                <i class="fas fa-chart-line text-teal-600 mr-3"></i>
                                <span class="font-medium">JMeter</span>
                            </div>
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg">
                                <i class="fas fa-code text-teal-600 mr-3"></i>
                                <span class="font-medium">Custom Test Frameworks</span>
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
                        "iTechnism's API testing discovered critical security flaws we missed. Their comprehensive approach prevented a potential data breach and saved us millions in compliance costs."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            RL
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Rachel Lopez</div>
                            <div class="text-gray-600">CTO, FinSecure Technologies</div>
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
                        <h3 class="text-lg font-bold text-gray-900 mb-2">What types of APIs can you test?</h3>
                        <p class="text-gray-600">We test REST, SOAP, GraphQL, WebSocket APIs, microservices, and third-party integrations across all industries and platforms.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How do you handle API authentication testing?</h3>
                        <p class="text-gray-600">We test OAuth, JWT, API keys, basic auth, and custom authentication methods, ensuring proper security implementation and access control.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Can you test APIs without documentation?</h3>
                        <p class="text-gray-600">Yes, we use API discovery tools and reverse engineering techniques to understand undocumented APIs and create comprehensive test coverage.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Do you provide performance benchmarking?</h3>
                        <p class="text-gray-600">Absolutely. We establish performance baselines, conduct load testing, and provide detailed reports with optimization recommendations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-teal-600 to-cyan-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Bulletproof Your APIs?
            </h2>
            <p class="text-xl text-teal-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Don't wait for production failures. Get comprehensive API testing that ensures reliability, performance, and security.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="/itech/contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Start API Testing
                </a>
                <a href="tel:+15551234567" class="border-2 border-teal-300 text-teal-300 px-8 py-4 rounded-lg font-bold hover:bg-teal-300 hover:text-teal-900 transition-colors">
                    Call: (555) 123-4567
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-teal-200">API Assessment</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">24hr</div>
                    <div class="text-teal-200">Test Plan Delivery</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">100%</div>
                    <div class="text-teal-200">Coverage Guarantee</div>
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