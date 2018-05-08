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
/*
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');*/


mix.styles([
	'resources/assets/assets-backend/bower_components/bootstrap/dist/css/bootstrap.min.css',
	'resources/assets/assets-backend/dist/css/AdminLTE.min.css',
	'resources/assets/assets-backend/dist/css/skins/skin-blue.min.css',
	'resources/assets/assets-backend/css/admin-styles.css',
], 'public/admin/css/all.css').version();


mix.scripts([
	'resources/assets/assets-backend/bower_components/jquery/dist/jquery.min.js',
	'resources/assets/assets-backend/bower_components/bootstrap/dist/js/bootstrap.min.js',
	'resources/assets/assets-backend/dist/js/adminlte.min.js',
	'resources/assets/assets-backend/dist/js/demo.js',
],'public/admin/js/all.js').version();