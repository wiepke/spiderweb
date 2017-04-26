/**
 * Created by fides-WHK on 16.03.2017.
 */
var number_of_showall;
function showall(Filter) {
    number_of_showall=0;
    let values = [];
    let Kriterien = [];
    let url="serviceout.php";
    for (let i=0; i<Filter.length; i++){
        if (i%2==0){
            if (i==0) {
                url = url + "?" + Filter[i];
            }
            else url = url + "&" + Filter[i];
        }
        else url = url + "=" + Filter[i];
    }
    url=url + "&from="+String(number_of_showall);
        $.ajax({
            url: url,
            success: function (data) {
                for (let i=data.length-1; i>=0; i--) {
                    Kriterien = ["audience", "assessment", "inquiry", "tasks", "question", "knowledgebuilding", "topic", "negotiable"];
                    values = [data[i].audience, data[i].assessment, data[i].inquiry, data[i].tasks, data[i].question, data[i].knowledgebuilding, data[i].topic, data[i].negotiable];
                    diagram(Kriterien, values,data[i].id,data[i].uni,i);
                }
            }
        });
        number_of_showall=Kriterien.length;
    }
function next(Filter) {
    number_of_showall+=10;
    let values = [];
    let Kriterien = [];
    let url="serviceout.php";
    for (let i=0; i<Filter.length; i++){
        if (i%2==0){
            if (i==0) {
                url = url + "?" + Filter[i];
            }
            else url = url + "&" + Filter[i];
        }
        else url = url + "=" + Filter[i];
    }
    url=url + "&from="+String(number_of_showall);
    $.ajax({
        url: url,
        success: function (data) {
            for (let i=data.length-1; i>=0; i--) {
                Kriterien = ["audience", "assessment", "inquiry", "tasks", "question", "knowledgebuilding", "topic", "negotiable"];
                values = [data[i].audience, data[i].assessment, data[i].inquiry, data[i].tasks, data[i].question, data[i].knowledgebuilding, data[i].topic, data[i].negotiable];
                diagram(Kriterien, values,data[i].id,data[i].uni,i);
            }
        }
    });
}
function previous(Filter) {
    number_of_showall-=10;
    let values = [];
    let Kriterien = [];
    let url="serviceout.php";
    for (let i=0; i<Filter.length; i++){
        if (i%2==0){
            if (i==0) {
                url = url + "?" + Filter[i];
            }
            else url = url + "&" + Filter[i];
        }
        else url = url + "=" + Filter[i];
    }
    url=url + "&from="+String(number_of_showall);
    $.ajax({
        url: url,
        success: function (data) {
            for (let i=data.length-1; i>=0; i--) {
                Kriterien = ["audience", "assessment", "inquiry", "tasks", "question", "knowledgebuilding", "topic", "negotiable"];
                values = [data[i].audience, data[i].assessment, data[i].inquiry, data[i].tasks, data[i].question, data[i].knowledgebuilding, data[i].topic, data[i].negotiable];
                diagram(Kriterien, values,data[i].id,data[i].uni,i);
            }
        }
    });
}
function cleanFilter() {
    let inputs = document.getElementsByClassName("idclass");
    for (let i=0;i<inputs.length;i++){
        inputs[i].value="";
    }
    inputs = document.getElementsByClassName("stringFilter");
    for (let i=0;i<inputs.length;i++){
        inputs[i].value="";
    }
    inputs = document.getElementsByClassName("dimensionFilter");
    for (let i=0;i<inputs.length;i++){
        inputs[i].value="";
    }
}
