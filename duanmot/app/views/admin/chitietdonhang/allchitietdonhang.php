
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
            <th scope="col">Mã chi tiết đơn hàng</th>
            <th scope="col">ID đơn đặt hàng</th>
            <th scope="col">ID sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Size sản phẩm</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $ctdonhang=loadall_ctdh();
        foreach($ctdonhang as $row):
        extract($row); ?>
         <tr>
             <th><?=$id ?></th>
             <td><a href=""><?=$id_don_dat_hang ?></a></td>
             <td><?=$id_san_pham ?></td>
             <td><?=$so_luong?></td>
             <td><?=$size_san_pham?></td>
             <td><?=$gia_ban?></td>
             <td><a href="index.php?act=editctdh&id=id&table=chi_tiet_don_hang&id_edit=<?=$id?>"><button class="btn btn-warning">Sửa</button></a>
                 <a href="index.php?act=delete&header=allctdh&id=id&table=chi_tiet_don_hang&iddl=<?=$id;?>"><button class="btn btn-danger">Xóa</button></a>
             </td>       
         </tr>
         <?php
          endforeach; 
         ?>
    </tbody>
    </table>
</body>
</html>