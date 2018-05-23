<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * ****************************Admin Panel Route**********************************
 */

Route::get('ssfs-admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('ssfs-admin/login', 'Auth\LoginController@login');
Route::get('ssfs-admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('ssfs-admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('ssfs-admin/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('ssfs-admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('ssfs-admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('ssfs-admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('ssfs-admin/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('ssfs-admin/not-found', function(){
	return view('admin.theme.404-page');
})->name('not-found');

Route::middleware(['check.login'])->group(function () {


	Route::get('ssfs-admin/', function () {
    	return view('admin.theme.index');
	})->name('ssfs.admin.dashboard');


	Route::get('ssfs-admin/cms', 'CMSController@index')->name('cms');
	Route::get('ssfs-admin/cms/{id}','CMSController@edit')->name('cms.edit');
	Route::put('ssfs-admin/cms/{id}','CMSController@update')->name('cms.update');


	Route::get('ssfs-admin/services', 'ServicesController@index')->name('services.list');
	Route::get('ssfs-admin/services/{id}', 'ServicesController@edit')->name('services.edit');
	Route::put('ssfs-admin/services/{id}', 'ServicesController@update')->name('services.update');

	Route::get('ssfs-admin/banners', 'BannerController@index')->name('banners.list');
	Route::get('ssfs-admin/banners', 'BannerController@create')->name('banners.create');
	Route::post('ssfs-admin/banners', 'BannerController@store')->name('banners.store');
	Route::get('ssfs-admin/banners', 'BannerController@edit')->name('banners.edit');
	Route::put('ssfs-admin/banners', 'BannerController@update')->name('banners.update');
});


/**
 * ****************************Admin Panel Route End**********************************
 */


/**
 * ****************************Front Route**********************************
 */

	Route::get('service/{name}', 'Site\SiteController@loadServicePage')->name('service');

	Route::get('about-us', 'Site\SiteController@loadAboutUsPage')->name('about-us');

	Route::get('contact-us', 'Site\SiteController@loadContactUsPage')->name('contact-us');

	Route::get('careers', 'Site\SiteController@loadCareersPage')->name('careers');

	Route::get('/','Site\SiteController@loadHomePage')->name('home');


/**
 * ****************************Front END**********************************
 */