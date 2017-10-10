/**
 * Created by fides-WHK on 16.03.2017.
 */
$(document).ready(function (){
    $("select[id=UniMikro]").on("change",function(){
        chosenFilterMikro.Uni=$("select[id=UniMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=KursMikro]").on("change",function(){
        chosenFilterMikro.Kurs=$("select[id=KursMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=FachbereichMikro]").on("change",function(){
        chosenFilterMikro.Fachbereich=$("select[id=FachbereichMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=SemesterZahlMikro]").on("change",function(){
        chosenFilterMikro.SemesterZahl=$("select[id=SemesterZahlMikro]").val();
    });
    $("select[id=AnzahlStudentenMikro]").on("change",function(){
        chosenFilterMikro.AnzahlStudenten=$("select[id=AnzahlStudentenMikro]").val();
    });
    $("select[id=UniMeso]").on("change",function(){
        chosenFilterMeso.Uni=$("select[id=UniMeso]").val();
        adjustFilterMeso();
    });
    $("select[id=KursMeso]").on("change",function(){
        chosenFilterMeso.Kurs=$("select[id=KursMeso]").val();
        adjustFilterMeso();
    });
    $("select[id=FachbereichMeso]").on("change",function(){
        chosenFilterMeso.Fachbereich=$("select[id=FachbereichMeso]").val();
        adjustFilterMeso();
    });
    $("select[id=SemesterZahlMeso]").on("change",function(){
        chosenFilterMeso.SemesterZahl=$("select[id=SemesterZahlMeso]").val();
    });
    $("select[id=AnzahlStudentenMeso]").on("change",function(){
        chosenFilterMeso.AnzahlStudenten=$("select[id=AnzahlStudentenMeso]").val();
    });
});

function adjustFilterMikro(){
    let elements;
    elements = document.getElementsByClassName("KursMikro");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    elements = document.getElementsByClassName("FachbereichMikro");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    elements = document.getElementsByClassName("UniMikro");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    for (let i=0; i<allOfItMikro.length; i++){
        if (((allOfItMikro[i].Uni===chosenFilterMikro.Uni)||(chosenFilterMikro.Uni===""))&&
            ((allOfItMikro[i].Kurs === chosenFilterMikro.Kurs)||(chosenFilterMikro.Kurs===""))){
            document.getElementById(allOfItMikro[i].Fachbereich+"FachbereichMikroId").hidden=false;
        }
        if (((allOfItMikro[i].Uni===chosenFilterMikro.Uni)||(chosenFilterMikro.Uni===""))&&
            ((allOfItMikro[i].Fachbereich === chosenFilterMikro.Fachbereich)||(chosenFilterMikro.Fachbereich===""))) {
            document.getElementById(allOfItMikro[i].Kurs + "KursMikroId").hidden = false;
        }
        if (((allOfItMikro[i].Kurs===chosenFilterMikro.Kurs)||(chosenFilterMikro.Kurs===""))&&
            ((allOfItMikro[i].Fachbereich === chosenFilterMikro.Fachbereich)||(chosenFilterMikro.Fachbereich===""))) {
            document.getElementById(allOfItMikro[i].Uni + "UniMikroId").hidden = false;
        }
    }
}
function adjustFilterMeso(){
    let elements;
    elements = document.getElementsByClassName("KursMeso");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    elements = document.getElementsByClassName("FachbereichMeso");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    elements = document.getElementsByClassName("UniMeso");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    for (let i=0; i<allOfItMeso.length; i++){
        if (((allOfItMeso[i].Uni===chosenFilterMeso.Uni)||(chosenFilterMeso.Uni===""))&&
            ((allOfItMeso[i].Kurs === chosenFilterMeso.Kurs)||(chosenFilterMeso.Kurs===""))){
            document.getElementById(allOfItMeso[i].Fachbereich+"FachbereichMesoId").hidden=false;
        }
        if (((allOfItMeso[i].Uni===chosenFilterMeso.Uni)||(chosenFilterMeso.Uni===""))&&
            ((allOfItMeso[i].Fachbereich === chosenFilterMeso.Fachbereich)||(chosenFilterMeso.Fachbereich===""))) {
            document.getElementById(allOfItMeso[i].Kurs + "KursMesoId").hidden = false;
        }
        if (((allOfItMeso[i].Kurs===chosenFilterMeso.Kurs)||(chosenFilterMeso.Kurs===""))&&
            ((allOfItMeso[i].Fachbereich === chosenFilterMeso.Fachbereich)||(chosenFilterMeso.Fachbereich===""))) {
            document.getElementById(allOfItMeso[i].Uni + "UniMesoId").hidden = false;
        }
    }
}

function cleanall(){
    let idclass = document.getElementsByClassName("dia");
    for (let i=0;i<idclass.length;i++) {
        idclass[i].innerHTML = '';
    }
    document.getElementById("labels1").hidden=true;
    document.getElementById("labels0").hidden=true;
    return false;
}
function setKriterien(mikro) {
    if (mikro) {
        if (location.pathname.match('eng') !== null) {
            return ["research topic", "research question", "scheduling", "conduct", "results", "reflection", "feedback"];
        } else if (location.pathname.match('mikrodisplayger') !== null) {
            return ["Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Ergebnisdarstellung", "Reflexion", "Feedback"];
        }
    }
    else {
        if (location.pathname.match('eng') !== null) {
            return ["curricular embedding", "number of credit points", "modular location", "recourses", "time", "assessement"];
        } else {
            return ["Curriculare Einbindung", "Anzahl der Credit Points", "Modulare Verortung", "Ressourcenrahmen", "Zeitrahmen", "Prüfungsrahmen"];
        }
    }
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
        if (i%2===0){
            tempurl = tempurl + "&" + Filter[i];
        }
        else tempurl = tempurl + "=" + Filter[i];
    }
    return tempurl;
}
let number_of_showall_mikro;
let number_of_showall_meso;
function showResults(Filter) {
    document.getElementById('nextmikro').disabled=true;
    document.getElementById('previousmikro').disabled=true;
    document.getElementById('nextmeso').disabled=true;
    document.getElementById('previousmeso').disabled=true;
    document.getElementById('labels0').hidden=true;
    document.getElementById('labels1').hidden=true;
    cleanall();
    number_of_showall_mikro=0;
    number_of_showall_meso=0;
    let values = [];
    let Kriterienmikro=[];
    let Kriterienmeso =[];
    let urlmikro = "";
    let urlmeso = "";
    if (Filter.length===4){
        if (location.pathname.match('eng') !== null) {
            Kriterienmikro = ["research topic", "research question", "scheduling", "conduct", "results", "relfection", "feedback"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
            Kriterienmeso =["curricular embedding", "number of credit points", "modular location", "recourses", "time", "assessement"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[3]+"&anyway=1"+"&from=0";
        }
        if (location.pathname.match('ger') !== null) {
            Kriterienmikro=["Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Ergebnisdarstellung", "Reflexion", "Feedback"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
            Kriterienmeso = ["Curriculare Einbindung", "Anzahl der Credit Points", "Modulare Verortung", "Ressourcenrahmen", "Zeitrahmen", "Prüfungsrahmen"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[3]+"&anyway=1"+"&from=0";
        }
    }
    else if (Filter.length===0){
        return false;
    }
    else if (Filter[0].match('mikro')!==null){
        if (location.pathname.match('eng') !== null) {
            Kriterienmikro = ["research topic", "research question", "scheduling", "conduct", "results", "relfection", "feedback"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
        }else {
            Kriterienmikro=["Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Ergebnisdarstellung", "Reflexion", "Feedback"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
        }
    }else {
        if (location.pathname.match('eng') !== null) {
            Kriterienmeso =["curricular embedding", "number of credit points", "modular location", "recourses", "time", "assessement"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[1]+"&anyway=1"+"&from=0";
        }else {
            Kriterienmeso =["Curriculare Einbindung", "Anzahl der Credit Points", "Modulare Verortung", "Ressourcenrahmen", "Zeitrahmen", "Prüfungsrahmen"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[1]+"&anyway=1"+"&from=0";
        }
    }
    if (urlmikro!==""){
        $.ajax({
            url: urlmikro,
            success: function (data) {
                data = JSON.parse(data);
                values = [data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Ergebnisdarstellung, data[0].Reflexion, data[0].feedback];
                diagram(Kriterienmikro, values,0);
                number_of_showall_mikro++;
                document.getElementById('Unilabel0').innerHTML=data[0].Uni;
                document.getElementById('Kurslabel0').innerHTML=data[0].Kurs;
                document.getElementById('Fachbereichlabel0').innerHTML=data[0].Fachbereich;
                document.getElementById('Semesterzahllabel0').innerHTML=data[0].Semesterzahl;
                document.getElementById('AnzahlStudentenlabel0').innerHTML=data[0].AnzahlStudenten;
                document.getElementById('beneficialmikro').innerHTML=data[0].beneficial;
                document.getElementById('poorlymikro').innerHTML=data[0].poorly;
                document.getElementById('contactmikro').innerHTML=data[0].contact;
            },
            async: false
        });
        document.getElementById('labels0').hidden=false;
    }
    if (urlmeso!==""){
        $.ajax({
            url: urlmeso,
            success: function (data) {
                data = JSON.parse(data);
                values = [data[0].Einbindung, data[0].CreditPoints, data[0].Verortung, data[0].Ressourcenrahmen, data[0].Zeitrahmen, data[0].Prufungsrahmen];
                diagram(Kriterienmeso, values,1);
                number_of_showall_meso++;
                document.getElementById('Unilabel1').innerHTML=data[0].Uni;
                document.getElementById('Kurslabel1').innerHTML=data[0].Kurs;
                document.getElementById('Fachbereichlabel1').innerHTML=data[0].Fachbereich;
                document.getElementById('Semesterzahllabel1').innerHTML=data[0].Semesterzahl;
                document.getElementById('AnzahlStudentenlabel1').innerHTML=data[0].AnzahlStudenten;
                document.getElementById('beneficialmeso').innerHTML=data[0].beneficial;
                document.getElementById('poorlymeso').innerHTML=data[0].poorly;
                document.getElementById('contactmeso').innerHTML=data[0].contact;
            },
            async: false
        });
        document.getElementById('labels1').hidden=false;
    }
}

function showall(Filter,mikro) {
    document.getElementById("Pagination0").hidden=true;
    document.getElementById("Pagination1").hidden=true;
    if (mikro){
        document.getElementById('nextmikro').disabled=false;
        document.getElementById('previousmikro').disabled=true;
    }
    else {
        document.getElementById('nextmeso').disabled=false;
        document.getElementById('previousmeso').disabled=true;
    }
    document.getElementById('labels0').hidden=true;
    document.getElementById('labels1').hidden=true;
    cleanall();
    if (mikro) number_of_showall_mikro=0;
    else number_of_showall_meso=0;
    let values = [];
    let Kriterien=setKriterien(mikro);
    let url=seturl(mikro,Filter);
    if (mikro) url=url + "&from="+String(number_of_showall_mikro);
    else url=url + "&from="+String(number_of_showall_meso);
    $.ajax({
        url: url,
        mikro: mikro,
        success: function (data) {
            data = JSON.parse(data);
            if (data[0].hasOwnProperty("limit")) {
                if (mikro) {
                    document.getElementById("Pagination0").innerHTML = "Es liegen keine Ergebnisse für diese Filter vor.";
                    document.getElementById("Pagination0").hidden = false;
                    document.getElementById('nextmikro').hidden = true;
                }
                else {
                    document.getElementById("Pagination1").innerHTML = "Es liegen keine Ergebnisse für diese Filter vor.";
                    document.getElementById("Pagination1").hidden = false;
                    document.getElementById('nextmeso').hidden = true;
                }
            }else {
                    if (mikro){
                        values = [data[0].feedback, data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Reflexion, data[0].Ergebnisdarstellung];
                        diagram(Kriterien, values,0);
                        number_of_showall_mikro++;
                        document.getElementById('Unilabel0').innerHTML=data[0].Uni;
                        document.getElementById('Kurslabel0').innerHTML=data[0].Kurs;
                        document.getElementById('Fachbereichlabel0').innerHTML=data[0].Fachbereich;
                        document.getElementById('Semesterzahllabel0').innerHTML=data[0].Semesterzahl;
                        document.getElementById('AnzahlStudentenlabel0').innerHTML=data[0].AnzahlStudenten;
                        document.getElementById('beneficialmikro').innerHTML=data[0].beneficial;
                        document.getElementById('poorlymikro').innerHTML=data[0].poorly;
                        document.getElementById('contactmikro').innerHTML=data[0].contact;
                    } else {
                        values = [data[0].Einbindung, data[0].Verortung, data[0].CreditPoints, data[0].Prufungsrahmen, data[0].Ressourcenrahmen, data[0].Zeitrahmen];
                        diagram(Kriterien, values,1);
                        number_of_showall_meso++;
                        document.getElementById('Unilabel1').innerHTML=data[0].Uni;
                        document.getElementById('Kurslabel1').innerHTML=data[0].Kurs;
                        document.getElementById('Fachbereichlabel1').innerHTML=data[0].Fachbereich;
                        document.getElementById('Semesterzahllabel1').innerHTML=data[0].Semesterzahl;
                        document.getElementById('AnzahlStudentenlabel1').innerHTML=data[0].AnzahlStudenten;
                        document.getElementById('beneficialmeso').innerHTML=data[0].beneficial;
                        document.getElementById('poorlymeso').innerHTML=data[0].poorly;
                        document.getElementById('contactmeso').innerHTML=data[0].contact;
                    }
                    if (mikro) {
                        document.getElementById("Pagination0").innerHTML="<span class=\"paginationout>\">Die Anwendung des Filters ergab "+ data[1].limit + " Ergebnisse - <span> "+number_of_showall_mikro+" von "+data[1].limit +"</span></span>";
                        document.getElementById("Pagination0").hidden=false;
                    }
                    else {
                        document.getElementById("Pagination1").innerHTML="<span class=\"paginationout>\">Die Anwendung des Filters ergab "+ data[1].limit + " Ergebnisse - <span> "+number_of_showall_meso+" von "+data[1].limit +"</span></span>";
                        document.getElementById("Pagination1").hidden=false;
                    }
                }
            },
        async: false
    });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso>=1){
        document.getElementById('labels1').hidden=false;
    }
}
function next(Filter,mikro) {
    if (mikro) document.getElementById('previousmikro').disabled=false;
    else document.getElementById('previousmeso').disabled=false;
    document.getElementById('labels0').hidden=true;
    document.getElementById('labels1').hidden=true;
    let values = [];
    let Kriterien = setKriterien(mikro);
    let url = seturl(mikro, Filter);
    if (mikro) url = url + "&from=" + String(number_of_showall_mikro);
    else url = url + "&from=" + String(number_of_showall_meso);
    $.ajax({
        url: url,
        success: function (data) {
            data = JSON.parse(data);
            cleanall();
            if (mikro){
                values = [data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Ergebnisdarstellung, data[0].Reflexion, data[0].feedback];
                diagram(Kriterien, values,0);
                number_of_showall_mikro++;
                document.getElementById('Unilabel0').innerHTML=data[0].Uni;
                document.getElementById('Kurslabel0').innerHTML=data[0].Kurs;
                document.getElementById('Fachbereichlabel0').innerHTML=data[0].Fachbereich;
                document.getElementById('Semesterzahllabel0').innerHTML=data[0].Semesterzahl;
                document.getElementById('AnzahlStudentenlabel0').innerHTML=data[0].AnzahlStudenten;
                document.getElementById('beneficialmikro').innerHTML=data[0].beneficial;
                document.getElementById('poorlymikro').innerHTML=data[0].poorly;
                document.getElementById('contactmikro').innerHTML=data[0].contact;
            } else {
                values = [data[0].Einbindung, data[0].CreditPoints, data[0].Verortung, data[0].Ressourcenrahmen, data[0].Zeitrahmen, data[0].Prufungsrahmen];
                diagram(Kriterien, values,1);
                number_of_showall_meso++;
                document.getElementById('Unilabel1').innerHTML=data[0].Uni;
                document.getElementById('Kurslabel1').innerHTML=data[0].Kurs;
                document.getElementById('Fachbereichlabel1').innerHTML=data[0].Fachbereich;
                document.getElementById('Semesterzahllabel1').innerHTML=data[0].Semesterzahl;
                document.getElementById('AnzahlStudentenlabel1').innerHTML=data[0].AnzahlStudenten;
                document.getElementById('beneficialmeso').innerHTML=data[0].beneficial;
                document.getElementById('poorlymeso').innerHTML=data[0].poorly;
                document.getElementById('contactmeso').innerHTML=data[0].contact;
            }
            if (mikro) {
                document.getElementById("Pagination0").innerHTML="<span class=\"paginationout>\">Die Anwendung des Filters ergab "+ data[1].limit + " Ergebnisse - <span> "+number_of_showall_mikro+" von "+data[1].limit +"</span></span>";
            }
            else {
                document.getElementById("Pagination1").innerHTML="<span class=\"paginationout>\">Die Anwendung des Filters ergab "+ data[1].limit + " Ergebnisse - <span> "+number_of_showall_meso+" von "+data[1].limit +"</span></span>";
            }
        },
        error: function(){
            if (mikro) {
                document.getElementById('nextmikro').disabled=true;
                return false;
            }
            else {
                document.getElementById('nextmeso').disabled = true;
                return false;
            }
        },
        async: false
    });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso>=1){
        document.getElementById('labels1').hidden=false;
    }
}

function previous(Filter,mikro) {
    if (mikro) document.getElementById('nextmikro').disabled=false;
    else document.getElementById('nextmeso').disabled=false;
    if ((mikro) && (number_of_showall_mikro<=1)) {
        document.getElementById('previousmikro').disabled=true;
        return false;
    }
    if ((!mikro) && (number_of_showall_meso<=1)) {
        document.getElementById('previousmeso').disabled=true;
        return false;
    }
    if (mikro) number_of_showall_mikro--;
    else number_of_showall_meso--;
    cleanall();
    let values = [];
    let Kriterien=setKriterien(mikro);
    let url=seturl(mikro,Filter);
    if (mikro) url=url + "&from="+String(number_of_showall_mikro-1);
    else url=url + "&from="+String(number_of_showall_meso-1);
    $.ajax({
        url: url,
        success: function (data) {
            data = JSON.parse(data);
            if (data[0].hasOwnProperty("limit")){
                if (mikro) {
                    document.getElementById("Pagination0").innerHTML="Es liegen keine Ergebnisse für diese Filter vor.";
                }
                else {
                    document.getElementById("Pagination1").innerHTML="Es liegen keine Ergebnisse für diese Filter vor.";
                }
            }
            else {
                if (mikro){
                    values = [data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Ergebnisdarstellung, data[0].Reflexion, data[0].feedback];
                    diagram(Kriterien, values,0);
                    document.getElementById('Unilabel0').innerHTML=data[0].Uni;
                    document.getElementById('Kurslabel0').innerHTML=data[0].Kurs;
                    document.getElementById('Fachbereichlabel0').innerHTML=data[0].Fachbereich;
                    document.getElementById('Semesterzahllabel0').innerHTML=data[0].Semesterzahl;
                    document.getElementById('AnzahlStudentenlabel0').innerHTML=data[0].AnzahlStudenten;
                    document.getElementById('beneficialmikro').innerHTML=data[0].beneficial;
                    document.getElementById('poorlymikro').innerHTML=data[0].poorly;
                    document.getElementById('contactmikro').innerHTML=data[0].contact;
                } else {
                    values = [data[0].Einbindung, data[0].CreditPoints, data[0].Verortung, data[0].Ressourcenrahmen, data[0].Zeitrahmen, data[0].Prufungsrahmen];
                    diagram(Kriterien, values,1);
                    document.getElementById('Unilabel1').innerHTML=data[0].Uni;
                    document.getElementById('Kurslabel1').innerHTML=data[0].Kurs;
                    document.getElementById('Fachbereichlabel1').innerHTML=data[0].Fachbereich;
                    document.getElementById('Semesterzahllabel1').innerHTML=data[0].Semesterzahl;
                    document.getElementById('AnzahlStudentenlabel1').innerHTML=data[0].AnzahlStudenten;
                    document.getElementById('beneficialmeso').innerHTML=data[0].beneficial;
                    document.getElementById('poorlymeso').innerHTML=data[0].poorly;
                    document.getElementById('contactmeso').innerHTML=data[0].contact;
                }
                if (mikro) {
                    document.getElementById("Pagination0").innerHTML="<span class=\"paginationout>\">Die Anwendung des Filters ergab "+ data[1].limit + " Ergebnisse - <span> "+number_of_showall_mikro+" von "+data[1].limit +"</span></span>";
                }
                else {
                    document.getElementById("Pagination1").innerHTML="<span class=\"paginationout>\">Die Anwendung des Filters ergab "+ data[1].limit + " Ergebnisse - <span> "+number_of_showall_meso+" von "+data[1].limit +"</span></span>";
                }
            }
        },
        async: false
    });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso>=1){
        document.getElementById('labels1').hidden=false;
    }
}
function cleanFilter() {
    chosenFilterMikro.Uni="";
    chosenFilterMikro.Fachbereich="";
    chosenFilterMikro.Kurs="";
    adjustFilterMikro();
    chosenFilterMeso.Uni="";
    chosenFilterMeso.Fachbereich="";
    chosenFilterMeso.Kurs="";
    adjustFilterMeso();
    inputs = document.getElementsByClassName("stringFilterMikro");
    for (let i=0;i<inputs.length;i++){
        inputs[i].value="";
    }
    inputs = document.getElementsByClassName("dimensionFilterMikro");
    for (let i=0;i<inputs.length;i++){
        inputs[i].checked=false;
    }
    inputs = document.getElementsByClassName("stringFilterMeso");
    for (let i=0;i<inputs.length;i++){
        inputs[i].value="";
    }
    inputs = document.getElementsByClassName("dimensionFilterMeso");
    for (let i=0;i<inputs.length;i++){
        inputs[i].checked=false;
    }
}
