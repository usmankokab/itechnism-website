<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Latest QA & Tech Insights | iTechnism</title>
    <meta name="description" content="Stay updated with the latest trends in software testing, QA automation, RPA, and digital marketing. Expert insights and tutorials from iTechnism.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>
    
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">iTechnism Blog</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Latest insights on software testing, automation, RPA, and digital marketing trends</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button onclick="filterPosts('all')" class="filter-btn active bg-white text-blue-600 px-6 py-2 rounded-full font-medium hover:bg-gray-100 transition-colors">All Posts</button>
                    <button onclick="filterPosts('qa')" class="filter-btn bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600 transition-colors">QA Testing</button>
                    <button onclick="filterPosts('rpa')" class="filter-btn bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600 transition-colors">RPA</button>
                    <button onclick="filterPosts('development')" class="filter-btn bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600 transition-colors">Development</button>
                    <button onclick="filterPosts('marketing')" class="filter-btn bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600 transition-colors">Digital Marketing</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Post -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Article</h2>
            </div>
            
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl overflow-hidden shadow-xl" data-aos="fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="p-8 lg:p-12">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-medium mr-3">QA Testing</span>
                            <span class="text-gray-500 text-sm">December 15, 2024</span>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">The Future of AI in Software Testing: Trends for 2025</h3>
                        <p class="text-gray-600 mb-6 text-lg">Discover how artificial intelligence is revolutionizing software testing processes, from automated test generation to intelligent bug detection and predictive analytics.</p>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">JD</div>
                            <div>
                                <div class="font-semibold text-gray-900">John Davis</div>
                                <div class="text-sm text-gray-500">Senior QA Engineer</div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Read Full Article
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center p-8">
                        <i class="fas fa-robot text-white text-8xl opacity-20"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-md mx-auto">
                <div class="relative">
                    <input type="text" id="search-input" placeholder="Search articles..." class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" onkeyup="searchPosts()">
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Posts Grid -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-posts">
                
                <!-- QA Testing Posts -->
                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="qa" data-aos="fade-up">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium mr-2">QA Testing</span>
                            <span class="text-gray-500 text-sm">Dec 10, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">10 Best Practices for API Testing in 2024</h3>
                        <p class="text-gray-600 mb-4 text-sm">Learn essential API testing strategies including authentication, data validation, error handling, and performance optimization techniques.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">SM</div>
                                <span class="text-sm text-gray-600">Sarah Miller</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-blue-600 hover:text-blue-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="qa" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Mobile Testing</span>
                            <span class="text-gray-500 text-sm">Dec 8, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Appium vs Selenium: Mobile Testing Comparison</h3>
                        <p class="text-gray-600 mb-4 text-sm">Comprehensive comparison of mobile testing frameworks, covering setup, capabilities, performance, and real-world use cases.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">MJ</div>
                                <span class="text-sm text-gray-600">Mike Johnson</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-green-600 hover:text-green-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="qa" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                        <i class="fas fa-database text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Database Testing</span>
                            <span class="text-gray-500 text-sm">Dec 5, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Database Testing: SQL Queries & Data Validation</h3>
                        <p class="text-gray-600 mb-4 text-sm">Master database testing techniques including CRUD operations, data integrity checks, and performance testing strategies.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">AL</div>
                                <span class="text-sm text-gray-600">Alex Lee</span>
                            </div>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <!-- RPA Posts -->
                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="rpa" data-aos="fade-up">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-700 flex items-center justify-center">
                        <i class="fas fa-robot text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-medium mr-2">RPA</span>
                            <span class="text-gray-500 text-sm">Dec 3, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">UiPath vs Blue Prism: Complete RPA Comparison</h3>
                        <p class="text-gray-600 mb-4 text-sm">Detailed analysis of leading RPA platforms covering features, pricing, ease of use, and enterprise capabilities.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">RK</div>
                                <span class="text-sm text-gray-600">Robert Kim</span>
                            </div>
                            <a href="#" class="text-orange-600 hover:text-orange-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="rpa" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center">
                        <i class="fas fa-cogs text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Automation</span>
                            <span class="text-gray-500 text-sm">Nov 30, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">RPA Testing: Ensuring Bot Reliability</h3>
                        <p class="text-gray-600 mb-4 text-sm">Essential strategies for testing RPA bots including functional testing, exception handling, and performance validation.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">LW</div>
                                <span class="text-sm text-gray-600">Lisa Wang</span>
                            </div>
                            <a href="#" class="text-red-600 hover:text-red-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <!-- Development Posts -->
                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="development" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center">
                        <i class="fas fa-code text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Web Development</span>
                            <span class="text-gray-500 text-sm">Nov 28, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">React Testing Library: Complete Guide</h3>
                        <p class="text-gray-600 mb-4 text-sm">Learn how to write effective tests for React applications using Testing Library with practical examples and best practices.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">TC</div>
                                <span class="text-sm text-gray-600">Tom Chen</span>
                            </div>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="development" data-aos="fade-up">
                    <div class="h-48 bg-gradient-to-br from-teal-500 to-teal-700 flex items-center justify-center">
                        <i class="fas fa-spider text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-teal-100 text-teal-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Data Extraction</span>
                            <span class="text-gray-500 text-sm">Nov 25, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Web Scraping with Python: Advanced Techniques</h3>
                        <p class="text-gray-600 mb-4 text-sm">Master advanced web scraping techniques using BeautifulSoup, Scrapy, and Selenium for complex data extraction projects.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">EP</div>
                                <span class="text-sm text-gray-600">Emma Parker</span>
                            </div>
                            <a href="#" class="text-teal-600 hover:text-teal-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <!-- Digital Marketing Posts -->
                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="marketing" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-gradient-to-br from-pink-500 to-pink-700 flex items-center justify-center">
                        <i class="fas fa-search text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-medium mr-2">SEO</span>
                            <span class="text-gray-500 text-sm">Nov 22, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Technical SEO Checklist for 2024</h3>
                        <p class="text-gray-600 mb-4 text-sm">Complete technical SEO guide covering Core Web Vitals, structured data, crawlability, and mobile optimization strategies.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">DM</div>
                                <span class="text-sm text-gray-600">David Martinez</span>
                            </div>
                            <a href="#" class="text-pink-600 hover:text-pink-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="marketing" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gradient-to-br from-yellow-500 to-yellow-700 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Analytics</span>
                            <span class="text-gray-500 text-sm">Nov 20, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Google Analytics 4: Advanced Tracking Setup</h3>
                        <p class="text-gray-600 mb-4 text-sm">Learn to implement advanced GA4 tracking including custom events, conversions, and e-commerce measurement for better insights.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">JT</div>
                                <span class="text-sm text-gray-600">Jessica Taylor</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-yellow-600 hover:text-yellow-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>
                
                <!-- Additional Hidden Posts -->
                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="qa">
                    <div class="h-48 bg-gradient-to-br from-cyan-500 to-cyan-700 flex items-center justify-center">
                        <i class="fas fa-vial text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-cyan-100 text-cyan-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Performance Testing</span>
                            <span class="text-gray-500 text-sm">Nov 18, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Load Testing with JMeter: Complete Guide</h3>
                        <p class="text-gray-600 mb-4 text-sm">Master performance testing using Apache JMeter including test plan creation, load simulation, and result analysis.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">KS</div>
                                <span class="text-sm text-gray-600">Kevin Smith</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-cyan-600 hover:text-cyan-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="rpa">
                    <div class="h-48 bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center">
                        <i class="fas fa-magic text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-amber-100 text-amber-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Power Automate</span>
                            <span class="text-gray-500 text-sm">Nov 15, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Microsoft Power Automate: Workflow Automation</h3>
                        <p class="text-gray-600 mb-4 text-sm">Learn to create powerful automated workflows using Microsoft Power Automate for business process optimization.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-amber-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">NB</div>
                                <span class="text-sm text-gray-600">Nina Brown</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-amber-600 hover:text-amber-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="development">
                    <div class="h-48 bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center">
                        <i class="fas fa-cloud text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-emerald-100 text-emerald-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Cloud Testing</span>
                            <span class="text-gray-500 text-sm">Nov 12, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">AWS Testing: Cloud Infrastructure Validation</h3>
                        <p class="text-gray-600 mb-4 text-sm">Comprehensive guide to testing cloud applications on AWS including infrastructure, security, and scalability testing.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">PG</div>
                                <span class="text-sm text-gray-600">Paul Garcia</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-emerald-600 hover:text-emerald-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="marketing">
                    <div class="h-48 bg-gradient-to-br from-rose-500 to-rose-700 flex items-center justify-center">
                        <i class="fas fa-bullhorn text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-rose-100 text-rose-600 px-3 py-1 rounded-full text-xs font-medium mr-2">PPC</span>
                            <span class="text-gray-500 text-sm">Nov 10, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Google Ads Optimization: Advanced Strategies</h3>
                        <p class="text-gray-600 mb-4 text-sm">Advanced Google Ads optimization techniques including bid strategies, ad extensions, and conversion tracking setup.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-rose-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">AR</div>
                                <span class="text-sm text-gray-600">Anna Rodriguez</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-rose-600 hover:text-rose-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="qa">
                    <div class="h-48 bg-gradient-to-br from-violet-500 to-violet-700 flex items-center justify-center">
                        <i class="fas fa-bug text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-violet-100 text-violet-600 px-3 py-1 rounded-full text-xs font-medium mr-2">Bug Tracking</span>
                            <span class="text-gray-500 text-sm">Nov 8, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Effective Bug Reporting: Best Practices</h3>
                        <p class="text-gray-600 mb-4 text-sm">Learn how to write effective bug reports that help developers quickly identify and fix issues in software applications.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-violet-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">CL</div>
                                <span class="text-sm text-gray-600">Chris Lee</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-violet-600 hover:text-violet-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300" data-category="development">
                    <div class="h-48 bg-gradient-to-br from-slate-500 to-slate-700 flex items-center justify-center">
                        <i class="fas fa-terminal text-white text-4xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-medium mr-2">DevOps</span>
                            <span class="text-gray-500 text-sm">Nov 5, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">CI/CD Pipeline Testing: Jenkins & GitHub Actions</h3>
                        <p class="text-gray-600 mb-4 text-sm">Implement automated testing in CI/CD pipelines using Jenkins and GitHub Actions for continuous quality assurance.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-slate-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-2">MW</div>
                                <span class="text-sm text-gray-600">Mark Wilson</span>
                            </div>
                            <a href="javascript:void(0)" onclick="readMore(this)" class="text-slate-600 hover:text-slate-700 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button id="load-more-btn" onclick="loadMorePosts()" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    Load More Articles
                </button>
            </div>
        </div>
    </div>

    <!-- Newsletter Subscription -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-purple-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Updated with Latest Insights</h2>
            <p class="text-xl text-blue-100 mb-8">Get weekly updates on QA trends, automation tips, and industry best practices</p>
            
            <div class="bg-white rounded-xl p-6 max-w-md mx-auto">
                <form class="space-y-4">
                    <div>
                        <input type="email" placeholder="Enter your email address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Subscribe to Newsletter
                    </button>
                </form>
                <p class="text-gray-500 text-sm mt-3">Join 5,000+ professionals. Unsubscribe anytime.</p>
            </div>
        </div>
    </div>

    <!-- Popular Tags -->
    <div class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Popular Topics</h2>
                <p class="text-lg text-gray-600">Explore articles by trending topics</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#API Testing</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#Test Automation</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#UiPath</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#Selenium</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#Mobile Testing</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#RPA Testing</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#Web Scraping</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#SEO</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#Performance Testing</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#Database Testing</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#React Testing</span>
                <span class="bg-white text-gray-700 px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-shadow cursor-pointer">#Digital Marketing</span>
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

        let loadedPosts = 9; // Initially visible posts
        const totalPosts = 15; // Total posts including hidden ones
        
        // Blog post filtering
        function filterPosts(category) {
            const posts = document.querySelectorAll('.blog-post');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Update button states
            buttons.forEach(btn => {
                btn.classList.remove('active', 'bg-white', 'text-blue-600');
                btn.classList.add('bg-blue-500', 'text-white');
            });
            
            event.target.classList.remove('bg-blue-500', 'text-white');
            event.target.classList.add('active', 'bg-white', 'text-blue-600');
            
            // Filter posts
            posts.forEach(post => {
                if (category === 'all' || post.dataset.category === category) {
                    post.style.display = 'block';
                    post.classList.remove('hidden');
                } else {
                    post.style.display = 'none';
                    post.classList.add('hidden');
                }
            });
            
            // Reset load more button
            document.getElementById('load-more-btn').style.display = 'inline-block';
        }

        // Search functionality
        function searchPosts() {
            const searchTerm = document.getElementById('search-input').value.toLowerCase();
            const posts = document.querySelectorAll('.blog-post');
            let visibleCount = 0;
            
            posts.forEach(post => {
                const title = post.querySelector('h3').textContent.toLowerCase();
                const content = post.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || content.includes(searchTerm)) {
                    post.style.display = 'block';
                    post.classList.remove('hidden');
                    visibleCount++;
                } else {
                    post.style.display = 'none';
                    post.classList.add('hidden');
                }
            });
            
            // Hide load more if search is active
            const loadMoreBtn = document.getElementById('load-more-btn');
            if (searchTerm.length > 0) {
                loadMoreBtn.style.display = 'none';
            } else {
                loadMoreBtn.style.display = 'inline-block';
            }
        }
        
        // Load more posts functionality
        function loadMorePosts() {
            const hiddenPosts = document.querySelectorAll('.blog-post.hidden');
            const postsToShow = Math.min(3, hiddenPosts.length);
            
            for (let i = 0; i < postsToShow; i++) {
                hiddenPosts[i].classList.remove('hidden');
                hiddenPosts[i].style.display = 'block';
            }
            
            loadedPosts += postsToShow;
            
            // Hide button if all posts are loaded
            if (loadedPosts >= totalPosts || hiddenPosts.length <= postsToShow) {
                document.getElementById('load-more-btn').style.display = 'none';
            }
        }
        
        // Read more functionality
        function readMore(element) {
            const article = element.closest('.blog-post');
            const title = article.querySelector('h3').textContent;
            const category = article.dataset.category;
            
            // Create modal for full article
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
            modal.innerHTML = `
                <div class="bg-white rounded-xl max-w-4xl max-h-[90vh] overflow-y-auto">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-medium mb-3 inline-block">${category.toUpperCase()}</span>
                                <h1 class="text-3xl font-bold text-gray-900">${title}</h1>
                            </div>
                            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                        </div>
                        <div class="prose max-w-none">
                            <p class="text-lg text-gray-600 mb-6">This is a detailed article about ${title.toLowerCase()}. In a real implementation, this would contain the full article content from a database or CMS.</p>
                            
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Introduction</h2>
                            <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Key Points</h2>
                            <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                                <li>Comprehensive testing strategies and methodologies</li>
                                <li>Best practices for implementation and execution</li>
                                <li>Common pitfalls and how to avoid them</li>
                                <li>Tools and frameworks recommendations</li>
                                <li>Real-world examples and case studies</li>
                            </ul>
                            
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Conclusion</h2>
                            <p class="text-gray-600 mb-6">In conclusion, implementing these practices will significantly improve your testing processes and overall software quality. For more detailed guidance, contact our experts.</p>
                            
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold text-blue-900 mb-3">Need Expert Help?</h3>
                                <p class="text-blue-700 mb-4">Our team of certified professionals can help you implement these strategies in your organization.</p>
                                <a href="/itech/contact" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors inline-block">Contact Us Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            document.body.style.overflow = 'hidden';
        }
        
        // Close modal function
        function closeModal() {
            const modal = document.querySelector('.fixed.inset-0');
            if (modal) {
                modal.remove();
                document.body.style.overflow = 'auto';
            }
        }
        
        // Initialize hidden posts
        document.addEventListener('DOMContentLoaded', function() {
            const posts = document.querySelectorAll('.blog-post');
            posts.forEach((post, index) => {
                if (index >= 9) {
                    post.classList.add('hidden');
                    post.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>