<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use Illuminate\Support\Facades\DB;
use App\HoaDon;
use App\DanhSachSP;
use Illuminate\Support\Facades\Redirect;

class TrangChuController extends Controller
{
    function getTrangChu(){
        
        $sanphams = DB::table('san_pham')->paginate(15);
        return view('trangChu')->with("sanpham",$sanphams);
    }
    function getFeedBack(){
        return view('feedBack');
    }
    function getRegisterAndLogin(){
        return view('registAndLogin');
    }
    function getChiTiecSanPham($id){
        $sanpham = SanPham::find($id);
        return view('products/chiTietSanPham')->with("sanpham",$sanpham);
    }
    function getGioHang($id){
        $donhang = HoaDon::where("id_kh","=",$id)->where("trang_thai","=","Dang_chon")->first();
        $idHoaDon = $donhang->id;
        $dssp = DanhSachSP::where("id_hd","=",$idHoaDon)->where("trang_thai","=","Dang_chon")->get();
        return view('products/gioHang')->with("dssp",$dssp);
    }
    function getBoSanPham($id){
        DanhSachSP::where("trang_thai","=","Dang_chon")->where("id_sp","=",$id)->delete();
        return Redirect('./gio_hang/1');
    }
    function getThemSanPham($id){
        $hoadon = HoaDon::where("id_kh","=",1)->where("trang_thai","=","Dang_chon")->get();
        if(count($hoadon)){
            DanhSachSP::insertGetId(["id_hd"=>$hoadon[0]->id,"id_sp"=>$id,"trang_thai"=>"Dang_chon"]);
        }
        else{
            HoaDon::insertGetId(["id_kh"=>1,"trang_thai"=>"Dang_chon"]);
            DanhSachSP::insertGetId(["id_hd"=>$hoadon[0]->id,"id_sp"=>$id,"trang_thai"=>"Dang_chon"]);
        }
        return Redirect('./chi_tiet_sp/'.$id);
    }
}
