<?php

$s="Microsoft Windows";
$ch="o";

$count=0;

for($i=0;$i<strlen($s);$i++){
    if($s[$i]==$ch) $count++;
}

echo "So lan xuat hien = $count";

?>