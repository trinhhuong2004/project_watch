<?php

function tong_donhang(){
    $tong =0;
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0) {
        for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
            $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][4];
            $tong += $tt;
       
            }
        }
    }
    return $tong;
}

// function tao_giohang($hinh_anh,$ten_sp,$dongia,$soluong,$thanhtien,$idbill){
//     $conn = connect();
//     $sql = "INSERT INTO `cart`(`hinh_anh`, `ten_sp`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES ('$hinh_anh','$ten_sp','$dongia','$soluong','$thanhtien','$idbill')";
//     $conn ->exec($sql);
//     $conn = null;
// }

//     function tao_donhang($name,$dia_chi,$tell,$email,$detail,$total,$pttt){
//         $conn = connect();
//         $sql = "INSERT INTO `bill`(`name`, `dia_chi`, `tell`, `email`, `detail`, `total`, `pttt`) VALUES ('$name','$dia_chi','$tell','$email','$detail','$total','$pttt')";
//         $conn ->exec($sql);
//         $last_id = $conn->lastInsertId();
//         $conn = null;
//         return $last_id;
//     }

    function tao_id_order($id_user, $ngay_dat, $tong_don, $name, $email, $phone, $dia_chi, $pttt) {
        $sql = "INSERT INTO don_hang (id_nguoi_dung, ngay_dat, tong_dh, ho_ten, email, sdt, dia_chi_giao_hang, pttt)
        VALUES('".$id_user."', '".$ngay_dat."', '".$tong_don."', '".$name."', '".$email."', '".$phone."', '".$dia_chi."', '".$pttt."')";
        return pdo_execute_lastInsertId($sql);
    }

    function them_order_detail($new_id_order, $id_san_pham, $ten_san_pham, $hinh_anh, $so_luong, $gia_ban) {
        $sql = "INSERT INTO chi_tiet_don_hang (id_don_dat_hang, id_san_pham, ten_sp, hinh_anh, so_luong, gia_ban)
        VALUES(?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $new_id_order, $id_san_pham, $ten_san_pham, $hinh_anh, $so_luong, $gia_ban);
    }

    function get_show_bill_info($order_id){
        $sql="SELECT * FROM don_hang WHERE id = $order_id";
        $show = pdo_query_one($sql);
        return $show;
    }
    function get_show_bill_detail($order_id){
        $sql="SELECT * FROM chi_tiet_don_hang WHERE id_don_dat_hang = $order_id";
        $show = pdo_query($sql);
        return $show;
    }

    function donhang(){
        $sql = "SELECT don_hang.*, tai_khoan.name
        FROM don_hang
        JOIN tai_khoan ON don_hang.id_nguoi_dung = tai_khoan.id
        WHERE don_hang.id_nguoi_dung = tai_khoan.id
        GROUP BY tai_khoan.name
        ORDER BY don_hang.id DESC;;";
        $result = pdo_query($sql);
        return $result;

    }
    function method_pay($n) {
        switch ($n) {
            case '1':
                $pay = "Thanh toán khi nhận";
                break;
            case '2':
                $pay = "Thanh toán VNPay";
                break;
            case '3':
                $pay = "Thanh toán Momo";
                break;
            
            default:
                $pay = "Thanh toán khi nhận";
                break;
        }
        return $pay;
    }
    function load_one_dh($iddh){
        $sql = "SELECT don_hang.*, chi_tiet_don_hang.*, tai_khoan.*,san_pham.* FROM don_hang 
                JOIN chi_tiet_don_hang ON don_hang.id = chi_tiet_don_hang.id_don_dat_hang 
                JOIN san_pham ON chi_tiet_don_hang.id_san_pham = san_pham.id 
                JOIN tai_khoan ON don_hang.id_nguoi_dung = tai_khoan.id WHERE chi_tiet_don_hang.id_don_dat_hang = $iddh";
        $result = pdo_query_one($sql);
        return $result;

    }

   
?>