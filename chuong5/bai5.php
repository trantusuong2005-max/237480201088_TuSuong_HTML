<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>bai5</title>
</head>
<body>

<form method="post">

Số 1: <input type="number" name="a"><br><br>
Số 2: <input type="number" name="b"><br><br>

<input type="submit" name="uscln" value="USCLN">
<input type="submit" name="bscnn" value="BSCNN">

</form>

<?php

function uscln($a,$b){
while($b!=0){
$r=$a%$b;
$a=$b;
$b=$r;
}
return $a;
}

if(isset($_POST['a']) && isset($_POST['b'])){

$a=$_POST['a'];
$b=$_POST['b'];

if(isset($_POST['uscln'])){
echo "USCLN: ".uscln($a,$b);
}

if(isset($_POST['bscnn'])){
echo "BSCNN: ".($a*$b)/uscln($a,$b);
}

}

?>

</body>
</html>