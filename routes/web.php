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

Route::get('/', 'TrangChuController@getTrangChu');
Route::get('database', 'DatabaseController@getCreateTables');
Route::group(['prefix' => '/', 'middleware' => 'loginKH'], function () {
    Route::group(['prefix' => 'gio_hang'], function () {
        Route::get('/{id}', 'TrangChuController@getGioHang');
        Route::get('/bo_sp/{id}', 'TrangChuController@getBoSanPham');
        Route::get('/them_sp/{id}', 'TrangChuController@getThemSanPham');
        Route::get('/giam_sp/{id}', 'TrangChuController@getDecreaseProduct');
        Route::get('/mua_hang/{id}','TrangChuController@getMuaHang');
        Route::get('/thong_tin/{id}','TrangChuController@getThongTinGiaoHang');
        Route::post('/thong_tin/{id}','TrangChuController@postThongTinGiaoHang');
    });
    Route::get('dang_xuat', 'TrangChuController@getDangXuat');
});
Route::get('tim_kiem','TrangChuController@getTimKiemSP');
Route::get('dang_nhap', 'TrangChuController@getRegisterAndLogin');
Route::get('dang_ky', 'TrangChuController@getRegisterAndLogin');
Route::post('dang_nhap', 'TrangChuController@postLogin');
Route::post('dang_ky', 'TrangChuController@postRegister');
Route::get('chi_tiet_sp/{id}', 'TrangChuController@getChiTiecSanPham');
