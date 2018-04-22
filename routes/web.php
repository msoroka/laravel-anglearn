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

Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('/admin/users', 'UsersController');
Route::resource('/admin/word', 'WordController');
Route::resource('/admin/package', 'PackageController');
Route::resource('/admin/category', 'CategoryController');
Route::resource('/admin/subcategory', 'SubcategoryController');
Route::resource('/', 'PagesController');

