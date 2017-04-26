<?php
/*if ( isset( $_POST["submitButton"] ) ) {
    header( "Location: display.html" );
    exit;
} else {
    displayForm();
}
function displayForm()
{*/
?>
    <head>
        <title> from-form </title>
        <meta charset="UTF-8">
        <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <div align="center" style="margin:auto; border: thin solid;">
        <form name="survey" method="POST" action="servicein.php">
            <table style="width:900px" class="table table-bordered table-striped js-options-table">
                <tr>
                    <td width="45%">
                        Uni:
                    </td>
                    <td colspan="3">
                        <div align="right"><input name="uni" value="" size="40" ></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        knowledge construction and knowledge building is
                    </td>
                    <td>
                        new to students
                    </td>
                    <td width="20%">
                        <span style="display:inline; text-align: center "><input type="radio" name="knowledgebuilding" value="1">
                        <input type="radio" name="knowledgebuilding" value="2">
                        <input type="radio" name="knowledgebuilding" value="3">
                        </span>
                    </td>
                    <td>
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
                    <td width="20%">
                        <span style="display:inline">
                            <input type="radio" name="negotiable" value="1">
                            <input type="radio" name="negotiable" value="2">
                            <input type="radio" name="negotiable" value="3">
                        </span>
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
                    <td width="20%">
                        <span style="display:inline">
                            <input type="radio" name="topic" value="1">
                            <input type="radio" name="topic" value="2">
                            <input type="radio" name="topic" value="3">
                        </span>
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
                    <td width="20%">
                        <span style="display:inline">
                            <input type="radio" name="question" value="1">
                            <input type="radio" name="question" value="2">
                            <input type="radio" name="question" value="3">
                        </span>
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
                    <td width="20%">
                        <span style="display:inline">
                            <input type="radio" name="tasks" value="1">
                            <input type="radio" name="tasks" value="2">
                            <input type="radio" name="tasks" value="3">
                        </span>
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
                    <td width="20%">
                        <span style="display:inline">
                            <input type="radio" name="inquiry" value="1">
                            <input type="radio" name="inquiry" value="2">
                            <input type="radio" name="inquiry" value="3">
                        </span>
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
                    <td width="20%">
                        <span style="display:inline">
                            <input type="radio" name="audience" value="1">
                            <input type="radio" name="audience" value="2">
                            <input type="radio" name="audience" value="3">
                        </span>
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
                    <td width="20%">
                        <span style="display:inline">
                            <input type="radio" name="assessment" value="1">
                            <input type="radio" name="assessment" value="2">
                            <input type="radio" name="assessment" value="3">
                        </span>
                    </td>
                    <td>
                        students
                    </td>
                </tr>
            </table>
            <button class="btn btn-primary" type="submit">send</button>
        </form>
    </div>
    </body>
<?php
//}
?>