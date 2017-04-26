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
        <table style="width:300px" class="table table-bordered table-striped js-options-table">
            <tr>
                <td width="70%">
                    Uni:
                </td>
                <td>
                    <input name="uni" value="" size="10">
                </td>
            </tr>
            <tr>
                <td>
                    Öffentlichkeit:
                </td>
                <td>
                    <input type="number" name="audience" value="1" placeholder="0" required size="3" min="1" max="3">
                </td>
            </tr>
            <tr>
                <td>
                    Bewertung:
                </td>
                <td>
                    <input type="number" name="assessment" value="1" placeholder="0" required size="3" min="1" max="3">
                </td>
            </tr>
            <tr>
                <td>
                    inquiry:
                </td>
                <td>
                    <input type="number" name="inquiry" value="1" placeholder="0" required size="3" min="1" max="3">
                </td>
            </tr>
            <tr>
                <td>
                    tasks:
                </td>
                <td>
                    <input type="number" name="tasks" value="1" placeholder="0" required size="3" min="1" max="3">
                </td>
            </tr>
            <tr>
                <td>
                    question:
                </td>
                <td>
                    <input type="number" name="question" value="1" placeholder="0" required size="3" min="1" max="3">
                </td>
            </tr>
            <tr>
                <td>
                    topic:
                </td>
                <td>
                    <input type="number" name="topic" value="1" placeholder="0" required size="3" min="1" max="3">
                </td>
            </tr>
            <tr>
                <td>
                    knowledgebuilding:
                </td>
                <td>
                    <input type="number" name="knowledgebuilding" value="1" placeholder="0" required size="3" min="1" max="3">
                </td>
            </tr>
            <tr>
                <td>
                    negotiable:
                </td>
                <td>
                    <input type="number" name="negotiable" value="1" placeholder="0" required size="3" min="1" max="3">
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