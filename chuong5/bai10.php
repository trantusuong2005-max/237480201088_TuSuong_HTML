<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>bai10</title>
</head>
<body>

<?php

$mang = array(3,7,2,9,5,8,4,6);

echo "Mảng: ";
print_r($mang);

echo "<br><br>";

echo "Số chẵn: ";
foreach($mang as $x){
if($x%2==0) echo "$x ";
}

echo "<br><br>";

echo "Tổng số lẻ: ";
$tong=0;
foreach($mang as $x){
if($x%2!=0) $tong+=$x;
}
echo $tong;

echo "<br><br>";

echo "Max: ".max($mang);
echo "<br>";

echo "Min: ".min($mang);

echo "<br><br>";

echo "Đảo ngược: ";
$mang=array_reverse($mang);
print_r($mang);

?>

</body>
</html>