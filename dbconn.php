<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 25.07.2017
 * Time: 08:41
 */



//$conn = mysqli_connect("localhost", "root", "", "test");
$db_host = "spiderweb-db";
$db_user = "root";
$db_password = "voyager";
$db_databasename = "spinnennetz";
$db_port = 3306;
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_databasename, $db_port);

?>
