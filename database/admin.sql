-- Admin tables
USE itech_db;

-- Admin users table
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    role ENUM('admin', 'editor') DEFAULT 'admin',
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Website content table for all sections
CREATE TABLE IF NOT EXISTS website_content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section VARCHAR(50) NOT NULL,
    subsection VARCHAR(50),
    title VARCHAR(255),
    subtitle VARCHAR(255),
    content TEXT,
    button_text VARCHAR(100),
    button_link VARCHAR(255),
    image_url VARCHAR(255),
    extra_data JSON,
    status ENUM('active', 'inactive') DEFAULT 'active',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Navigation menu items
CREATE TABLE IF NOT EXISTS nav_menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    parent_id INT DEFAULT NULL,
    title VARCHAR(100) NOT NULL,
    url VARCHAR(255),
    position INT DEFAULT 0,
    status ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (parent_id) REFERENCES nav_menu(id) ON DELETE CASCADE
);

-- Insert default admin user (password: admin123)
INSERT INTO admin_users (username, password, email) VALUES 
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@itechnism.com');

-- Insert default website content
INSERT INTO website_content (section, subsection, title, subtitle, content, button_text, button_link) VALUES
-- Header
('header', 'logo', 'iTechnism', 'Quality Assurance & Development', '', '', '/itech'),
('header', 'phone', '+1 (555) 123-4567', '', '', '', ''),
('header', 'email', 'info@itechnism.com', '', '', '', ''),
-- Hero Section
('hero', 'main', 'Quality Assurance Excellence', 'Delivering world-class QA solutions for reliable, high-performance software', 'Professional QA services for your business needs', 'Explore Services', '/itech/services'),
('hero', 'secondary', 'Get Started', '', '', 'Get Started', '/itech/contact'),
-- Statistics
('stats', 'projects', '500+', 'Projects Completed', '', '', ''),
('stats', 'clients', '50+', 'Happy Clients', '', '', ''),
('stats', 'success', '99%', 'Success Rate', '', '', ''),
('stats', 'support', '24/7', 'Support Available', '', '', ''),
-- About Section
('about', 'main', 'About iTechnism', 'Leading QA & Development Company', 'We are a team of experienced professionals dedicated to delivering high-quality software testing and development solutions.', 'Learn More', '/itech/about'),
-- Services Section
('services', 'main', 'Our Services', 'Comprehensive Solutions for Your Business', 'From quality assurance to full-stack development, we provide end-to-end solutions.', 'View All Services', '/itech/services'),
-- CTA Section
('cta', 'main', 'Ready to Transform Your Business?', 'Join 50+ companies who trust iTechnism for their quality assurance and development needs.', '', 'Start Your Project', '/itech/contact'),
('cta', 'secondary', 'Explore Services', '', '', 'Explore Services', '/itech/services'),
-- Footer
('footer', 'company', 'iTechnism', 'Quality Assurance & Development Services', 'Professional QA, development, and digital marketing solutions for businesses worldwide.', '', ''),
('footer', 'address', 'Our Office', '123 Business Street, Suite 100\nTech City, TC 12345', '', '', ''),
('footer', 'social', 'Follow Us', '', '', '', '');

-- Insert navigation menu
INSERT INTO nav_menu (title, url, position) VALUES
('Home', '/itech', 1),
('Services', '#', 2),
('About', '/itech/about', 3),
('Contact', '/itech/contact', 4);

-- Insert service submenus
INSERT INTO nav_menu (parent_id, title, url, position) VALUES
(2, 'Software QA', '/itech/services#qa', 1),
(2, 'Data Extraction', '/itech/services#data', 2),
(2, 'Development', '/itech/services#dev', 3),
(2, 'RPA', '/itech/services#rpa', 4),
(2, 'Digital Marketing', '/itech/services#marketing', 5);