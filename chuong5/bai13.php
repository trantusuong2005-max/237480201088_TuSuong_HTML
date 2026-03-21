<!DOCTYPE html>
<html>
<body>

<form method="post">
Nhập các số (cách nhau bằng dấu phẩy): <br>
<input type="text" name="dayso">

<br><br>

<select name="chon">
<option value="max">Tìm số lớn nhất</option>
<option value="min">Tìm số nhỏ nhất</option>
<option value="cp">Tìm số chính phương</option>
<option value="chan">In số chẵn</option>
<option value="le">In số lẻ</option>
<option value="sapxep">Sắp xếp tăng dần</option>
</select>

<br><br>
<input type="submit" value="Thực hiện">

</form>

<?php

function timMax($a){
    return max($a);
}

function timMin($a){
    return min($a);
}

function soChinhPhuong($a){
    foreach($a as $x){
        $s=sqrt($x);
        if($s==floor($s))
            echo $x." ";
    }
}

function soChan($a){
    foreach($a as $x){
        if($x%2==0)
            echo $x." ";
    }
}

function soLe($a){
    foreach($a as $x){
        if($x%2!=0)
            echo $x." ";
    }
}

function sapXep($a){
    sort($a);
    foreach($a as $x)
        echo $x." ";
}

if(isset($_POST['dayso'])){

    $a = explode(",",$_POST['dayso']);

    $chon = $_POST['chon'];

    echo "<br>Kết quả: ";

    if($chon=="max")
        echo timMax($a);

    if($chon=="min")
        echo timMin($a);

    if($chon=="cp")
        soChinhPhuong($a);

    if($chon=="chan")
        soChan($a);

    if($chon=="le")
        soLe($a);

    if($chon=="sapxep")
        sapXep($a);
}

?>

</body>
</html>