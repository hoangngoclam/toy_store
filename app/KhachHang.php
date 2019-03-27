<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hang';
    public function dssp()
    {
        return $this->hasMany('App\DanhSachSP', 'id_kh');
    }
    public function hoadon()
    {
        return $this->hasMany('App\HoaDon', 'id_kh');
    }
}
