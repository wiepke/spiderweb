<?php $allOfItMikro = [];
$allOfItMeso = [];
$REQUEST = "SELECT Uni,Kurs,Fachbereich,AnzahlStudenten,SemesterZahl FROM `mikroebene`";
if (isset($_GET['anyway'])) {
    if ($_GET['anyway'] !== '1') {
        $REQUEST = $REQUEST . " WHERE published='1'";
    }
} else {
    $REQUEST = $REQUEST . " WHERE published='1'";
}
$queryObj = mysqli_query($conn, $REQUEST);
while ($result = mysqli_fetch_object($queryObj)) {
    $temp = $result;
    $temp->Uni = utf8_encode($result->Uni);
    $temp->Kurs = utf8_encode($result->Kurs);
    $temp->Fachbereich = utf8_encode($result->Fachbereich);
    $temp->AnzahlStudenten = utf8_encode($result->AnzahlStudenten);
    $temp->SemesterZahl = utf8_encode($result->SemesterZahl);
    array_push($allOfItMikro, $temp);
};
$REQUEST = "SELECT Uni,Kurs,Fachbereich,AnzahlStudenten,SemesterZahl FROM `mesoebene`";
if (isset($_GET['anyway'])) {
    if ($_GET['anyway'] !== '1') {
        $REQUEST = $REQUEST . " WHERE published='1'";
    }
} else {
    $REQUEST = $REQUEST . " WHERE published='1'";
}
$queryObj = mysqli_query($conn, $REQUEST);
while ($result = mysqli_fetch_object($queryObj)) {
    $temp = $result;
    $temp->Uni = utf8_encode($result->Uni);
    $temp->Kurs = utf8_encode($result->Kurs);
    $temp->Fachbereich = utf8_encode($result->Fachbereich);
    $temp->AnzahlStudenten = utf8_encode($result->AnzahlStudenten);
    $temp->SemesterZahl = utf8_encode($result->SemesterZahl);
    array_push($allOfItMeso, $temp);
};
$conn->close();
echo "<script> let allOfItMikro=[];\n ";
for ($i = 0; $i < count($allOfItMikro); $i++) {
    echo "allOfItMikro.push({\n"
        . "Uni: '" . $allOfItMikro[$i]->Uni . "',\n"
        . "Kurs: '" . $allOfItMikro[$i]->Kurs . "',\n"
        . "Fachbereich: '" . $allOfItMikro[$i]->Fachbereich . "',\n"
        . "AnzahlStudenten: '" . $allOfItMikro[$i]->AnzahlStudenten . "',\n"
        . "Semesterzahl: '" . $allOfItMikro[$i]->SemesterZahl . "'\n"
        . "});\n";
}
echo "</script>";
echo "<script> let allOfItMeso=[];\n";
for ($i = 0; $i < count($allOfItMeso); $i++) {
    echo "allOfItMeso.push({\n"
        . "Uni: '" . $allOfItMeso[$i]->Uni . "',\n"
        . "Kurs: '" . $allOfItMeso[$i]->Kurs . "',\n"
        . "Fachbereich: '" . $allOfItMeso[$i]->Fachbereich . "',\n"
        . "AnzahlStudenten: '" . $allOfItMeso[$i]->AnzahlStudenten . "',\n"
        . "Semesterzahl: '" . $allOfItMeso[$i]->SemesterZahl . "'\n"
        . "});\n";
}
echo "</script>";
?>