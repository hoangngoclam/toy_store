<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danh_muc';

    public function loaisp()
    {
        return $this->hasMany('App\LoaiSP', 'id_danh_muc','id');
    }
}
