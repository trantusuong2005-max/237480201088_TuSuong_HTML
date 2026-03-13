<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>bai8</title>
</head>
<body>

<select>

<?php

$year=date("Y");

for($i=1900;$i<=$year;$i++){
echo "<option>$i</option>";
}

?>

</select>

</body>
</html>