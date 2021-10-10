<p align="center">
    <img src="https://github.com/faridahthalib2117/FaridahBeritaOlahraga/blob/main/public/assets/img/Home-Screenshot.PNG" width="1280" title="Screenshot Halaman Beranda"/>
</p>

# Project UTS-UAS Faridah

Website Berita Olahraga / Sport News Website

## Requirements

The following tools are required in order to start the installation.

- PHP >=8.0
- [Composer](https://getcomposer.org/download/)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

## Installation

1. Clone this repository locally with `git clone git@github.com:blade-ui-kit/demo.git blade-ui-kit-demo`
2. Setup a local database called `laravel`
3. Copy the `.env.example` file to `.env` and fill in the database credentials
4. Install the PHP dependencies with `composer install`
5. Generate a new app key with `php artisan key:generate`
6. Prepare the database by running `php artisan migrate --seed`
7. Install and compile the front-end dependencies with `npm install && npm run dev`
8. Serve the website locally by running `php artisan serve`

You can now visit the app in your browser by visiting [http://127.0.0.1:8000](http://127.0.0.1:8000). 

## Commands

Command | Description
--- | ---
**`php artisan test`** | Run the tests
`php artisan migrate:fresh --seed` | Reset the database
`npm run watch` | Watch for changes in CSS and JS files