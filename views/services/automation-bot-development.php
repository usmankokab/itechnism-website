<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automation Bot Development - iTechnism | Custom Business Process Automation</title>
    <meta name="description" content="Professional automation bot development services by iTechnism. Custom bots for data entry, web scraping, email automation, customer service, and business process automation.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'views/partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-orange-900 via-red-900 to-pink-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-robot text-white text-xl"></i>
                        </div>
                        <span class="bg-orange-500 bg-opacity-30 text-orange-200 px-4 py-2 rounded-full text-sm font-medium">Automation Bot Development</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Build <span class="text-yellow-400">AI-Powered Bots</span> That Work 
                        <span class="text-orange-300">24/7 For Your Business</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Stop wasting employee time on repetitive tasks. Get custom automation bots that handle data entry, customer service, and business processes while you focus on growth.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get Bot Quote
                        </a>
                        <a href="#bots" class="border-2 border-orange-300 text-orange-300 px-8 py-4 rounded-lg font-bold hover:bg-orange-300 hover:text-orange-900 transition-colors">
                            View Bot Types
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">300+</div>
                                <div class="text-orange-200 text-sm">Bots Deployed</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">90%</div>
                                <div class="text-orange-200 text-sm">Time Savings</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                <div class="text-orange-200 text-sm">Automated Operations</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">Zero</div>
                                <div class="text-orange-200 text-sm">Human Errors</div>
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
                    Drowning in <span class="text-red-600">Repetitive Tasks</span> That Kill Productivity?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Your employees spend 40% of their time on mind-numbing repetitive work - data entry, email responses, file processing. Meanwhile, competitors automate these tasks and focus on growth.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-clock text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Time Drain on Repetitive Work</h3>
                    <p class="text-gray-600">Employees waste 3+ hours daily on data entry, email responses, and manual processes that could be automated.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Human Error Costs</h3>
                    <p class="text-gray-600">Manual processes result in 15-20% error rates, causing customer complaints, rework, and lost revenue.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-money-bill-wave text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Scaling Bottlenecks</h3>
                    <p class="text-gray-600">Growing business means hiring more people for repetitive tasks, increasing costs without adding strategic value.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bot Types Section -->
    <section id="bots" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-orange-600">Automation Bot</span> Solutions
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From simple data entry to complex business processes - we build bots that work tirelessly for your business.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-keyboard text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Data Entry & Processing Bots</h3>
                    <p class="text-gray-600 mb-4">Automate form filling, data extraction, spreadsheet updates, and database management tasks.</p>
                    <div class="text-orange-600 font-semibold">Starting at $4,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-envelope text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Email Automation Bots</h3>
                    <p class="text-gray-600 mb-4">Smart email responses, lead nurturing, customer follow-ups, and email list management.</p>
                    <div class="text-orange-600 font-semibold">Starting at $7,497</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-comments text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Customer Service Chatbots</h3>
                    <p class="text-gray-600 mb-4">AI-powered chatbots for websites, social media, and messaging platforms with natural language processing.</p>
                    <div class="text-orange-600 font-semibold">Starting at $12,497</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-spider text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Scraping & Monitoring Bots</h3>
                    <p class="text-gray-600 mb-4">Extract data from websites, monitor competitors, track prices, and gather market intelligence.</p>
                    <div class="text-orange-600 font-semibold">Starting at $9,997</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-share-alt text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Social Media Automation Bots</h3>
                    <p class="text-gray-600 mb-4">Automated posting, engagement tracking, follower management, and social media analytics.</p>
                    <div class="text-orange-600 font-semibold">Starting at $8,497</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-cogs text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Business Process Automation</h3>
                    <p class="text-gray-600 mb-4">Complex workflow automation, approval processes, inventory management, and system integrations.</p>
                    <div class="text-orange-600 font-semibold">Starting at $19,997</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack Section -->
    <section class="py-16 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    <span class="text-orange-600">Advanced Bot</span> Technologies
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We use cutting-edge AI and automation technologies to build intelligent, reliable bots.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">AI & Machine Learning</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">OpenAI GPT</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">TensorFlow</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">Natural Language Processing</span>
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">Computer Vision</span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Automation Frameworks</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Selenium</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Playwright</span>
                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Puppeteer</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">BeautifulSoup</span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Programming Languages</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Python</span>
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">JavaScript</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Node.js</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">C#</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">Bot Capabilities</h4>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-brain text-yellow-400 mr-3"></i>
                                <span>AI-powered decision making and learning</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-eye text-yellow-400 mr-3"></i>
                                <span>Computer vision for image and document processing</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-language text-yellow-400 mr-3"></i>
                                <span>Natural language understanding and generation</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-shield-check text-yellow-400 mr-3"></i>
                                <span>Enterprise-grade security and compliance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROI Calculator Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Calculate Your <span class="text-orange-600">Automation ROI</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    See how much time and money automation bots can save your business.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Time Savings</h3>
                    <div class="text-3xl font-bold text-orange-600 mb-2">90%</div>
                    <p class="text-gray-600">Reduction in manual task time</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-dollar-sign text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Cost Reduction</h3>
                    <div class="text-3xl font-bold text-orange-600 mb-2">70%</div>
                    <p class="text-gray-600">Lower operational costs</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check-circle text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Accuracy Improvement</h3>
                    <div class="text-3xl font-bold text-orange-600 mb-2">99.9%</div>
                    <p class="text-gray-600">Error-free automated processes</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Productivity Boost</h3>
                    <div class="text-3xl font-bold text-orange-600 mb-2">300%</div>
                    <p class="text-gray-600">Increase in team productivity</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Automation Bot <span class="text-orange-600">Success Stories</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    See how our automation bots transformed business operations and delivered massive ROI.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-invoice text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Invoice Processing Bot</h3>
                    <p class="text-gray-600 mb-4">Automated invoice data extraction and processing reduced manual work by 95% and eliminated data entry errors.</p>
                    <div class="text-orange-600 font-semibold">ROI: $150K Annual Savings</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-headset text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Customer Service Chatbot</h3>
                    <p class="text-gray-600 mb-4">AI chatbot handles 80% of customer inquiries 24/7, reducing response time from hours to seconds.</p>
                    <div class="text-orange-600 font-semibold">ROI: 400% Customer Satisfaction Increase</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-bar text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Market Research Bot</h3>
                    <p class="text-gray-600 mb-4">Automated competitor monitoring and price tracking provides real-time market intelligence for strategic decisions.</p>
                    <div class="text-orange-600 font-semibold">ROI: $500K Better Pricing Decisions</div>
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
                        "iTechnism's automation bots eliminated 20 hours of weekly manual work per employee. We redirected that time to strategic initiatives and grew revenue 40% in 6 months."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            LT
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Lisa Thompson</div>
                            <div class="text-gray-600">Operations Director, TechFlow Industries</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Automation Bot <span class="text-orange-600">Development Pricing</span>
                </h2>
                <p class="text-lg text-gray-600">Transparent pricing for every automation complexity level</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Simple Bot</h3>
                        <div class="text-4xl font-bold text-orange-600 mb-2">$4,997</div>
                        <div class="text-gray-600 mb-6">Basic automation</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Single task automation</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Basic error handling</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Simple reporting</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Email notifications</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>3 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors block text-center">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border-2 border-orange-500 relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-medium">Most Popular</span>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Smart Bot</h3>
                        <div class="text-4xl font-bold text-orange-600 mb-2">$12,497</div>
                        <div class="text-gray-600 mb-6">AI-powered automation</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Multi-task automation</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>AI decision making</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Advanced error handling</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Custom integrations</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Dashboard & analytics</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>6 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors block text-center">
                            Start Project
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Bot</h3>
                        <div class="text-4xl font-bold text-orange-600 mb-2">Custom</div>
                        <div class="text-gray-600 mb-6">Complex automation</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Complex workflow automation</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Machine learning capabilities</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Enterprise integrations</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>Custom AI models</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>24/7 monitoring</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i>12 months support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors block text-center">
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
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How long does it take to build an automation bot?</h3>
                        <p class="text-gray-600">Simple bots take 2-4 weeks, while complex AI-powered bots can take 6-12 weeks depending on requirements and integrations.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">What tasks can automation bots handle?</h3>
                        <p class="text-gray-600">Bots can handle data entry, email responses, web scraping, file processing, social media management, customer service, and complex business workflows.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Are automation bots secure and reliable?</h3>
                        <p class="text-gray-600">Yes, our bots include enterprise-grade security, error handling, logging, and monitoring to ensure reliable 24/7 operation.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Can bots integrate with our existing systems?</h3>
                        <p class="text-gray-600">Absolutely. We build bots that integrate with CRM, ERP, databases, APIs, and any business software you currently use.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-orange-600 to-red-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Automate Your Business Processes?
            </h2>
            <p class="text-xl text-orange-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Stop wasting time on repetitive tasks. Get AI-powered bots that work 24/7 while you focus on growth.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Get Bot Quote
                </a>
                <a href="tel:+15551234567" class="border-2 border-orange-300 text-orange-300 px-8 py-4 rounded-lg font-bold hover:bg-orange-300 hover:text-orange-900 transition-colors">
                    Call: (555) 123-4567
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-orange-200">Automation Assessment</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">90%</div>
                    <div class="text-orange-200">Time Savings Guaranteed</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">24/7</div>
                    <div class="text-orange-200">Automated Operations</div>
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