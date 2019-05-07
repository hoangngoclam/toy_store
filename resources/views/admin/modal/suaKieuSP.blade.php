<!-- Modal -->
<div class="modal fade" id="sua-kieu-sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Sửa kiểu sản phẩm</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="sua-kieu-san-pham" action="./admin/sua_kieu_san_pham">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" id="id-sua-kieu-sp">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Danh Mục sản Phẩm</label>
                            <input id="sua-danh-muc-sp" name="id_danh_muc" class="form-control" value="{{ $danhmuc->ten }}" type="text" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">loại sản phẩm</label>
                            <select id="sua-loai-sp" name="id_loai_sp" class="form-control">
                                @foreach ($danhmuc->loaisp as $item)
                                <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name-sp">Tên kiểu sản phẩm</label>
                            <input id="input-sua-kieu-sp" name="kieu_sp" class="form-control" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="suaKieuSanPham()">Sửa</button>
            </div>
        </div>
    </div>
</div>