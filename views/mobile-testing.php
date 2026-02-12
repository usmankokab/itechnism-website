<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Testing Services - iOS & Android App Testing | iTechnism</title>
    <meta name="description" content="Professional mobile app testing services for iOS and Android. Appium automation, device compatibility, performance testing, and user experience validation.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Mobile Testing Services</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Comprehensive iOS & Android app testing with Appium automation, device compatibility, and performance validation</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg text-xl font-bold hover:bg-yellow-300 transition-colors">
                        Get Free Testing Quote →
                    </a>
                    <a href="#services" class="border-2 border-white text-white px-8 py-4 rounded-lg text-xl font-bold hover:bg-white hover:text-blue-600 transition-colors">
                        View Testing Services
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Problem Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Mobile App Failures Cost Businesses Millions</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center" data-aos="fade-up">
                        <div class="text-4xl font-bold text-red-600 mb-2">88%</div>
                        <p class="text-gray-600">of users abandon apps due to bugs and poor performance</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-4xl font-bold text-red-600 mb-2">$62B</div>
                        <p class="text-gray-600">lost annually due to poor mobile app quality</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-4xl font-bold text-red-600 mb-2">25%</div>
                        <p class="text-gray-600">of apps are used only once before deletion</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mobile Testing Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive testing solutions for iOS and Android applications</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300" data-aos="fade-up">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Functional Testing</h3>
                    <p class="text-gray-600 mb-4">Complete functional validation of mobile app features, user flows, and business logic</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Feature functionality testing</li>
                        <li>• User interface validation</li>
                        <li>• Navigation flow testing</li>
                        <li>• Data input/output verification</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-robot text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Appium Automation</h3>
                    <p class="text-gray-600 mb-4">Automated testing using Appium framework for iOS and Android applications</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Cross-platform automation</li>
                        <li>• Regression test automation</li>
                        <li>• Continuous integration setup</li>
                        <li>• Test script maintenance</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-tablets text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Device Compatibility</h3>
                    <p class="text-gray-600 mb-4">Testing across multiple devices, screen sizes, and operating system versions</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Multi-device testing</li>
                        <li>• Screen resolution validation</li>
                        <li>• OS version compatibility</li>
                        <li>• Hardware feature testing</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-tachometer-alt text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Performance Testing</h3>
                    <p class="text-gray-600 mb-4">App performance, memory usage, battery consumption, and load testing</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Load time optimization</li>
                        <li>• Memory leak detection</li>
                        <li>• Battery usage analysis</li>
                        <li>• Network performance testing</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Security Testing</h3>
                    <p class="text-gray-600 mb-4">Mobile app security vulnerabilities and data protection validation</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Data encryption testing</li>
                        <li>• Authentication validation</li>
                        <li>• API security testing</li>
                        <li>• Privacy compliance check</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-user-check text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Usability Testing</h3>
                    <p class="text-gray-600 mb-4">User experience validation and accessibility compliance testing</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• User experience validation</li>
                        <li>• Accessibility compliance</li>
                        <li>• Navigation usability</li>
                        <li>• User feedback analysis</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Mobile Testing Packages</h2>
                <p class="text-xl text-gray-600">Choose the right testing package for your mobile app</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 border-2 border-gray-200" data-aos="fade-up">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Basic Testing</h3>
                        <div class="text-4xl font-bold text-blue-600 mb-2">$2,497</div>
                        <p class="text-gray-600">Single platform testing</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Functional testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>5 device compatibility</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Basic performance testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Test report & recommendations</li>
                    </ul>
                    <a href="#contact" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-bold hover:bg-blue-700 transition-colors block text-center">
                        Get Started
                    </a>
                </div>

                <div class="bg-blue-50 rounded-xl p-8 border-2 border-blue-500 relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-bold">POPULAR</span>
                    </div>
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional Testing</h3>
                        <div class="text-4xl font-bold text-blue-600 mb-2">$4,997</div>
                        <p class="text-gray-600">Cross-platform comprehensive testing</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>iOS & Android testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>15 device compatibility</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Appium automation setup</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Performance & security testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Detailed test documentation</li>
                    </ul>
                    <a href="#contact" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-bold hover:bg-blue-700 transition-colors block text-center">
                        Get Started
                    </a>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 border-2 border-gray-200" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Testing</h3>
                        <div class="text-4xl font-bold text-blue-600 mb-2">Custom</div>
                        <p class="text-gray-600">Full-scale testing solution</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Complete test automation</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>25+ device testing</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>CI/CD integration</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Ongoing test maintenance</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-3"></i>Dedicated QA team</li>
                    </ul>
                    <a href="#contact" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-bold hover:bg-blue-700 transition-colors block text-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="py-16 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Test Your Mobile App?</h2>
                <p class="text-xl text-gray-300">Get a free consultation and testing strategy for your mobile application</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 text-gray-900">
                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">App Platform</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>iOS</option>
                            <option>Android</option>
                            <option>Both iOS & Android</option>
                            <option>React Native</option>
                            <option>Flutter</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Project Details</label>
                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tell us about your mobile app testing requirements..."></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-blue-600 text-white py-4 px-8 rounded-lg text-xl font-bold hover:bg-blue-700 transition-colors">
                            Get Free Testing Consultation →
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>
    
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