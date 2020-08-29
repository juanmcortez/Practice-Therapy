// require("dotenv").config();
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

mix.js('resources/assets/js/practice_therapy.js', 'public/js')
    .extract(
        [
            'lodash',
            'popper.js',
            'jquery',
            'vue',
            'vue-router',
            'axios'
        ]
    )
    .sass('resources/assets/sass/practice_therapy.scss', 'public/css')
    .sass('resources/assets/sass/theme.scss', 'public/css')
    .version();
