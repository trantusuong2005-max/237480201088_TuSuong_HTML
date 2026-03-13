<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>bai4</title>
</head>
<body>

<form method="post">
Số thứ 1: <input type="number" name="a"><br><br>
Số thứ 2: <input type="number" name="b"><br><br>

<input type="submit" name="cong" value="Cộng">
<input type="submit" name="tru" value="Trừ">
<input type="submit" name="nhan" value="Nhân">
<input type="submit" name="chia" value="Chia">
<input type="submit" name="chia_du" value="Chia dư">

</form>

<?php
if(isset($_POST['a']) && isset($_POST['b']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        if(isset($_POST['cong'])) $kq =$a+$b;
        if(isset($_POST['tru'])) $kq =$a-$b;
        if(isset($_POST['nhan'])) $kq =$a*$b;
        if(isset($_POST['chia'])) $kq =$a/$b;
        if(isset($_POST['chia_du'])) $kq =$a%$b;
        echo "<h3>Kết quả: " . $kq . "</h3>";
    }
    
?>

</body>
</html>