<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>bai6
    
</title>
</head>
<body>

<table border="1" cellpadding="5">

<tr>
<th>n</th>
<th>n^2</th>
</tr>

<?php

for($i=0;$i<=50;$i++){
echo "<tr>";
echo "<td>$i</td>";
echo "<td>".($i*$i)."</td>";
echo "</tr>";
}

?>

</table>

</body>
</html>