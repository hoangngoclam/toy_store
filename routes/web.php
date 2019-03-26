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

Route::get('/','TrangChuController@getTrangChu');
Route::get('database','DatabaseController@getCreateTables');
Route::group(['prefix' => '/'], function () {
    Route::get('gop_y', 'TrangChuController@getFeedBack');
    Route::get('dang_nhap','TrangChuController@getRegisterAndLogin');
    Route::get('dang_ky','TrangChuController@getRegisterAndLogin');
});