<?php
$conn = mysqli_connect("localhost", "root", "", "quanlybanhang1");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
else
    echo "Kêt nối thành công!";
?>