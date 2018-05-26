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

Route::get('ssfs-admin/not-found', 'CMSController@loadNotFoundPage')->name('not-found');

Route::middleware(['check.login'])->group(function () {


	Route::get('ssfs-admin/', 'CMSController@loadDashboard')->name('ssfs.admin.dashboard');


	Route::get('ssfs-admin/cms', 'CMSController@index')->name('cms');
	Route::get('ssfs-admin/cms/{id}','CMSController@edit')->name('cms.edit');
	Route::put('ssfs-admin/cms/{id}','CMSController@update')->name('cms.update');


	Route::get('ssfs-admin/services', 'ServicesController@index')->name('services.list');
	Route::get('ssfs-admin/services/{id}', 'ServicesController@edit')->name('services.edit');
	Route::put('ssfs-admin/services/{id}', 'ServicesController@update')->name('services.update');

	Route::get('ssfs-admin/banners/add', 'BannerController@create')->name('banner.create');
	Route::get('ssfs-admin/banners', 'BannerController@index')->name('banner.list');
	Route::post('ssfs-admin/banners', 'BannerController@store')->name('banner.store');
	Route::put('ssfs-admin/banners/{id}', 'BannerController@update')->name('banner.update');
	Route::get('ssfs-admin/banners/{id}', 'BannerController@edit')->name('banner.edit');
	Route::get('ssfs-admin/banners/delete/{id}', 'BannerController@destroy')->name('banner.destroy');

	Route::get('ssfs-admin/settings', 'CMSController@loadSettings')->name('settings');
	Route::post('ssfs-admin/settings', 'CMSController@updateSettings')->name('settings.update');

	Route::get('ssfs-admin/careers', 'CareersController@index')->name('careers.list');
	Route::get('ssfs-admin/careers/add', 'CareersController@create')->name('careers.create');
	Route::post('ssfs-admin/careers', 'CareersController@store')->name('careers.store');
	Route::put('ssfs-admin/careers/{id}', 'CareersController@update')->name('careers.update');
	Route::get('ssfs-admin/careers/{id}', 'CareersController@edit')->name('careers.edit');
	Route::get('ssfs-admin/careers/delete/{id}', 'CareersController@destroy')->name('careers.destroy');

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