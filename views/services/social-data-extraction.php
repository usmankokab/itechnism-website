<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Data Extraction Services - iTechnism | Social Media Analytics & Insights</title>
    <meta name="description" content="Professional social data extraction services by iTechnism. Extract insights from Facebook, Twitter, Instagram, LinkedIn, TikTok for marketing intelligence and brand monitoring.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'views/partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-pink-900 via-purple-900 to-indigo-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-share-alt text-white text-xl"></i>
                        </div>
                        <span class="bg-pink-500 bg-opacity-30 text-pink-200 px-4 py-2 rounded-full text-sm font-medium">Social Data Extraction</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Turn <span class="text-yellow-400">Social Conversations</span> Into 
                        <span class="text-pink-300">Marketing Gold</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Stop guessing what your audience thinks. Extract real-time insights from billions of social media posts to drive campaigns that convert and brands that resonate.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                            Get Social Intelligence
                        </a>
                        <a href="#platforms" class="border-2 border-pink-300 text-pink-300 px-8 py-4 rounded-lg font-bold hover:bg-pink-300 hover:text-pink-900 transition-colors">
                            View Platforms
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">10M+</div>
                                <div class="text-pink-200 text-sm">Posts Analyzed Daily</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">15+</div>
                                <div class="text-pink-200 text-sm">Social Platforms</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">Real-time</div>
                                <div class="text-pink-200 text-sm">Sentiment Analysis</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                <div class="text-pink-200 text-sm">Brand Monitoring</div>
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
                    Missing Out on <span class="text-red-600">Billion-Dollar Social Insights?</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Every day, your customers share millions of opinions, preferences, and buying signals on social media. While you're running blind campaigns, competitors are using this data to dominate your market.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-eye-slash text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Marketing in the Dark</h3>
                    <p class="text-gray-600">You're spending thousands on campaigns without knowing what your audience actually wants, thinks, or feels about your brand.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-fire text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Crisis Management Failures</h3>
                    <p class="text-gray-600">Brand crises explode on social media before you even know they exist, causing irreparable damage to your reputation.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-users text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Competitor Intelligence Gaps</h3>
                    <p class="text-gray-600">Competitors are stealing market share while you miss critical insights about their campaigns, customer sentiment, and strategic moves.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Platforms Section -->
    <section id="platforms" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    <span class="text-pink-600">Social Platforms</span> We Monitor
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Extract actionable insights from every major social platform where your customers are talking.
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-facebook-f text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">Facebook</h3>
                    <p class="text-sm text-gray-600">Posts, Comments, Groups</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-twitter text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">Twitter</h3>
                    <p class="text-sm text-gray-600">Tweets, Replies, Trends</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-instagram text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">Instagram</h3>
                    <p class="text-sm text-gray-600">Posts, Stories, Reels</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-linkedin-in text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">LinkedIn</h3>
                    <p class="text-sm text-gray-600">Posts, Articles, Groups</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-black rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-tiktok text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">TikTok</h3>
                    <p class="text-sm text-gray-600">Videos, Comments, Trends</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-youtube text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">YouTube</h3>
                    <p class="text-sm text-gray-600">Videos, Comments, Analytics</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="700">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-reddit text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">Reddit</h3>
                    <p class="text-sm text-gray-600">Posts, Comments, Subreddits</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="800">
                    <div class="w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-pinterest text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">Pinterest</h3>
                    <p class="text-sm text-gray-600">Pins, Boards, Trends</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="900">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-whatsapp text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">WhatsApp</h3>
                    <p class="text-sm text-gray-600">Business Analytics</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="1000">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-plus text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900">More</h3>
                    <p class="text-sm text-gray-600">Custom Platforms</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-16 bg-pink-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our <span class="text-pink-600">AI-Powered Social Intelligence</span> Platform
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From real-time sentiment analysis to competitor intelligence - we turn social noise into strategic advantage.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Real-Time Social Monitoring</h3>
                                <p class="text-gray-600">Track mentions, hashtags, and conversations across all platforms with instant alerts for brand crises or opportunities.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Sentiment Analysis</h3>
                                <p class="text-gray-600">AI-powered emotion detection reveals not just what people say, but how they feel about your brand, products, and campaigns.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Competitor Intelligence</h3>
                                <p class="text-gray-600">Analyze competitor campaigns, audience engagement, and market positioning to identify gaps and opportunities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6">What You Get</h4>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-chart-line text-yellow-400 mr-3"></i>
                                <span>Real-time sentiment dashboards</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-users text-yellow-400 mr-3"></i>
                                <span>Audience demographic insights</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-trending-up text-yellow-400 mr-3"></i>
                                <span>Viral content identification</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-bullhorn text-yellow-400 mr-3"></i>
                                <span>Influencer discovery & analysis</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-shield-alt text-yellow-400 mr-3"></i>
                                <span>Crisis detection & alerts</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-target text-yellow-400 mr-3"></i>
                                <span>Campaign performance tracking</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Transform Your <span class="text-pink-600">Marketing Strategy</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    See how social data extraction drives real business results across industries.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-bullhorn text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Brand Monitoring & Crisis Management</h3>
                    <p class="text-gray-600 mb-4">Detect negative sentiment spikes and potential PR crises before they explode, protecting brand reputation.</p>
                    <div class="text-pink-600 font-semibold">ROI: 90% Faster Crisis Response</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-rocket text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Campaign Optimization</h3>
                    <p class="text-gray-600 mb-4">Analyze real-time engagement and sentiment to optimize campaigns mid-flight for maximum ROI.</p>
                    <div class="text-pink-600 font-semibold">ROI: 300% Increase in Engagement</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-search text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Market Research & Trends</h3>
                    <p class="text-gray-600 mb-4">Identify emerging trends, customer preferences, and market opportunities from social conversations.</p>
                    <div class="text-pink-600 font-semibold">ROI: 6 Months Ahead of Trends</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-users text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Audience Intelligence</h3>
                    <p class="text-gray-600 mb-4">Deep-dive into audience demographics, interests, and behaviors for precise targeting.</p>
                    <div class="text-pink-600 font-semibold">ROI: 250% Better Targeting</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-eye text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Competitor Analysis</h3>
                    <p class="text-gray-600 mb-4">Monitor competitor campaigns, audience sentiment, and market positioning strategies.</p>
                    <div class="text-pink-600 font-semibold">ROI: 400% Competitive Advantage</div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-shadow" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-star text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Influencer Discovery</h3>
                    <p class="text-gray-600 mb-4">Find and analyze micro and macro influencers with authentic engagement and brand alignment.</p>
                    <div class="text-pink-600 font-semibold">ROI: 500% Better Influencer ROI</div>
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
                        "iTechnism's social data extraction transformed our marketing. We now predict viral trends 2 weeks early and our campaign engagement increased 400%. It's like having a crystal ball for social media."
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            SM
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Sarah Martinez</div>
                            <div class="text-gray-600">VP Marketing, Global Fashion Brand</div>
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
                    Social Intelligence <span class="text-pink-600">Pricing</span>
                </h2>
                <p class="text-lg text-gray-600">Turn social conversations into competitive advantage</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Social Starter</h3>
                        <div class="text-4xl font-bold text-pink-600 mb-2">$1,497</div>
                        <div class="text-gray-600 mb-6">Per month</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>5 social platforms</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Basic sentiment analysis</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Brand mention tracking</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Monthly reports</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Email support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-pink-600 text-white py-3 rounded-lg font-semibold hover:bg-pink-700 transition-colors block text-center">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border-2 border-pink-500 relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-pink-500 text-white px-4 py-2 rounded-full text-sm font-medium">Most Popular</span>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Social Professional</h3>
                        <div class="text-4xl font-bold text-pink-600 mb-2">$4,497</div>
                        <div class="text-gray-600 mb-6">Per month</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>All major platforms</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Advanced AI sentiment analysis</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Competitor intelligence</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Real-time alerts</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Influencer discovery</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Priority support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-pink-600 text-white py-3 rounded-lg font-semibold hover:bg-pink-700 transition-colors block text-center">
                            Start Free Trial
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg border" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise</h3>
                        <div class="text-4xl font-bold text-pink-600 mb-2">Custom</div>
                        <div class="text-gray-600 mb-6">Volume pricing</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Unlimited platforms</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Custom AI models</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>White-label dashboards</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>API access</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>Dedicated team</li>
                            <li class="flex items-center"><i class="fas fa-check text-pink-500 mr-2"></i>24/7 support</li>
                        </ul>
                        <a href="#contact" class="w-full bg-pink-600 text-white py-3 rounded-lg font-semibold hover:bg-pink-700 transition-colors block text-center">
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
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Which social platforms do you monitor?</h3>
                        <p class="text-gray-600">We monitor 15+ platforms including Facebook, Twitter, Instagram, LinkedIn, TikTok, YouTube, Reddit, Pinterest, and more.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How accurate is your sentiment analysis?</h3>
                        <p class="text-gray-600">Our AI-powered sentiment analysis achieves 95%+ accuracy using advanced natural language processing and machine learning models.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Can you track competitors?</h3>
                        <p class="text-gray-600">Yes, we provide comprehensive competitor analysis including campaign performance, audience sentiment, and engagement metrics.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How fast do you detect crises?</h3>
                        <p class="text-gray-600">Our real-time monitoring detects potential crises within minutes, with instant alerts sent to your team for immediate response.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-pink-600 to-purple-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                Ready to Turn Social Data Into Marketing Gold?
            </h2>
            <p class="text-xl text-pink-100 mb-8" data-aos="fade-up" data-aos-delay="200">
                Stop guessing what your audience wants. Start using social intelligence to drive campaigns that convert.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo url('/contact'); ?>" class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-bold hover:bg-yellow-500 transition-colors transform hover:scale-105">
                    Get Social Intelligence
                </a>
                <a href="tel:+15551234567" class="border-2 border-pink-300 text-pink-300 px-8 py-4 rounded-lg font-bold hover:bg-pink-300 hover:text-pink-900 transition-colors">
                    Call: (555) 123-4567
                </a>
            </div>
            
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Free</div>
                    <div class="text-pink-200">Social Audit & Demo</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">10M+</div>
                    <div class="text-pink-200">Posts Analyzed Daily</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-yellow-400">Real-time</div>
                    <div class="text-pink-200">Crisis Detection</div>
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