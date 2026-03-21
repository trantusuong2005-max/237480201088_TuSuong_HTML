<form action="login.php" method="post">

Username:
<input type="text" name="user"><br><br>

Email:
<input type="text" name="email"><br><br>

Password:
<input type="password" name="pass"><br><br>

<input type="submit" value="Login">

</form>

<form action="login.php" method="post">

Username:
<input type="text" name="user"><br><br>

Email:
<input type="text" name="email"><br><br>

Password:
<input type="password" name="pass"><br><br>

<input type="submit" value="Login">

</form>

<?php
session_start();

$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if($user!="" && $email!="" && $pass!=""){
    $_SESSION['user']=$user;
    $_SESSION['email']=$email;

    echo "Thông tin hợp lệ <br>";
    echo "<a href='mainpage.php'>Trang chính</a>";
}
else{
    echo "Sai dữ liệu";
}
?>

<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.html");
}
?>

<h2>TRANG CHÍNH</h2>

<?php
echo "Người dùng đã đăng nhập với tên ".$_SESSION['user'];
echo "<br>Email là ".$_SESSION['email'];
?>

<br><br>

<a href="logout.php">Đăng xuất</a>