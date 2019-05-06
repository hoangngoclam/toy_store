@extends('admin.index')
@section('content')
@include('admin.modal.xemSP')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12 mb-2">
            <button class="btn btn-primary float-right" type="button">Them +</button>
        </div>
        <div class="col-md-12">
            <table id="dataTable"  class="table table-striped" style="width:100%">
                <thead >
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Ten</th>
                        <th scope="col">Kiểu sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Giá nhập </th>
                        <th scope="col">Số Lần xem</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanpham as $item)
                    <tr id={{ $item->id }}>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{ $item->ten}}</td>
                        <td>{{ $item->kieusp->ten}}</td>
                        <td>{{ $item->so_luong}}</td>
                        <td>{{ $item->gia_ban}}</td>
                        <td>{{ $item->gia_nhap}}</td>
                        <td>{{ $item->so_lan_xem}}</td>
                        <td>
                           <div class="btn-group" role="group" aria-label="Button group">
                               <button class="btn btn-primary btn-xem-sp" data-id="{{ $item->id  }}" data-toggle="modal" data-target="#xem-sp">Xem</button>
                               <button class="btn btn-warning" data-id="{{ $item->id  }}">Sửa</button>
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

    <script >
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
                // $('#customer-name').text(customer.name);
                // $('#customer-address').text(customer.address);
                // $('#customer-phone').text(customer.phone_number);
                // $('#customer-job').text(customer.job);
                // $('#customer-status').text(customer.status);
                // var invitedDate = moment(customer.invitation_date,
                //     'YYYY-MM-DD hh:mm:ss');
                // var now = new Date();
                // var dateLost = moment([now.getFullYear(), now.getMonth(), now
                //     .getDate()
                // ]).diff(moment([invitedDate.year(), invitedDate.month(),
                //     invitedDate.date()
                // ]), 'days') - 10;
                // $('#number_day_lost').text(dateLost);
                // $('#money_lost').text(moneyBDay * dateLost)
            }
        });
    });
});
    </script>
    
@endsection