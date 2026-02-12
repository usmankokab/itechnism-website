<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPA Testing Services - Bot Validation & Quality Assurance | iTechnism</title>
    <meta name="description" content="Professional RPA testing services. Comprehensive bot validation, performance testing, and quality assurance for all RPA platforms. Ensure reliable automation.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include __DIR__ . '/../partials/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-900 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">
                    Comprehensive <span class="text-pink-300">RPA Testing</span> Services
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-pink-100" data-aos="fade-up" data-aos-delay="200">
                    Ensure your RPA bots perform flawlessly with comprehensive testing, validation, and quality assurance services
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                    <a href="#contact" class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors">
                        Get RPA Testing Quote
                    </a>
                    <a href="#solutions" class="border-2 border-pink-300 text-pink-300 hover:bg-pink-300 hover:text-pink-900 px-8 py-4 rounded-lg text-lg font-semibold transition-colors">
                        View Testing Solutions
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">
                    RPA Bots Failing in Production?
                </h2>
                <p class="text-xl text-gray-600" data-aos="fade-up" data-aos-delay="200">
                    60% of RPA implementations fail due to inadequate testing, causing business disruptions and financial losses
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-exclamation-triangle text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">60% RPA Failure Rate</h3>
                    <p class="text-gray-600">Most RPA projects fail due to insufficient testing and validation before deployment</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-dollar-sign text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">$2.5M Average Loss</h3>
                    <p class="text-gray-600">Failed RPA bots cause significant business disruptions and financial losses</p>
                </div>
                
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Delayed ROI</h3>
                    <p class="text-gray-600">Untested bots require extensive rework, delaying automation benefits by months</p>
                </div>
            </div>
        </div>
    </section>

    <!-- RPA Testing Solutions -->
    <section id="solutions" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">
                    Comprehensive RPA Testing Solutions
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Ensure your RPA bots work flawlessly across all platforms with our comprehensive testing services
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-check-double text-pink-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Functional Bot Testing</h3>
                    <p class="text-gray-600 mb-4">Comprehensive testing of bot functionality, business logic, and process workflows</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• End-to-end process validation</li>
                        <li>• Business rule verification</li>
                        <li>• Exception handling testing</li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-tachometer-alt text-pink-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Performance & Load Testing</h3>
                    <p class="text-gray-600 mb-4">Test bot performance under various load conditions and system constraints</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Bot execution speed testing</li>
                        <li>• Resource utilization analysis</li>
                        <li>• Scalability assessment</li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-pink-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Security & Compliance Testing</h3>
                    <p class="text-gray-600 mb-4">Validate bot security, data protection, and regulatory compliance</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Data security validation</li>
                        <li>• Access control testing</li>
                        <li>• Compliance verification</li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-sync text-pink-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Integration Testing</h3>
                    <p class="text-gray-600 mb-4">Test bot integration with existing systems, databases, and applications</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• System integration validation</li>
                        <li>• API connectivity testing</li>
                        <li>• Data flow verification</li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-bug text-pink-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Error Handling & Recovery</h3>
                    <p class="text-gray-600 mb-4">Test bot resilience, error handling, and recovery mechanisms</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Exception scenario testing</li>
                        <li>• Recovery mechanism validation</li>
                        <li>• Failure point analysis</li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-bar text-pink-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Monitoring & Reporting</h3>
                    <p class="text-gray-600 mb-4">Comprehensive test reporting and ongoing bot monitoring setup</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Detailed test reports</li>
                        <li>• Performance metrics</li>
                        <li>• Monitoring dashboard setup</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- RPA Platform Coverage -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">
                    All RPA Platforms Covered
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Expert testing services for all major RPA platforms and custom automation solutions
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-robot text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">UiPath</h3>
                    <p class="text-gray-600 text-sm">Complete testing for UiPath bots and workflows</p>
                </div>

                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Blue Prism</h3>
                    <p class="text-gray-600 text-sm">Enterprise Blue Prism automation testing</p>
                </div>

                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cloud text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Automation Anywhere</h3>
                    <p class="text-gray-600 text-sm">Cloud-native bot testing and validation</p>
                </div>

                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-microsoft text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Power Automate</h3>
                    <p class="text-gray-600 text-sm">Microsoft workflow automation testing</p>
                </div>

                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Custom Solutions</h3>
                    <p class="text-gray-600 text-sm">Testing for custom RPA implementations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">
                    RPA Testing Success Stories
                </h2>
                <p class="text-xl text-gray-600" data-aos="fade-up" data-aos-delay="200">
                    Real results from comprehensive RPA testing implementations
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl font-bold text-pink-600 mb-2">99.8%</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Bot Reliability</h3>
                    <p class="text-gray-600">Financial services company achieved 99.8% bot reliability with comprehensive testing</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-pink-600 mb-2">85%</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Faster Deployment</h3>
                    <p class="text-gray-600">Healthcare organization reduced bot deployment time by 85% with proper testing</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl font-bold text-pink-600 mb-2">Zero</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Production Failures</h3>
                    <p class="text-gray-600">Manufacturing company eliminated production bot failures with thorough testing</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">
                    RPA Testing Service Packages
                </h2>
                <p class="text-xl text-gray-600" data-aos="fade-up" data-aos-delay="200">
                    Comprehensive testing solutions for reliable RPA deployments
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white border-2 border-gray-200 rounded-lg p-8" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Basic Bot Testing</h3>
                    <div class="text-4xl font-bold text-pink-600 mb-6">$2,997</div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Functional testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Basic performance testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Test report & recommendations</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>1 month support</li>
                    </ul>
                    <a href="#contact" class="block w-full bg-gray-600 hover:bg-gray-700 text-white text-center py-3 rounded-lg font-semibold transition-colors">
                        Get Started
                    </a>
                </div>

                <div class="bg-white border-2 border-pink-500 rounded-lg p-8 relative" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-pink-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        Most Popular
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Comprehensive Testing</h3>
                    <div class="text-4xl font-bold text-pink-600 mb-6">$7,997</div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Full functional testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Performance & load testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Security & integration testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Error handling validation</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>3 months support</li>
                    </ul>
                    <a href="#contact" class="block w-full bg-pink-600 hover:bg-pink-700 text-white text-center py-3 rounded-lg font-semibold transition-colors">
                        Get Started
                    </a>
                </div>

                <div class="bg-white border-2 border-gray-200 rounded-lg p-8" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Enterprise Testing Suite</h3>
                    <div class="text-4xl font-bold text-pink-600 mb-6">Custom</div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Multi-bot testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>End-to-end process validation</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Continuous testing setup</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Monitoring & reporting</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Dedicated testing team</li>
                    </ul>
                    <a href="#contact" class="block w-full bg-gray-600 hover:bg-gray-700 text-white text-center py-3 rounded-lg font-semibold transition-colors">
                        Request Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-pink-900 text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">
                    Ready to Ensure Your RPA Success?
                </h2>
                <p class="text-xl mb-8 text-pink-100" data-aos="fade-up" data-aos-delay="200">
                    Get a free RPA testing consultation and ensure your bots work flawlessly in production
                </p>
                
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="text-left" data-aos="fade-right" data-aos-delay="300">
                        <h3 class="text-2xl font-semibold mb-4">Free Consultation Includes</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center"><i class="fas fa-check text-pink-300 mr-3"></i>RPA testing strategy assessment</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-300 mr-3"></i>Bot reliability evaluation</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-300 mr-3"></i>Testing framework recommendations</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-300 mr-3"></i>Risk mitigation planning</li>
                        </ul>
                    </div>
                    
                    <div class="bg-white rounded-lg p-6" data-aos="fade-left" data-aos-delay="400">
                        <form class="space-y-4">
                            <input type="text" placeholder="Full Name" class="w-full px-4 py-3 rounded-lg text-gray-800 border border-gray-300 focus:outline-none focus:border-pink-500">
                            <input type="email" placeholder="Business Email" class="w-full px-4 py-3 rounded-lg text-gray-800 border border-gray-300 focus:outline-none focus:border-pink-500">
                            <input type="tel" placeholder="Phone Number" class="w-full px-4 py-3 rounded-lg text-gray-800 border border-gray-300 focus:outline-none focus:border-pink-500">
                            <input type="text" placeholder="Company Name" class="w-full px-4 py-3 rounded-lg text-gray-800 border border-gray-300 focus:outline-none focus:border-pink-500">
                            <select class="w-full px-4 py-3 rounded-lg text-gray-800 border border-gray-300 focus:outline-none focus:border-pink-500">
                                <option>Select RPA Platform</option>
                                <option>UiPath</option>
                                <option>Blue Prism</option>
                                <option>Automation Anywhere</option>
                                <option>Microsoft Power Automate</option>
                                <option>Custom RPA Solution</option>
                                <option>Multiple Platforms</option>
                                <option>Other</option>
                            </select>
                            <textarea placeholder="Describe your RPA testing needs" rows="3" class="w-full px-4 py-3 rounded-lg text-gray-800 border border-gray-300 focus:outline-none focus:border-pink-500"></textarea>
                            <button type="submit" class="w-full bg-pink-600 hover:bg-pink-700 text-white py-3 rounded-lg font-semibold transition-colors">
                                Get Free RPA Testing Consultation
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../partials/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>