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
    let Kriterien;
    let url="";
    let mikro=false;
    if(location.pathname.match('mikrodisplayeng')!==null) {
        Kriterien = ["Assessment","research topic","research question","scheduling","conduct","relfection","results"];
        url="serviceout.php?mikro=true";
        mikro=true;
    } else if (location.pathname.match('mikrodisplayger')!==null) {
        Kriterien = ["Assessment", "Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Reflexion", "Ergebnisdarstellung"];
        url = "serviceout.php?mikro=true";
        mikro=true;
    } else if(location.pathname.match('mesodisplayeng')!==null) {
        Kriterien = ["curric. embedding","modular location","content","assessement","recourses","time"];
        url="serviceout.php?mikro=false";
    } else if (location.pathname.match('mesodisplayger')!==null) {
        Kriterien = ["Curric. Einbindung","Modulare Verortung","Inhaltsrahmen","Prüfungsrahmen","Ressourcenrahmen","Zeitrahmen"];
        url="serviceout.php?mikro=false";
    }
    for (let i=0; i<Filter.length; i++){
        if (i%2==0){
            url = url + "&" + Filter[i];
        }
        else url = url + "=" + Filter[i];
    }
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
}
function next(Filter) {
    if (number_of_showall % 3 != 0) return false;
    let values = [];
    let Kriterien;
    let url="";
    let mikro=false;
    if(location.pathname.match('mikrodisplayeng')!==null) {
        Kriterien = ["Assessment","research topic","research question","scheduling","conduct","relfection","results"];
        url="serviceout.php?mikro=true";
        mikro=true;
    } else if (location.pathname.match('mikrodisplayger')!==null) {
        Kriterien = ["Assessment", "Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Reflexion", "Ergebnisdarstellung"];
        url = "serviceout.php?mikro=true";
        mikro=true;
    } else if(location.pathname.match('mesodisplayeng')!==null) {
        Kriterien = ["curric. embedding","modular location","content","assessement","recourses","time"];
        url="serviceout.php?mikro=false";
    } else if (location.pathname.match('mesodisplayger')!==null) {
        Kriterien = ["Curric. Einbindung","Modulare Verortung","Inhaltsrahmen","Prüfungsrahmen","Ressourcenrahmen","Zeitrahmen"];
        url="serviceout.php?mikro=false";
    }
    for (let i=0; i<Filter.length; i++){
        if (i%2==0){
            url = url + "&" + Filter[i];
        }
        else url = url + "=" + Filter[i];
    }
    url=url + "&from="+String(number_of_showall);
    $.ajax({
        url: url,
        success: function (data) {
            if (data.length!=0){
                cleanall();
                for (let i=data.length-1; i>=0; i--) {
                    if (mikro){
                        values = [data[i].Assessment, data[i].Forschungsthema, data[i].Forschungsfrage, data[i].Planung, data[i].Durchfuhrung, data[i].Reflexion, data[i].Ergebnisdarstellung];
                    } else {
                        values = [data[i].Einbindung, data[i].Verortung, data[i].Inhaltsrahmen, data[i].Prufungsrahmen, data[i].Ressourcenrahmen, data[i].Zeitrahmen];
                    }
                    diagram(Kriterien, values,data[i].Uni, data[i].Kurs,i);
                    number_of_showall++;
                }
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
    let Kriterien;
    let url="";
    let mikro=false;
    if(location.pathname.match('mikrodisplayeng')!==null) {
        Kriterien = ["Assessment","research topic","research question","scheduling","conduct","relfection","results"];
        url="serviceout.php?mikro=true";
        mikro=true;
    } else if (location.pathname.match('mikrodisplayger')!==null) {
        Kriterien = ["Assessment", "Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Reflexion", "Ergebnisdarstellung"];
        url = "serviceout.php?mikro=true";
        mikro=true;
    } else if(location.pathname.match('mesodisplayeng')!==null) {
        Kriterien = ["curric. embedding","modular location","content","assessement","recourses","time"];
        url="serviceout.php?mikro=false";
    } else if (location.pathname.match('mesodisplayger')!==null) {
        Kriterien = ["Curric. Einbindung","Modulare Verortung","Inhaltsrahmen","Prüfungsrahmen","Ressourcenrahmen","Zeitrahmen"];
        url="serviceout.php?mikro=false";
    }
    for (let i=0; i<Filter.length; i++){
        if (i%2==0){
            if (i==0) {
                url = url + "?" + Filter[i];
            }
            else url = url + "&" + Filter[i];
        }
        else url = url + "=" + Filter[i];
    }
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
