<?php
    function alldanhmuc(){
        $sql="SELECT * from danh_muc order by id desc";
        $result=pdo_query($sql);
        return $result;
    }
    
?>