<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table = 'nha_cung_cap';
    
    public function sanpham()
    {
        return $this->hasMany('App\SanPham','id_nha_cc');
    }
}
