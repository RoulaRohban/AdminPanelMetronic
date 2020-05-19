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

  //mix.js('resources/js/app.js', 'public/js/all.js');
   // mix.sass('resources/sass/app.scss', 'public/css/all.css');


mix.styles([
    'public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css',
    'public/assets/plugins/global/plugins.bundle.css',
    'public/assets/css/style.bundle.css',
    'public/css/skins/header/base/light.css',
    'public/assets/css/skins/header/menu/light.css',
    'public/assets/css/skins/brand/dark.css',
    'public/assets/css/skins/aside/dark.css',
    'public/assets/css/pages/login/login-2.css'
], 'public/css/all.css');

mix.scripts([
    'public/assets/js/color.js',
    'public/assets/plugins/global/plugins.bundle.js',
    'public/assets/js/scripts.bundle.js',
    'public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js',
    'public/assets/js/google.js',
    'public/assets/plugins/custom/gmaps/gmaps.js',
    'public/assets/js/pages/dashboard.js'
], 'public/js/app.js');