<?php
include("Connection.php");

$mahd = $_POST['mahd'];
$makh = $_POST['makh'];
$mahang = $_POST['mahang'];
$soluong = $_POST['soluong'];

$sql = "INSERT INTO hoadon(mahd, makh, mahang, soluong) 
        VALUES ('$mahd','$makh','$mahang',$soluong)";

mysqli_query($conn, $sql);

echo "Thêm hóa đơn thành công";
?>