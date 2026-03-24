<?php
session_start();

// kiểm tra đăng nhập chưa
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<h2>TRANG CHÍNH</h2>

<?php
echo "Người dùng đã đăng nhập với tên <b>" . $_SESSION['username'] . "</b>";
echo " và Email là <b>" . $_SESSION['email'] . "</b><br><br>";
?>

<a href="logout.php">Đăng xuất</a>