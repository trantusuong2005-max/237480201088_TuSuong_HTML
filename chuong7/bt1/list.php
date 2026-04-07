<?php
include("Connection.php");

$table = $_POST['chon'];

$sql = "SELECT * FROM $table";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>