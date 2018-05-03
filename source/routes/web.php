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

Route::get('/', function () {
    return view('admin.theme.index');
})->name('dashboard');

Route::get('/not-found', function(){
	return view('admin.theme.404-page');
})->name('not-found');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/cms', 'CMSController@index')->name('cms');
Route::get('/cms/{id}','CMSController@edit')->name('cms.edit');
Route::put('/cms/{id}','CMSController@update')->name('cms.update');


Route::get('/services', 'ServicesController@index')->name('services.list');
Route::get('/services/{id}', 'ServicesController@edit')->name('services.edit');
Route::put('/services/{id}', 'ServicesController@update')->name('services.update');