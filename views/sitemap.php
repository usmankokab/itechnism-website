<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemap - iTechnism | Website Navigation & Page Directory</title>
    <meta name="description" content="iTechnism website sitemap - Find all our pages including services, about, contact, and resources for QA, development, and digital marketing.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 to-pink-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-4" data-aos="fade-up">
                Website Sitemap
            </h1>
            <p class="text-xl text-purple-100" data-aos="fade-up" data-aos-delay="200">
                Navigate through all pages and services on our website
            </p>
        </div>
    </section>

    <!-- Sitemap Content -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Main Pages -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-home text-blue-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Main Pages</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="/itech" class="text-blue-600 hover:text-blue-800 transition-colors">Home</a></li>
                        <li><a href="<?php echo url('/about'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">About Us</a></li>
                        <li><a href="<?php echo url('/services'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">All Services</a></li>
                        <li><a href="<?php echo url('/contact'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Contact</a></li>
                        <li><a href="<?php echo url('/blog'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Blog</a></li>
                    </ul>
                </div>

                <!-- Software QA Services -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-shield-alt text-blue-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Software QA</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/services/manual-testing'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Manual Testing</a></li>
                        <li><a href="<?php echo url('/services/test-automation'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Test Automation</a></li>
                        <li><a href="<?php echo url('/services/api-testing'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">API Testing</a></li>
                        <li><a href="<?php echo url('/services/database-testing'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Database Testing</a></li>
                        <li><a href="<?php echo url('/services/mobile-testing'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Mobile Testing</a></li>
                        <li><a href="<?php echo url('/services/project-management'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Project Management</a></li>
                    </ul>
                </div>

                <!-- Data Extraction -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-download text-green-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Data Extraction</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/services/web-scraping-crawling'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Web Scraping & Crawling</a></li>
                        <li><a href="<?php echo url('/services/api-data-extraction'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">API Data Extraction</a></li>
                        <li><a href="<?php echo url('/services/big-data-extraction'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Big Data Extraction</a></li>
                        <li><a href="<?php echo url('/services/industry-specific-data-extraction'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Industry-Specific Data</a></li>
                        <li><a href="<?php echo url('/services/social-data-extraction'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Social Data Extraction</a></li>
                    </ul>
                </div>

                <!-- Software Development -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-code text-purple-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Development</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/services/web-development'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Web Development</a></li>
                        <li><a href="<?php echo url('/services/mobile-development'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Mobile Development</a></li>
                        <li><a href="<?php echo url('/services/desktop-development'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Desktop Development</a></li>
                        <li><a href="<?php echo url('/services/automation-bot-development'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Automation Bot Development</a></li>
                        <li><a href="<?php echo url('/services/responsive-web-conversion'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Responsive Web Conversion</a></li>
                    </ul>
                </div>

                <!-- RPA Services -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-robot text-orange-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">RPA Services</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/services/uipath'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">UiPath</a></li>
                        <li><a href="<?php echo url('/services/blue-prism'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Blue Prism</a></li>
                        <li><a href="<?php echo url('/services/automation-anywhere'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Automation Anywhere</a></li>
                        <li><a href="<?php echo url('/services/microsoft-power-automate'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Microsoft Power Automate</a></li>
                        <li><a href="<?php echo url('/services/playwright-rpa'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Playwright RPA</a></li>
                        <li><a href="<?php echo url('/services/rpa-testing'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">RPA Testing</a></li>
                    </ul>
                </div>

                <!-- Workflow Automation -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-cogs text-teal-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Workflow Automation</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/services/n8n'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">n8n Automation</a></li>
                        <li><a href="<?php echo url('/services/make-automation'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Make Automation</a></li>
                        <li><a href="<?php echo url('/services/zapier-automation'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Zapier Automation</a></li>
                    </ul>
                </div>

                <!-- Digital Marketing -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-bullhorn text-pink-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Digital Marketing</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/services/seo-services'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">SEO Services</a></li>
                        <li><a href="<?php echo url('/services/local-seo'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Local SEO</a></li>
                        <li><a href="<?php echo url('/services/claim-your-business'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Claim Your Business</a></li>
                        <li><a href="<?php echo url('/services/sem-ppc'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">SEM & PPC</a></li>
                        <li><a href="<?php echo url('/services/social-media-marketing'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Social Media Marketing</a></li>
                        <li><a href="<?php echo url('/services/content-marketing'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Content Marketing</a></li>
                        <li><a href="<?php echo url('/services/email-marketing-automation'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Email Marketing</a></li>
                        <li><a href="<?php echo url('/services/conversion-rate-optimization'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Conversion Rate Optimization</a></li>
                        <li><a href="<?php echo url('/services/analytics-reporting'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Analytics & Reporting</a></li>
                        <li><a href="<?php echo url('/services/guest-posting'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Guest Posting</a></li>
                    </ul>
                </div>

                <!-- Admin & Legal -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-gavel text-gray-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Legal & Admin</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/privacy'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Privacy Policy</a></li>
                        <li><a href="<?php echo url('/terms'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Terms of Service</a></li>
                        <li><a href="<?php echo url('/sitemap'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Sitemap</a></li>
                        <li><a href="<?php echo url('/admin'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Admin Dashboard</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-book text-indigo-600 text-xl mr-3"></i>
                        <h2 class="text-xl font-bold text-gray-900">Resources</h2>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="<?php echo url('/blog'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Blog & Articles</a></li>
                        <li><a href="<?php echo url('/newsletter/unsubscribe'); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Newsletter Unsubscribe</a></li>
                    </ul>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="mt-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg p-8 text-white text-center" data-aos="fade-up" data-aos-delay="900">
                <h3 class="text-2xl font-bold mb-4">Website Overview</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <div class="text-3xl font-bold text-yellow-400">50+</div>
                        <div class="text-blue-100">Total Pages</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-yellow-400">6</div>
                        <div class="text-blue-100">Service Categories</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-yellow-400">35+</div>
                        <div class="text-blue-100">Individual Services</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-yellow-400">24/7</div>
                        <div class="text-blue-100">Website Availability</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>