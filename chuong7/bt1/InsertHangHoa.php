<?php
include "Connection.php";

$mahang = $_POST['mahang'];
$tenhang = $_POST['tenhang'];
$mansx = $_POST['mansx'];
$namsx = $_POST['namsx'];
$gia = $_POST['gia'];

$sql = "INSERT INTO hanghoa VALUES ('$mahang','$tenhang','$mansx',$namsx,$gia)";

if (mysqli_query($conn, $sql)) {
    echo "Thêm hàng hóa thành công!";
} else {
    echo "Lỗi: Thêm thất bại! " . mysqli_error($conn);
}
?>