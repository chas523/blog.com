const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css',[
        require("tailwindcss"),
    ]);


mix.copyDirectory('resources/images', 'public/images');
mix.sass('resources/sass/home.sass', 'public/css');
mix.sass('resources/sass/fixed_footer.sass', 'public/css');
mix.js('resources/js/hamburger.js', 'public/js'); 




if (mix.inProduction()) {
    mix.version();
}
