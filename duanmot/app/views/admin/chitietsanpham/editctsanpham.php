<?php
    $editbt=select_onebt();
    extract($editbt);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa biến thể</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">
        <div class="form-group">
                <label for="exampleInputPassword1">tên sản phẩm</label>
                <input type="text" class="form-control" required name="name" value="<?=$name?>" id="exampleInputPassword1" placeholder="Màu sắc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">giá gốc</label>
                <input type="text" class="form-control" required name="gia" value="<?=$gia?>" id="exampleInputPassword1" placeholder="Màu sắc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">giá giảm</label>
                <input type="text" class="form-control" required name="gia_giam" value="<?=$gia_giam?>" id="exampleInputPassword1" placeholder="Màu sắc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">mô tả</label>
                <input type="text" class="form-control" required name="mo_ta" value="<?=$mo_ta?>" id="exampleInputPassword1" placeholder="Màu sắc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Màu sắc</label>
                <input type="text" class="form-control" required name="mau_sac" value="<?=$mau_sac?>" id="exampleInputPassword1" placeholder="Màu sắc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kích thước</label>
                <input type="text" class="form-control" required name="kich_thuoc" value="<?=$kich_thuoc?>" id="exampleInputPassword1" placeholder="Kích thước">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Chất liệu</label>
                <input type="text" class="form-control" required name="chat_lieu" value="<?=$chat_lieu?>" id="exampleInputPassword1" placeholder="Chất liệu">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hình ảnh</label>
                <input  type="file"  required name="hinh_anh"  id="exampleInputPassword1" >
                <img  style="width:100px;height:150px;" src="../../../public/images/<?=$hinh_anh?>" alt="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trọng lượng</label>
                <input type="text" class="form-control" required name="trong_luong" value="<?=$trong_luong?>" id="exampleInputPassword1" placeholder="Trọng lượng">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phụ kiện</label>
                <input type="text" class="form-control" required name="phu_kien" value="<?=$phu_kien?>" id="exampleInputPassword1" placeholder="Phụ kiện">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Khuyến mãi</label>
                <select name="khuyen_mai" id="">
                    <option value="<?=$khuyen_mai?>">-20%</option>
                    <option value="<?=$khuyen_mai?>">-100%</option>
                    <option value="<?=$khuyen_mai?>">-50%</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tình trạng</label>
                <select name="tinh_trang" id="">
                    <option value="<?=$tinh_trang?>">Mới</option>
                    <option value="<?=$tinh_trang?>">cũ</option>
                    <option value="<?=$tinh_trang?>">còn hàng</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Bảo hành</label>
                <select name="bao_hanh" id="">
                    <option value="<?=$bao_hanh?>">3 tháng</option>
                    <option value="<?=$bao_hanh?>">6 tháng</option>
                    <option value="<?=$bao_hanh?>">1 năm</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ID sản phẩm</label>
                <input type="text" class="form-control" required name="id_sanpham" value="<?=$id_sanpham?>" id="exampleInputPassword1" placeholder="Địa chỉ giao hàng">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>