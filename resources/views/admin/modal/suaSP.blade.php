<!-- Modal -->
<div class="modal fade" id="sua-sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="sua-san-pham" action="./admin/sua_san_pham" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <input type="hidden" id="id-edit-sp" name="id" >
                        <div class="form-group col-md-6">
                            <label for="name-sp">Tên sản phẩm</label>
                            <input id="id-ten" name="ten" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Kiểu sản phẩm</label>
                            <select id="id-kieu-sp" name="kieu_sp" class="form-control">
                                    @foreach ($kieusp as $itemKieuSP)
                                    <option value="{{ $itemKieuSP->id }}">{{ $itemKieuSP->ten }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Nhà sản xuất</label>
                            <select id="id-nha-cc" name="nha_cc" class="form-control">
                                    @foreach ($nhacc as $itemNhacc)
                                    <option value="{{ $itemNhacc->id }}">{{ $itemNhacc->ten }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Chất liệu chính</label>
                            <input id="id-chat-lieu-chinh" name="chat_lieu_chinh" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Số lượng</label>
                            <input id="id-so-luong" name="so_luong" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Giá bán</label>
                            <input id="id-gia-ban" name="gia_ban" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Giá nhập</label>
                            <input id="id-gia-nhap" name="gia_nhap" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Hình ảnh</label>
                            <input id="id-hinh-anh" name="hinh_anh" class="form-control" type="text" disabled>

                            {{-- <img class="w-100" id="hinh-anh-edit" src="" alt=""> --}}

                            <input type="file" name="myFile2" id="input-image-edit" class="form-control">
                            
                            <div class="w-100" id="image-edit">
                                {{-- //hinh anh duoc chen tu js  --}}
                            </div>
                     
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="suaSanPham()">Save</button>
            </div>
        </div>
    </div>
</div>