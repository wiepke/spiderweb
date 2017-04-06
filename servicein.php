<?php
/**
 * Created by PhpStorm.
 * User: fides-WHK
 * Date: 27.03.2017
 * Time: 13:15
 */

//$db = mysqli_connect("localhost", "root", "", "test"); // this should be in a config php file
function send(){
    $dom = new DOMDocument();
    $dom->validateOnParse = true;
    $html = '<html>
<head>
<title>fromformtest</title>
</head>
<body>
<h1>hello World</h1>
<input id="Uni2" value="potsdam">
</body>
</html>';
    $dom->loadHTML($html);
    $dom->preserveWhiteSpace = false;
    $belement = $dom->getElementById("Uni2");
    echo $belement->nodeValue;
    //DOMDocument::getElementById('Test')=DOMDocument::getElementByID('Uni');
    return false;
}
//$REQUESTSPINNE  = "INSERT INTO spinnendiagrammdaten VALUES (Uni,oeffentlichkeit,Bewertung)";
//$queryObj = mysqli_query($db, $REQUESTSPINNE);
//header('Content-Type: application/json');
//$result = mysqli_fetch_object($queryObj);