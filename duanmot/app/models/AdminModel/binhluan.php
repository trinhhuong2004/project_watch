<?php
    function insert_binhluan($id_tai_khoan,$id_san_pham,$noi_dung_binh_luan,$ngay_binh_luan,$danh_gia){
        $sql="INSERT INTO `binh_luan`( `id_tai_khoan`, `id_san_pham`, `noi_dung_binh_luan`, `ngay_binh_luan`, `danh_gia`) VALUES ('$id_tai_khoan','$id_san_pham','$noi_dung_binh_luan','$ngay_binh_luan','$danh_gia')";
        pdo_execute($sql);     
    }
    function loadall_binhluan(){
        $sql="SELECT  `id`,`id_tai_khoan`, `id_san_pham`, `noi_dung_binh_luan`, `ngay_binh_luan`, `danh_gia` FROM `binh_luan` ";
        $result=pdo_query($sql);
        return $result;
    }
    function edit_binhluan($id,$id_tai_khoan,$id_san_pham,$noi_dung_binh_luan,$ngay_binh_luan,$danh_gia){
        $sql="UPDATE `binh_luan` SET `id_tai_khoan`='$id_tai_khoan',`id_san_pham`='$id_san_pham',`noi_dung_binh_luan`='$noi_dung_binh_luan',`ngay_binh_luan`='$ngay_binh_luan',`danh_gia`='$danh_gia' WHERE id='$id'";
        pdo_execute($sql);
    }
    function upload_binhluan($id,$id_tai_khoan,$id_san_pham,$noi_dung_binh_luan,$ngay_binh_luan,$danh_gia){
        $sql="UPDATE `binh_luan` SET `id_tai_khoan`='$id_tai_khoan',`id_san_pham`='$id_san_pham',`noi_dung_binh_luan`='$noi_dung_binh_luan',`ngay_binh_luan`='$ngay_binh_luan',`danh_gia`='$danh_gia' WHERE id='$id'";
        pdo_execute($sql);
    }
?>