const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/login.js', 'public/js')
    .js('resources/js/signup.js', 'public/js')
    .js('resources/js/email.js', 'public/js')
    .js('resources/js/pages/home.js', 'public/js/pages')
    .js('resources/js/pages/about.js', 'public/js/pages')
    .js('resources/js/pages/comparison.js', 'public/js/pages')
    .js('resources/js/pages/suppliers.js', 'public/js/pages')
    .js('resources/js/pages/items.js', 'public/js/pages')
    .sass('resources/sass/app.scss', 'public/css');
