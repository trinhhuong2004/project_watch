<?php
// giỏ hàng rỗng
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
    switch ($redirect) {
        case 'dangky':
            if (isset($_POST['dangky'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cfpass = $_POST['cfpass'];
                if ($cfpass == $pass) {
                    dangKiTaiKhoan($name, $email, $pass);
                    echo '<script>alert("Đăng ký thành công")</script>';
                    echo '<script>window.location.href = "index.php?redirect=dangnhap"</script>';
                } else {
                    echo '<script>alert("Mật khẩu xác nhận không khớp")</script>';
                }
            }
            include "app/views/Client/taikhoan/dangky.php";
            break;
            case 'dangnhap':
                if (isset($_POST['dangnhap'])) {
                    $name = $_POST['name'];
                    $pass = $_POST['pass'];
                    $tai_khoan = dangNhap($name, $pass);
                    if (is_array($tai_khoan)) {
                    if ($tai_khoan['name'] == $name && $tai_khoan['pass'] == $pass) {
                        $_SESSION['taikhoan'] = $tai_khoan;
                        echo "<script> window.location.href='index.php';</script>";
                    } else {
                        echo '<script>alert("Sai tài khoản mật khẩu")</script>';
                    }
                }
                }
                include "app/views/Client/taikhoan/dangnhap.php";
                break;

            case 'dangxuat':
                session_unset();
                echo "<script> window.location.href='index.php?act=dangnhap';</script>";
                break;

        case 'guibinhluan':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $load_one_sp = load_one_spct($id);
            }
            include "app/views/Client/sanpham/chitietsanpham.php";
            if (isset($_POST['guibinhluan'])) {
                // binhluansanpham($id_tai_khoan,$id_san_pham,$noi_dung_binh_luan,$ngay_binh_luan,$danh_gia)
                $id_san_pham = $_GET['id'];
                $id_tai_khoan = $_POST['id_tai_khoan'];
                // $id_san_pham=$_POST['id_san_pham'];
                $noi_dung_binh_luan = $_POST['noi_dung_binh_luan'];
                $ngay_binh_luan = $_POST['ngay_binh_luan'];
                $danh_gia = $_POST['danh_gia'];
                binhluansanpham($id_tai_khoan, $id_san_pham, $noi_dung_binh_luan, $ngay_binh_luan, $danh_gia);
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $load_one_sp = load_one_spct($id);
                }
                
            }
    
            break;
        // Thêm sản phẩm giỏ hàng
        case 'themgiohang':
            if (isset($_POST['addtocart'])) {
                $idpro = $_POST['masp'];
                $hinh_anh = $_POST['hinhanh'];
                $ten_sp = $_POST['tensp'];
                $gia_giam = $_POST['giagiam'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];

                $tong = $gia_giam * $soluong;
                $check = false;
                $i = 0;
                foreach ($_SESSION['mycart'] as $item) {
                    if ($item[0] == $idpro) {
                        $_SESSION['mycart'][$i][5] += $soluong;
                        $check = true;
                        break;
                    }
                    $i++;
                }
                if (!$check) {
                    $add_sp = [$idpro, $hinh_anh, $ten_sp, $gia_giam, $gia, $soluong, $tong];
                    $_SESSION['mycart'][] = $add_sp;
                }
                // load lại trang không bị cộng dồn số lượng
                echo '<script>window.location.href = window.location.href;</script>';
            }
            include "app/views/Client/giohang/giohang.php";
            break;
            // End giỏ hàng
            case 'del_cart':
                if (isset($_GET['idcart'])) {
                    array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                } else {
                    $_SESSION['mycart'] = [];
                }
                header('location: index.php?redirect=giohang');
                break;
            case 'giohang':
                include "app/views/Client/giohang/giohang.php";
                break;


        case 'quenmk':
            include "app/views/Client/taikhoan/quenmk.php";
            break;
        case 'dangxuat':
            session_unset($_SESSION['taikhoan']);
            include "app/views/Client/taikhoan/dangxuat.php";
            break;
        case 'vechungtoi':
            include "app/views/Client/trangphu/vechungtoi.php";
            break;
        case 'lienhe':
            include "app/views/Client/trangphu/lienhe.php";
            break;
        case 'blog':
            include "app/views/Client/trangphu/blog.php";
            break;

            //TÌM KIẾM
        case 'timkiem':
            include "app/views/Client/sanpham/sanpham_theo_timkiem.php";

            break;


            //SẢN PHẨM

        case 'sptheodm':
            if (isset($_GET['id'])) {
                $iddm = $_GET['id'];
            }
            include "app/views/Client/sanpham/all_sp_theo_dm.php";
            break;
        case 'spbanchay':
            if (isset($_GET['id'])) {
                $iddm = $_GET['id'];
            }

            include "app/views/Client/sanpham/sanphambanchay.php";
            break;
        case 'spdat':
            if (isset($_GET['id'])) {
                $iddm = $_GET['id'];
            }
            include "app/views/Client/sanpham/sanphamdat.php";
            break;


        case 'chitietsanpham':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $load_one_sp = load_one_spct($id);
                $sanpham = product_detail($id);
            }
            $load_all_sp = all_ct_sanpham();
            include "app/views/Client/sanpham/chitietsanpham.php";
            break;

            // giỏ hàng
        
        case 'thanhtoan':
            include "app/views/Client/thanhtoan/thanhtoan.php";
            break;

        case 'payment':
            if (isset($_POST['dathang']) && $_POST['dathang']) {
                $id_user = $_POST['id_user'];
                $ngay_dat = date('Y-m-d H:i:s');
                $tong_don = $_POST['tong_don'];

                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $dia_chi = $_POST['dia_chi'];

                if (isset($_POST['cod'])) {
                    $pttt = $_POST['cod'];
                } else if (isset($_POST['redirect'])) {
                    $pttt = $_POST['redirect'];
                }

                $_SESSION['order'] = [$id_user, $ngay_dat, $tong_don, $name, $email, $phone, $dia_chi, $pttt];

                if (isset($_POST['cod'])) {
                    echo "<script> window.location.href='index.php?redirect=bill';</script>";
                } else if (isset($_POST['redirect'])) {
                    include "app/views/Client/thanhtoan/thanhtoanvnpay.php";
                }
            }
            break;    
        case 'bill':
            if (isset($_SESSION['order']) && !empty($_SESSION['order'])) {
                $order = $_SESSION['order'];
                // Tạo đơn hàng
                $new_id_order = tao_id_order($order[0], $order[1], $order[2], $order[3], $order[4], $order[5], $order[6], $order[7]);
                $_SESSION['id_order'] = $new_id_order;
                foreach ($_SESSION['mycart'] as $cart) {
                    // Thêm vào đơn hàng chi tiết // $add_sp = [$idpro, $hinh_anh, $ten_sp, $gia_giam, $gia, $soluong, $tong];
                    them_order_detail($new_id_order, $cart[0], $cart[2], $cart[1], $cart[5], $cart[3]);
                    unset($_SESSION['mycart']);
                }
            }
            include "app/views/Client/thanhtoan/bill.php";
            break;

        case 'shop':
            include "app/views/Client/trangphu/shop.php";
            break;
        // case 'bill':
        //     if($_POST['dathang']){

        //     }
            // include "app/views/Client/thanhtoan/bill.php";
            // break;
        //  case 'donhang':
        //     $donhang = donhang();
        //     include "app/views/Client/giohang/donhang.php";
        //     break;
        // case 'donhangchitiet':
        //     if(isset($_GET['iddh'])){
        //         $iddh = $_GET['iddh'];
        //         $load_one_dh = load_one_dh($iddh);
        //         //var_dump($load_one_dh); exit;
        //     }
        //     include "app/views/Client/giohang/donhangchitiet.php";
        //     break;
        // case 'payment':
        //     include "app/views/Client/giohang/donhangchitiet.php";
        //     break;
        //     // thanh toán

            

        // case 'muahangthanhcong':

        //     include "app/views/Client/giohang/muahangthanhcong.php";
        //     break;
        default:
            include "index.php";
            break;
    }
} else {
    include "app/views/Client/layout/home.php";
}
?>