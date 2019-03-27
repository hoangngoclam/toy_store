<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_pham';

    public function nhacc()
    {
        return $this->hasOne('App\NhaCungCap', 'id_nha_cc');
    }
    
    public function kieusp()
    {
        return $this->hasOne('App\KieuSP', 'id_kieu_sp');
    }
    public function dssp()
    {
        return $this->hasMany('App\DanhSachSP', 'id_sp');
    }
}
