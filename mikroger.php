<?php
?>
    <head>
        <title> Analyse und Konzeption forschenden Lernens - das FideS-Doppelradmodell </title>
        <meta charset="UTF-8">
        <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <a href="http://fides-projekt.de/">
        <img alt="Brand" src="pics/Fides_logo.png" style="margin-top: -3px;">
    </a><br>
    <div class="dropdown" align="right" style="margin-right:50px;margin-top:-10px;margin-bottom: 20px;">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sprache
            <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="mesoger.php">deutsch</a></li>
            <li><a href="mikroeng.php">englisch</a></li>
        </ul>
    </div> <!-- language toggle -->
    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <div align="center" style="margin-top: 5px;">
        <h2><u> Analyse und Konzeption forschenden Lernens - das FideS-Doppelradmodell </u></h2>
        <h3><u> Mikroebene </u></h3>
        <br>
        <br>
        <p align="center" style="width:900px;margin-bottom:50px">
            Im Folgenden betrachten wir die Mikroebene Ihrer Lehrveranstaltungen (Lehr-/Lernsetting), d.h. die Entscheidungen, die Sie persönlich für Ihren Kurs treffen. Diese haben Auswirkungen auf die Autonomie der Studierenden und ihre Handlungsspielräume.
        </p>
        <form name="survey" method="POST" action="mikroin.php?utf8=✓" style="width:950px">
            <div class="panel-group" id="forms">
                <div class="panel panel-default">
                    <div class="panel-collapse collapse in" id="zero">
                        <p align="center" style="margin-top:10px">                            Im Folgenden können Sie unterschiedliche Dimensionen wählen, die die Gestaltung Ihrer Lehrveranstaltung prägen. Die Auswahl dient dazu, die didaktischen Entscheidungen, die sich bei der Planung einer Lehrveranstaltung im Modus forschenden Lernens treffen, nachzuvollziehen. Bitte denken Sie beim Ausfüllen an eine bestimmte Lehrveranstaltung, die sie entweder im Nachgang reflektieren oder im Vorfeld neu konzipieren wollen. Nach Absenden des Fragebogens erhalten Sie eine grafische Darstellung Ihres Ergebnisses und können Ihre Lehrveranstaltung mit anderen vergleichen. <br>
                        </p> <!-- explanation text -->
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="38%">
                                    Uni:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="Uni" placeholder="Uni" size="72%" ></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="38%">
                                    Kurs:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="Kurs" placeholder="Kurs" size="72%" ></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="38%">
                                    Fachbereich:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="Fachbereich" placeholder="Fachbereich" size="72%" ></div>
                                </td>
                            </tr>
                        </table> <!-- all dimensions of the universities -->
                        <button id="zerobutton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first" autofocus onclick="document.getElementById('zerobutton').autofocus=false;document.getElementById('firstbutton').autofocus=true;"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="first">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="38%">
                                    Anzahl von Studenten:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="AnzahlStudenten" placeholder="0" size="72%" ></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="38%">
                                    Semesterzahl:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="Semesterzahl" placeholder="0" size="72%" ></div>
                                </td>
                            </tr>
                        </table>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> zurück </button>
                        <button id="firstbutton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="second">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td colspan="3">
                                    <p align="center">
                                        Wer bestimmt das Forschungsthema?
                                    </p>
                                </td>
                            </tr>
                            <tr>
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
                                <td align="center">
                                    <input type="radio" name="Forschungsthema" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Forschungsthema" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Forschungsthema" value="3">
                                </td>
                            </tr>
                        </table>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> zurück </button>
                        <button id="secondbutton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="third">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td colspan="3">
                                    <p align="center">
                                        Wer entwickelt die Forschungsfrage?
                                    </p>
                                </td>
                            </tr>
                            <tr>
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
                                <td align="center">
                                    <input type="radio" name="Forschungsfrage" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Forschungsfrage" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Forschungsfrage" value="3">
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
                                <td colspan="3">
                                    <p align="center">
                                        Wie planen die Studierenden den Forschungsprozess?
                                    </p>
                                </td>
                            </tr>
                            <tr>
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
                                <td align="center">
                                    <input type="radio" name="Planung" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Planung" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Planung" value="3">
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
                                <td colspan="3">
                                    <p align="center">
                                        Wie führen die Studierenden die Forschung durch?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Lehrende (oder Tutoren) leiten die Durchführung der Forschung an.
                                </td>
                                <td width="27%">
                                    Die Studierenden führen mit Unterstützung von Lehrenden (oder Tutoren) ihre Forschung durch.
                                </td>
                                <td width="27%">
                                    Die Studierenden führen die Forschung selbständig durch.
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="radio" name="Durchfuhrung" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Durchfuhrung" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Durchfuhrung" value="3">
                                </td>
                            </tr>
                        </table>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="sixth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td colspan="3">
                                    <p align="center">
                                        Wie erhalten die Studierenden Feedback im Forschungs-prozess?
                                    </p>
                                </td>
                            </tr>
                            <tr>
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
                                <td align="center">
                                    <input type="radio" name="Reflexion" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Reflexion" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Reflexion" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="seventh">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td colspan="3">
                                    <p align="center">
                                        Was passiert mit den Ergebnissen studentischer Forschung?
                                    </p>
                                </td>
                            </tr>
                            <tr>
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
                                <td align="center">
                                    <input type="radio" name="Ergebnisdarstellung" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Ergebnisdarstellung" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Ergebnisdarstellung" value="3">
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
                                <td colspan="3">
                                    <p align="center">
                                        Wie wird der Erfolg der Forschung bewertet?
                                    </p>
                                </td>
                            </tr>
                            <tr>
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
                                <td align="center">
                                    <input type="radio" name="Assessment" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Assessment" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Assessment" value="3">
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