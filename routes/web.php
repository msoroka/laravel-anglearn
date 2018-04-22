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
Route::resource('/admin/users', 'UsersController');
Route::resource('/admin/categories', 'CategoryController');
Route::resource('/admin/subcategories', 'SubcategoryController');
Route::resource('/admin/words', 'WordController');
