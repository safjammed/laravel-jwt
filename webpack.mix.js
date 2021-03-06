const mix = require('laravel-mix');
require('laravel-mix-alias');
require('laravel-mix-bundle-analyzer');

mix.alias({
    '@app': '/resources/js',
});
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

mix.react('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').extract().version();
// mix.browserSync('127.0.0.1:8000');
if (!mix.inProduction()) {
    mix.bundleAnalyzer();
}
