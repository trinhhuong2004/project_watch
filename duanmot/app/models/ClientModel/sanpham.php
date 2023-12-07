<?php

   function all_sanpham(){
      $sql="SELECT * from san_pham ORDER BY id DESC";
      $result=pdo_query($sql);
      return $result;
   }
   function all_sanpham_giam(){
      $sql="SELECT * from san_pham  order by gia desc";
      $result=pdo_query($sql);
      return $result;
   }
   function all_sanpham_ban_chay(){
      $sql="SELECT * from san_pham  order by gia desc";
      $result=pdo_query($sql);
      return $result;
   }
   function all_sanpham_dat(){
      $sql="SELECT * from san_pham  order by gia asc";
      $result=pdo_query($sql);
      return $result;
   }
   
   // function sp_theo_dm(){
   //    if(isset($_GET['iddm']));
   //    $iddm=$_GET['iddm'];
   //    $sql="SELECT * FROM san_pham where iddm='$iddm'";
   //    $result=pdo_query($sql);
   //    return $result;
   // }
   function sp_theo_dm($iddm){
        $sql="SELECT * from san_pham WHERE iddm = '$iddm'";
        $result=pdo_query($sql);
        return $result;
    }


   function all_ct_sanpham(){
      $sql="SELECT * FROM chi_tiet_san_pham";
      $result=pdo_query($sql);
      return $result;
   }
?>