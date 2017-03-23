<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 16.03.2017
 * Time: 14:04
 */
echo "[\n";
$Kriterien = [];
if (isset($_GET['uni'])) {
    array_push($Kriterien,'uni');
    array_push($Kriterien,$_GET['uni']);
}
if (isset($_GET['id'])){
    array_push($Kriterien,'id');
    array_push($Kriterien,$_GET['id']);
}
if (isset($_GET['oeffentlichkeit'])){
    array_push($Kriterien,'oeffentlichkeit');
    array_push($Kriterien,$_GET['oeffentlichkeit']);
}
if (isset($_GET['Bewertung'])) {
    array_push($Kriterien,'Bewertung');
    array_push($Kriterien,$_GET['Bewertung']);
}
// here you would adapt your mysql request according to the filters given
$db = mysqli_connect("localhost", "root", "", "test"); // this should be in a config php file
$REQUESTSPINNE  = "SELECT * FROM spinnendiagrammdaten";
for ($i=0;$i<count($Kriterien);$i++){
    if ($i % 2 == 0) {
        if ($i == 0) {
            $REQUESTSPINNE = $REQUESTSPINNE . " WHERE " . $Kriterien[$i];
        }
        else $REQUESTSPINNE = $REQUESTSPINNE . " AND " . $Kriterien[$i];
    }
    else $REQUESTSPINNE = $REQUESTSPINNE."=".$Kriterien[$i];
}
$queryObj = mysqli_query($db, $REQUESTSPINNE);
header('Content-Type: application/json');
$next = 1;
$result = mysqli_fetch_object($queryObj);
while ($next) {
    echo json_encode($result, JSON_PRETTY_PRINT);
    if ($result = mysqli_fetch_object($queryObj)) {
    echo ",\n";
    }
    else $next=0;
}
echo "\n]";