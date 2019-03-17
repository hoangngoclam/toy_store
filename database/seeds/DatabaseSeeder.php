<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
         // DB::table('danh_muc')->insert([
         //    'ten'=>'Đồ chơi trẻ em',
         //    'created_at'=>Carbon::now(),
         //    'updated_at'=>Carbon::now(),
         // ]);
         // $array_loai_sp = ['Đồ chơi ngoài trời','Đồ chơi vận động','Đồ chơi điện tử',"Đồ chơi xếp hình","Đồ chơi gỗ ","Đồ chơi trí tuệ","Đồ chơi nấu ăn","Đồ chơi mạo hiểm","Xe đồ chơi","Đồ chơi mô hình"];
         // foreach ($array_loai_sp as $key => $loai_sp) {
         //    DB::table('loai_sp')->insert([
         //       'ten'=>$loai_sp,
         //       'id_danh_muc'=>1,
         //       'created_at'=>Carbon::now(),
         //       'updated_at'=>Carbon::now(),
         //    ]);
         // }
         // $array_kieu_sp = ['Cầu trượt','Giầy patin','Thú nhún','Xe điều khiển bằng pin','Xe điều khiển bằng điện',
         // 'Nha banh','Nhà chơi ngựa','Xe máy điện','Bóng rổ','Búp bê','Lều cắm trại','Súng','Cung nõ','Đàng',"Đồ chơi đeo tay","Máy game","Game xếp hình"
         // ,"Xếp gỗ ","Game handmade","Trang trí","Đồ hàng","xe mô hình","xe đạp","kèn"];
         // foreach ($array_kieu_sp as $key => $kieu_sp) {
         //    DB::table('kieu_sp')->insert([
         //       'ten'=>$kieu_sp,
         //       'id_loai_sp'=>rand(1,10),
         //       'created_at'=>Carbon::now(),
         //       'updated_at'=>Carbon::now(),
         //    ]);
         // }
         //  for($i=0;$i<=100;$i++){
         //    DB::table('khach_hang')->insert([
         //       'ten'=>str_random(10),
         //       'email'=>str_random(8).'@gmail.com',
         //       'sdt'=>'0978228963',
         //       'dia_chi'=>str_random(100).' Đà Lạt, Lâm Đồng.',
         //       'created_at'=>Carbon::now(),
         //       'updated_at'=>Carbon::now(),
         //    ]);
         // }
         // for($i=0;$i<=10;$i++){
         //    DB::table('nha_cung_cap')->insert([
         //       'ten'=>str_random(10),
         //       'sdt'=>'0978228963',
         //       'dia_chi'=>str_random(100).' Đà Lạt, Lâm Đồng.',
         //       'created_at'=>Carbon::now(),
         //       'updated_at'=>Carbon::now(),
         //    ]);
         // }
         // for($i=0;$i<=100;$i++){
         //    DB::table('san_pham')->insert([
         //       'ten'=>str_random(10),
         //       'id_kieu_sp'=>rand(1,24),
         //       'id_nha_cc'=>rand(1,10),
         //       'chat_lieu_chinh'=>str_random(4),
         //       'xuat su'=>str_random(10),
         //       'so_luong'=>rand(1,100),
         //       'hinh_anh'=>'https://media.bibomart.net/u/bbm/product/2015/08/25/17/48/410_410/360215_xe_3_banh_cho_be_1.jpg',
         //       'gia_ban'=>rand(10000,1000000),
         //       'gia_nhap'=>rand(10000,1000000),
         //       'so_lan_xem'=>rand(1,1000),
         //       'created_at'=>Carbon::now(),
         //       'updated_at'=>Carbon::now(),
         //    ]);
         // }
         // for($i=0;$i<=100;$i++){
         //    DB::table('hoa_don')->insert([
         //       'id_kh'=>rand(1,100),
         //       'trang_thai'=>'ĐA_GIAO',
         //       'yeu_cau'=>"Không có yêu cầu gì thêm",
         //       'tong_tien'=>rand(10000,1000000),
         //       'noi_nhan'=>str_random(20),
         //       'so_dien_thoai_nhan'=>'02092332309',
         //       'created_at'=>Carbon::now(),
         //       'updated_at'=>Carbon::now(),
         //    ]);
         // }
         for($i=0;$i<=100;$i++){
            DB::table('danh_sach_sp')->insert([
               'id_kh'=>rand(1,100),
               'id_sp'=>rand(1,100),
               'id_hd'=>rand(1,100),
               'trang_thai'=>'ĐA_GIAO',
               'created_at'=>Carbon::now(),
               'updated_at'=>Carbon::now(),
            ]);
         }


     }
}
