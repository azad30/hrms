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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::resource('admin/role', 'Admin\\RoleController');
Route::resource('admin/master_data', 'Admin\\Addresstype');
Route::get('/test', 'HomeController@test');
Route::get('/addresstype', 'HomeController@address');
