<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 16.03.2017
 * Time: 14:04
 */
echo "[\n";
$Kriterien = [];
foreach ($_GET as $key => $value){
    array_push($Kriterien,$key);
    array_push($Kriterien,$value);
}
$db = mysqli_connect("localhost", "root", "", "test");
$REQUESTSPINNE  = "SELECT * FROM spinnendiagrammdaten";
for ($i=0;$i<count($Kriterien)-2;$i++){
    if ($i % 2 == 0) {
        if ($i == 0) {
            $REQUESTSPINNE = $REQUESTSPINNE . " WHERE " . $Kriterien[$i];
        }
        else $REQUESTSPINNE = $REQUESTSPINNE . ") AND " . $Kriterien[$i];
    }
    else $REQUESTSPINNE = $REQUESTSPINNE."=LOWER(".$Kriterien[$i];
}
if (count($Kriterien)!=2) {$REQUESTSPINNE=$REQUESTSPINNE.")";}
$REQUESTSPINNE = $REQUESTSPINNE." LIMIT " .$Kriterien[count($Kriterien)-1] .",3;";
$queryObj = mysqli_query($db, $REQUESTSPINNE);
header('Content-Type: application/json');
$next = 0;
if ($result = mysqli_fetch_object($queryObj))
    $next=1;
while ($next) {
    echo json_encode($result, JSON_PRETTY_PRINT);
    if ($result = mysqli_fetch_object($queryObj)) {
    echo ",\n";
    }
    else $next=0;
}
echo "\n]";
