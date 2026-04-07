<?php
include("Connection.php");

$makh = $_POST['makh'];

$sql = "DELETE FROM khachhang WHERE makh='$makh'";

mysqli_query($conn, $sql);

echo "Đã xóa khách hàng";
?>