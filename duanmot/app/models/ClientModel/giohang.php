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

function thongtindonhang(){
    
}

function tao_giohang($hinh_anh,$ten_sp,$dongia,$soluong,$thanhtien,$idbill){
    $conn = connect();
    $sql = "INSERT INTO `cart`(`hinh_anh`, `ten_sp`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES ('$hinh_anh','$ten_sp','$dongia','$soluong','$thanhtien','$idbill')";
    $conn ->exec($sql);
    $conn = null;
}

    function tao_donhang($name,$dia_chi,$tell,$email,$detail,$total,$pttt){
        $conn = connect();
        $sql = "INSERT INTO `bill`(`name`, `dia_chi`, `tell`, `email`, `detail`, `total`, `pttt`) VALUES ('$name','$dia_chi','$tell','$email','$detail','$total','$pttt')";
        $conn ->exec($sql);
        $last_id = $conn->lastInsertId();
        $conn = null;
        return $last_id;
    }

    


    function show_giohang(){
        $ttgh="";
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0) {
                # code...
            
            $tong =0;
            $i=0;
            for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
    
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][4];
                $tong += $tt;
                $link="app/views/Client/giohang/giohang.php?del=".$i;
                $ttgh.=
                '<tr>
    
                <td><a class="delete" href="'.$link.'"><i class="fa fa-times"> xóa</i></a></td>
                <td>
                    <a href="product-details.html">
                        <img src="assets/img/products/'.$_SESSION['giohang'][$i][0].'" alt="product">
                    </a>
                </td>
                <td class="wide-column">
                    <h3><a href="product-details.html">'.$_SESSION['giohang'][$i][1].'</a></h3>
                </td>
                <td class="cart-product-price"><strong>'.$_SESSION['giohang'][$i][2].'</strong></td>
                <td class="cart-product-price"><strong>'.$_SESSION['giohang'][$i][3].'</strong></td>
                <td>
                    
                    '.$_SESSION['giohang'][$i][4].'
                        
                    
                </td>
                <td>
                '.$tt.' $
                </td>
    
            </tr>';
            $i++;
            
            }
            $ttgh.= '
             <tr >
             <th colspan="1">Tổng tiền</th>
             <th colspan="5"></th>
                <td> '.$tong.' $ </td>
          
            </tr>';
             }
        }
        return $ttgh;
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