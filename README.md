<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About SEO ERA Task

Hello,

It looks like a simple task I had a lot of fun working on it. I wanted to use the brand new Livewire technology from Laravel team. And I like it so much. Combined with Laravel 8, SQLite & Tailwind CSS I have built this mini shop. I could expand the features but I wanted to keep it shotalized and straight forward. However, I wrote every single byte in this project's folder even the translation "misc.php" files. If you have any further questions please let me know. 

Sincerely,
Mohammed Mahmoud

## Requirements
- PHP >= 7.3
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Optimization
``composer install --optimize-autoloader --no-dev``

## Optimizating Configuration Loading
``php artisan config:cache``

## Optimizing Route Loading
``php artisan route:cache``

## Optimizing View Loading
``php artisan view:cache``

## How to run the project quickly?
- Navigate to the project root folder
- execute ``composer install --optimize-autoloader --no-dev``
- ``php artisan key:generate``
- Generate .env file (You will find an example version)
- Check the database path in .ENV file
- Seed the database using the seeders (``php artisan db:seed``)
- ``php artisan serve``

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
