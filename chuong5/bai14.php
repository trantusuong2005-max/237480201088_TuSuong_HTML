<?php

$a = array(
array(1.1,2.3,3.1,4.0,5.0),
array(6.2,7.7,8.8,9.5,1.2),
array(4.6,1.9,3.6,8.9,1.5),
array(1.6,1.7,1.8,1.9,2.0)
);

$max=$a[0][0];
$min=$a[0][0];
$tong=0;

foreach($a as $row){
    foreach($row as $x){

        if($x>$max) $max=$x;
        if($x<$min) $min=$x;

        $tong+=$x;

        echo $x." ";
    }

    echo "<br>";
}

echo "<br>Max = $max";
echo "<br>Min = $min";
echo "<br>Tong = $tong";

?>