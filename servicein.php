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
    $survey = [];
    array_push($survey, $_POST["oeffentlichkeit"]);
    array_push($survey, $_POST["Bewertung"]);
    array_push($survey, $_POST["tasks"]);
    array_push($survey, $_POST["question"]);
    array_push($survey, $_POST["inquiry"]);
    array_push($survey, $_POST["topic"]);
    array_push($survey, $_POST["negotiable"]);
    array_push($survey, $_POST["knowledgebuilding"]);
    $INSERTSPINNE = "INSERT INTO `spinnendiagrammdaten` (`oeffentlichkeit`, `Bewertung`, `tasks`, `question`, `inquiry`, `topic`, `negotiable`, `knowledgebuilding`) VALUES ($survey[0],$survey[1],$survey[2],$survey[3],$survey[4],$survey[5],$survey[6],$survey[7])";
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