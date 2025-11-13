🧩 Laravel CRUD using Query Builder

This project is a basic CRUD (Create, Read, Update, Delete) application built with Laravel using Query Builder instead of Eloquent ORM.
It’s ideal for beginners learning how to handle database operations directly in Laravel.


🚀 Features

   1. Add new records

   2. View all records

   3. Edit and update data

   4. Delete records

   5. Validation and form handling

   6. Built with Laravel Query Builder (no Eloquent models used)


🛠️ Tech Stack

   1. Laravel 12+

   2. PHP 8.2

   3. MySQL (or any supported DB)

   4.  Bootstrap 5 for UI 


⚙️ Installation

# Clone the repository


git clone https://github.com/NareshG375/laravel-CRUD-with-query-builder.git

# Navigate to project folder
cd laravel-CRUD-with-query-builder

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Set up database credentials in .env

# Run migrations (if used)
php artisan migrate


# Run the Seeder (Add Dummy Data)

To quickly insert sample data into the database for testing CRUD operations, run the seeder command:

php artisan db:seed


✅ This will execute your database seeders and populate the tables with dummy data (if factories and seeders are defined).


# Start development server
php artisan serve

Then visit 👉 http://localhost:8000


