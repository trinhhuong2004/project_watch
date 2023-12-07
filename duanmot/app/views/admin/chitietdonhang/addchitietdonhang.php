
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tạo chi tiết đơn hàng</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=addctdh" method="post" >
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">ID đơn đặt hàng</label>
                <input type="text" class="form-control" required name="id_don_dat_hang" id="exampleInputPassword1" placeholder="ID người dùng">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ID sản phẩm</label>
                <input type="text" class="form-control" required name="id_san_pham" id="exampleInputPassword1" placeholder="ID sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Số lượng</label>
                <input type="number" class="form-control" required name="so_luong" id="exampleInputPassword1" placeholder="Địa chỉ giao hàng">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Size sản phẩm</label>
                <select name="size_san_pham" id="">
                    <option value="0">40</option>
                    <option value="1">42</option>
                    <option value="2">38</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá bán</label>
                <input type="text" class="form-control" required name="gia_ban" id="exampleInputPassword1" placeholder="Địa chỉ giao hàng">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addctdh" class="btn btn-primary">Thêm đơn hàng</button>
        </div>
    </form>
</div>