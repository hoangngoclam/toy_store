<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    protected $table = 'loai_sp';
    public function kieusp()
    {
        return $this->hasMany('App\KieuSP', 'id_loai_sp');
    }
    public function danhmuc()
    {
        return $this->belongsTo('App\DanhMuc', 'id_danh_muc');
    }
}
