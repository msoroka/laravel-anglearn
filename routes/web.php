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

Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/packages/words/{id}', 'PackageController@words')->name('packages.words');
Route::resource('/admin/users', 'UsersController');
Route::resource('/admin/categories', 'CategoryController');
Route::resource('/admin/subcategories', 'SubcategoryController');
Route::resource('/admin/words', 'WordController');
Route::resource('/admin/packages', 'PackageController');
Route::get('/test/{id}', 'TestController@test')->name('test');
Route::get('/learn/{id}', 'LearnController@learn')->name('learn');
Route::get('/package/{id}', 'PackageHomeController@package')->name('package');
Route::resource('/panel', 'PanelController');
Route::resource('/result', 'ResultController');
