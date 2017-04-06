/**
 * Created by fides-WHK on 16.03.2017.
 */
function showall(Filter) {
    var Kriterien = [];
    var url="serviceout.php";
    for (var i=0; i<Filter.length; i++){
        if (i%2==0){
            if (i==0) {
                url = url + "?" + Filter[i];
            }
            else url = url + "&" + Filter[i];
        }
        else url = url + "=" + Filter[i];
    }
    //$(document).ready(function () {
        $.ajax({
            // get param dynamisch übergeben
            url: url,
            success: function (data) {
                for (var i=0; i<data.length; i++) {
                    Kriterien = [data[i].oeffentlichkeit, data[i].Bewertung, data[i].inquiry, data[i].tasks, data[i].question, data[i].knowledgebuilding, data[i].topic, data[i].negotiable];
                    diagram(Kriterien)
                }
            }
        });
    }
