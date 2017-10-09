<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 16.03.2017
 * Time: 14:04
 */
include 'dbconn.php';
$conn->set_charset("utf8");
echo "[\n";
$Kriterien = [];
$REQUESTSPINNE  = "SELECT * FROM mesoebene";
foreach ($_GET as $key => $value){
    if (($key!=="mikro")){
        if($key!=="anyway"){
            if(($key!="from")){
                array_push($Kriterien,$key);
                array_push($Kriterien,$value);
            }
        }
    }else {
        if ($value==="true"){
            $REQUESTSPINNE  = "SELECT * FROM mikroebene";
        }
    }
}
for ($i=0;$i<count($Kriterien);$i++){
    if ($i % 2 == 0) {
        if ($i == 0) {
            $REQUESTSPINNE = $REQUESTSPINNE . " WHERE " . $Kriterien[$i];
        }
        else $REQUESTSPINNE = $REQUESTSPINNE . "') AND " . $Kriterien[$i];
    }
    else $REQUESTSPINNE = $REQUESTSPINNE."=LOWER('".$Kriterien[$i];
}
if (!isset($_GET["anyway"])) {
    if (count($Kriterien) == 0) {
        $REQUESTSPINNE = $REQUESTSPINNE . " WHERE published=LOWER('1";
    } else {
        $REQUESTSPINNE = $REQUESTSPINNE . "') AND published=LOWER('1";
    }
}
if ((count($Kriterien)!=0)||(!isset($_GET['anyway']))) {$REQUESTSPINNE=$REQUESTSPINNE."')";}

$pdo = new PDO('mysql:host=localhost;dbname=spinnennetz', 'root', 'voyager');
$statement = $pdo->prepare($REQUESTSPINNE);
$statement->execute();
$row = $statement->rowCount();

$REQUESTSPINNE = $REQUESTSPINNE." LIMIT " .$_GET['from'] .",1;";
$queryObj = mysqli_query($conn, $REQUESTSPINNE);
$next = 0;
if ($result = mysqli_fetch_object($queryObj))
    $next=1;
while ($next) {
    $temp=$result;
    echo json_encode($temp, JSON_PRETTY_PRINT);
    if ($result = mysqli_fetch_object($queryObj)) {
        echo ",\n";
    }
    else $next=0;
}
if($row!==0) {
    echo ",";
}
echo "\n{";
echo "\n".'"limit": '.'"'.$row.'"'."\n";
echo "}";
echo "\n]";
