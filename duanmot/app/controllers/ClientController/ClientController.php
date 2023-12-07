<?php
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
                include "app/views/Client/taikhoan/dangnhap.php";
                if (isset($_POST['dangnhap'])) {
                    $name = $_POST['name'];
                    $pass = $_POST['pass'];
                    $tai_khoan = dangNhap($name, $pass);
                    if ($tai_khoan['name'] == $name && $tai_khoan['pass'] == $pass) {
                        session_start(); // Start the session if not started already
                        $_SESSION['id'] = $tai_khoan['id'];
                        $_SESSION['name'] = $tai_khoan['name'];
                        $_SESSION['vai_tro'] = $tai_khoan['vai_tro'];
                        $_SESSION['taikhoan'] = $tai_khoan;
                        echo '<script>alert("Đăng nhập thành công")</script>';
                        echo '<script>window.location.href = "index.php"</script>';
                    } else {
                        echo '<script>alert("Sai tài khoản mật khẩu")</script>';
                    }
                }
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

            }
    
            break;
            
        case "xoa_cart":
          
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
            }
            $load_all_sp = all_ct_sanpham();
            include "app/views/Client/sanpham/chitietsanpham.php";
            break;

            // giỏ hàng
        case 'giohang':
            $ttgh  = show_giohang();
            
            include "app/views/Client/giohang/giohang.php";
            break;
        case 'thanhtoan':
            
            
            include "app/views/Client/giohang/thanhtoan.php";
            break;
        case 'shop':
            include "app/views/Client/trangphu/shop.php";
            break;
        case 'bill':
            if($_POST['dongydathang']){
                $billing_fname = $_POST['billing_fname'];
                $billing_streetAddress = $_POST['billing_streetAddress'];
                $billing_phone = $_POST['billing_phone'];
                $billing_email = $_POST['billing_email'];
                $orderNotes = $_POST['orderNotes'];

            }
            include "app/views/Client/giohang/bill.php";
            break;
         case 'donhang':
            $donhang = donhang();
            include "app/views/Client/giohang/donhang.php";
            break;
        case 'donhangchitiet':
            if(isset($_GET['iddh'])){
                $iddh = $_GET['iddh'];
                $load_one_dh = load_one_dh($iddh);
                //var_dump($load_one_dh); exit;
            }
            include "app/views/Client/giohang/donhangchitiet.php";
            break;
        case 'payment':
            include "app/views/Client/giohang/donhangchitiet.php";
            break;
            // thanh toán

            

        case 'muahangthanhcong':

            include "app/views/Client/giohang/muahangthanhcong.php";
            break;
        default:
            include "index.php";
            break;
    }
} else {
    include "app/views/Client/layout/home.php";
}
?>