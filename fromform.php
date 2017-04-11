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
    <form name="survey" method="POST" action="servicein.php">
        Uni: <input id="Uni" value="Potsdam"><br>
        Oeffentlichkeit: <input name="oeffentlichkeit" value="1" placeholder="0" required><br>
        Bewertung: <input name="Bewertung" value="1" placeholder="0" required><br>
        inquiry: <input name="inquiry" value="1" placeholder="0" required><br>
        tasks: <input name="tasks" value="1" placeholder="0" required><br>
        question: <input name="question" value="1" placeholder="0" required><br>
        topic: <input name="topic" value="1" placeholder="0" required><br>
        knowledgebuilding: <input name="knowledgebuilding" value="1" placeholder="0" required><br>
        negotiable: <input name="negotiable" value="1" placeholder="0" required><br>
        <button type="submit" name="submitButton">send</button>
    </form>
<?php
//}
?>