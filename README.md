## Project Setup

This README file provides instructions for setting up the project environment and getting started with development.

## Prerequisites

- PHP (version 7.4 or higher)
- Composer
- MySQL or any other supported database system
- Git

## Getting Started

- Clone the repository to your local machine:

```
git clone https://github.com/solomond6/doe-and.git
```

- Navigate to the project directory:
```
cd your-repository
```
- Install PHP dependencies using Composer:
```
composer install
```

- Copy the .env.example file to .env and configure the database connection:
```
cp .env.example .env
```

- Update the database credentials in the .env file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
- Update the mail credentials in the .env file:
```
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
```

- Generate the application key:
```
php artisan key:generate
```

- Run the database migrations::
```
php artisan migrate
```

- Serve the application:
```
php artisan serve
```