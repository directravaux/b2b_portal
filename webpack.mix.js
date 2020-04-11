const mix = require('laravel-mix');

/*--------------------------------------------------------------------*/

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// copy images folder into laravel public folder
mix.copyDirectory('resources/template/src/assets/media', 'public/assets/media');

/**
* plugins specific issue workaround for webpack
* @see https://github.com/morrisjs/morris.js/issues/697
* @see https://stackoverflow.com/questions/33998262/jquery-ui-and-webpack-how-to-manage-it-into-module
*/
mix.webpackConfig({
   resolve: {
       alias: {
           'morris.js': 'morris.js/morris.js',
           'jquery-ui': 'jquery-ui',
       },
   },
});
