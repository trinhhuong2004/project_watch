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
                //var_dump($all_donhang);
                if ($all_donhang['trang_thai'] == 1) {
                    $tt = "Chờ xác nhận";
                } else if ($all_donhang['trang_thai'] == 2) {
                    $tt = "Đã xác nhận";
                } else if ($all_donhang['trang_thai'] == 3) {
                    $tt = "Đang giao hàng";
                } else {
                    $tt = "Đã nhận hàng";
                }
                if ($all_donhang['pttt'] == 0) {
                    $pt = "Thanh toán khi nhận hàng";
                } else {
                    $pt = "Thanh toán vnpay";
                }
            ?>
            <tr>
                <th><?= $all_donhang['id'] ?></th>
                <td><?= $all_donhang['ho_ten'] ?></td>
                <td><img style="width: 50px; height: 50px;" src="../../../public/images/<?= $all_donhang['hinh_anh'] ?>"></td>
                <td><?= $all_donhang['ngay_dat'] ?></td>
                <td><?= $all_donhang['tong_dh'] ?></td>
                <td><?= $pt ?></td>
                <td><?= $all_donhang['email'] ?></td>
                <td><?= $all_donhang['dia_chi_giao_hang'] ?></td>
                <td><?= $tt ?></td>
            </tr>
            
    </tbody>
</table>
