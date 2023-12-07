<?php
    function binhluansanpham($id_tai_khoan,$id_san_pham,$noi_dung_binh_luan,$ngay_binh_luan,$danh_gia){
      $sql="INSERT INTO `binh_luan`( `id_tai_khoan`, `id_san_pham`, `noi_dung_binh_luan`, `ngay_binh_luan`, `danh_gia`) VALUES ('$id_tai_khoan','$id_san_pham','$noi_dung_binh_luan','$ngay_binh_luan','$danh_gia')";
      pdo_query_one($sql);
    }
    function select_onebl(){
      $id = $_GET['id_edit'];
      $sql ="SELECT * FROM binh_luan WHERE id = '$id'";
      $result = pdo_query_one($sql);
      return $result;
  }
//   function load_binhluan($id_san_pham){
//     $sql ="SELECT * FROM binh_luan 
//     JOIN san_pham ON binh_luan.id_san_pham = san_pham.id
//     WHERE binh_luan.id_san_pham = '$id_san_pham'";
//     $result = pdo_query($sql); 
//     return $result;
// }
function load_one_binhluan($id_san_pham){
  $sql = "SELECT * FROM binh_luan 
  JOIN san_pham ON binh_luan.id_san_pham = san_pham.id
  JOIN tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id
  WHERE binh_luan.id_san_pham = $id_san_pham";
  $result = pdo_query($sql); 
  return $result;
}

?>