
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
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Ngày đặt hàng</th>
            <th scope="col">Tổng đơn hàng</th>
            <th scope="col">Phương thức thanh toán</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ giao hàng</th>
            <th scope="col">Trạng thái</th>
       
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($all_donhang as $row):        
        extract($row);
        if($trang_thai == 0){
            $tt = "Chờ xác nhận";
        }else if($pttt == 1){
            $tt = "Đã xác nhận";
        }else if($pttt == 2){
            $tt = "Đã giao hàng";
        }else{
            $tt = "Đã nhận hàng";
        }
        if($pttt == 0){
            $pt = "Thanh toán khi nhận hàng";
        }else {
            $pt = "Thanh toán vnpay";
        }
        ?>
         <tr>
             <th><?=$id ?></th>
             <td><?=$ho_ten ?></td>
             <td><img style="width:50px;height:50px;" src="../../../public/images/<?=$hinh_anh ?>" ></td>
             <td><?=$ngay_dat ?></td>
             <td><?=$tong_dh ?></td>
             <td><?=$pt ?></td>
             <td><?=$email ?></td>
             <td><?=$dia_chi_giao_hang ?></td>
             <td><?=$tt?></td>
                  
         </tr>
         <?php
          endforeach; 
         ?>
    </tbody>
    </table>
</body>
</html>