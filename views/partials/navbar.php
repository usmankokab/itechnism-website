<?php require_once __DIR__ . '/../../config/config.php'; ?>
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-blue-600">iTechnism</h1>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
                
            <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo url('/'); ?>" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold">Home</a>
                
                <!-- Software QA -->
                <div class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold flex items-center whitespace-nowrap">
                        <i class="fas fa-shield-alt mr-2"></i>Software QA
                    </a>
                    <div class="absolute left-0 top-full mt-1 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="<?php echo url('/services/manual-testing'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Manual Testing</a>
                            <a href="<?php echo url('/services/test-automation'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Test Automation</a>
                            <a href="<?php echo url('/services/api-testing'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">API Testing</a>
                            <a href="<?php echo url('/services/database-testing'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Database Testing</a>
                            <a href="<?php echo url('/services/mobile-testing'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Mobile Testing (Appium)</a>
                            <a href="<?php echo url('/services/project-management'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Project Management (Jira, ClickUp)</a>
                        </div>
                    </div>
                </div>
                
                <!-- Data Extraction -->
                <div class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold flex items-center whitespace-nowrap">
                        <i class="fas fa-download mr-2"></i>Data Extraction
                    </a>
                    <div class="absolute left-0 top-full mt-1 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="<?php echo url('/services/web-scraping-crawling'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Web Scraping & Crawling</a>
                            <a href="<?php echo url('/services/api-data-extraction'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">API Data Extraction</a>
                            <a href="<?php echo url('/services/big-data-extraction'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Big Data Extraction</a>
                            <a href="<?php echo url('/services/industry-specific-data-extraction'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Industry-Specific Data Extraction</a>
                            <a href="<?php echo url('/services/social-data-extraction'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Social Data Extraction</a>
                        </div>
                    </div>
                </div>
                
                <!-- Software Development -->
                <div class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold flex items-center">
                        <i class="fas fa-code mr-2"></i>Development
                    </a>
                    <div class="absolute left-0 top-full mt-1 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="<?php echo url('/services/web-development'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Web Development</a>
                            <a href="<?php echo url('/services/mobile-development'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Mobile Development</a>
                            <a href="<?php echo url('/services/desktop-development'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Desktop Development</a>
                            <a href="<?php echo url('/services/automation-bot-development'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Automation Bot Development</a>
                            <a href="<?php echo url('/services/responsive-web-conversion'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Responsive Web Conversion</a>
                        </div>
                    </div>
                </div>
                
                <!-- RPA -->
                <div class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold flex items-center">
                        <i class="fas fa-robot mr-2"></i>RPA
                    </a>
                    <div class="absolute left-0 top-full mt-1 w-64 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="<?php echo url('/services/uipath'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">UiPath</a>
                            <a href="<?php echo url('/services/blue-prism'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Blue Prism</a>
                            <a href="<?php echo url('/services/automation-anywhere'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Automation Anywhere</a>
                            <a href="<?php echo url('/services/microsoft-power-automate'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Microsoft Power Automate</a>
                            <a href="<?php echo url('/services/playwright-rpa'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Playwright RPA</a>
                            <a href="<?php echo url('/services/rpa-testing'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">RPA Testing</a>
                        </div>
                    </div>
                </div>
                
                <!-- Workflow Automation -->
                <div class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold flex items-center whitespace-nowrap">
                        <i class="fas fa-cogs mr-2"></i>Workflow Automation
                    </a>
                    <div class="absolute left-0 top-full mt-1 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="<?php echo url('/services/n8n'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">n8n Automation</a>
                            <a href="<?php echo url('/services/make-automation'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Make Automation</a>
                            <a href="<?php echo url('/services/zapier-automation'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Zapier Automation</a>
                        </div>
                    </div>
                </div>
                
                <!-- Digital Marketing -->
                <div class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold flex items-center whitespace-nowrap">
                        <i class="fas fa-bullhorn mr-2"></i>Digital Marketing
                    </a>
                    <div class="absolute left-0 top-full mt-1 w-64 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="<?php echo url('/services/seo-services'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">SEO Services (On-Page & Technical)</a>
                            <a href="<?php echo url('/services/local-seo'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Local SEO (Google My Business)</a>
                            <a href="<?php echo url('/services/claim-your-business'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Claim Your Business</a>
                            <a href="<?php echo url('/services/sem-ppc'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Search Engine Marketing (SEM & PPC)</a>
                            <a href="<?php echo url('/services/social-media-marketing'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Social Media Marketing (SMM)</a>
                            <a href="<?php echo url('/services/content-marketing'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Content Marketing</a>
                            <a href="<?php echo url('/services/email-marketing-automation'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Email Marketing & Automation</a>
                            <a href="<?php echo url('/services/conversion-rate-optimization'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Conversion Rate Optimization (CRO)</a>
                            <a href="<?php echo url('/services/analytics-reporting'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Analytics & Reporting</a>
                            <a href="<?php echo url('/services/guest-posting'); ?>" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Guest Posting</a>
                        </div>
                    </div>
                </div>
                    
                    <a href="<?php echo url('/about'); ?>" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold">About</a>
                    <a href="<?php echo url('/contact'); ?>" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-bold">Contact</a>
                </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="<?php echo url('/'); ?>" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold">Home</a>
                
                <!-- Mobile Software QA -->
                <div class="block">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold flex items-center justify-between" onclick="toggleMobileSubmenu('qa-menu')">
                        <span><i class="fas fa-shield-alt mr-2"></i>Software QA</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="qa-menu" class="hidden pl-6 space-y-1">
                        <a href="<?php echo url('/services/manual-testing'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Manual Testing</a>
                        <a href="<?php echo url('/services/test-automation'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Test Automation</a>
                        <a href="<?php echo url('/services/api-testing'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">API Testing</a>
                        <a href="<?php echo url('/services/database-testing'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Database Testing</a>
                        <a href="<?php echo url('/services/mobile-testing'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Mobile Testing (Appium)</a>
                        <a href="<?php echo url('/services/project-management'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Project Management</a>
                    </div>
                </div>
                
                <!-- Mobile Data Extraction -->
                <div class="block">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold flex items-center justify-between" onclick="toggleMobileSubmenu('data-menu')">
                        <span><i class="fas fa-download mr-2"></i>Data Extraction</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="data-menu" class="hidden pl-6 space-y-1">
                        <a href="<?php echo url('/services/web-scraping-crawling'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Web Scraping & Crawling</a>
                        <a href="<?php echo url('/services/api-data-extraction'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">API Data Extraction</a>
                        <a href="<?php echo url('/services/big-data-extraction'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Big Data Extraction</a>
                        <a href="<?php echo url('/services/industry-specific-data-extraction'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Industry-Specific Data</a>
                        <a href="<?php echo url('/services/social-data-extraction'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Social Data Extraction</a>
                    </div>
                </div>
                
                <!-- Mobile Development -->
                <div class="block">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold flex items-center justify-between" onclick="toggleMobileSubmenu('dev-menu')">
                        <span><i class="fas fa-code mr-2"></i>Development</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="dev-menu" class="hidden pl-6 space-y-1">
                        <a href="<?php echo url('/services/web-development'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Web Development</a>
                        <a href="<?php echo url('/services/mobile-development'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Mobile Development</a>
                        <a href="<?php echo url('/services/desktop-development'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Desktop Development</a>
                        <a href="<?php echo url('/services/automation-bot-development'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Automation Bot Development</a>
                        <a href="<?php echo url('/services/responsive-web-conversion'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Responsive Web Conversion</a>
                    </div>
                </div>
                
                <!-- Mobile RPA -->
                <div class="block">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold flex items-center justify-between" onclick="toggleMobileSubmenu('rpa-menu')">
                        <span><i class="fas fa-robot mr-2"></i>RPA</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="rpa-menu" class="hidden pl-6 space-y-1">
                        <a href="<?php echo url('/services/uipath'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">UiPath</a>
                        <a href="<?php echo url('/services/blue-prism'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Blue Prism</a>
                        <a href="<?php echo url('/services/automation-anywhere'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Automation Anywhere</a>
                        <a href="<?php echo url('/services/microsoft-power-automate'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Microsoft Power Automate</a>
                        <a href="<?php echo url('/services/playwright-rpa'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Playwright RPA</a>
                        <a href="<?php echo url('/services/rpa-testing'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">RPA Testing</a>
                    </div>
                </div>
                
                <!-- Mobile Workflow Automation -->
                <div class="block">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold flex items-center justify-between" onclick="toggleMobileSubmenu('workflow-menu')">
                        <span><i class="fas fa-cogs mr-2"></i>Workflow Automation</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="workflow-menu" class="hidden pl-6 space-y-1">
                        <a href="<?php echo url('/services/n8n'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">n8n Automation</a>
                        <a href="<?php echo url('/services/make-automation'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Make Automation</a>
                        <a href="<?php echo url('/services/zapier-automation'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Zapier Automation</a>
                    </div>
                </div>
                
                <!-- Mobile Digital Marketing -->
                <div class="block">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold flex items-center justify-between" onclick="toggleMobileSubmenu('marketing-menu')">
                        <span><i class="fas fa-bullhorn mr-2"></i>Digital Marketing</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="marketing-menu" class="hidden pl-6 space-y-1">
                        <a href="<?php echo url('/services/seo-services'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">SEO Services</a>
                        <a href="<?php echo url('/services/local-seo'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Local SEO</a>
                        <a href="<?php echo url('/services/claim-your-business'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Claim Your Business</a>
                        <a href="<?php echo url('/services/sem-ppc'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">SEM & PPC</a>
                        <a href="<?php echo url('/services/social-media-marketing'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Social Media Marketing</a>
                        <a href="<?php echo url('/services/content-marketing'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Content Marketing</a>
                        <a href="<?php echo url('/services/email-marketing-automation'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Email Marketing</a>
                        <a href="<?php echo url('/services/conversion-rate-optimization'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">CRO</a>
                        <a href="<?php echo url('/services/analytics-reporting'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Analytics & Reporting</a>
                        <a href="<?php echo url('/services/guest-posting'); ?>" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">Guest Posting</a>
                    </div>
                </div>
                
                <a href="<?php echo url('/about'); ?>" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold">About</a>
                <a href="<?php echo url('/contact'); ?>" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-bold">Contact</a>
            </div>
        </div>
    </div>
    
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Mobile submenu toggle
        function toggleMobileSubmenu(menuId) {
            const menu = document.getElementById(menuId);
            const button = event.target.closest('button');
            const icon = button.querySelector('.fa-chevron-down, .fa-chevron-up');
            
            menu.classList.toggle('hidden');
            
            if (menu.classList.contains('hidden')) {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            } else {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            }
        }
    </script>
</nav>
