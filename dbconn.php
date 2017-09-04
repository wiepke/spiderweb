<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 25.07.2017
 * Time: 08:41
 */
header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "root", "", "test");
//$sql="CREATE TABLE IF NOT EXISTS mikroebene;";
//mysqli_query($conn, $sql);                            Funktionier aus irgendeinem Grund nicht.
//$sql="CREATE TABLE IF NOT EXISTS mesoebene;";
//mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD published INT DEFAULT '1'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Kurs VARCHAR(32)";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Uni VARCHAR(32)";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Fachbereich VARCHAR(32)";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD AnzahlStudenten INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Semesterzahl INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Assessment INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Forschungsthema INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Forschungsfrage INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Planung INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Durchfuhrung INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Reflexion INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mikroebene ADD Ergebnisdarstellung INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD published INT DEFAULT '1'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Kurs VARCHAR(32)";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Uni VARCHAR(32)";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Fachbereich VARCHAR(32)";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD AnzahlStudenten INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Semesterzahl INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Einbindung INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Verortung INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Inhaltsrahmen INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Prufungsrahmen INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Zeitrahmen INT DEFAULT '0'";
mysqli_query($conn, $sql);
$sql="ALTER TABLE mesoebene ADD Ressourcenrahmen INT DEFAULT '0'";
mysqli_query($conn, $sql);

?>