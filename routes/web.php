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
        Route::get('/chi_tiet/{id}', 'TrangChuController@getGioHang');
        Route::get('/bo_sp/{id}', 'TrangChuController@getBoSanPham');
        Route::get('/them_sp/{id}', 'TrangChuController@getThemSanPham');
        Route::get('/giam_sp/{id}', 'TrangChuController@getDecreaseProduct');
        Route::get('/mua_hang/{id}','TrangChuController@getMuaHang');
        Route::get('/thong_tin/{id}','TrangChuController@getThongTinGiaoHang');
        Route::post('/thong_tin/{id}','TrangChuController@postThongTinGiaoHang');
        Route::get('/ds_hoa_don','TrangChuController@getDSHoaDon');
    });
    Route::get('dang_xuat', 'TrangChuController@getDangXuat');
});
Route::get('kieu_sp/{id}','TrangChuController@getTimSPTheoKieuSP');
Route::get('tim_kiem','TrangChuController@getTimKiemSP');
Route::get('dang_nhap', 'TrangChuController@getRegisterAndLogin');
Route::get('dang_ky', 'TrangChuController@getRegisterAndLogin');
Route::post('dang_nhap', 'TrangChuController@postLogin');
Route::post('dang_ky', 'TrangChuController@postRegister');
Route::get('chi_tiet_sp/{id}', 'TrangChuController@getChiTiecSanPham');
Route::group(['prefix' => '/admin','middleware' => 'LoginAdmin'], function () {
    Route::get('sanpham','AdminController@getDSSanPham');
    Route::get('hoadon','AdminController@getDSHoaDon');
    Route::get('them_san_pham','AdminController@getThemSanPham');
    Route::get('xem_san_pham/{id}','AdminController@getXemSanPham');
    Route::post('them_san_pham','AdminController@postThemSanPham');
    Route::get('sua_san_pham/{id}','AdminController@getSuaSanPham');
    Route::post('sua_san_pham','AdminController@postSuaSanPham');
    Route::get('ds_kieu_sp','AdminController@getDSKieuSP');
    Route::post('xoa_san_pham','AdminController@postXoaSanPham');
    Route::post('them_kieu_san_pham','AdminController@postThemKieuSanPham');
    Route::post('sua_kieu_san_pham','AdminController@postSuaKieuSanPham');
    Route::post('xoa_kieu_san_pham','AdminController@postXoaKieuSanPham');
    Route::get('xem_kieu_san_pham/{id}','AdminController@getKieuSP');
    
});
Route::post('admin','AdminController@postAdminLogin');
Route::get('dang_nhap_admin', 'AdminController@getAdminLogin');

