<?php
?>
    <head>
        <title> Analyse und Konzeption forschenden Lernens - das FideS-Doppelradmodell </title>
        <meta charset="UTF-8">
        <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="dropdown" align="right" style="margin-right:50px;margin-top:10px">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">language
            <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="mesoger.php">german</a></li>
            <li><a href="mikroeng.php">english</a></li>
        </ul>
    </div>
    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <div align="center" style="margin-top: 5px;">
        <h2><u> Analysis and conception of research learning - the FideS-Doppelradmodell </u></h2>
        <h3><u> Micro-/ Meso-Level </u></h3>
        <br>
        <br>
        <form name="survey" method="POST" action="mikroin.php" style="width:950px">
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
                                        Who will set the research topic?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Teachers give the research topic.
                                </td>
                                <td width="27%">
                                    During a firm setting students will find a research topic.
                                </td>
                                <td width="27%">
                                    Students will set the topic on their own.
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
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="third">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td colspan="3">
                                    <p align="center">
                                        Who evolves the research question?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Teachers will present the research question
                                </td>
                                <td width="27%">
                                    Students will evolve the research question under lead of teachers.
                                </td>
                                <td width="27%">
                                    Students will evolve the question autonomously.
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
                        </table>
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
                                        How do students plan the research?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Teachers will give deadlines and phases of the process.
                                </td>
                                <td width="27%">
                                    Students will plan the research with lead of teachers.
                                </td>
                                <td width="27%">
                                    Students will plan the process autonomously.
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
                        </table>
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
                                        How will students research?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Teachers or tutors will lead the research.
                                </td>
                                <td width="27%">
                                    Students will be supported by teachers or tutors.
                                </td>
                                <td width="27%">
                                    Students will research autonomously.
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
                                        How is the feedback during the research?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Teachers (or tutors) will give (or claim) (Peer-)Feedback.
                                <td width="27%">
                                    Set and self organised feedback will be organized.
                                </td>
                                <td width="27%">
                                    Students will ask for feedback of teachers or tutors.
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
                        </table>
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
                                        What will happen to results of the research of students?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    Just participates will reach it.
                                <td width="27%">
                                    The faculty will have access to it.
                                </td>
                                <td width="27%">
                                    Results will be published and visible for everyone.
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
                        </table>
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
                                        How is the success rated in research?
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="27%">
                                    There is a set form for assessment (e.g. a test).
                                <td width="27%">
                                    Students and teacher evolve an assessment together.
                                </td>
                                <td width="27%">
                                    Students decide how and whether they will be proved.
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
                        </table>
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