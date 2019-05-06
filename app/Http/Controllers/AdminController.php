<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\SanPham;
use Illuminate\Support\Facades\DB;
use App\HoaDon;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function postAdminLogin(Request $request)
    {
        $admin = Admin::where("ten", "=", $request->user_name)->where("mat_khau", "=", $request->password)->first();
        
        if ($admin) {
            $request->session()->put('admin', $admin);
            return view('admin/pages/general');
        } else {
            $error = 'Tên hoặc mật khẩu không chính xác';
            return view('adminLogin')->with("thong_bao", $error);
        }
    }
    public function getDSSanPham(){
        $sanpham = SanPham::all();
        return view('admin/pages/qlSanPham')->with('sanpham',$sanpham);
    }
    public function postThemSanPham(Request $request){
        $sanPham = new SanPham();
        $sanPham->ten = "erer";
        $sanPham->id_kieu_sp = 20;
        $sanPham->id_nha_cc = 10;
        $sanPham->chat_lieu_chinh ="113";
        $sanPham->so_luong = 20;
        $sanPham->gia_ban = 12000;
        $sanPham->gia_nhap = 10000;
        $sanPham->so_lan_xem = 0;
        $sanPham->hinh_anh = "https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/d/o/do-choi-xe-bus-thong-minh-7.jpg";
        $sanPham->save();
        return Redirect("admin/sanpham");
    }
    public function getSuaSanPham($id){
        $sanPham = SanPham::find($id);
        return view('admin/pages/suaSanPham')->with('sanpham',$sanPham);
    }
    public function getSuaHoaDon($id){
        $hoadon = HoaDon::find($id);
        return view('admin/pages/suaHoaDon')->with('hoadon',$hoadon);
    }
    public function postEditSanPham(Request $request){
        $sanPham = SanPham::find($request->id);
        $sanPham->ten = "erer";
        $sanPham->id_kieu_sp = 20;
        $sanPham->id_nha_cc = 10;
        $sanPham->chat_lieu_chinh ="113";
        $sanPham->so_luong = 20;
        $sanPham->gia_ban = 12000;
        $sanPham->gia_nhap = 10000;
        $sanPham->so_lan_xem = 0;
        $sanPham->hinh_anh = "https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/d/o/do-choi-xe-bus-thong-minh-7.jpg";
        $sanPham->save();
        return Redirect("admin/sanpham");
    }
    public function postEditHoaDon(Request $request){
        $hoadon = HoaDon::find($request->id);
        $hoadon->trang_thai = "Da_mua";
        $hoadon->yeu_cau = "111111";
        $hoadon->tong_tien = 11111;
        $hoadon->noi_nhan = "Lam Dong";
        $hoadon->ten_nguoi_nhan = "Hello";
        $hoadon->so_dien_thoai_nhan = "112121212";
        $hoadon->save();
        return Redirect("admin/sanpham");
    }
    public function getDSHoaDon(){
        $hoadon = HoaDon::all();
        return view('admin/pages/qlHoaDon')->with('hoadon',$hoadon);
    }
    public function getAdminLogin()
    {
        return view('adminLogin');
    }
    public function getXemSanPham($id){
        $sanpham = SanPham::find($id);
        return $sanPham;
    }
}
