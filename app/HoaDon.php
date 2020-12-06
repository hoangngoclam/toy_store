<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_don';
    public function khachhang()
    {
        return $this->hasOne('App\KhachHang', 'id_kh');
    }
    public function dssp()
    {
        return $this->hasMany('App\DanhSachSP', 'id_hd');
    }
}
