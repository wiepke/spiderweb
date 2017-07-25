<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Analyse und Konzeption forschenden Lernens - das FideS-Doppelradmodell </title>
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
<a href="http://fides-projekt.de/">
    <img alt="Brand" src="pics/Fides_logo.png" style="margin-top: -3px;">
</a><br>
<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bonsai.js"></script>
<script src="diagram.js"></script>
<script src="serviceout.js"></script>
<script src="Listingout.js"></script>
<div class="dropdown" align="right" style="margin-right:50px;margin-top:-10px;margin-bottom: 20px;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sprache
        <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="mikrodisplayger.php">deutsch</a></li>
        <li><a href="mikrodisplayeng.php">englisch</a></li>
    </ul>
</div> <!-- language toogle -->
<div align="right" style="margin-right:50px;margin-top:10px">
    <a href="mesodisplayger.php">meso</a>
</div><!-- meso / mikro toggle -->
<div align="center">
    <h2><u>Diagramme zur Darstellung verschiedener Kriterien in Universitäten</u></h2>
    <h2><u>mikroebene</u></h2>
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
<table style="width:500px" class="table table-bordered table-striped js-options-table">
    <tr>
        <td>
            Uni:
        </td>
        <td>
            <input name="Uni" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Kurs:
        </td>
        <td>
            <input name="Kurs" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Assessment:
        </td>
        <td>
            <table>
                <tr>
                <td width="150">
                    <input type="radio" name="Assessment" class="dimensionFilter" value="1">
                </td>
                <td width="150">
                    <input type="radio" name="Assessment" class="dimensionFilter" value="2">
                </td>
                <td width="150">
                    <input type="radio" name="Assessment" class="dimensionFilter" value="3">
                </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Forschungsthema:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Forschungsthema" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsthema" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsthema" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Forschungsfrage:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Forschungsfrage" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsfrage" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsfrage" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Planung:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Planung" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Planung" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Planung" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Durchführung:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Durchfuhrung" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Durchfuhrung" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Durchfuhrung" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Reflexion:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Reflexion" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Reflexion" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Reflexion" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Ergebnisdarstellung:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div> <!-- all the filters -->
<div align="center" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#table">zeige Filter</button>
    <button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">bereinige Filter</button>
    <button type="button" class="btn btn-primary" onClick="showall(Listing())">suche!</button><br> <br>
    <button id="previous" type="button" class="btn btn-info" disabled onClick="previous(Listing());return false;">letzten 3</button>
    <button id="next" type="button" class="btn btn-info" disabled onClick="next(Listing());return false;">nächsten 3</button>
</div> <!-- all the buttons -->

</body>
</html>