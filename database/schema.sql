-- Database schema for Quality Assurance & Development company
CREATE DATABASE IF NOT EXISTS itech_qa;
USE itech_qa;

-- Service categories table
CREATE TABLE service_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(100) UNIQUE NOT NULL,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    icon VARCHAR(50),
    sort_order INT DEFAULT 0,
    status ENUM('published', 'draft') DEFAULT 'published',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Services table
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    slug VARCHAR(100) UNIQUE NOT NULL,
    title VARCHAR(200) NOT NULL,
    short_desc TEXT,
    content LONGTEXT,
    icon VARCHAR(50),
    sort_order INT DEFAULT 0,
    status ENUM('published', 'draft') DEFAULT 'published',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES service_categories(id)
);

-- Insert service categories
INSERT INTO service_categories (slug, title, description, icon, sort_order, status) VALUES
('software-quality-assurance', 'Software Quality Assurance', 'Comprehensive testing solutions for software reliability', 'fa-shield-alt', 1, 'published'),
('data-extraction', 'Data Extraction', 'ETL testing and data migration validation services', 'fa-download', 2, 'published'),
('software-development', 'Software Development', 'Custom software development and maintenance', 'fa-code', 3, 'published'),
('robotic-process-automation', 'Robotic Process Automation', 'RPA testing and automation solutions', 'fa-robot', 4, 'published'),
('digital-marketing', 'Digital Marketing', 'Digital marketing QA and optimization services', 'fa-bullhorn', 5, 'published');

-- Insert services under categories
INSERT INTO services (category_id, slug, title, short_desc, content, icon, sort_order, status) VALUES
-- Software Quality Assurance
(1, 'manual-testing', 'Manual Testing', 'Comprehensive manual testing for reliability.', 'Test case design & execution, regression testing, smoke & sanity testing, and cross-browser validation.', 'fa-check-circle', 1, 'published'),
(1, 'test-automation', 'Test Automation', 'Accelerated release cycles with automated testing.', 'Selenium, Cypress, Playwright automation with CI/CD integration.', 'fa-cogs', 2, 'published'),
(1, 'api-testing', 'API Testing', 'Secure and efficient API testing.', 'REST & SOAP API validation using Postman, RestAssured, and JMeter.', 'fa-plug', 3, 'published'),
(1, 'database-testing', 'Database Testing', 'Ensure database integrity and performance.', 'Data validation, indexing, constraints, and query performance testing.', 'fa-database', 4, 'published'),
-- Data Extraction
(2, 'etl-testing', 'ETL Testing', 'ETL pipeline validation and testing.', 'Comprehensive ETL testing for data accuracy and performance.', 'fa-exchange-alt', 1, 'published'),
(2, 'data-migration', 'Data Migration', 'Secure data migration services.', 'End-to-end data migration with validation and testing.', 'fa-arrows-alt', 2, 'published'),
-- Software Development
(3, 'web-development', 'Web Development', 'Custom web application development.', 'Full-stack web development using modern technologies.', 'fa-globe', 1, 'published'),
(3, 'mobile-development', 'Mobile Development', 'Native and cross-platform mobile apps.', 'iOS, Android, and hybrid mobile application development.', 'fa-mobile-alt', 2, 'published'),
-- Robotic Process Automation
(4, 'rpa-development', 'RPA Development', 'Custom RPA bot development.', 'UiPath, Blue Prism, and Automation Anywhere bot development.', 'fa-robot', 1, 'published'),
(4, 'rpa-testing', 'RPA Testing', 'RPA bot testing and validation.', 'Comprehensive testing for automation bots and workflows.', 'fa-check-double', 2, 'published'),
-- Digital Marketing
(5, 'seo-services', 'SEO Services', 'Search engine optimization and audits.', 'Complete SEO audits, optimization, and performance tracking.', 'fa-search', 1, 'published'),
(5, 'marketing-automation', 'Marketing Automation', 'Automated marketing campaign testing.', 'A/B testing, conversion tracking, and marketing funnel optimization.', 'fa-chart-line', 2, 'published');