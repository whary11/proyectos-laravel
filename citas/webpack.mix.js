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

 mix.babel([
   'resources/assets/js/jquery.min.js',
   'resources/assets/js/bootstrap.min.js',
   'resources/assets/js/adminlte.min.js',
   'resources/assets/admin/js/app.js',

 ], 'public/admin/js/app.min.js')
 .babel([
    'resources/assets/admin/css/bootstrap.min.css',
    'resources/assets/admin/css/font-awesome.min.css',
    'resources/assets/admin/css/ionicons.min.css',
    'resources/assets/admin/css/AdminLTE.min.css',
    'resources/assets/admin/css/skin-blue.min.css',
    'resources/assets/admin/css/app.css',
  ], 'public/admin/css/app.min.css');








   //
   // mix.webpackConfig({
   //      module: {
   //          rules: [{
   //              test: /\.jsx?$/,
   //              exclude: /node_modules(?!\/@<redacted>)/,
   //              use: [{
   //                  loader: 'babel-loader',
   //                  options: Config.babel()
   //              }]
   //          }]
   //      }
   //  })
