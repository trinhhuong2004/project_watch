<?php
function insert_danhmuc($name)
{
    $sql = "INSERT INTO `danh_muc`(`name`) VALUES ('$name')";
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "SELECT `id`, `name` FROM `danh_muc` ";
    $result = pdo_query($sql);
    return $result;
}
function edit_danhmuc($id,$name){
    $sql="UPDATE `danh_muc` SET `name`='$name' where id='$id'";
    pdo_execute($sql);
}
function update_danhmuc($id,$name){
    $sql="UPDATE `danh_muc` SET `name`='$name' WHERE id = '$id'";
    pdo_execute($sql);
}
?>