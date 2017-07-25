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
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">language
            <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="mesoger.php">german</a></li>
            <li><a href="mikroeng.php">english</a></li>
        </ul>
    </div> <!-- language toggle -->
    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <div align="center" style="margin-top: 5px;">
        <h2><u> Analysis and conception of research learning - the FideS-Doppelradmodell </u></h2>
        <h3><u> Micro-/ Meso-Level </u></h3>
        <br>
        <br>
        <form name="survey" method="POST" action="mesoin.php" style="width:950px">
            <div class="panel-group" id="forms">
                <div class="panel panel-default">
            <div class="panel-collapse collapse in" id="first">
                <p align="center" style="margin-top:10px">
                    Here you can choose between different dimensions of your lecture. Your choice comprehends your didactic methods, which you used related to research learning. Be advised to have a specific course in mind to reflect the same or to build up a concept for a new similar course. After finishing this survey you will see a graphic of your results and you can compare your course to others.<br>
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
                            Course:
                        </td>
                        <td colspan="3">
                            <div align="right"><input name="Kurs" placeholder="Kurs" size="72%" ></div>
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
                                <td colspan="3">
                                    <p align="center">
                                        What is the bonding in the curriculum?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    The student research will bring Credit Points and a grade.
                                </td>
                                <td width="27%">
                                    The student research will bring Credit Points without a grade.
                                </td>
                                <td width="27%">
                                    There are nor Credit Points for the student Research.
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
                                        How much is the pay-off in (CP-Number) curriculum?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    The research is fairly high rated.
                                </td>
                                <td width="27%">
                                    The research is fairly low rated.
                                </td>
                                <td width="27%">
                                    The research is of ideally value.
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
                                        How does the modular location happen?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    The student research is an obligation.
                                </td>
                                <td width="27%">
                                    The student research is an obligation to vote.
                                </td>
                                <td width="27%">
                                    Students volunteer to take part.
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
                                        How is the assessment-setting?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    For assessement of student research there is a set test-frame.
                                </td>
                                <td width="27%">
                                    You can choose between different forms for assessment of student research.
                                </td>
                                <td width="27%">
                                    There will be no exam for the student research.
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
                                        How is the time-setting?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Students have one semester for their research.
                                </td>
                                <td width="27%">
                                    There is more than one semester for student research.
                                </td>
                                <td width="27%">
                                    The research of students can be done during their study times.
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
                                        How is the resource-setting?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    There are no additional resources for student research.
                                <td width="27%">
                                    There are limited additional resources for student research.
                                </td>
                                <td width="27%">
                                    There are additional planable resources for student research.
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