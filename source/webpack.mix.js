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


/**
 * ****************** Resources for Admin Panel ***********************
 */


mix.styles([
	'resources/assets/assets-backend/bower_components/bootstrap/dist/css/bootstrap.min.css',
	'resources/assets/assets-backend/bower_components/font-awesome/css/font-awesome.min.css',
	'resources/assets/assets-backend/bower_components/ionicons/css/ionicons.min.css',
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



/**
 * ****************** Resources Front End ***********************
 */

mix.styles([
	'resources/assets/assets-frontend/css/style.css',
	'resources/assets/assets-frontend/css/bootstrap.css',
	'resources/assets/assets-frontend/css/owl-carousel.css',
	'resources/assets/assets-frontend/css/theme-color.css',
	'resources/assets/assets-frontend/css/responsive.css',
	'resources/assets/assets-frontend/css/jquery-ui.min.css',
	'resources/assets/assets-frontend/css/animate.css',
	'resources/assets/assets-frontend/css/jquery.fancybox.css',
	'resources/assets/assets-frontend/css/font-awesome.min.css',
	'resources/assets/assets-frontend/css/icomoon.css',
	'resources/assets/assets-frontend/css/custom.css',
],'public/front/css/all.css').version();



mix.scripts([
	'resources/assets/assets-frontend/js/jquery-1.12.4.min.js',
	'resources/assets/assets-frontend/js/bootstrap.min.js',
	'resources/assets/assets-frontend/js/html5shiv.js',
	'resources/assets/assets-frontend/js/owl-carousel.js',
	'resources/assets/assets-frontend/js/modernizr.custom.js',
	'resources/assets/assets-frontend/js/jquery-ui.min.js',
	'resources/assets/assets-frontend/js/jquery.fancybox.js',
	//'resources/assets/assets-frontend/js/js/script.js',
],'public/front/js/all.js').version();