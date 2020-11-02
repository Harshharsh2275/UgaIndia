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

mix.less('resources/less/blogs/main.less','public/styles/blogs')
   .less('resources/less/blogs/search.bar.main.less','public/styles/blogs') 
   .sass('resources/sass/blogs/cards.main.blogs.scss','public/styles/blogs')
   .sass('resources/sass/welcome.scss','public/styles')
   .sass('resources/sass/app.scss','public/styles/common')
   .less('resources/less/layouts/header.less','public/styles/layouts');
