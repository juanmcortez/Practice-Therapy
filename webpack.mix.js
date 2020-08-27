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

mix.js(
    [
        'resources/js/practice_therapy.js',
        'resources/js/main.js'
    ],
    'public/js')
    .extract(
        [
            'vue',
            'axios',
            'popper.js'
        ]
    )
    .sass('resources/sass/practice_therapy.scss', 'public/css')
    .sass('resources/sass/theme.scss', 'public/css')
    .version();
