<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use App\DanhSachSP;
use App\HoaDon;
use App\KhachHang;
use App\SanPham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;

class TrangChuController extends Controller
{
    const TrangThaiDangChon = "Dang_chon";
    const TrangThaiDaMua = "DA_MUA";

    public function __construct()
    {
        $danhMuc = DanhMuc::all();
        view()->share('danhmuc', $danhMuc);
        if (session()->get('khachhang')) {
            return view('registAndLogin');
        }
    }
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
            $donhang = HoaDon::where("id_kh", "=", $user->id)->where("trang_thai", "=", self::TrangThaiDangChon)->first();
            if($donhang){
                $dssp = DanhSachSP::where("id_hd", "=", $donhang->id)->get();
                if($dssp){
                    $request->session()->put("number_product", count($dssp));
                }
            }
            
            $request->session()->put("number_product", "0");
            $request->session()->put('khachhang', $user);
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
        $request->session()->put('khachhang', $user);
        return Redirect("/")->with("user", $user);
    }

    public function getChiTiecSanPham($id)
    {
        $sanpham = SanPham::find($id);
        $sanpham->so_lan_xem++;
        $sanpham->save();
        return view('products/chiTietSanPham')->with("sanpham", $sanpham);
    }
    public function getGioHang($id)
    {
        $donhang = HoaDon::where("id_kh", "=", $id)->where("trang_thai", "=", self::TrangThaiDangChon)->first();
        if ($donhang) {
            $idHoaDon = $donhang->id;
            $dssp = DanhSachSP::where("id_hd", "=", $idHoaDon)->get();
            $tongTien = 0;

            foreach ($dssp as $value) {
                $tongTien += $value->sanpham->gia_ban;
            }
            $data = ["dssp" => $dssp, "tongTien" => $tongTien];
            return view('products/gioHang')->with($data);
        } else {
            $hoadon = new HoaDon;
            $hoadon->id_kh = $id;
            $hoadon->trang_thai = self::TrangThaiDangChon;
            $hoadon->save();
            return view('products/gioHang')->with("dssp", []);
        }

    }

    public function getBoSanPham($id, Request $request)
    {
        DanhSachSP::where("id_sp", "=", $id)->delete();
        request()->session()->put("number_product", $request->session()->get('number_product') - 1);
        return Redirect('./gio_hang/' . session()->get('khachhang')->id);
    }

    public function getThemSanPham($id, Request $request)
    {
        // Tim hoa don trang thai: Dang_chon cua khach
        $hoadon = HoaDon::where("id_kh", "=", session()->get('khachhang')->id)->where("trang_thai", "=", self::TrangThaiDangChon)->get();
        if (count($hoadon)) {
            $dsspChon = DanhSachSP::where("id_sp", "=", $id)->where("id_hd", "=", $hoadon[0]->id)->get();

            if (count($dsspChon)) {
                $dsspChon[0]->so_luong++;
                $dsspChon[0]->save();
            } else {
                DanhSachSP::insertGetId(["id_hd" => $hoadon[0]->id, "id_sp" => $id, "so_luong" => 1]);
                request()->session()->put("number_product", $request->session()->get('number_product') + 1);
            }
        } else {
            HoaDon::insertGetId(["id_kh" => session()->get('khachhang')->id, "trang_thai" => self::TrangThaiDangChon]);
            DanhSachSP::insertGetId(["id_hd" => $hoadon[0]->id, "id_sp" => $id, "so_luong" => 1]);
        }
        return Redirect('./chi_tiet_sp/' . $id);
    }
    public function getDecreaseProduct($id){ //id sản phẩm
        $hoadon = HoaDon::where("id_kh", "=", session()->get('khachhang')->id)->where("trang_thai", "=", self::TrangThaiDangChon)->get();
        if (count($hoadon)) {
            $dsspChon = DanhSachSP::where("id_sp", "=", $id)->where("id_hd", "=", $hoadon[0]->id)->get();
            if($dsspChon[0]->so_luong <=1){
                return redirect('gio_hang/bo_sp/'.$id);
            }
            else{
                $dsspChon[0]->so_luong--;
                $dsspChon[0]->save();
            }
        } 
        return Redirect('gio_hang/' . session()->get('khachhang')->id);
    }
    public function getThongTinGiaoHang(){
        return view('products/thongTinGiaoHang');
    }
    public function getMuaHang($id){
        $hoadon = HoaDon::find($id);
        $hoadon->trang_thai = self::TrangThaiDaMua;
        $hoadon->save();
        $dssp = DanhSachSP::where("id_hd",$id)->get();
        foreach ($dssp as $itemDSSP) {
            $sanpham = SanPham::find($itemDSSP->id_sp);
            if($sanpham){
                $sanpham->so_luong -= $itemDSSP->so_luong;
                $sanpham->save();
            }
        }
    }
    public function postThongTinGiaoHang(Request $request,$id){
        $hoadon = HoaDon::find($id);
        $hoadon->trang_thai = "DA_MUA";
        // $hoadon->ten_nguoi_nhan = $request->name;
        // $hoadon->so_dien_thoai_nhan = $request->phone_number;
        // $hoadon->noi_nhan = $request->address;
        // $hoadon->yeu_cau = $request->request;
        // $hoadon->save();
        return redirect('/');
    }
    public function getDangXuat()
    {
        session()->put('khachhang');
        return redirect('/');
    }
}
