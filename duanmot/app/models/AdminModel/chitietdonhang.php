<?php
function insert_ctdh($id_don_dat_hang, $id_san_pham, $so_luong, $size_san_pham, $gia_ban)
{
    $sql = "INSERT INTO `chi_tiet_don_hang`( `id_don_dat_hang`, `id_san_pham`, `so_luong`, `size_san_pham`, `gia_ban`) VALUES ('$id_don_dat_hang','$id_san_pham','$so_luong','$size_san_pham','$gia_ban')";
    pdo_execute($sql);
}
function loadall_ctdh()
{
    $sql = "SELECT `id`, `id_don_dat_hang`, `id_san_pham`, `so_luong`, `size_san_pham`, `gia_ban` FROM `chi_tiet_don_hang`";
    $result = pdo_query($sql);
    return $result;
}
function edit_ctdh($id,$id_don_dat_hang, $id_san_pham, $so_luong, $size_san_pham, $gia_ban){
    $sql="UPDATE `chi_tiet_don_hang` SET `id_don_dat_hang`='$id_don_dat_hang',`id_san_pham`='$id_san_pham',`so_luong`='$so_luong',`size_san_pham`='$size_san_pham',`gia_ban`='$gia_ban' WHERE id='$id'";
    pdo_execute($sql);
}
function uptade_ctdh($id,$id_don_dat_hang, $id_san_pham, $so_luong, $size_san_pham, $gia_ban){
    $sql="UPDATE `chi_tiet_don_hang` SET `id_don_dat_hang`='$id_don_dat_hang',`id_san_pham`='$id_san_pham',`so_luong`='$so_luong',`size_san_pham`='$size_san_pham',`gia_ban`='$gia_ban' WHERE id='$id'";
    pdo_execute($sql);
}
function load_onectdh(){
    $id=$_GET['id_edit'];
    $sql="SELECT * from chi_tiet_don_hang where id='$id'";
    $result=pdo_query_one($sql);
    return $result;
}
?>