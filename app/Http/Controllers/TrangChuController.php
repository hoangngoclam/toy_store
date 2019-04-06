<?php

namespace App\Http\Controllers;

use App\DanhSachSP;
use App\HoaDon;
use App\KhachHang;
use App\SanPham;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;

class TrangChuController extends Controller
{
    public function getTrangChu()
    {

        $sanphams = DB::table('san_pham')->paginate(15);
        return view('trangChu')->with("sanpham", $sanphams);
    }
    public function getRegisterAndLogin()
    {
        return view('registAndLogin');
    }
    public function postLogin(Request $request)
    {
        $user = KhachHang::where("ten", "=", $request->user_name)->where("mat_khau", "=", $request->password)->first();
        if ($user) {
            return Redirect("/")->with("user", $user);
        } else {
            $error = 'Tên hoặc mật khẩu không chính xác';
            return view('registAndLogin')->with("thong_bao", $error);
        }
    }
    public function postRegister(Request $request)
    {
        $user = new KhachHang;
        $user->ten = $request->user_name;
        $user->email = $request->email;
        $user->mat_khau = $request->password;
        $user->save();
        return Redirect("/")->with("user", $user);
    }
    public function getChiTiecSanPham($id)
    {
        $sanpham = SanPham::find($id);
        return view('products/chiTietSanPham')->with("sanpham", $sanpham);
    }
    public function getGioHang($id)
    {
        $donhang = HoaDon::where("id_kh", "=", $id)->where("trang_thai", "=", "Dang_chon")->first();
        $idHoaDon = $donhang->id;
        $dssp = DanhSachSP::where("id_hd", "=", $idHoaDon)->where("trang_thai", "=", "Dang_chon")->get();
        return view('products/gioHang')->with("dssp", $dssp);
    }
    public function getBoSanPham($id)
    {
        DanhSachSP::where("trang_thai", "=", "Dang_chon")->where("id_sp", "=", $id)->delete();
        return Redirect('./gio_hang/1');
    }
    public function getThemSanPham($id)
    {
        $hoadon = HoaDon::where("id_kh", "=", 1)->where("trang_thai", "=", "Dang_chon")->get();
        if (count($hoadon)) {

            DanhSachSP::insertGetId(["id_hd" => $hoadon[0]->id, "id_sp" => $id, "trang_thai" => "Dang_chon"]);
        } else {
            HoaDon::insertGetId(["id_kh" => 1, "trang_thai" => "Dang_chon"]);
            DanhSachSP::insertGetId(["id_hd" => $hoadon[0]->id, "id_sp" => $id, "trang_thai" => "Dang_chon"]);
        }
        return Redirect('./chi_tiet_sp/' . $id);
    }
}
