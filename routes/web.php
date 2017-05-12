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
Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');

    /*
     * ******************
     * CRUDs
     * ******************
     */
    Route::resource('admin/role', 'Admin\\RoleController');
    Route::resource('master_data/address_type', 'MasterData\\AddressTypeController');
    Route::resource('house/my_house', 'House\\MyHouseController');
    Route::resource('house/my_flat', 'House\\MyFlatController');
    Route::resource('house/renter', 'House\\RenterController');

});
Route::get('/test', 'HomeController@test');
