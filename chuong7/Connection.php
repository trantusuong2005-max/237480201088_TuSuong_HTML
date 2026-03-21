<?php
$conn = mysqli_connect("localhost", "root", "", "quanlybanhang");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
else
    echo "Kêt nối thành công!";
?>