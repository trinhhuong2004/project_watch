<?php
 function timKiemTheoTen(){
    if(isset($_POST['search_input'])){
        $search_input = $_POST['search_input'];
        $sql = "SELECT * FROM san_pham WHERE name LIKE '%$search_input%'";
        $result = pdo_query($sql);
        return $result;
    }
    return []; // Trả về một mảng trống nếu không có dữ liệu hoặc lỗi xảy ra
}
