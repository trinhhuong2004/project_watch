
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
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">ID người dùng</th>
            <th scope="col">Ngày đặt hàng</th>
            <th scope="col">Địa chỉ giao hàng</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($don_hang as $row):
        extract($row); ?>
         <tr>
             <th><?=$id ?></th>
             <td><a href=""><?=$id_nguoi_dung ?></a></td>
             <td><?=$ngay_dat ?></td>
             <td><?=$dia_chi_giao_hang ?></td>
             <td><?=$trang_thai?></td>
             <td><a href="index.php?act=editdonhang&id=id&table=don_hang&id_edit=<?=$id?>"><button class="btn btn-warning">Cập nhật</button></a>
             <a href="index.php?act=chitietdonhang&id_edit=<?=$id?>"><button class="btn btn-warning">Chi tiết</button>
                
             </td>       
         </tr>
         <?php
          endforeach; 
         ?>
    </tbody>
    </table>
</body>
</html>