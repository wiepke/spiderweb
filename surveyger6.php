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
            </table> <!-- all dimensions of the universities -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> weiter </button>
    </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-collapse collapse" id="second">
            <table style="width:900px" class="table table-bordered table-striped js-options-table">
            <tr>
                <td width="19%">
                    Wer bestimmt das Forschungsthema?
                </td>
                <td width="27%">
                    Lehrende geben das Forschungsthema vor.
                </td>
                <td width="27%">
                    Innerhalb eines vorgegebenen Rahmens legen die Studierenden ihr Forschungsthema fest.
                </td>
                <td width="27%">
                    Die Studierenden legen das Thema ihrer Forschungsarbeit selbst fest.
                </td>
            </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="radio" name="knowledgebuilding" value="1">
                    </td>
                    <td align="center">
                        <input type="radio" name="knowledgebuilding" value="2">
                    </td>
                    <td align="center">
                        <input type="radio" name="knowledgebuilding" value="3">
                    </td>
                </tr>
            </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> zurück </button>
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> weiter </button>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-collapse collapse" id="third">
            <table style="width:900px" class="table table-bordered table-striped js-options-table">
                <tr>
                    <td width="19%">
                        Wer entwickelt die Forschungsfrage?
                    </td>
                    <td width="27%">
                        Lehrende geben die Forschungsfrage vor.
                    </td>
                    <td width="27%">
                        Die Studierenden entwickeln die Forschungsfrage unter Anleitung von Lehrenden.
                    </td>
                    <td width="27%">
                        Die Studierenden entwickeln die Forschungsfrage selbst.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="radio" name="negotiable" value="1">
                    </td>
                    <td align="center">
                        <input type="radio" name="negotiable" value="2">
                    </td>
                    <td align="center">
                        <input type="radio" name="negotiable" value="3">
                    </td>
                </tr>
            </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> zurück </button>
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> weiter </button>
        </div>
    </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="fourth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie planen die Studierenden den Forschungsprozess?
                                </td>
                                <td width="27%">
                                    Lehrende geben Phasen und Fristen des Forschungs-prozesses vor.
                                </td>
                                <td width="27%">
                                    Die Studierenden planen unter Anleitung von Lehrenden den Forschungsprozess.
                                </td>
                                <td width="27%">
                                    Die Studierenden planen den Forschungsprozess selbständig.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="topic" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="topic" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="topic" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="fifth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie führen die Studierenden die Forschung durch?
                                </td>
                                <td width="27%">
                                    Lehrende (oder Tutoren) leiten die Durchführung der Forschung an.
                                </td>
                                <td width="27%">
                                    Lehrende (oder Tutoren) leiten die Durchführung der Forschung an.
                                </td>
                                <td width="27%">
                                    Die Studierenden führen die Forschung selbständig durch.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="question" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="question" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="question" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="sixth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie erhalten die Studierenden Feedback im Forschungs-prozess?
                                </td>
                                <td width="27%">
                                    Lehrende (oder Tutoren) geben (oder fordern) zu gesetzten Zeitpunkten (Peer-)Feedback.
                                <td width="27%">
                                    Gesetztes und selbst eingeholtes Feedback werden kombiniert
                                </td>
                                <td width="27%">
                                    Die Studierenden erfragen selbst Feedback bei Lehrenden oder Peers.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="tasks" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="tasks" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="tasks" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="sixth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Was passiert mit den Ergebnissen studentischer Forschung?
                                </td>
                                <td width="27%">
                                    Die Ergebnisse bleiben im geschützten Rahmen der Beteiligten.
                                <td width="27%">
                                    Die Ergebnisse werden im Fachbereich / in der Fakultät öffentlich gemacht.
                                </td>
                                <td width="27%">
                                    Die Ergebnisse werden veröffent-licht und hochschulweit sichtbar.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#eighth"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="eighth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie wird der Erfolg der Forschung bewertet?
                                </td>
                                <td width="27%">
                                    Es gibt eine vorgegebene Form zur Bewertung (z.B. über eine Prüfung).
                                <td width="27%">
                                    Lehrende und Studierende bestimmen im Prozess, wie die Forschung bewertet werden kann.
                                </td>
                                <td width="27%">
                                    Studierende entscheiden selbst, ob und wie ihre Forschung bewertet wird.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> zurück </button>
                        <button class="btn btn-primary" type="submit">senden</button>
                    </div>
                </div>
    </div> <!--complete form div -->
    </form>
    </div>
    </body>
<?php
?>