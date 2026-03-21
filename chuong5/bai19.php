<?php

echo "Chao ban <br>";

if(isset($_COOKIE['time'])){

echo "Lan truy cap gan nhat: ".date("d/m/Y H:i:s",$_COOKIE['time']);

setcookie("time",time(),time()+600);

}else{

setcookie("time",time(),time()+600);

}

?>