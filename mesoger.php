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
    <script src="formchecker.js"></script>
    <div align="center" style="margin-top: 5px;">
        <h2><u> Analyse und Konzeption forschenden Lernens - das FideS-Doppelradmodell </u></h2>
        <h3><u> Mesoebene </u></h3>
        <br>
        <br>
        <p align="center" style="width:900px;margin-bottom:50px">
            Im Folgenden betrachten wir die Mesoebene Ihrer Lehrveranstaltungen (Rahmenbedingungen), d.h. die Entscheidungen, die auf institutioneller Ebene getroffen werden. Diese haben Auswirkungen auf Sie als Lehrenden und Ihre Handlungsspielräume.
        </p>
        <form name="survey" method="POST" action="mesoin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?>" style="width:950px">
            <div class="panel-group" id="forms">
                <div class="panel panel-default">
                    <div class="panel-collapse collapse in" id="zero">
                        <p align="center" style="margin-top:10px">
                            Im Folgenden können Sie unterschiedliche Dimensionen wählen, die die Gestaltung Ihrer Lehrveranstaltung prägen. Die Auswahl dient dazu, die didaktischen Entscheidungen, die sich bei der Planung einer Lehrveranstaltung im Modus forschenden Lernens treffen, nachzuvollziehen. Bitte denken Sie beim Ausfüllen an eine bestimmte Lehrveranstaltung, die sie entweder im Nachgang reflektieren oder im Vorfeld neu konzipieren wollen. Nach Absenden des Fragebogens erhalten Sie eine grafische Darstellung Ihres Ergebnisses und können Ihre Lehrveranstaltung mit anderen vergleichen. <br>
                        </p> <!-- explanation text -->
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="38%">
                                    Uni:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input id="uniInput" name="Uni" placeholder="Uni" size="72%" autofocus></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="38%">
                                    Kurs:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input id="kursInput" name="Kurs" placeholder="Kurs" size="72%" ></div>
                                </td>
                            </tr><tr>
                                <td width="38%">
                                    Fachbereich:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input id="fachbereichInput" name="Fachbereich" placeholder="Fachbereich" size="72%" ></div>
                                </td>
                            </tr>
                        </table> <!-- all dimensions of the universities -->
                        <button id="zeroButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> weiter </button>
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
                                    <div align="right"><input id="anzahlInput" name="AnzahlStudenten" placeholder="0" size="72%" ></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="38%">
                                    Semesterzahl:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input id="semesterInput" name="Semesterzahl" placeholder="0" size="72%" ></div>
                                </td>
                            </tr>
                        </table>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> zurück </button>
                        <button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> weiter </button>
                    </div>
                </div>
    <div class="panel panel-default">
        <div class="panel-collapse collapse" id="second">
            <table style="width:900px" class="table table-bordered table-striped js-options-table">
            <tr>
                <td colspan="3">
                    <p align="center">
                        Wie sieht die curriculare Einbindung aus?
                    </p>
                </td>
            </tr>
                <tr>
                    <td width="27%">
                        Die studentische Forschung der ist mit Credit Points versehen und wird benotet.
                    </td>
                    <td width="27%">
                        Die studentische Forschung ist unbenotet, aber mit Credit Points versehen.
                    </td>
                    <td width="27%">
                        Die studentische Forschung wird nicht mit Credit Points versehen.
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="radio" name="Einbindung" value="1">
                    </td>
                    <td align="center">
                        <input type="radio" name="Einbindung" value="2">
                    </td>
                    <td align="center">
                        <input type="radio" name="Einbindung" value="3">
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
                    <td colspan="3">
                        <p align="center">
                        Wie ist die Gewichtung (CP-Anzahl) im Curriculum?
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="27%">
                        Die studentische Forschung hat im Studiengang / Modul ein relativ großes Gewicht.
                    </td>
                    <td width="27%">
                        Die studentische Forschung hat im Studiengang / Modul ein relativ geringes Gewicht.
                    </td>
                    <td width="27%">
                        Die Forschung hat für die Studierenden ein ausschließlich ideelles Gewicht.
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="radio" name="Inhaltsrahmen" value="1">
                    </td>
                    <td align="center">
                        <input type="radio" name="Inhaltsrahmen" value="2">
                    </td>
                    <td align="center">
                        <input type="radio" name="Inhaltsrahmen" value="3">
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
                                    Wie sieht die modulare Verortung aus?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Die studentische Forschung ist für Studierende Pflicht.
                                </td>
                                <td width="27%">
                                    Die studentische Forschung ist für Studierende ein Wahlpflichtangebot.
                                </td>
                                <td width="27%">
                                    Die Studierenden nehmen an der Forschung freiwillig teil.
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="radio" name="Verortung" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Verortung" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Verortung" value="3">
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
                                    Wie ist der Prüfungsrahmen gestaltet?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Für die Bewertung der studentischen Forschung ist eine Prüfungsform vorgegeben.
                                </td>
                                <td width="27%">
                                    Für die Bewertung der studentischen Forschung kann zwischen mehreren Prüfungsform gewählt werden.
                                </td>
                                <td width="27%">
                                    Die studentischen Forschung wird nicht über eine Prüfung bewertet.
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="radio" name="Prufungsrahmen" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Prufungsrahmen" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Prufungsrahmen" value="3">
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
                                <td colspan="3">
                                    <p align="center">
                                    Wie ist der Zeitrahmen gestaltet?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Für die studentische Forschung steht ein Semester zur Verfügung.
                                </td>
                                <td width="27%">
                                    Für die studentische Forschung steht mehr als ein Semester zur Verfügung.
                                </td>
                                <td width="27%">
                                    Studentische Forschung kann begleitend während des Studiums erfolgen.
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="radio" name="Zeitrahmen" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Zeitrahmen" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Zeitrahmen" value="3">
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
                                        Wie ist der Ressourcenrahmen gestaltet?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Für die studentische Forschung stehen keine zusätzlichen Ressourcen zur Verfügung.
                                <td width="27%">
                                    Für die studentische Forschung stehen befristet Ressourcen zur Verfügung.
                                </td>
                                <td width="27%">
                                    Für die studentische Forschung stehen längerfristig planbare Ressourcen zur Verfügung.
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="radio" name="Ressourcenrahmen" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Ressourcenrahmen" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="Ressourcenrahmen" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> zurück </button>
                        <button class="btn btn-primary" type="submit">senden</button>
                    </div>
                </div>
    </div> <!--complete form div -->
    </form>
    </div>
    </body>
<?php
?>