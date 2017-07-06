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
<div class="dropdown" align="right" style="margin-right:50px;margin-top:10px">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">language
        <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="mikrodisplayger.php">german</a></li>
        <li><a href="mikrodisplayeng.php">english</a></li>
    </ul>
</div> <!-- language toggle -->
<div align="right" style="margin-right:50px;margin-top:10px">
    <a href="mesodisplayeng.php">meso</a>
</div><!-- meso / mikro toggle -->
<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bonsai.js"></script>
<script src="diagram.js"></script>
<script src="serviceout.js"></script>
<script src="Listingout.js"></script>
<div align="center">
    <h2><u>Diagrams for displaying different dimensions of universities</u></h2>
    <h2><u>micro level</u></h2>
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
                uni:
            </td>
            <td>
                <input name="Uni" value="" class="stringFilter" size="40">
            </td>
        </tr>
        <tr>
            <td>
                course:
            </td>
            <td>
                <input name="Kurs" value="" class="stringFilter" size="40">
            </td>
        </tr>
        <tr>
            <td>
                assessment:
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
                research topic:
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
                research question:
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
                plan:
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
                conduct:
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
                reflection:
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
                solutiondisplay:
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
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#table">show Filter</button>
    <button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">clean Filters</button>
    <button type="button" class="btn btn-primary" onClick="showall(Listing())">search!</button><br> <br>
    <button type="button" class="btn btn-info" onClick="previous(Listing());return false;">previous 3</button>
    <button type="button" class="btn btn-info" onClick="next(Listing());return false;">next 3</button>
</div> <!-- all the buttons -->
</body>
</html>