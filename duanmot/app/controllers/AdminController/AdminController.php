<?php
$statistical_sale = statistical_sale(date('Y-m-d', time() - (86400 * 7)), date('Y-m-d', time()));
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // DANH MỤC
       

        case 'adddm':
            if (isset($_POST['adddanhmuc'])) {
                $name = $_POST['name'];
                insert_danhmuc($name);
                echo '<script>alert("thêm thành công")</script>';
                echo '<script>window.location.href= "index.php?act=alldm"</script>';
            }
            include "danhmuc/adddanhmuc.php";
            break;
        case 'alldm':
            include "danhmuc/alldanhmuc.php";
            break;

        case 'editdm':
            if (isset($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_GET['id_edit'];
                update_danhmuc($id, $name);
                echo '<script>alert("cập nhật thành công")</script>';
                echo '<script>window.location.href="index.php?act=alldm"</script>';
            }
            include "danhmuc/editdanhmuc.php";
            break;

            //SẢN PHẨM

        case 'addsp':
            if (isset($_POST['addsanpham'])) {
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $gia_giam=$_POST['gia_giam'];
                $mo_ta = $_POST['mo_ta'];

                if ($_FILES['hinh_anh']['name'] != "") {
                    $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
                    $target_dir = "../../../public/images/";
                    $target_file = $target_dir . $hinh_anh;
                    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
                } else {
                    $hinh_anh = "";
                }
                $iddm = $_POST['iddm'];
                insert_sanpham($name,$gia,$gia_giam,$mo_ta,$hinh_anh,$iddm);
                
                echo '<script>alert("thêm thành công")</script>';
                echo '<script>window.location.href= "index.php?act=allsp"</script>';
            }
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/addsanpham.php";
            break;
        case 'allsp':
            include "sanpham/allsanpham.php";
            break;
        case 'editsp':
            include "sanpham/editsanpham.php";
            if (isset($_POST['capnhat'])) {
                $id = $_GET['id_edit'];
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $gia_giam = $_POST['gia_giam'];

                $mo_ta = $_POST['mo_ta'];
                if ($_FILES['hinh_anh']['name'] != "") {
                    $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
                    $target_dir = "../../../public/images/";
                    $target_file = $target_dir . $hinh_anh;
                    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
                } else {
                    $hinh_anh = "";
                }
                $iddm = $_POST['iddm'];
                update_sanpham($id,$name,$gia,$gia_giam,$mo_ta,$hinh_anh,$iddm);
                echo '<script>alert("cập nhật thành công")</script>';
                echo '<script>window.location.href= "index.php?act=allsp "</script>';
            }
            break;

            //TÀI KHOẢN

        case 'addtaikhoan':
            if (isset($_POST['addtaikhoan'])) {
                $name = $_POST['name'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $nam_sinh = $_POST['nam_sinh'];
                if ($_FILES['avt']['name'] != "") {
                    $avt = basename($_FILES["avt"]["name"]);
                    $target_dir = "../../../public/images/";
                    $target_file = $target_dir . $avt;
                    move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);
                } else {
                    $avt = "";
                }
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $vai_tro = $_POST['vai_tro'];
                insert_taikhoan($name, $ho_ten, $email, $nam_sinh, $avt, $pass, $phone, $vai_tro);
                echo '<script>alert("thêm mới thành công")</script>';
                echo '<script>window.location.href="index.php?act=alltaikhoan"</script>';
            }
            include "taikhoan/addtaikhoan.php";
            break;
        case 'alltaikhoan':
            include "taikhoan/alltaikhoan.php";
            break;
        case 'edittk':
            include "taikhoan/edittaikhoan.php";
            if (isset($_POST['capnhat'])) {
                $name = $_POST['name'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $nam_sinh = $_POST['nam_sinh'];
                if ($_FILES['avt']['name'] != "") {
                    $avt = basename($_FILES["avt"]["name"]);
                    $target_dir = "../../../public/images/";
                    $target_file = $target_dir . $avt;
                    move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);
                } else {
                    $avt = "";
                }
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $vai_tro = $_POST['vai_tro'];
                update_taikhoan($id, $name, $ho_ten, $email, $nam_sinh, $avt, $pass, $phone, $vai_tro);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href="index.php?act=alltaikhoan"</script>';
            }
            break;


            //DƠN HÀNG

        case 'adddonhang':
            if (isset($_POST['adddonhang'])) {
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $ngay_dat = $_POST['ngay_dat'];
                $dia_chi_giao_hang = $_POST['dia_chi_giao_hang'];
                $trang_thai = $_POST['trang_thai'];
                insert_donhang($id_nguoi_dung, $ngay_dat, $dia_chi_giao_hang, $trang_thai);
                echo '<script>alert(Thêm mới thành công)</script>';
                echo '<script>window.location.href="index.php?act=alldonhang"</script>';
            }
            include "donhang/adddonhang.php";
            break;
        case 'alldonhang':
            include "donhang/alldonhang.php";
            break;
        case 'editdonhang':
            include "donhang/editdonhang.php";
            if (isset($_POST['capnhat'])) {
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $ngay_dat = $_POST['ngay_dat'];
                $dia_chi_giao_hang = $_POST['dia_chi_giao_hang'];
                $trang_thai = $_POST['trang_thai'];
                uptate_donhang($id, $id_nguoi_dung, $ngay_dat, $dia_chi_giao_hang, $trang_thai);
                echo '<script>alert(Thêm mới thành công)</script>';
                echo '<script>window.location.href="index.php?act=alldonhang"</script>';
            }
            break;

            //CHI TIẾT ĐƠN HÀNG

        case 'addctdh':
            include "chitietdonhang/addchitietdonhang.php";
            if (isset($_POST['addctdh'])) {
                $id_don_dat_hang = $_POST['id_don_dat_hang'];
                $id_san_pham = $_POST['id_san_pham'];
                $so_luong = $_POST['id_don_dat_hang'];
                $size_san_pham = $_POST['size_san_pham'];
                $gia_ban = $_POST['gia_ban'];
                insert_ctdh($id_don_dat_hang, $id_san_pham, $so_luong, $size_san_pham, $gia_ban);
                echo '<script>alert("Thêm mới thành công")</script>';
                echo '<script>window.location.href="index.php?act=allctdh"</script>';
            }
            break;
        case 'allctdh':
            include "chitietdonhang/allchitietdonhang.php";
            break;
        case 'editctdh':
            include "chitietdonhang/editchitietdonhang.php";
            if (isset($_POST['capnhat'])) {
                $id_don_dat_hang = $_POST['id_don_dat_hang'];
                $id_san_pham = $_POST['id_san_pham'];
                $so_luong = $_POST['id_don_dat_hang'];
                $size_san_pham = $_POST['size_san_pham'];
                $gia_ban = $_POST['gia_ban'];
                uptade_ctdh($id, $id_don_dat_hang, $id_san_pham, $so_luong, $size_san_pham, $gia_ban);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href="index.php?act=allctdh"</script>';
            }
            break;


            //CHI TIẾT SẢN PHẨM

        case 'addctsanpham':
            include "chitietsanpham/addctsanpham.php";
            if (isset($_POST['addctsanpham'])) {
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $gia_giam = $_POST['gia_giam'];
                $mo_ta = $_POST['mo_ta'];
                $mau_sac = $_POST['mau_sac'];
                $kich_thuoc = $_POST['kich_thuoc'];
                $chat_lieu = $_POST['chat_lieu'];
                if ($_FILES['hinh_anh']['name'] != "") {
                    $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
                    $target_dir = "../../../public/images/";
                    $target_file = $target_dir . $hinh_anh;
                    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
                } else {
                    $hinh_anh = "";
                }
                $trong_luong = $_POST['trong_luong'];
                $phu_kien = $_POST['phu_kien'];
                $khuyen_mai = $_POST['khuyen_mai'];
                $tinh_trang = $_POST['tinh_trang'];
                $bao_hanh = $_POST['bao_hanh'];
                $id_sanpham = $_POST['id_sanpham'];
                insert_ct_sanpham($name,$gia,$gia_giam,$mo_ta,$mau_sac, $kich_thuoc, $chat_lieu, $hinh_anh, $trong_luong, $phu_kien, $khuyen_mai, $tinh_trang, $bao_hanh, $id_sanpham);
                echo '<script>alert("Thêm mới thành công")</script>';
                echo '<script>window.location.href="index.php?act=allctsanpham"</script>';
            }
            break;
        case 'allctsanpham':
            include "chitietsanpham/allctsanpham.php";
            break;
        case 'editctsanpham':
            include "chitietsanpham/editctsanpham.php";
            if (isset($_POST['capnhat'])) {
                // $id=$_GET['id_edit'];
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $gia_giam = $_POST['gia_giam'];
                $mo_ta = $_POST['mo_ta'];
                $mau_sac = $_POST['mau_sac'];
                $kich_thuoc = $_POST['kich_thuoc'];
                $chat_lieu = $_POST['chat_lieu'];
                if ($_FILES['hinh_anh']['name'] != "") {
                    $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
                    $target_dir = "../../../public/images/";
                    $target_file = $target_dir . $hinh_anh;
                    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
                } else {
                    $hinh_anh = "";
                }
                $trong_luong = $_POST['trong_luong'];
                $phu_kien = $_POST['phu_kien'];
                $khuyen_mai = $_POST['khuyen_mai'];
                $tinh_trang = $_POST['tinh_trang'];
                $bao_hanh = $_POST['bao_hanh'];
                $id_sanpham = $_POST['id_sanpham'];
                uptate_ct_sanpham($id,$name,$gia,$gia_giam,$mo_ta, $mau_sac, $kich_thuoc, $chat_lieu, $hinh_anh, $trong_luong, $phu_kien, $khuyen_mai, $tinh_trang, $bao_hanh, $id_sanpham);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href="index.php?act=allctsanpham"</script>';
            }
            break;


            //BÌNH LUẬN

        case 'addbinhluan':
            include "binhluan/addbinhluan.php";
            if (isset($_POST['addbinhluan'])) {
                $id_tai_khoan = $_POST['id_tai_khoan'];
                $id_san_pham = $_POST['id_san_pham'];
                $noi_dung_binh_luan = $_POST['noi_dung_binh_luan'];
                $ngay_binh_luan = $_POST['ngay_binh_luan'];
                $danh_gia = $_POST['danh_gia'];
                insert_binhluan($id_tai_khoan, $id_san_pham, $noi_dung_binh_luan, $ngay_binh_luan, $danh_gia);
                echo '<script>alert("Thêm mới thành công")</script>';
                echo '<script>window.location.href="index.php?act=allbinhluan"</script>';
            }
            break;
        case 'allbinhluan':
            include "binhluan/allbinhluan.php";
            break;
        case 'editbinhluan':
            include "binhluan/editbinhluan.php";
            if (isset($_POST['capnhat'])) {
                $id_tai_khoan = $_POST['id_tai_khoan'];
                $id_san_pham = $_POST['id_san_pham'];
                $noi_dung_binh_luan = $_POST['noi_dung_binh_luan'];
                $ngay_binh_luan = $_POST['ngay_binh_luan'];
                $danh_gia = $_POST['danh_gia'];
                upload_binhluan($id,$id_tai_khoan,$id_san_pham,$noi_dung_binh_luan,$ngay_binh_luan,$danh_gia);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href="index.php?act=allbinhluan"</script>';
            }
            break;
        // Thống kê
        case 'thongke':
            if (isset($_POST['search']) && ($_POST['search'])) {
                $start_date = isset($_POST['start_date']) ? $_POST['start_date'] : null;
                $end_date = isset($_POST['end_date']) ? $_POST['end_date'] : null;
                $choose_time = isset($_POST['choose_time']) ? $_POST['choose_time'] : null;
            
                $statistical_sale = statistical_sale($start_date, $end_date, $choose_time);

            }
            $statistical = statisticalDate_ago();
            include "thongke/thongkedh.php";
            break;
          
        case 'delete':
            include "../../models/AdminModel/delete.php";
            break;

        default:
            include "layout/home.php";
            break;
    }
}