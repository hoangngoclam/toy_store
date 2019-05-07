@extends('admin.index')
@section('content')
@include('admin.modal.themKieuSP')
@include('admin.modal.suaKieuSP')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12 mb-2">
            <button class="btn btn-primary float-right" type="button" data-toggle="modal" 
                data-target="#them-kieu-sp" >Them +</button>
        </div>
        <div class="col-md-12">
            <table id="dataTable"  class="table table-striped" style="width:100%">
                <thead >
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Loại sản phẩm</th>
                        <th scope="col">Tên Kiểu sản phẩm</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kieuSP as $item)
                    <tr id={{$item->id}}>
                        <th scope="row">{{ $item->id}}</th>
                        <td>{{ $item->loaisp->danhmuc->ten}}</td>
                        <td>{{ $item->loaisp->ten}}</td>
                        <td>{{ $item->ten}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Button group">
                                <button class="btn btn-warning btn-sua-kieu-sp" data-target="#sua-kieu-sp" data-toggle="modal"  data-id="{{ $item->id  }}" type="button">Sửa</button>
                                <button class="btn btn-danger btn-xoa-kieu-sp" data-id="{{ $item->id  }}">Xóa</button>                            
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
        function themKieuSanPham() {
            document.getElementById("them-kieu-san-pham").submit();
        }
        function suaKieuSanPham(){
            document.getElementById('sua-kieu-san-pham').submit();
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btn-sua-kieu-sp').click(function(e) {
        var idKieuSP = e.currentTarget.dataset.id;
        jQuery.ajax({
            url: `{{ url('/admin/xem_kieu_san_pham/${idKieuSP}') }}`,
            method: 'get',
            success: function(result) {
                $('#sua-loai-sp').val(result.id_loai_sp);
                $('#input-sua-kieu-sp').val(result.ten);
                $('#id-sua-kieu-sp').val(result.id);
            }
        });
    });
        $('.btn-xoa-kieu-sp').click(function(e) {
        var idKieuSP = e.currentTarget.dataset.id;
        jQuery.ajax({
            url: `{{ url('/admin/xoa_kieu_san_pham') }}`,
            method: 'post',
            data : {id : idKieuSP},
            success: function(result) {
                if(result == "error"){
                    alert("Đã có sản phẩm thuộc kiểu sản phẩm này");
                }
                $('#'+result).remove();
            }
        });
    });
    </script>
@endsection