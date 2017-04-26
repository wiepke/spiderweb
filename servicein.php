<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 27.03.2017
 * Time: 13:15
 */
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "test");
if($_SERVER['REQUEST_METHOD'] =='POST') {
    $INSERTSPINNE = "INSERT INTO `spinnendiagrammdaten` (`".
        implode('`, `',array_keys($_POST)).
        "`) VALUES ('".
        implode('\',\'',array_values($_POST)).
        "')";
    $queryObj = mysqli_query($conn,$INSERTSPINNE);
    header('Content-Type: application/x-www-form-urlencoded');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($conn->query($INSERTSPINNE) === TRUE) {
        openLog("New record created successfully",LOG_INFO,1);
    } else {
        openLog("New record could not be created",LOG_INFO,1);
    }
    $conn->close();
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
redirect ("display.html",303);