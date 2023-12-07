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
                <th scope="col">Mã biến thể</th>
                <th scope="col">tên sản phẩm</th>
                <th scope="col">giá gốc</th>
                <th scope="col">giá giảm</th>
                <th scope="col">mô tả</th>
                <th scope="col">Màu sắc</th>
                <th scope="col">Kích thước</th>
                <th scope="col">Chất liệu</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Trọng lượng</th>
                <th scope="col">Phụ kiện</th>
                <th scope="col">Khuyến mãi</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Bảo hành</th>
                <th scope="col">ID sản phẩm</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $ctsanpham = loadall_ct_sanpham();
            foreach ($ctsanpham as $row) :
                extract($row); ?>
                <tr>
                    <th><?= $id ?></th>
                    <td><?= $name ?></td>
                    <td><?= $gia ?></td>
                    <td><?= $gia_giam ?></td>
                    <td><?= $mo_ta ?></td>
                    <td><?= $kich_thuoc ?></td>
                    <td><a href=""><?= $mau_sac ?></a></td>
                    <td><?= $chat_lieu ?></td>
                    <td><img style="width:100px;height:100px;" src="../../../public/images/<?= $hinh_anh ?>" alt=""></td>
                    <td><?= $trong_luong ?></td>
                    <td><?= $phu_kien ?></td>
                    <td><?= $khuyen_mai ?></td>
                    <td><?= $tinh_trang ?></td>
                    <td><?= $bao_hanh ?></td>
                    <td><?= $id_sanpham ?></td>
                    <td><a href="index.php?act=editctsanpham&id=id&table=chi_tiet_san_pham&id_edit=<?= $id ?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="index.php?act=delete&header=allctsanpham&id=id&table=chi_tiet_san_pham&iddl=<?= $id; ?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>