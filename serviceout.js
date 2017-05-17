/**
 * Created by fides-WHK on 16.03.2017.
 */
function cleanall(){
    let idclass = document.getElementsByClassName("dia");
    for (let i=0;i<idclass.length;i++) {
        idclass[i].innerHTML = '';
    }
    return false;
}

let number_of_showall;

function showall(Filter) {
    cleanall();
    number_of_showall=0;
    let values = [];
    var Kriterien;
    if(location.pathname[location.pathname.length-5] == "g") {
        Kriterien = ["knowledgebuilding", "negotiability", "topic", "question", "tasks", "inquiry", "audience", "assessment"];
    } else Kriterien = ["Wissen", "Verhandelbarkeit", "Thema", "Frage", "Aufgaben", "Befragung", "Öffentlichkeit", "Einschätzung"];
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
    if (Filter.length<2){
        url=url + "?from="+String(number_of_showall);
    }
    else url=url + "&from="+String(number_of_showall);
        $.ajax({
            url: url,
            success: function (data) {
                for (let i=data.length-1; i>=0; i--) {
                    values = [data[i].knowledgebuilding, data[i].negotiable, data[i].topic, data[i].question, data[i].tasks, data[i].inquiry, data[i].audience, data[i].assessment];
                    diagram(Kriterien, values,data[i].uni, data[i].course,i);
                    number_of_showall++;
                }
            },
            async: false
        });
}
function next(Filter) {
    if (number_of_showall % 3 != 0) return false;
    cleanall();
    let values = [];
    var Kriterien;
    if(location.pathname[location.pathname.length-5] == "g") { //displayeng.php is the page, so "G" is the 5th letter from behind
        Kriterien = ["knowledgebuilding", "negotiability", "topic", "question", "tasks", "inquiry", "audience", "assessment"];
    } else Kriterien = ["Wissen", "Verhandelbarkeit", "Thema", "Frage", "Aufgaben", "Befragung", "Öffentlichkeit", "Einschätzung"];
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
    if (Filter.length<2){
        url=url + "?from="+String(number_of_showall);
    }
    else url=url + "&from="+String(number_of_showall);
    $.ajax({
        url: url,
        success: function (data) {
            for (let i=data.length-1; i>=0; i--) {
                values = [data[i].knowledgebuilding, data[i].negotiable, data[i].topic, data[i].question, data[i].tasks, data[i].inquiry, data[i].audience, data[i].assessment];
                diagram(Kriterien, values,data[i].uni, data[i].course,i);
                number_of_showall++;
            }
        },
        async: false
    });
}
function previous(Filter) {
    if (number_of_showall<4) return false;
    if (number_of_showall%3==0) number_of_showall-=3;
    else number_of_showall-=number_of_showall%3;
    cleanall();
    let values = [];
    var Kriterien;
    if(location.pathname[location.pathname.length-5] == "g") {
        Kriterien = ["knowledgebuilding", "negotiability", "topic", "question", "tasks", "inquiry", "audience", "assessment"];
    } else Kriterien = ["Wissen", "Verhandelbarkeit", "Thema", "Frage", "Aufgaben", "Befragung", "Öffentlichkeit", "Einschätzung"];
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
    if (Filter.length<2){
        url=url + "?from="+String(number_of_showall-3);
    }
    else url=url + "&from="+String(number_of_showall-3);
    $.ajax({
        url: url,
        success: function (data) {
            for (let i=data.length-1; i>=0; i--) {
                values = [data[i].knowledgebuilding, data[i].negotiable, data[i].topic, data[i].question, data[i].tasks, data[i].inquiry, data[i].audience, data[i].assessment];
                diagram(Kriterien, values,data[i].uni, data[i].course,i);
                number_of_showall--;
            }
        },
        async: false
    });
    number_of_showall+=3;
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
