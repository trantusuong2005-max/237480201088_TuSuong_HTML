<?php
session_start();
session_destroy();

echo "Đã đăng xuất <br>";
echo "<a href='login.html'>Đăng nhập lại</a>";
?>