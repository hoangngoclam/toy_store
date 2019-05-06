@extends('admin.index')
@section('content')
@include('admin.modal.xemSP')
@include('admin.modal.suaSP')
@include('admin.modal.themSP')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12 mb-2">
            <button class="btn btn-primary float-right" type="button" data-toggle="modal" 
                data-target="#them-sp" >Them +</button>

        </div>
        <div class="col-md-12">
            <table id="dataTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Ten</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanpham as $item)
                    <tr id={{ $item->id }}>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{ $item->ten}}</td>
                        <td>{{ $item->so_luong}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Button group">
                                <button class="btn btn-primary btn-xem-sp" data-id="{{ $item->id  }}"
                                    data-toggle="modal" data-target="#xem-sp">Xem</button>
                                <button class="btn btn-warning btn-sua-sp" data-id="{{ $item->id  }}"
                                    data-toggle="modal" data-target="#sua-sp">Sửa</button>
                                <button class="btn btn-danger">Xóa</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>



@endsection
@section('js')

<script>
function themSanPham() {
    document.getElementById("them-san-pham").submit();
}

function suaSanPham() {
    document.getElementById("sua-san-pham").submit();
}

$(document).ready(function() {
    $('.btn-xem-sp').click(function(e) {
        var idSP = e.currentTarget.dataset.id;
        jQuery.ajax({
            url: `{{ url('/admin/xem_san_pham/${idSP}') }}`,
            method: 'get',
            success: function(result) {
                console.log(result);
                // var customer = result[0];
                // console.log(customer);
                $('#ten-sp').text(result.ten);
                $('#kieu-sp').text(result.id_kieu_sp);
                $('#nha-cc').text(result.id_nha_cc);
                $('#chat-lieu-chinh').text(result.chat_lieu_chinh);
                $('#so-luong').text(result.so_luong);
                $('#gia-ban').text(result.gia_ban);
                $('#gia-nhap').text(result.gia_nhap);
            }
        });
    });


    $('.btn-sua-sp').click(function(e) {
        var idSP = e.currentTarget.dataset.id;
        jQuery.ajax({
            url: `{{ url('/admin/xem_san_pham/${idSP}') }}`,
            method: 'get',
            success: function(result) {
                console.log(result);
                // var customer = result[0];
                // console.log(customer);
                $('#id-ten').val(result.ten);
                $('#id-kieu-sp').val(result.id_kieu_sp);
                $('#id-nha-cc').val(result.id_nha_cc);
                $('#id-chat-lieu-chinh').val(result.chat_lieu_chinh);
                $('#id-so-luong').val(result.so_luong);
                $('#id-gia-ban').val(result.gia_ban);
                $('#id-gia-nhap').val(result.gia_nhap);
                $('#id-hinh-anh').val(result.hinh_anh);
                $('#id-edit-sp').val(result.id);
            }
        });
    });
});
</script>
@endsection