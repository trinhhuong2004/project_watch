<?php
    function insert_donhang($id_nguoi_dung,$ngay_dat,$dia_chi_giao_hang,$trang_thai){
        $sql="INSERT INTO `don_hang`(`id_nguoi_dung`, `ngay_dat`, `dia_chi_giao_hang`, `trang_thai`) VALUES ('$id_nguoi_dung','$ngay_dat','$dia_chi_giao_hang','$trang_thai')";
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql="SELECT *,don_hang.id FROM don_hang JOIN chi_tiet_don_hang ON don_hang.id = chi_tiet_don_hang.id_don_dat_hang JOIN san_pham ON chi_tiet_don_hang.id_san_pham = san_pham.id GROUP BY don_hang.id ORDER BY don_hang.id DESC;";
        $result=pdo_query($sql);
        return $result;
    }
    function edit_donhang($id,$id_nguoi_dung,$ngay_dat,$dia_chi_giao_hang,$trang_thai){
        $sql="UPDATE `don_hang` SET `id_nguoi_dung`='$id_nguoi_dung',`ngay_dat`='$ngay_dat',`dia_chi_giao_hang`='$dia_chi_giao_hang',`trang_thai`='$trang_thai' WHERE id='$id'";
        pdo_execute($sql);
    }
    function uptate_donhang($id,$id_nguoi_dung,$ngay_dat,$dia_chi_giao_hang,$trang_thai){
        $sql="UPDATE `don_hang` SET `id_nguoi_dung`='$id_nguoi_dung',`ngay_dat`='$ngay_dat',`dia_chi_giao_hang`='$dia_chi_giao_hang',`trang_thai`='$trang_thai' WHERE id='$id'";
        pdo_execute($sql);
    }
    function select_onedh(){
        $id=$_GET['id_edit'];
        $sql="SELECT * FROM don_hang where id='$id'";
        $result=pdo_query_one($sql);
        return $result;
    }
    function update_trangthai($trang_thai,$id){
        $sql = "UPDATE don_hang SET trang_thai = $trang_thai WHERE id= $id";
        pdo_execute($sql);
    }
?>