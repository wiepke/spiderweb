<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 16.03.2017
 * Time: 14:04
 */

$uni = $_GET['uni'];
// here you would adapt your mysql request according to the filters given
$db = mysqli_connect("localhost", "root", "", "test"); // this should be in a config php file
$REQUESTSPINNE  = "SELECT * FROM spinnendiagrammdaten";
$queryObj = mysqli_query($db, $REQUESTSPINNE);
$result = mysqli_fetch_object($queryObj);
header('Content-Type: application/json');
echo json_encode($result, JSON_PRETTY_PRINT);