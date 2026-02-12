<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Data Extraction Services - iTechnism | Seamless Data Integration</title>
    <meta name="description" content="Professional API data extraction services by iTechnism. Extract data from REST APIs, third-party services, and integrate seamlessly into your systems. Real-time data pipelines.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'views/partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-cyan-900 via-blue-900 to-indigo-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-plug text-white text-xl"></i>
                        </div>
                        <span class="bg-cyan-500 bg-opacity-30 text-cyan-200 px-4 py-2 rounded-full text-sm font-medium">API Data Extraction</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Extract Data From <span class="text-yellow-400">Any Website</span> Via 
                        <span class="text-cyan-300">Official APIs</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Skip complex web scraping. We find and use official website APIs to extract clean, structured data legally and reliably - faster than traditional scraping methods.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get Free Data Analysis
                        </a>
                        <a href="#demo" class="border-2 border-cyan-300 text-cyan-300 px-8 py-4 rounded-lg font-bold hover:bg-cyan-300 hover:text-cyan-900 transition-colors">
                            See Extraction Demo
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">500+</div>
                                <div class="text-cyan-200 text-sm">Website APIs Found</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">99.9%</div>
                                <div class="text-cyan-200 text-sm">Uptime Guarantee</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">Real-time</div>
                                <div class="text-cyan-200 text-sm">Data Streaming</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                <div class="text-cyan-200 text-sm">Monitoring</div>
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
                    Struggling to <span class="text-red-600">Extract Website Data</span> Efficiently?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Traditional web scraping is unreliable, legally risky, and breaks constantly. Meanwhile, valuable data sits on websites with official APIs you didn't know existed.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-code text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Scraping Nightmares</h3>
                    <p class="text-gray-600">Your scrapers break every time websites update, get blocked by anti-bot measures, and deliver inconsistent data quality.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-broken-chain text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Legal & Compliance Risks</h3>
                    <p class="text-gray-600">Aggressive scraping violates terms of service, risks IP blocks, and creates potential legal liability for your business.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-database text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Poor Data Quality</h3>
                    <p class="text-gray-600">Scraped data is messy, unstructured, and requires hours of cleaning before it's usable for business decisions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="demo" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-cyan-600">Smart API Discovery</span> Platform
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We find official APIs for websites you want to extract data from, then build reliable extraction pipelines that deliver clean data legally and consistently.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div data-aos="fade-right">
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">API Discovery & Research</h3>
                                <p class="text-gray-600">We research and find official APIs for target websites, analyze their capabilities, and determine the best data extraction approach.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Legal Data Extraction</h3>
                                <p class="text-gray-600">Extract data through official channels with proper authentication, rate limiting, and compliance with terms of service.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Clean Data Delivery</h3>
                                <p class="text-gray-600">Receive structured, normalized data in your preferred format - JSON, CSV, or direct database integration.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">Data Sources We Extract From</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <i class="fas fa-shopping-cart text-yellow-400 mr-2"></i>
                                <span>E-commerce Sites</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-share-alt text-yellow-400 mr-2"></i>
                                <span>Social Media</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-home text-yellow-400 mr-2"></i>
                                <span>Real Estate</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-newspaper text-yellow-400 mr-2"></i>
                                <span>News & Media</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-building text-yellow-400 mr-2"></i>
                                <span>Business Directories</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chart-line text-yellow-400 mr-2"></i>
                                <span>Financial Data</span>
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
                    Why Choose <span class="text-green-600">iTechnism API Data Extraction?</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Get higher quality data through official APIs instead of unreliable scraping methods.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">10x More Reliable</h3>
                    <p class="text-gray-600">Official APIs don't break like scrapers - get consistent data extraction</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-check text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">100% Legal Compliance</h3>
                    <p class="text-gray-600">Extract data through official channels with zero legal risk</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-sync-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Superior Data Quality</h3>
                    <p class="text-gray-600">Structured data directly from the source - no messy HTML parsing</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Zero Maintenance</h3>
                    <p class="text-gray-600">APIs are stable - no more broken scrapers or constant maintenance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Popular <span class="text-cyan-600">Data Extraction</span> Use Cases
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    See how businesses get better data through official APIs instead of scraping.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">E-commerce Product Data</h3>
                    <p class="text-gray-600 mb-4">Extract product info, prices, reviews from Amazon, eBay, Shopify via official APIs.</p>
                    <div class="text-cyan-600 font-semibold">10x Faster Competitor Analysis</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shopping-cart text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Social Media Analytics</h3>
                    <p class="text-gray-600 mb-4">Extract posts, engagement metrics, follower data from Twitter, Instagram, LinkedIn APIs.</p>
                    <div class="text-cyan-600 font-semibold">5x Faster Campaign Insights</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Real Estate Listings</h3>
                    <p class="text-gray-600 mb-4">Extract property data from MLS, Zillow, Realtor.com via official real estate APIs.</p>
                    <div class="text-cyan-600 font-semibold">15x Faster Market Research</div>
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
                        "iTechnism found APIs we didn't know existed for our target websites. Now we get clean data legally without worrying about scrapers breaking or getting blocked."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            AT
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Alex Thompson</div>
                            <div class="text-gray-600">VP Technology, DataFlow Solutions</div>
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
                    Simple, <span class="text-cyan-600">Transparent Pricing</span>
                </h2>
                <p class="text-lg text-gray-600">Choose the plan that fits your API integration needs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Starter</h3>
                        <div class="text-4xl font-bold text-cyan-600 mb-2">$997</div>
                        <div class="text-gray-600 mb-6">One-time setup</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Up to 3 data sources via API</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>10,000 API calls/month</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Basic monitoring</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Email support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-cyan-600 text-white py-3 rounded-lg font-semibold hover:bg-cyan-700 transition-colors block text-center">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border-2 border-cyan-500 relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-cyan-500 text-white px-4 py-2 rounded-full text-sm font-medium">Most Popular</span>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional</h3>
                        <div class="text-4xl font-bold text-cyan-600 mb-2">$2,997</div>
                        <div class="text-gray-600 mb-6">Per month</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Up to 10 data sources via API</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>100,000 API calls/month</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Real-time monitoring</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Priority support</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Custom transformations</li>
                        </ul>
                        <a href="#contact" class="w-full bg-cyan-600 text-white py-3 rounded-lg font-semibold hover:bg-cyan-700 transition-colors block text-center">
                            Start Free Trial
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise</h3>
                        <div class="text-4xl font-bold text-cyan-600 mb-2">Custom</div>
                        <div class="text-gray-600 mb-6">Volume pricing</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Unlimited data sources via API</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Unlimited API calls</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Advanced analytics</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>Dedicated support</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-500 mr-2"></i>SLA guarantee</li>
                        </ul>
                        <a href="#contact" class="w-full bg-cyan-600 text-white py-3 rounded-lg font-semibold hover:bg-cyan-700 transition-colors block text-center">
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
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How quickly can you set up data extraction?</h3>
                        <p class="text-gray-600">Most API-based extractions are live within 3-5 business days. Complex multi-source setups may take 1-2 weeks.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">What happens if an API changes?</h3>
                        <p class="text-gray-600">We monitor all API endpoints 24/7 and automatically adapt to changes. You'll be notified of any updates that require attention.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Can you handle rate-limited APIs?</h3>
                        <p class="text-gray-600">Yes, our platform automatically manages rate limits, implements backoff strategies, and optimizes API calls for maximum efficiency.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Do you support custom data transformations?</h3>
                        <p class="text-gray-600">Absolutely. We can clean, normalize, and transform data to match your exact requirements before delivery to your systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-cyan-600 to-blue-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Unlock Your API Data?
            </h2>
            <p class="text-xl text-cyan-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Stop struggling with complex integrations. Get seamless API data extraction that just works.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Get Free Data Analysis
                </a>
                <a href="tel:+15551234567" class="border-2 border-cyan-300 text-cyan-300 px-8 py-4 rounded-lg font-bold hover:bg-cyan-300 hover:text-cyan-900 transition-colors">
                    Call: (555) 123-4567
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-cyan-200">Data Source Assessment</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">3-5</div>
                    <div class="text-cyan-200">Days to Go Live</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">99.9%</div>
                    <div class="text-cyan-200">Uptime Guarantee</div>
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