<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Uni evaluation </title>
    <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <style>
        .dia {float: left; padding: 20px;}
    </style>
</head> <!-- all the libraries-->
<body style="width:100%;" onLoad="
<?php
    if (isset($_GET["id"])) {
        echo "showall([ 'id',";
        echo $_GET["id"];
        echo "])";

    }
?>
        ">

<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bonsai.js"></script>
<script src="diagram.js"></script>
<script src="serviceout.js"></script>
<script src="Listingout.js"></script>
<div class="dropdown" align="right" style="margin-right:50px;margin-top:10px">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sprache
        <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="displayger.php">deutsch</a></li>
        <li><a href="displayeng.php">englisch</a></li>
    </ul>
</div> <!-- language toogle -->
<div align="center">
    <h2><u>Diagramme zur Darstellung verschiedener Kriterien in Universitäten</u></h2>
</div>
<table border="0" align="center">
    <tr>
        <td>
            <div  id="diagram0" class="dia"></div>
        </td>
        <td>
            <div  id="diagram1" class="dia"></div>
        </td>
        <td>
            <div  id="diagram2" class="dia"></div>
        </td>
        <td>
    </tr>
</table> <!--includes all diagrams-->

<div class="collapse" id="table" align="center" style="margin-top:20px;">
<table style="width:900px" class="table table-bordered table-striped js-options-table">
    <!-- <tr>
        <td width="70%">
            ID:
        </td>
        <td>
            <input name="id" value="" class="idclass" size="3">
        </td>
    </tr>
    <tr>
        <td>
            ID größer oder gleich:
        </td>
        <td>
            <input name="id>" value="" class="idclass" size="3">
        </td>
    </tr>
    <tr>
        <td>
            ID kleiner oder gleich:
        </td>
        <td>
            <input name="id<" value="" class="idclass" size="3">
        </td>
    </tr> -->
    <tr>
        <td>
            Uni:
        </td>
        <td>
            <input name="uni" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Aufzubauendes Wissen:
        </td>
        <td>
            <input name="knowledgebuilding" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
    <tr>
        <td>
            Verhandelbarkeit:
        </td>
        <td>
            <input name="negotiable" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
    <tr>
        <td>
            Thema:
        </td>
        <td>
            <input name="topic" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
    <tr>
        <td>
            Fragen:
        </td>
        <td>
            <input name="question" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
    <tr>
        <td>
            Aufgaben:
        </td>
        <td>
            <input name="tasks" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
    <tr>
        <td>
            Befragung:
        </td>
        <td>
            <input name="inquiry" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
    <tr>
        <td>
            Publikum:
        </td>
        <td>
            <input name="audience" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
    <tr>
        <td>
            Einschätzung:
        </td>
        <td>
            <input name="assessment" value="" class="dimensionFilter" size="3">
        </td>
    </tr>
</table>
</div> <!-- all the filters -->
<div align="center" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#table">zeige Filter</button>
    <button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">bereinige Filter</button>
    <button type="button" class="btn btn-primary" onClick="showall(Listing())">suche!</button><br> <br>
    <button type="button" class="btn btn-info" onClick="previous(Listing());return false;">letzten 3</button>
    <button type="button" class="btn btn-info" onClick="next(Listing());return false;">nächsten 3</button>
</div> <!-- all the buttons -->

</body>
</html>