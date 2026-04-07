<?php
include("Connection.php");

$makh = $_POST['makh'];
$sdt = $_POST['sdt'];

$sql = "UPDATE khachhang 
        SET dienthoai='$sdt' 
        WHERE makh='$makh'";

mysqli_query($conn, $sql);

echo "Cập nhật thành công";
?>