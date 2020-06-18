<?php
$conn = mysqli_connect("spiderweb-db", "root", "voyager", "spinnennetz", 3306);
//$conn = mysqli_connect("0.0.0.0", "root", "voyager", "spinnennetz", 3308);


$sql = "SELECT * FROM mesoebene";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";
    while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
        foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
        }
        echo "</tr>";
    }
    echo "</table>";

