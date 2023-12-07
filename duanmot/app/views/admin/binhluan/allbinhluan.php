
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
            <th scope="col">Mã bình luận</th>
            <th scope="col">ID tài khoản</th>
            <th scope="col">ID sản phẩm</th>
            <th scope="col">Nội dung bình luận</th>
            <th scope="col">Ngày bình luận</th>
            <th scope="col">Đánh giá</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $binhluan=loadall_binhluan();
       foreach($binhluan as $row):
        extract($row);?>
        <tr>
            <td><?=$id?></td>
            <td><?=$id_tai_khoan?></td>
            <td><?=$id_san_pham?></td>
            <td><?=$noi_dung_binh_luan?></td>
            <td><?=$ngay_binh_luan?></td>
            <td><?=$danh_gia?></td>
            <td><a href="index.php?act=editbinhluan&id=id&table=binh_luan&id_edit=<?=$id?>"><button class="btn btn-warning">Sửa</button></a>
                 <a href="index.php?act=delete&header=allbinhluan&id=id&table=binh_luan&iddl=<?=$id;?>"><button class="btn btn-danger">Xóa</button></a>
        </tr>
       <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>