

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID Tài Khoản</th>
            <th scope="col">Tên Tài Khoản</th>
            <th scope="col">Họ Và Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Năm Sinh</th>
            <th scope="col">Avt</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">Thao tác</th>
        </tr>
        <?php
            // $taikhoan=loadall_taikhoan();
            // foreach ($taikhoan as $row):
            //     extract($row);  ?> 
            <tr>
            <!-- <th><?=$id ?></th>
            <td><?=$name ?></a></td>
            <td><?=$ho_ten ?></td>
            <td><?=$email ?></td>
            <td><?=$nam_sinh ?></td>
            <td><img style="width:100px;height:150px;" src="../../../public/images/<?=$avt ?>" alt=""></td>
            <td><?=$pass ?></td>
            <td><?=$phone ?></td>
            <td><?=$vai_tro ?></td>
            <td><a href="index.php?act=edittk&id=id&table=tai_khoan&id_edit=<?=$id?>"><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=alltaikhoan&id=id&table=tai_khoan&iddl=<?=$id;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
            </tr> -->
       <?php 
    //    endforeach;
       ?>
    </thead>
    <tbody>
       
        
    </tbody>
    </table>
</body>
</html>