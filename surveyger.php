<?php
?>
    <head>
        <title> Uni evaluation </title>
        <meta charset="UTF-8">
        <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="dropdown" align="right" style="margin-right:50px;margin-top:10px">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sprache
            <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="surveyger.php">deutsch</a></li>
            <li><a href="surveyeng.php">englisch</a></li>
        </ul>
    </div>
    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <div align="center" style="margin-top: 5px;">
        <h2><u> Universitäts-Evaluation </u></h2>
        <p align="left" style="margin-left:28%">
            In der nachfolgenden Tabelle sehen sie verschiedene Kriterien einer Universität.<br>
            Bitte geben Sie in der obersten Spalte an, welche Universität Sie evaluieren möchten.<br>
            Nachfolgend stehen 8 Dimensionen zur Bewertung offen, in denen Sie einschätzen können in welcher Richtung sie am stärksten ausgeprägt sind.<br>
            Sollte ihre zu beschreibene Universität ihrer Auffassung nach in beiden Richtungen gleich stark vertreten sein, wählen sie die Mitte.<br>
            <br>
            Nach dem Absenden des Fragebogens werden Sie weitergeleitet und können ihre Antworten grafisch dargestellt betrachten.
        </p> <!-- explanation text -->
        <form name="survey" method="POST" action="servicein.php">
            <div class="panel-group" id="forms">
                <div class="panel panel-default">
                    <div class="panel-collapse collapse in" id="first">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="38%">
                                    Uni:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="uni" placeholder="uni" size="72%" ></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="38%">
                                    Kurs:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="course" placeholder="course" size="72%" ></div>
                                </td>
                            </tr>
                            <tr>
                    <td width="38%">
                        Das aufzubauende Wissen ist
                    </td>
                    <td width="22%">
                        neu für die Studenten
                    </td>
                    <td width="20%">
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="knowledgebuilding" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="knowledgebuilding" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="knowledgebuilding" value="3">
                                </td>
                            </tr>
                        </table>

                    </td>
                    <td width="20%">
                        neu in der Disziplin
                    </td>
                </tr>
                <tr>
                    <td>
                        Das Wissen
                    </td>
                    <td>
                        ist statisch
                    </td>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="negotiable" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="negotiable" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="negotiable" value="3">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        ist verhandelbar
                    </td>
                </tr>
                <tr>
                    <td>
                        Das Thema wird gewählt
                    </td>
                    <td>
                        vom Lehrer
                    </td>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="topic" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="topic" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="topic" value="3">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        von den Studenten
                    </td>
                </tr>
                <tr>
                    <td>
                        Wer entscheidet bei Fragen?
                    </td>
                    <td>
                        Der Lehrer
                    </td>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="question" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="question" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="question" value="3">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        Die Studenten
                    </td>
                </tr>
                <tr>
                    <td>
                        Aufgaben und Methodik werden vorgegeben
                    </td>
                    <td>
                        vom Lehrer
                    </td>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="tasks" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="tasks" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="tasks" value="3">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        von den Studenten
                    </td>
                </tr>
                <tr>
                    <td>
                        Die Befragung
                    </td>
                    <td>
                        ist abgeschlossen / wohl definiert
                    </td>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="inquiry" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="inquiry" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="inquiry" value="3">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        ist offen
                    </td>
                </tr>
                <tr>
                    <td>
                        Publikum und Ergebnis sind
                    </td>
                    <td>
                        statisch
                    </td>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="audience" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="audience" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="audience" value="3">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        von Studenten geformt
                    </td>
                </tr>
                <tr>
                    <td>
                        Die Einschätzung wird kontrolliert
                    </td>
                    <td>
                        vom Lehrer
                    </td>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    <input type="radio" name="assessment" value="1">
                                </td>
                                <td>
                                    <input type="radio" name="assessment" value="2">
                                </td>
                                <td style="width:5%">
                                    <input type="radio" name="assessment" value="3">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        von den Studenten
                    </td>
                </tr>
            </table> <!-- all dimensions of the universities -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> weiter </button>
    </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-collapse collapse" id="second">
            Dummy for survey <br> <!-- It's a dummy! -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> zurück </button>
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> weiter </button>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-collapse collapse" id="third">
            another Dummy <br> <!-- It's a dummy! -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> zurück </button>
            <button class="btn btn-primary" type="submit">senden</button>
        </div>
    </div>
    </div> <!--complete form div -->
    </form>
    </div>
    </body>
<?php
?>