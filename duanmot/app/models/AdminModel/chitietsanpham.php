<?php
function insert_ct_sanpham($name,$gia,$gia_giam,$mo_ta,$mau_sac, $kich_thuoc, $chat_lieu, $hinh_anh, $trong_luong, $phu_kien, $khuyen_mai, $tinh_trang, $bao_hanh, $id_sanpham)
{
    $sql = "INSERT INTO `chi_tiet_san_pham`( `name`,`gia`,`gia_giam`,`mo_ta`,`mau_sac`, `kich_thuoc`, `chat_lieu`, `hinh_anh`, `trong_luong`, `phu_kien`, `khuyen_mai`, `tinh_trang`, `bao_hanh`, `id_sanpham`) VALUES ('$name','$gia','$gia_giam','$mo_ta','$mau_sac','$kich_thuoc','$chat_lieu','$hinh_anh','$trong_luong','$phu_kien','$khuyen_mai','$tinh_trang','$bao_hanh','$id_sanpham')";
    pdo_execute($sql);
}
function loadall_ct_sanpham()
{
    $sql = "SELECT `id`,`name`, `gia`,`gia_giam`,`mo_ta`,`mau_sac`, `kich_thuoc`, `chat_lieu`, `hinh_anh`, `trong_luong`, `phu_kien`, `khuyen_mai`, `tinh_trang`, `bao_hanh`, `id_sanpham` FROM `chi_tiet_san_pham`";
    $result = pdo_query($sql);
    return $result;
}
function edit_bienthe($id,$name,$gia,$gia_giam,$mo_ta, $mau_sac, $kich_thuoc, $chat_lieu, $hinh_anh, $trong_luong, $phu_kien, $khuyen_mai, $tinh_trang, $bao_hanh, $id_sanpham)
{
    $sql = "UPDATE `chi_tiet_san_pham` SET `name`='$name',`gia`='$gia',`gia_giam`='$gia_giam',`mo_ta`='$mo_ta',`mau_sac`='$mau_sac',`kich_thuoc`='$kich_thuoc',`chat_lieu`='$chat_lieu',`hinh_anh`='$hinh_anh',`trong_luong`='$trong_luong',`phu_kien`='$phu_kien',`khuyen_mai`='$khuyen_mai',`tinh_trang`='$tinh_trang',`bao_hanh`='$bao_hanh',`id_sanpham`='$id_sanpham' WHERE id='$id'";
    pdo_execute($sql);
}
function uptate_ct_sanpham($id,$name,$gia,$gia_giam,$mo_ta, $mau_sac, $kich_thuoc, $chat_lieu, $hinh_anh, $trong_luong, $phu_kien, $khuyen_mai, $tinh_trang, $bao_hanh, $id_sanpham)
{
    $sql = "UPDATE `chi_tiet_san_pham` SET `name`='$name',`gia`='$gia',`gia_giam`='$gia_giam',`mo_ta`='$mo_ta',`mau_sac`='$mau_sac',`kich_thuoc`='$kich_thuoc',`chat_lieu`='$chat_lieu',`hinh_anh`='$hinh_anh',`trong_luong`='$trong_luong',`phu_kien`='$phu_kien',`khuyen_mai`='$khuyen_mai',`tinh_trang`='$tinh_trang',`bao_hanh`='$bao_hanh',`id_sanpham`='$id_sanpham' WHERE id='$id'";
    pdo_execute($sql);
}
function select_onebt(){
    $id=$_GET['id_edit'];
    $sql="SELECT * FROM chi_tiet_san_pham where id='$id'";
    $result=pdo_query_one($sql);
    return $result;
}
?>