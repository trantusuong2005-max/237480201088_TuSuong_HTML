<!DOCTYPE html>
<html>
<body>

<?php

$color = array("black","blue","green","red","brown","magenta");

echo "<ul>";

foreach($color as $c){
    echo "<li style='color:$c'>$c</li>";
}

echo "</ul>";

?>

</body>
</html>