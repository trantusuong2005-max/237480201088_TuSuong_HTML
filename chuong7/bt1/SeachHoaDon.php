<?php
include("Connection.php");

$makh = $_POST['makh'];

$sql = "SELECT * FROM hoadon WHERE makh='$makh'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Mã HĐ: " . $row['mahd'] . " - SL: " . $row['soluong'] . "<br>";
}
?>