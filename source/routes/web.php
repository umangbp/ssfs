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


	Route::get('ssfs-admin/team-members', 'TeamMemberController@index')->name('team-members.list');
	Route::get('ssfs-admin/team-members/add', 'TeamMemberController@create')->name('team-members.create');
	Route::post('ssfs-admin/team-members', 'TeamMemberController@store')->name('team-members.store');
	Route::put('ssfs-admin/team-members/{id}', 'TeamMemberController@update')->name('team-members.update');
	Route::get('ssfs-admin/team-members/{id}', 'TeamMemberController@edit')->name('team-members.edit');
	Route::get('ssfs-admin/team-members/delete/{id}', 'TeamMemberController@destroy')->name('team-members.destroy');

	Route::get('ssfs-admin/meta', 'MetaController@index')->name('meta.list');
	Route::get('ssfs-admin/meta/add', 'MetaController@create')->name('meta.create');
	Route::post('ssfs-admin/meta', 'MetaController@store')->name('meta.store');
	Route::put('ssfs-admin/meta/{id}', 'MetaController@update')->name('meta.update');
	Route::get('ssfs-admin/meta/{id}', 'MetaController@edit')->name('meta.edit');
	Route::get('ssfs-admin/meta/delete/{id}', 'MetaController@destroy')->name('meta.destroy');

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

	Route::get('team', 'Site\SiteController@loadTeamPage')->name('team');

	//Route::get('error', 'Site\SiteController@loadErromPage')->name('error');

	Route::get('/','Site\SiteController@loadHomePage')->name('home');

	Route::get('meta','Site\SiteController@fetchMetaData');

/**
 * ****************************Front END**********************************
 */