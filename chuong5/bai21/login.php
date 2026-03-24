<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// kiểm tra đơn giản (đề không yêu cầu DB)
if ($username != "" && $email != "" && $password != "") {

    // lưu session
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    echo "<h2>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h2>";
    echo "Thông tin đăng nhập hợp lệ <br><br>";

    echo "<a href='mainpage.php'>Trang chính</a>";

} else {
    echo "Thiếu thông tin! <br>";
    echo "<a href='login.html'>Quay lại</a>";
}
?>