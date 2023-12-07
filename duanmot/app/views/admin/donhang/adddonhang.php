
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm đơn đặt hàng</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=adddonhang" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">ID người dùng</label>
                <input type="text" class="form-control" required name="id_nguoi_dung" id="exampleInputPassword1" placeholder="ID người dùng">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày đặt hàng</label>
                <input type="date" class="form-control" required name="ngay_dat" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Địa chỉ giao hàng</label>
                <input type="text" class="form-control" required name="dia_chi_giao_hang" id="exampleInputPassword1" placeholder="Địa chỉ giao hàng">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="0">Chờ xác nhận</option>
                    <option value="1">Đã phê duyệt</option>
                    <option value="2">Chờ giao hàng</option>
                </select>
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="adddonhang" class="btn btn-primary">Thêm đơn hàng</button>
        </div>
    </form>
</div>