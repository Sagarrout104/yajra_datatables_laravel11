<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel 11 Yajra Datatables

To install and use yajra DataTables in laravel 11; Run composer require yajra/laravel-datatables-oracle command to install yajra dataTables and use function datatables()->of($data)->make(true) of dataTable with data and pass it on views to display in table in laravel application.

In this example guide, we will create a table and display data with searching, sorting, pagination using yajra dataTables package in laravel 11 applications.

## Step 1: Download the New Laravel Application

composer create-project laravel/laravel Project Name

## Step 2: Configure the Database with the Application

Open .env file from root folder of laravel project, and configure database details into it; something like this:

-   DB_CONNECTION=mysql
-   DB_HOST=127.0.0.1
-   DB_PORT=3306
-   DB_DATABASE=your_db_name
-   DB_USERNAME=your_db_user
-   DB_PASSWORD=your_db_pass

## Step 3: Install Yajra DataTables Package

Run the composer require yajra/laravel-datatables-oracle command on cmd to install yajra dataTables in laravel project:

-   cd LaravelDataTables
-   composer require yajra/laravel-datatables-oracle

In laravel 11 version, you do not need to add dataTables aliases and providers in app.php file.

## Step 4: Add Dummy Data on Database

Run the following command on cmd to generate fake data for testing Yajra dataTables in the laravel project; something like this:

-   php artisan tinker
-   User::factory()->count(100)->create()

## Step 5: Create Controller File

Run php artisan make:controller MyTestController command on cmd to create a new controller file:

-   php artisan make:controller MyTestController

## Step 6: Define Routes

Open web.php file from routes folder, and create route in it to handle logic between controller and view file; something like this:

-   Route::get('data-table', [MyTestController::class, 'dataTable']);

## Step 7: Create View

To create view file name dataTables.blade.php in resources/views folder to show dataTables with data from database;

## Step 8: Run and Test Application

Run php artisan serve command on cmd to start application server:

-   php artisan serve

Ready to run this app at http://127.0.0.1:8000/data-table URL on browser:

## Conclusion

We hope with the help of this example tutorial guide you have learned how to install and use YAJRA DataTables in laravel 11 applications.
