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
                        <th scope="col">Ten</th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanpham as $item)
                    <tr id={{$item->id}}>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{ $item->ten}}</td>
                        <td>{{ $item->so_luong}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection