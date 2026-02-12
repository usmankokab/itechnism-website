<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - iTechnism</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <h1 class="text-2xl font-bold text-gray-900">iTechnism Admin</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">Welcome, Admin</span>
                        <a href="<?php echo url('/admin/messages'); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mr-2">
                            <i class="fas fa-envelope mr-2"></i>Messages
                        </a>
                        <a href="<?php echo url('/admin/newsletter'); ?>" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mr-2">
                            <i class="fas fa-newspaper mr-2"></i>Newsletter
                        </a>
                        <a href="<?php echo url('/admin/logout'); ?>" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Tab Navigation -->
            <div class="border-b border-gray-200 mb-8">
                <nav class="-mb-px flex space-x-8">
                    <button onclick="showTab('header')" class="tab-btn border-b-2 border-blue-500 py-2 px-1 text-blue-600 font-medium">
                        <i class="fas fa-header mr-2"></i>Header
                    </button>
                    <button onclick="showTab('hero')" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-star mr-2"></i>Hero Section
                    </button>
                    <button onclick="showTab('stats')" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-chart-bar mr-2"></i>Statistics
                    </button>
                    <button onclick="showTab('about')" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-info-circle mr-2"></i>About
                    </button>
                    <button onclick="showTab('services')" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-cogs mr-2"></i>Services
                    </button>
                    <button onclick="showTab('cta')" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bullhorn mr-2"></i>CTA
                    </button>
                    <button onclick="showTab('footer')" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-footer mr-2"></i>Footer
                    </button>
                    <button onclick="showTab('menu')" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars mr-2"></i>Navigation
                    </button>
                    <a href="<?php echo url('/admin/messages'); ?>" class="tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-envelope mr-2"></i>Messages
                    </a>
                </nav>
            </div>

            <!-- Tab Content -->
            <div id="content-area">
                <!-- Content will be loaded here -->
            </div>
        </div>
    </div>

    <script>
        let currentSection = 'header';
        let contentData = {};

        // Load content on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadContent();
            showTab('header');
        });

        async function loadContent() {
            try {
                const response = await fetch('/itech/api/admin.php?action=get_content');
                const data = await response.json();
                
                // Group content by section
                contentData = {};
                data.forEach(item => {
                    if (!contentData[item.section]) {
                        contentData[item.section] = {};
                    }
                    contentData[item.section][item.subsection || 'main'] = item;
                });
            } catch (error) {
                console.error('Error loading content:', error);
            }
        }

        function showTab(section) {
            currentSection = section;
            
            // Update tab styles
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.className = 'tab-btn border-b-2 border-transparent py-2 px-1 text-gray-500 hover:text-gray-700';
            });
            event.target.className = 'tab-btn border-b-2 border-blue-500 py-2 px-1 text-blue-600 font-medium';
            
            // Load section content
            loadSectionContent(section);
        }

        function loadSectionContent(section) {
            const contentArea = document.getElementById('content-area');
            
            if (section === 'menu') {
                loadMenuContent();
                return;
            }
            
            const sectionData = contentData[section] || {};
            let html = `<div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-6 capitalize">${section} Section</h2>
                <div class="space-y-6">`;
            
            Object.keys(sectionData).forEach(subsection => {
                const item = sectionData[subsection];
                html += `
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold mb-4 capitalize">${subsection}</h3>
                        <form onsubmit="updateContent(event, ${item.id})">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                    <input type="text" name="title" value="${item.title || ''}" 
                                           class="w-full border border-gray-300 rounded-md px-3 py-2">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                    <input type="text" name="subtitle" value="${item.subtitle || ''}" 
                                           class="w-full border border-gray-300 rounded-md px-3 py-2">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                                    <textarea name="content" rows="3" 
                                              class="w-full border border-gray-300 rounded-md px-3 py-2">${item.content || ''}</textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Button Text</label>
                                    <input type="text" name="button_text" value="${item.button_text || ''}" 
                                           class="w-full border border-gray-300 rounded-md px-3 py-2">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Button Link</label>
                                    <input type="text" name="button_link" value="${item.button_link || ''}" 
                                           class="w-full border border-gray-300 rounded-md px-3 py-2">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Image URL</label>
                                    <input type="text" name="image_url" value="${item.image_url || ''}" 
                                           class="w-full border border-gray-300 rounded-md px-3 py-2">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                    <i class="fas fa-save mr-2"></i>Update
                                </button>
                            </div>
                        </form>
                    </div>
                `;
            });
            
            html += '</div></div>';
            contentArea.innerHTML = html;
        }

        async function loadMenuContent() {
            try {
                const response = await fetch('/itech/api/admin.php?action=get_menu');
                const menuData = await response.json();
                
                let html = `<div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-bold mb-6">Navigation Menu</h2>
                    <div class="space-y-4">`;
                
                menuData.forEach(item => {
                    html += `
                        <div class="border rounded-lg p-4">
                            <form onsubmit="updateMenu(event, ${item.id})">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                        <input type="text" name="title" value="${item.title}" 
                                               class="w-full border border-gray-300 rounded-md px-3 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">URL</label>
                                        <input type="text" name="url" value="${item.url || ''}" 
                                               class="w-full border border-gray-300 rounded-md px-3 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Position</label>
                                        <input type="number" name="position" value="${item.position}" 
                                               class="w-full border border-gray-300 rounded-md px-3 py-2">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                        <i class="fas fa-save mr-2"></i>Update Menu
                                    </button>
                                </div>
                            </form>
                        </div>
                    `;
                });
                
                html += '</div></div>';
                document.getElementById('content-area').innerHTML = html;
            } catch (error) {
                console.error('Error loading menu:', error);
            }
        }

        async function updateContent(event, id) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            const data = {
                title: formData.get('title'),
                subtitle: formData.get('subtitle'),
                content: formData.get('content'),
                button_text: formData.get('button_text'),
                button_link: formData.get('button_link'),
                image_url: formData.get('image_url')
            };
            
            try {
                const response = await fetch('/itech/api/admin.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `action=update_content&id=${id}&data=${encodeURIComponent(JSON.stringify(data))}`
                });
                
                const result = await response.json();
                
                if (result.success) {
                    alert('Content updated successfully!');
                    loadContent(); // Reload content
                } else {
                    alert('Error updating content');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Error updating content');
            }
        }

        async function updateMenu(event, id) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            const data = {
                title: formData.get('title'),
                url: formData.get('url'),
                position: formData.get('position')
            };
            
            try {
                const response = await fetch('/itech/api/admin.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `action=update_menu&id=${id}&data=${encodeURIComponent(JSON.stringify(data))}`
                });
                
                const result = await response.json();
                
                if (result.success) {
                    alert('Menu updated successfully!');
                } else {
                    alert('Error updating menu');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Error updating menu');
            }
        }
    </script>
</body>
</html>