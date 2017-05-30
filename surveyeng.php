<?php
?>
    <head>
        <title> Uni evaluation </title>
        <meta charset="UTF-8">
        <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="dropdown" align="right" style="margin-right:50px;margin-top:10px">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">language
            <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="surveyger.php">german</a></li>
            <li><a href="surveyeng.php">english</a></li>
        </ul>
    </div>
    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <div align="center" style="margin-top: 5px;">
        <h2><u> Uni evaluation </u></h2>
        <p align="left" style="margin-left:28%">
            In the following table you can see different points of a university.<br>
            Please enter the name of your university in the first line.<br>
            After that, there are 8 dimensions, where you can decide what has the biggest effect on it.<br>
            If bot directions are equally presented, you can decide for the middle.<br>
            <br>
            After completing the survey you get redirected to a graphical view of your answers.
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
                        Course:
                    </td>
                    <td colspan="3">
                        <div align="right"><input name="course" placeholder="course" size="72%" ></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        knowledge construction and knowledge building is
                    </td>
                    <td width="22%">
                        new to students
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
                        new to discipline
                    </td>
                </tr>
                <tr>
                    <td>
                        knowledge
                    </td>
                    <td>
                        is fixed
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
                        is negotiable
                    </td>
                </tr>
                <tr>
                    <td>
                        topic is chosen by
                    </td>
                    <td>
                        teacher
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
                        student
                    </td>
                </tr>
                <tr>
                    <td>
                        who decides on question
                    </td>
                    <td>
                        teacher
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
                        student
                    </td>
                </tr>
                <tr>
                    <td>
                        tasks, methodology is claimed by
                    </td>
                    <td>
                        teacher
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
                        student
                    </td>
                </tr>
                <tr>
                    <td>
                        inquiry
                    </td>
                    <td>
                        is closed-ended / well defined
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
                        is open-ended
                    </td>
                </tr>
                <tr>
                    <td>
                        audience and output is
                    </td>
                    <td>
                        fixed
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
                        decided by students
                    </td>
                </tr>
                <tr>
                    <td>
                        Assessment is controlled by
                    </td>
                    <td>
                        teacher
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
                        students
                    </td>
                </tr>
            </table> <!-- all dimensions of the universities -->
                <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> next </button>
            </div>
                </div>
                <div class="panel panel-default">
                <div class="panel-collapse collapse" id="second">
                    A Dummy for more Text <br> <!-- It's a dummy! -->
                    <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> back </button>
                    <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> next </button>
                </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="third">
                        another Dummy <br> <!-- It's a dummy! -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> back </button>
                        <button class="btn btn-primary" type="submit">send</button>
                    </div>
                </div>
            </div> <!--complete form div -->
        </form>
    </div>
    </body>
<?php
?>