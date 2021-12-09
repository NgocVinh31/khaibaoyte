<?php
$local="localhost";
$server="root";
$passwork="";
$database="khaibaocovid";
$conn= mysqli_connect($local, $server, $passwork) or die("Lỗi kết nối");
mysqli_select_db($conn, $database) or die("lỗi kết nối bảng dữ liệu");
?>