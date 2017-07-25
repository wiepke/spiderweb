<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Analyse und Konzeption forschenden Lernens - das FideS-Doppelradmodell </title>
    <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <style>
        .dia {float: left; padding: 20px;}
    </style>
</head> <!-- all the libraries -->
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
<div class="dropdown" align="right" style="margin-right:50px;margin-top:-10px;margin-bottom: 20px;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">language
        <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="mesodisplayger.php">german</a></li>
        <li><a href="mesodisplayeng.php">english</a></li>
    </ul>
</div> <!-- language toggle -->
<div align="right" style="margin-right:50px;margin-top:10px">
    <a href="mikrodisplayeng.php">mikro</a>
</div><!-- meso / mikro toggle -->
<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bonsai.js"></script>
<script src="diagram.js"></script>
<script src="serviceout.js"></script>
<script src="Listingout.js"></script>
<div align="center">
    <h2><u>Diagrams for displaying different dimensions of universities</u></h2>
    <h2><u>Mesolevel</u></h2>
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
                Course:
            </td>
            <td>
                <input name="Kurs" value="" class="stringFilter" size="40">
            </td>
        </tr>
        <tr>
            <td>
                curricular embedding:
            </td>
            <td>
                <table>
                    <tr>
                        <td width="150">
                            <input type="radio" name="Einbindung" class="dimensionFilter" value="1">
                        </td>
                        <td width="150">
                            <input type="radio" name="Einbindung" class="dimensionFilter" value="2">
                        </td>
                        <td width="150">
                            <input type="radio" name="Einbindung" class="dimensionFilter" value="3">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                modular location:
            </td>
            <td>
                <table>
                    <tr>
                        <td width="150">
                            <input type="radio" name="Verortung" class="dimensionFilter" value="1">
                        </td>
                        <td width="150">
                            <input type="radio" name="Verortung" class="dimensionFilter" value="2">
                        </td>
                        <td width="150">
                            <input type="radio" name="Verortung" class="dimensionFilter" value="3">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                contentsetting:
            </td>
            <td>
                <table>
                    <tr>
                        <td width="150">
                            <input type="radio" name="Inhaltsrahmen" class="dimensionFilter" value="1">
                        </td>
                        <td width="150">
                            <input type="radio" name="Inhaltsrahmen" class="dimensionFilter" value="2">
                        </td>
                        <td width="150">
                            <input type="radio" name="Inhaltsrahmen" class="dimensionFilter" value="3">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                assessmentsetting:
            </td>
            <td>
                <table>
                    <tr>
                        <td width="150">
                            <input type="radio" name="Prufungsrahmen" class="dimensionFilter" value="1">
                        </td>
                        <td width="150">
                            <input type="radio" name="Prufungsrahmen" class="dimensionFilter" value="2">
                        </td>
                        <td width="150">
                            <input type="radio" name="Prufungsrahmen" class="dimensionFilter" value="3">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                timesetting:
            </td>
            <td>
                <table>
                    <tr>
                        <td width="150">
                            <input type="radio" name="Zeitrahmen" class="dimensionFilter" value="1">
                        </td>
                        <td width="150">
                            <input type="radio" name="Zeitrahmen" class="dimensionFilter" value="2">
                        </td>
                        <td width="150">
                            <input type="radio" name="Zeitrahmen" class="dimensionFilter" value="3">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                ressourcsetting:
            </td>
            <td>
                <table>
                    <tr>
                        <td width="150">
                            <input type="radio" name="Ressourcenrahmen" class="dimensionFilter" value="1">
                        </td>
                        <td width="150">
                            <input type="radio" name="Ressourcenrahmen" class="dimensionFilter" value="2">
                        </td>
                        <td width="150">
                            <input type="radio" name="Ressourcenrahmen" class="dimensionFilter" value="3">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div> <!-- all the filters -->
<div align="center" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#table">show Filter</button>
    <button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">clean Filters</button>
    <button type="button" class="btn btn-primary" onClick="showall(Listing())">search!</button><br> <br>
    <button id="previous" type="button" class="btn btn-info" disabled onClick="previous(Listing());return false;">previous 3</button>
    <button id="next" type="button" class="btn btn-info" disabled onClick="next(Listing());return false;">next 3</button>
</div> <!-- all the buttons -->
</body>
</html>