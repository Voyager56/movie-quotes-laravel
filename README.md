## Table of Contents

-   [Introduction](#introduction)
-   [Prerequisites](#prerequisites)
-   [Tech Stack](#tech-stack)
-   [Getting Started](#getting-started)
-   [Development](#development)
-   [Deployment](#deployment)
-   [Resources](#resources)

## Introduction

<p> This is a simple laravel application for movie quotes,
    which is used to store and retrieve quotes from a database.
    The application is written in PHP and uses the Laravel framework.
    The application is deployed on a local server using the laravels built in deployment tools.

 </p>

## Prerequisites

-   [PHP@8.0 and up ](#https://www.php.net/downloads)
-   [Composer@2.3.5 and up ](#https://getcomposer.org/download/)
-   [Laravel@9 and up](#https://laravel.com/docs/7.x/installation)
-   [npm@8 and up](#https://nodejs.org/en/download/)
-   [MySQL Latest](#https://www.mysql.com/downloads/)

## Tech Stack

-   [PHP](#https://www.php.net/)
-   [Laravel](#https://laravel.com/)
-   [MySQL](#https://www.mysql.com/)

## Getting Started

-   Installation:

Clone the repository: `git clone https://github.com/RedberryInternship/movie-quotes-Levan-Mikatadze`

Go to the root directory of the repository: `cd movie-quotes-Levan-Mikatadze`

Install neccesary dependencies: `composer install`

Install node modules: `npm install`

Copy the .env file to the root directory: `cp .env.example .env`
and fill in the values for the database connection.

Generate the keys for the application: `php artisan key:generate`

Initialize the database: `php artisan migrate:fresh --seed`

Link storage directory to public directory: `php artisan storage:link`

## Development

to run the application: `php artisan serve`
and for live reloading: `npm run watch`

## Deployment

-   ssh into the server: `ssh username@ipaddress`
-   run sudo apt update
-   run sudo `add-apt-repository ppa:ondrej/php`
-   run `sudo apt install php8.0 php8.0-curl php8.0-mbstring php8.0-xml php8.0-sqlite3`
-   run `sudo apt purge apache2`
-   to install sqlite3 run `sudo apt install zip sqlite3` and and for php `curl https://getcomposer.org/installer | php` then `sudo mv composer.phar /usr/bin/composer`
-   for node `curl https://deb.nodesource.com/setup_14.x | sudo bash ` then `sudo apt install nodejs`

-   install the application but use sqlite3 instead of mysql, run php artisan optimize for better performance

-   after all this install php-fpm and nginx and configure them.

## Recources

-   [Draw Sql](https://drawsql.app/redberry-18/diagrams/moviequotes)
-   [Spatie LaraveL Translatable](https://spatie.be/docs/laravel-translatable/v6/introduction)

-   to make an Admin-User run `php artisan make:admin email password`
