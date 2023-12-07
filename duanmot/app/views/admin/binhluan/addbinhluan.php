
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tạo bình luận</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=addbinhluan" method="post" >
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">ID tài khoản</label>
                <input type="text" class="form-control" required name="id_tai_khoan" id="exampleInputPassword1" placeholder="ID tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ID sản phẩm</label>
                <input type="text" class="form-control" required name="id_san_pham" id="exampleInputPassword1" placeholder="ID sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nội dung bình luận</label>
                <input type="text" class="form-control" required name="noi_dung_binh_luan" id="exampleInputPassword1" placeholder="Nội dung bình luận">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày bình luận</label>
                <input type="date" class="form-control" required name="ngay_binh_luan" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Đánh giá</label>
                <input type="text" class="form-control" required name="danh_gia" id="exampleInputPassword1" placeholder="Đánh giá">
            </div>
        
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addbinhluan" class="btn btn-primary">Thêm bình luận</button>
        </div>
    </form>
</div>