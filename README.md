# Quiz_Management


Quiz Management System
A dynamic and interactive quiz management system built using PHP and Smarty Framework. This application provides an intuitive admin panel to manage quiz questions, add dynamic options, select correct answers, and perform CRUD operations.

Features
Admin Panel
Add new questions with dynamic options.
Select one correct option using radio buttons.
Visually delete options while maintaining logical data integrity.
Display all questions in a professional, tabular format:
Columns: No., Question, Options, Correct Option, Actions.
Dropdown to view all available options for each question.
Highlight the correct option with a badge.
Search and filter questions for easier management.
Perform CRUD operations:
Edit: Update questions, options, and correct answers.
Delete: Soft delete questions with confirmation prompts.
Dynamic Options Management
Add or remove options dynamically using JavaScript.
Auto-update option numbering and placeholders on changes.
Use hidden input fields for handling visibility of deleted options.
Technologies Used
Backend
PHP: Core logic and API handling.
Smarty Framework: For templating and separation of concerns.
Frontend
HTML5: Semantic structure.
Bootstrap: Responsive design and professional styling.
JavaScript: Dynamic behavior for option management.
Database
MySQL: Storing questions, options, and their relationships.
Setup Instructions
Prerequisites
XAMPP or any local server with PHP and MySQL installed.
Composer for managing dependencies.
Installation
Clone the repository:

bash
Copy
Edit
git clone https://github.com/your-username/quiz-management-system.git
cd quiz-management-system
Setup Smarty:

Install Smarty using Composer:
bash
Copy
Edit
composer require smarty/smarty
Create necessary folders:
bash
Copy
Edit
mkdir templates templates_c cache configs
Database Setup:

Import the provided quiz_app.sql file into your MySQL database.
Update database credentials in config/database.php:
php
Copy
Edit
define('DB_HOST', 'localhost');
define('DB_NAME', 'quiz_app');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
Run the Application:

Start your local server (e.g., XAMPP).
Access the application in your browser:
perl
Copy
Edit
http://localhost/quiz-management-system/public/index.php
