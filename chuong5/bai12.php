<!DOCTYPE html>
<html>
<body>

<table border="1" cellspacing="0" cellpadding="30">

<?php

for($i=0;$i<8;$i++){
    echo "<tr>";

    for($j=0;$j<8;$j++){

        if(($i+$j)%2==0)
            echo "<td bgcolor='white'></td>";
        else
            echo "<td bgcolor='black'></td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>