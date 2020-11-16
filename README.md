# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).composer require tymon/jwt-auth

## JWT https://jwt-auth.readthedocs.io/en/develop/
1. Install JWT library
$composer require tymon/jwt-auth
2. Create User model :  https://dev.to/ndiecodes/build-a-jwt-authenticated-api-with-lumen-2afm
$php artisan make:migration create_users_table --create=users


## MySQL Driver
1. Enable mysql driver in php.ini (OL8 /etc/php.ini, Win10 same folder extracted Ferrari : C:\Users\Tim\Documents\Projects\php); look for mysql extension "pdo_mysql" and uncomment; set extensions_dir = C:\...\php\ext
2. php must install in non system folder, i.e. not under C:\Program Files <-- syslog won't work!!

## Faker : https://github.com/fzaninotto/Faker#fakerprovideren_usperson
$ composer require fzaninotto/faker


## CORS solution
Method is not allowed problem error 503 
1. create the class CorsMiddleware
2. register it under $app->middleware =... in bootstrap/app.php
3. use this classes wherever used $request ; avoid error Class Request is undefined.
use Illuminate\Http\Request;



