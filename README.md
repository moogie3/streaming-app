**STREAM APP**

**A Streaming Platform Inspired by Netflix**



**📖 Overview**

This project is a streaming application built with Laravel 11 and MySQL (XAMPP) to provide users with an on-demand video streaming experience. With a focus on user-friendliness and efficiency, the app features a content library, streaming playback, and an admin dashboard for managing content and users.



**🌟 Key Features**

User Authentication: Secure login, registration, and account management.
Content Library: Browse, search, and view categorized video content.
Video Playback: High-quality streaming with smooth playback capabilities.
Admin Panel: Manage content, users, categories, and subscription settings.
Laravel Framework: Scalable and secure backend operations.
Database: Uses MySQL for efficient data management.


**🚀 Getting Started**


Prerequisites
Before starting, ensure the following are installed on your system:

PHP: Version 8.2 or higher.
Composer: Dependency manager for PHP.
XAMPP: Includes Apache, PHP, and MySQL.
Node.js: Required for managing frontend assets with npm.

Installation

Clone the Repository

-git clone https://github.com/moogie3/stream-app.git

-cd stream-app

Install Dependencies

Install PHP dependencies using Composer:

-composer install

Install JavaScript dependencies with npm:

-npm install && npm run dev

Database Setup

Create a database in MySQL (via XAMPP) for the application.
Update the .env file with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

Migrate and Seed Database

Run the following commands to set up the database structure and seed data:

-php artisan migrate

-php artisan db:seed

Run the Application

Start the Laravel development server:

-php artisan serve

Access the application in your browser at http://localhost:8000.



**📊 Usage**
User Features
1. Browse Content
   Explore video content categorized by genres and types.
2. Search and Filter
   Quickly search for content or filter by specific criteria.
3. Watch Videos
   Stream videos with high-quality playback.
4. User Account
   Manage user profiles, including favorites and viewing history.
5. Admin Features
   - Content Management
   - Add, update, or delete video content.
   - Organize content into categories and genres.
6. User Management
   Manage user accounts and roles.
7. Reports
   Generate reports on user activity and content performance.


**🤝 Contributing**

We welcome contributions to improve the app!


**🛡️ License**

This project is licensed under the MIT License.

**📧 Contact**
For questions or feedback, feel free to reach out:

Author: Moogie3
Email: [jefrydwijaya3@gmail.com]
