<?php

$s="TRUONG DAI HOC BAC LIEU";

$a=explode(" ",$s);

$max=$a[0];

foreach($a as $w){
    if(strlen($w)>strlen($max))
        $max=$w;
}

echo "Tu dai nhat: $max";

?>