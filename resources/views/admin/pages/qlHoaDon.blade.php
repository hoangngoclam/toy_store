@extends('admin.index')
@section('content')
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
                        <th scope="col">Trang thai</th>
                        <th scope="col">Tong tien</th>
                        <th scope="col">Noi nhan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hoadon as $item)
                    <tr id={{$item->id}}>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{ $item->trang_thai}}</td>
                        <td>{{ $item->tong_tien}}</td>
                        <td>{{ $item->noi_nhan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection