<?php 
    function dangKiTaiKhoan($name,$email,$pass){
        $sql = "INSERT INTO tai_khoan(name, email,pass) VALUES ('$name','$email','$pass')";
        pdo_execute($sql);
    }
    function dangNhap($name,$pass){
        $sql = "SELECT * FROM tai_khoan WHERE name = '$name' AND pass = '$pass'";
        $result = pdo_query_one($sql);
        return $result;
    }
?>