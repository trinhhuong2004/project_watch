<?php
    // $edittk=select_onetk();
    // extract($edittk);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa tài khoản</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Tên tài khoản</label>
                <input type="text" class="form-control" required name="name" value="<?=$name?>" id="exampleInputPassword1" placeholder="Tên tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Họ Và Tên</label>
                <input type="text" class="form-control" required name="ho_ten" value="<?=$ho_ten?>" id="exampleInputPassword1" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="email" value="<?=$email?>" placeholder="Email tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Năm sinh</label>
                <input type="date" class="form-control" required id="exampleInputEmail1" name="nam_sinh" value="<?=$nam_sinh?>" placeholder="Năm sinh tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Avatar</label>
                <input type="file" class="form-control" required id="exampleInputEmail1" name="avt" placeholder="Ảnh đại diện tài khoản">
                <img style="width:100px;height:150px;" src="../../../public/images/<?=$avt?>" alt="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="pass" value="<?=$pass?>" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="phone"  value="<?=$phone?>" placeholder="Số điện thoại tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên role</label>
                <select name="vai_tro" id="">
                    <option value="<?=$vai_tro?>">Khách hàng</option>
                    <option value="<?=$vai_tro?>">Admin</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>