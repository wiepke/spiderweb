<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 27.03.2017
 * Time: 13:15
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
    $INSERTSPINNE = "INSERT INTO `mesoebene` (`".
        implode('`, `',$keys).
        "`) VALUES ('".
        implode('\',\'', $values).
        "')";
    if (mysqli_query($conn,$INSERTSPINNE) === TRUE){
        openLog("New record created successfully",LOG_INFO,1);
    } else {
        openLog("New record could not be created",LOG_INFO,1);
    }
    header('Content-Type: application/x-www-form-urlencoded');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id=mysqli_insert_id($conn);
    $conn->close();
}
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
if(preg_match('/eng/',$_SERVER['HTTP_REFERER']) !== 0){
    redirect ("mikrodisplayeng.php?mesoid=".$id."&mikroid=".$_GET["mikroid"],303);}
else redirect("mikrodisplayger.php?mesoid=".$id."&mikroid=".$_GET["mikroid"],303);