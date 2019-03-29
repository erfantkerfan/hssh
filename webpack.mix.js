let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js');
mix.combine([
    "public/js/app.js",
    "public/js/gtag.js",
    "public/js/jquery-1.11.0.min.js",
    "public/js/jquery.min.3.3.1.js",
    "public/js/bootstrap.min.3.3.7.js",
],"public/js/app.js").version();

mix.sass('resources/assets/sass/app.scss','public/css');
mix.combine([
    "public/css/app.css",
   "public/css/bootstrap.3.3.7.css",
   "public/css/googleapis.css",
   "public/css/font-awesome.min.css",
   ],"public/css/app.css").version();