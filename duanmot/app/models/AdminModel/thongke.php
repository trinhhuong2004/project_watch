<?php
function statistical_sale($date_start = 0,$end_date = 0,$choose_time='date'){
    $sql="WITH RECURSIVE dates AS (
      SELECT DATE('$date_start') AS date
      UNION ALL
      SELECT DATE_ADD(date, INTERVAL 1 DAY)
      FROM dates
      WHERE DATE_ADD(date, INTERVAL 1 DAY) <= '$end_date'
    )
    ";
    $sql.=" SELECT ".($choose_time == 'MONTH' ? "DATE_FORMAT(dates.date, '%Y-%m')" : "$choose_time(dates.date)")." AS date, COUNT(DISTINCT don_hang.id) AS so_luong_don_hang, SUM(chi_tiet_don_hang.so_luong) AS so_luong_ban_ra, SUM((don_hang.tong_dh)) AS doanh_thu
    FROM dates
    LEFT JOIN don_hang ON DATE(don_hang.ngay_dat) = DATE(dates.date) and don_hang.trang_thai = 4
    LEFT JOIN chi_tiet_don_hang ON chi_tiet_don_hang.id_don_dat_hang = don_hang.id
    GROUP BY $choose_time(dates.date)";
    $statistical_sale = pdo_query($sql);
    return $statistical_sale;
}
function statisticalDate_ago(){
  // $sql = "SELECT gh.ma_sp, gh.ten_sp, gh.hinh_anh,DATE(dh.ngay_dat) 
  // AS ngay_dat_hang, COUNT(DISTINCT dh.ma) 
  // AS so_luong_don_hang, SUM(gh.so_luong) 
  // AS so_luong_ban, SUM(dh.tong_dh) 
  // AS tong_don_hang, MONTH(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH)) 
  // AS thang FROM giohang gh JOIN donhang dh 
  // ON gh.ma_dh = dh.ma WHERE dh.ngay_dat > (CURRENT_DATE - 30) 
  // GROUP BY ngay_dat_hang, gh.ma_sp, gh.ten_sp, gh.hinh_anh;;
  // ORDER BY ngay_dat_hang DESC";
  $sql = "SELECT *,DATE(dh.ngay_dat) AS ngay_dat_hang, COUNT(DISTINCT dh.id) AS so_luong_don_hang, SUM(gh.so_luong) AS so_luong_ban, SUM(dh.tong_dh) AS tong_don_hang, MONTH(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH)) AS thang FROM chi_tiet_don_hang gh JOIN san_pham sp ON gh.id_san_pham = sp.id JOIN don_hang dh ON gh.id_don_dat_hang = dh.id WHERE dh.ngay_dat > (CURRENT_DATE - 30) GROUP BY ngay_dat_hang;";
$statistical_sale = pdo_query($sql);
return $statistical_sale;
}
?>