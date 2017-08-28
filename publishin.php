<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 28.08.2017
 * Time: 10:08
 */
include 'dbconn.php';
$conn->set_charset("utf8");
if($_SERVER['REQUEST_METHOD'] =='POST') {
    $values=[];
    $keys=[];
    while (list($key, $val) = each($_POST)) {
        array_push($keys,($key));
        array_push($values,($val));
    }
    $INSERTSPINNE = "UPDATE `mesoebene` SET ".$keys[0]."=".$values[0].
        " WHERE id=".$_GET["mesoid"];
    if (mysqli_query($conn,$INSERTSPINNE) === TRUE){
        openLog("New record created successfully",LOG_INFO,1);
    } else {
        openLog("New record could not be created",LOG_INFO,1);
    }
    header('Content-Type: application/x-www-form-urlencoded');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $INSERTSPINNE = "UPDATE `mesoebene` SET ".$keys[0]."=".$values[0].
        " WHERE id=".$_GET["mesoid"];
    if (mysqli_query($conn,$INSERTSPINNE) === TRUE){
        openLog("New record created successfully",LOG_INFO,1);
    } else {
        openLog("New record could not be created",LOG_INFO,1);
    }
    header('Content-Type: application/x-www-form-urlencoded');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->close();
}
echo $INSERTSPINNE;
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
if(preg_match('/eng/',$_SERVER['HTTP_REFERER']) !== 0){
    redirect ("mikrodisplayeng.php?mesoid=".$_GET["mesoid"]."&mikroid=".$_GET["mikroid"],303);}
else redirect("mikrodisplayger.php?mesoid=".$_GET["mesoid"]."&mikroid=".$_GET["mikroid"],303);