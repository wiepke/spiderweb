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

function setKriterien() {
    if (location.pathname.match('mikrodisplayeng') !== null) {
        return ["Assessment", "research topic", "research question", "scheduling", "conduct", "relfection", "results"];
    } else if (location.pathname.match('mikrodisplayger') !== null) {
        return ["Assessment", "Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Reflexion", "Ergebnisdarstellung"];
    } else if (location.pathname.match('mesodisplayeng') !== null) {
        return ["curric. embedding", "modular location", "content", "assessement", "recourses", "time"];
    } else if (location.pathname.match('mesodisplayger') !== null) {
        return ["Curric. Einbindung", "Modulare Verortung", "Inhaltsrahmen", "Prüfungsrahmen", "Ressourcenrahmen", "Zeitrahmen"];
    }
}

function setmikro(){
    return location.pathname.match('mikro')!==null;
}

function seturl(mikro, Filter){
    let tempurl="serviceout.php";
    if (mikro) {
        tempurl = tempurl + "?mikro=true";
    }
    else {
        tempurl = tempurl + "?mikro=false";
    }
    for (let i=0; i<Filter.length; i++){
        if (i%2==0){
            tempurl = tempurl + "&" + Filter[i];
        }
        else tempurl = tempurl + "=" + Filter[i];
    }
    return tempurl;
}
let number_of_showall;

function showall(Filter) {
    document.getElementById('next').disabled=false;
    document.getElementById('previous').disabled=true;
    cleanall();
    number_of_showall=0;
    let values = [];
    let Kriterien=setKriterien();
    let mikro=setmikro();
    let url=seturl(mikro,Filter);
    url=url + "&from="+String(number_of_showall);
        $.ajax({
            url: url,
            mikro: mikro,
            success: function (data) {
                for (let i=data.length-1; i>=0; i--) {
                    if (mikro){
                        values = [data[i].Assessment, data[i].Forschungsthema, data[i].Forschungsfrage, data[i].Planung, data[i].Durchfuhrung, data[i].Reflexion, data[i].Ergebnisdarstellung];
                    } else {
                        values = [data[i].Einbindung, data[i].Verortung, data[i].Inhaltsrahmen, data[i].Prufungsrahmen, data[i].Ressourcenrahmen, data[i].Zeitrahmen];
                    }
                    diagram(Kriterien, values,data[i].Uni, data[i].Kurs,i);
                    number_of_showall++;
                }
            },
            async: false
        });
    if (number_of_showall % 3 != 0) {
        document.getElementById('next').disabled=true;
    }
}
function next(Filter) {
    document.getElementById('previous').disabled=false;
    if (number_of_showall % 3 == 0) {
        let values = [];
        let Kriterien = setKriterien();
        let mikro = setmikro();
        let url = seturl(mikro, Filter);
        url = url + "&from=" + String(number_of_showall);
        $.ajax({
            url: url,
            success: function (data) {
                if (data.length != 0) {
                    cleanall();
                    for (let i = data.length - 1; i >= 0; i--) {
                        if (mikro) {
                            values = [data[i].Assessment, data[i].Forschungsthema, data[i].Forschungsfrage, data[i].Planung, data[i].Durchfuhrung, data[i].Reflexion, data[i].Ergebnisdarstellung];
                        } else {
                            values = [data[i].Einbindung, data[i].Verortung, data[i].Inhaltsrahmen, data[i].Prufungsrahmen, data[i].Ressourcenrahmen, data[i].Zeitrahmen];
                        }
                        diagram(Kriterien, values, data[i].Uni, data[i].Kurs, i);
                        number_of_showall++;
                    }
                }
            },
            async: false
        });
    }
    if (number_of_showall % 3 != 0) {
        document.getElementById('next').disabled=true;
        document.getElementById('previous').disabled=false;
    }
}
function previous(Filter) {
    document.getElementById('next').disabled=false;
    if (number_of_showall<4) {
        document.getElementById('previous').disabled=true;
        return false;
    }
    if (number_of_showall%3==0) number_of_showall-=3;
    else number_of_showall-=number_of_showall%3;
    cleanall();
    let values = [];
    let Kriterien=setKriterien();
    let mikro=setmikro();
    let url=seturl(mikro,Filter);
    url=url + "&from="+String(number_of_showall-3);
    $.ajax({
        url: url,
        success: function (data) {
            for (let i=data.length-1; i>=0; i--) {
                if (mikro){
                    values = [data[i].Assessment, data[i].Forschungsthema, data[i].Forschungsfrage, data[i].Planung, data[i].Durchfuhrung, data[i].Reflexion, data[i].Ergebnisdarstellung];
                } else {
                    values = [data[i].Einbindung, data[i].Verortung, data[i].Inhaltsrahmen, data[i].Prufungsrahmen, data[i].Ressourcenrahmen, data[i].Zeitrahmen];
                }
                diagram(Kriterien, values,data[i].Uni, data[i].Kurs,i);
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
        inputs[i].checked=false;
    }
}
