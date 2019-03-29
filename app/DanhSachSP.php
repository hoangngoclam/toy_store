<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhSachSP extends Model
{
    protected $table = 'danh_sach_sp';
    public function sanpham()
    {
        return $this->hasOne('App\SanPham', 'id_sp');
    }
    public function hoadon()
    {
        return $this->hasOne('App\HoaDon', 'id_hd');
    }
}
