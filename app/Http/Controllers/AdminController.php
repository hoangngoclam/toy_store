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
        $sanPham->ten = $request->ten;
        $sanPham->id_kieu_sp = $request->kieu_sp;//kieeur sp
        $sanPham->id_nha_cc = $request->nha_cc;//nhaf cung cap 
        $sanPham->chat_lieu_chinh =$request->chat_lieu_chinh;
        $sanPham->so_luong = $request->so_luong;
        $sanPham->gia_ban = $request->gia_ban;
        $sanPham->gia_nhap = $request->gia_nhap;
        $sanPham->so_lan_xem =0;
        $sanPham->hinh_anh = $request->hinh_anh;
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
    public function postSuaSanPham(Request $request){
        $sanPham = SanPham::find($request->id);
        $sanPham->ten = $request->ten;
        $sanPham->id_kieu_sp = 2;//kieeur sp
        $sanPham->id_nha_cc = 1;//nhaf cung cap 
        $sanPham->chat_lieu_chinh =$request->chat_lieu_chinh;
        $sanPham->so_luong = $request->so_luong;
        $sanPham->gia_ban = $request->gia_ban;
        $sanPham->gia_nhap = $request->gia_nhap;
        $sanPham->so_lan_xem =0;
        $sanPham->hinh_anh = $request->hinh_anh;
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
        return $sanpham;
    }
}