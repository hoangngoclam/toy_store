<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KieuSP extends Model
{
    protected $table = 'kieu_sp';
    public function sanpham()
    {
        return $this->hasMany('App\SanPham', 'id_kieu_sp');
    }
    public function loaisp()
    {
        return $this->belongsTo('App\LoaiSP', 'id_loai_sp');
    }
}
