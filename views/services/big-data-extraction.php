<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Data Extraction Services - iTechnism | Enterprise Data Mining & Analytics</title>
    <meta name="description" content="Professional big data extraction services by iTechnism. Extract, process, and analyze massive datasets from multiple sources. Hadoop, Spark, cloud-native solutions.">
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
                            <i class="fas fa-database text-white text-xl"></i>
                        </div>
                        <span class="bg-purple-500 bg-opacity-30 text-purple-200 px-4 py-2 rounded-full text-sm font-medium">Big Data Extraction</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Turn <span class="text-yellow-400">Massive Datasets</span> Into 
                        <span class="text-purple-300">Business Intelligence</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Stop drowning in data chaos. Our enterprise-grade big data extraction platform processes terabytes of information and delivers actionable insights that drive million-dollar decisions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get Free Data Assessment
                        </a>
                        <a href="#demo" class="border-2 border-purple-300 text-purple-300 px-8 py-4 rounded-lg font-bold hover:bg-purple-300 hover:text-purple-900 transition-colors">
                            See Processing Demo
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">10TB+</div>
                                <div class="text-purple-200 text-sm">Data Processed Daily</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">99.9%</div>
                                <div class="text-purple-200 text-sm">Processing Accuracy</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">Real-time</div>
                                <div class="text-purple-200 text-sm">Stream Processing</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                <div class="text-purple-200 text-sm">Data Pipeline Monitoring</div>
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
                    Is Your <span class="text-red-600">Big Data</span> Actually Big Problems?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Your organization generates terabytes of valuable data daily, but it's scattered across systems, formats, and locations. Meanwhile, competitors are making data-driven decisions while you're still trying to access yours.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-hourglass-half text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Data Processing Bottlenecks</h3>
                    <p class="text-gray-600">Your current systems take days or weeks to process large datasets, making real-time business decisions impossible.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-puzzle-piece text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fragmented Data Sources</h3>
                    <p class="text-gray-600">Critical data is trapped in silos across databases, APIs, files, and cloud platforms - impossible to analyze holistically.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-money-bill-wave text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Expensive Infrastructure Costs</h3>
                    <p class="text-gray-600">Building and maintaining big data infrastructure costs millions while delivering uncertain ROI and constant technical headaches.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="demo" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-purple-600">Enterprise Big Data</span> Extraction Platform
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From petabyte-scale data lakes to real-time streaming analytics - we handle the complexity so you can focus on insights, not infrastructure.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div data-aos="fade-right">
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-Source Data Ingestion</h3>
                                <p class="text-gray-600">Automatically extract data from databases, APIs, files, streams, and cloud platforms using distributed processing frameworks.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Scalable Processing Engine</h3>
                                <p class="text-gray-600">Leverage Hadoop, Spark, and cloud-native technologies to process terabytes of data in minutes, not days.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Intelligent Data Transformation</h3>
                                <p class="text-gray-600">Clean, normalize, and enrich raw data using ML-powered algorithms for analysis-ready datasets.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">Technologies We Master</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <i class="fas fa-elephant text-yellow-400 mr-2"></i>
                                <span>Hadoop Ecosystem</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-yellow-400 mr-2"></i>
                                <span>Apache Spark</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-stream text-yellow-400 mr-2"></i>
                                <span>Kafka Streaming</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-cloud text-yellow-400 mr-2"></i>
                                <span>AWS/Azure/GCP</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-snowflake text-yellow-400 mr-2"></i>
                                <span>Snowflake</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chart-bar text-yellow-400 mr-2"></i>
                                <span>Databricks</span>
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
                    Why Choose <span class="text-green-600">iTechnism Big Data Extraction?</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Transform your data chaos into competitive advantage with enterprise-grade processing power.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tachometer-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">1000x Faster Processing</h3>
                    <p class="text-gray-600">Process terabytes in hours instead of weeks with distributed computing</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-expand-arrows-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Infinite Scalability</h3>
                    <p class="text-gray-600">Auto-scale from gigabytes to petabytes without infrastructure changes</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-dollar-sign text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">90% Cost Reduction</h3>
                    <p class="text-gray-600">Eliminate expensive infrastructure with cloud-native solutions</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-brain text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">AI-Powered Insights</h3>
                    <p class="text-gray-600">Machine learning algorithms automatically discover patterns and anomalies</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Enterprise <span class="text-purple-600">Big Data</span> Success Stories
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    See how Fortune 500 companies transform their operations with massive-scale data extraction.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Financial Risk Analytics</h3>
                    <p class="text-gray-600 mb-4">Process millions of transactions, market data, and regulatory filings for real-time risk assessment.</p>
                    <div class="text-purple-600 font-semibold">ROI: $50M+ Risk Prevention</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-user-friends text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Customer 360° Analytics</h3>
                    <p class="text-gray-600 mb-4">Unify customer data from CRM, social media, transactions, and support for complete profiles.</p>
                    <div class="text-purple-600 font-semibold">ROI: 300% Increase in CLV</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-industry text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">IoT Sensor Analytics</h3>
                    <p class="text-gray-600 mb-4">Process billions of sensor readings from manufacturing equipment for predictive maintenance.</p>
                    <div class="text-purple-600 font-semibold">ROI: 80% Reduction in Downtime</div>
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
                        "iTechnism's big data platform processes our 50TB daily data volume in under 2 hours. We went from weekly reports to real-time dashboards, transforming how we make strategic decisions."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            MR
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Michael Rodriguez</div>
                            <div class="text-gray-600">Chief Data Officer, Global Manufacturing Corp</div>
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
                    Enterprise <span class="text-purple-600">Big Data Pricing</span>
                </h2>
                <p class="text-lg text-gray-600">Scalable solutions for any data volume</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Starter</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">$4,997</div>
                        <div class="text-gray-600 mb-6">Per month</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Up to 1TB data processing</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>5 data sources</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Basic transformations</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Email support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors block text-center">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border-2 border-purple-500 relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-purple-500 text-white px-4 py-2 rounded-full text-sm font-medium">Most Popular</span>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">$14,997</div>
                        <div class="text-gray-600 mb-6">Per month</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Up to 10TB data processing</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Unlimited data sources</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Advanced ML transformations</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Real-time streaming</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Priority support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors block text-center">
                            Start Free Trial
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">Custom</div>
                        <div class="text-gray-600 mb-6">Volume pricing</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Unlimited data processing</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Custom infrastructure</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>White-label solutions</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>Dedicated team</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-500 mr-2"></i>SLA guarantee</li>
                        </ul>
                        <a href="#contact" class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors block text-center">
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
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How much data can you process?</h3>
                        <p class="text-gray-600">Our platform scales from gigabytes to petabytes. We've processed over 100TB in a single job for enterprise clients.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">What data formats do you support?</h3>
                        <p class="text-gray-600">We handle all formats: structured (SQL, CSV), semi-structured (JSON, XML), and unstructured (text, images, logs).</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How secure is the data processing?</h3>
                        <p class="text-gray-600">Enterprise-grade security with encryption at rest and in transit, SOC 2 compliance, and private cloud options available.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Can you integrate with our existing systems?</h3>
                        <p class="text-gray-600">Yes, we integrate with all major data warehouses, lakes, and analytics platforms including Snowflake, Databricks, and AWS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-purple-600 to-indigo-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Unlock Your Big Data Potential?
            </h2>
            <p class="text-xl text-purple-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Stop letting valuable data sit unused. Transform terabytes into competitive advantage.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Get Free Data Assessment
                </a>
                <a href="tel:+15551234567" class="border-2 border-purple-300 text-purple-300 px-8 py-4 rounded-lg font-bold hover:bg-purple-300 hover:text-purple-900 transition-colors">
                    Call: (555) 123-4567
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-purple-200">Data Volume Assessment</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">1-2</div>
                    <div class="text-purple-200">Weeks to Deploy</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">1000x</div>
                    <div class="text-purple-200">Faster Processing</div>
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