/**
 * Created by fides-WHK on 16.03.2017.
 */


$( document ).ready(function() {
    $.ajax({
        // get param dynamisch übergeben
        url: "service.php?uni=potsdam",
        success: function(data){

            diagram(data.oeffentlichkeit, data.Bewertung, data.inquiry, data.tasks, data.question, data.knowledgebuilding, data.topic, data.negotiable)
        }
    });
});

