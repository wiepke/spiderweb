<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 28.08.2017
 * Time: 10:08
 */
include 'dbconn.php';
$conn->set_charset("utf8");
function intoDB($keys, $values,$conn,$mikro){
    $i=1;
    $INSERTSPINNE = "";
    if ($mikro) {
        $INSERTSPINNE = "UPDATE `mikroebene`";
    } else {
        $INSERTSPINNE = "UPDATE `mesoebene`";
    }
    $INSERTSPINNE = $INSERTSPINNE. "SET `".$keys[0]."`='".($values[0])."'";
    while (count($keys)>$i){
        $INSERTSPINNE=$INSERTSPINNE.", `".$keys[$i]."`='".($values[$i])."'";
        $i++;
    }
    if ($mikro){
        $INSERTSPINNE=$INSERTSPINNE." WHERE id=".$_GET["mikroid"];
    } else {
        $INSERTSPINNE = $INSERTSPINNE . " WHERE id=" . $_GET["mesoid"];
    }
    if (mysqli_query($conn,$INSERTSPINNE) === TRUE){
        openLog("New record created successfully",LOG_INFO,1);
    } else {
        openLog("New record could not be created",LOG_INFO,1);
    }
    header('Content-Type: application/x-www-form-urlencoded');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
if($_SERVER['REQUEST_METHOD'] =='POST') {
    $values=[];
    $keys=[];
    while (list($key, $val) = each($_POST)) {
        array_push($keys,($key));
        array_push($values,($val));
    }
    intoDB($keys, $values,$conn, true);
    intoDB($keys, $values,$conn, false);
    $conn->close();
}
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
if(preg_match('/eng/',$_SERVER['HTTP_REFERER']) !== 0){
    redirect ("publishereng.php?mikroid=".$_GET['mikroid']."&mesoid=".$_GET['mesoid'],303);}
else redirect("publisherger.php?mikroid=".$_GET['mikroid']."&mesoid=".$_GET['mesoid'],303);