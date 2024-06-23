<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Project

This is a sample Laravel project demonstrating the main features and structure of a Laravel application.

## Requirements

To run the project locally, you will need:

- PHP >= 8.0
- Composer
- MySQL

## Installation

Follow these steps to set up the project on your local machine:

### Step 1: Clone the Repository

```sh
git clone git@github.com:nbekposynov/AndersonLab.git
cd AndersonLab

### Step 2: Install Dependencies
composer install 

### Step 3:  Set Up the .env File
cp .env.example .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=andersonlab
DB_USERNAME=root
DB_PASSWORD=

### Step 4: Run Migrations
php artisan migrate
###
### Step 5: run local server
php artisan serve


