<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class DatabaseController extends Controller
{
    public function getCreateTables()
    {
        if (Schema::hasTable('danh_sach_sp')) {
            Schema::drop('danh_sach_sp');
        }
        if (Schema::hasTable('san_pham')) {
            Schema::drop('san_pham');
        }
        if (Schema::hasTable('kieu_sp')) {
            Schema::drop('kieu_sp');
        }
        if (Schema::hasTable('loai_sp')) {
            Schema::drop('loai_sp');
        }
        if (Schema::hasTable('danh_muc')) {
            Schema::drop('danh_muc');
        }
        if (Schema::hasTable('hoa_don')) {
            Schema::drop('hoa_don');
        }
        if (Schema::hasTable('khach_hang')) {
            Schema::drop('khach_hang');
        }
        if (Schema::hasTable('nha_cung_cap')) {
            Schema::drop('nha_cung_cap');
        }

        Schema::create('khach_hang', function ($table) {
            $table->increments("id");
            $table->string("ten", 50);
            $table->string("mat_khau", 50);
            $table->string("email", 50);
            $table->text("dia_chi");
            $table->string("sdt", 20);
            $table->timestamps();
        });
        echo ("create table khach_hang success \n");
        Schema::create('nha_cung_cap', function ($table) {
            $table->increments("id");
            $table->string("ten", 50);
            $table->text("dia_chi");
            $table->string("sdt", 12);
            $table->timestamps();
        });
        echo ("create table nha_cung_cap success \n");
        Schema::create('danh_muc', function ($table) {
            $table->increments("id");
            $table->string("ten", 50);
            $table->timestamps();
        });
        echo ("create table danh_muc success \n");
        Schema::create('loai_sp', function ($table) {
            $table->increments("id");
            $table->string("ten", 50);
            $table->integer("id_danh_muc")->unsigned();
            $table->timestamps();
            $table->foreign('id_danh_muc')->references('id')->on('danh_muc');
        });
        echo ("create table loai_sp success \n");
        Schema::create('kieu_sp', function ($table) {
            $table->increments("id");
            $table->integer("id_loai_sp")->unsigned();
            $table->string("ten", 50);
            $table->timestamps();
            $table->foreign('id_loai_sp')->references('id')->on('loai_sp');
        });
        echo ("create table kieu_sp success \n");
        Schema::create('san_pham', function ($table) {
            $table->increments("id");
            $table->string("ten", 50);
            $table->integer("id_kieu_sp")->unsigned();
            $table->integer("id_nha_cc")->unsigned();
            $table->string("chat_lieu_chinh", 20);
            $table->string("xuat su", 20);
            $table->integer("so_luong");
            $table->double("gia_ban", 8, 2);
            $table->double("gia_nhap", 8, 2);
            $table->integer("so_lan_xem");
            $table->text('hinh_anh');
            $table->timestamps();
            $table->foreign('id_kieu_sp')->references('id')->on('kieu_sp');
            $table->foreign('id_nha_cc')->references('id')->on('nha_cung_cap');
        });
        echo ("create table san_pham success \n");
        Schema::create('hoa_don', function ($table) {
            $table->increments("id");
            $table->integer("id_kh")->unsigned();
            $table->string("trang_thai", 50);
            $table->text("yeu_cau")->nullable(true);
            $table->string("tong_tien", 20)->nullable(true);
            $table->string("noi_nhan", 20)->nullable(true);
            $table->string("so_dien_thoai_nhan", 12)->nullable(true);
            $table->timestamps();
            $table->foreign('id_kh')->references('id')->on('khach_hang');

        });
        echo ("create table hoa_don success \n");
        Schema::create('danh_sach_sp', function ($table) {
            $table->integer("id_sp")->unsigned();
            $table->integer("id_hd")->unsigned();
            $table->integer("so_luong");
            $table->string("trang_thai", 10);
            $table->timestamps();
            $table->foreign('id_sp')->references('id')->on('san_pham');
            $table->foreign('id_hd')->references('id')->on('hoa_don');
        });
        echo ("create table danh_sach_sp success");
    }
}
