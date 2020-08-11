/**
 * Created by fides-WHK on 16.03.2017.
 */

let latestDiagramMikro = {
    Kriterien: [],
    values: [],
    diacount: 0
};

let latestDiagramMeso = {
    Kriterien: [],
    values: [],
    diacount: 1
};

let labels = {
    Uni: "",
    Kurs: "",
    Fachbereich: ""
};

let resultArray = [];
let chosenFilterMikro={Uni:'',Kurs:'',Fachbereich:'',AnzahlStudenten:'',SemesterZahl:''};
let chosenFilterMeso={Uni:'',Kurs:'',Fachbereich:'',AnzahlStudenten:'',SemesterZahl:''};

$(document).ready(function () {
    cleanFilter();
    showfilter();
    let showModelToggleLinks = $('.toggle-modell');
    showModelToggleLinks.each(function(){
        $(this).hide();
    });
    $("select[id=UniMikro]").on("change", function () {
        chosenFilterMikro.Uni = $("select[id=UniMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=KursMikro]").on("change", function () {
        chosenFilterMikro.Kurs = $("select[id=KursMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=FachbereichMikro]").on("change", function () {
        chosenFilterMikro.Fachbereich = $("select[id=FachbereichMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=SemesterZahlMikro]").on("change", function () {
        chosenFilterMikro.SemesterZahl = $("select[id=SemesterZahlMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=AnzahlStudentenMikro]").on("change", function () {
        chosenFilterMikro.AnzahlStudenten = $("select[id=AnzahlStudentenMikro]").val();
        adjustFilterMikro();
    });
    $("select[id=UniMeso]").on("change", function () {
        chosenFilterMeso.Uni = $("select[id=UniMeso]").val();
        adjustFilterMeso();
    });
    $("select[id=KursMeso]").on("change", function () {
        chosenFilterMeso.Kurs = $("select[id=KursMeso]").val();
        adjustFilterMeso();
    });
    $("select[id=FachbereichMeso]").on("change", function () {
        chosenFilterMeso.Fachbereich = $("select[id=FachbereichMeso]").val();
        adjustFilterMeso();
    });
    $("select[id=SemesterZahlMeso]").on("change", function () {
        chosenFilterMeso.SemesterZahl = $("select[id=SemesterZahlMeso]").val();
        adjustFilterMeso();
    });
    $("select[id=AnzahlStudentenMeso]").on("change", function () {
        chosenFilterMeso.AnzahlStudenten = $("select[id=AnzahlStudentenMeso]").val();
        adjustFilterMeso();
    });
});

function showfilter() {
    $('.collapse').addClass('in');
    $('.expand-area').attr('aria-expanded', 'true');
    $('.collapse').attr('aria-expanded', 'true');

}

function adjustFilterMikro() {
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
    elements = document.getElementsByClassName("AnzahlStudentenMikro");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    elements = document.getElementsByClassName("SemesterZahlMikro");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    for (let i = 0; i < allOfItMikro.length; i++) {
        if (((allOfItMikro[i].Uni === chosenFilterMikro.Uni) || (chosenFilterMikro.Uni === "")) &&
            ((allOfItMikro[i].Kurs === chosenFilterMikro.Kurs) || (chosenFilterMikro.Kurs === "")) &&
            ((allOfItMikro[i].Semesterzahl - 2 <= chosenFilterMikro.SemesterZahl) || (chosenFilterMikro.SemesterZahl === "")) &&
            ((allOfItMikro[i].AnzahlStudenten - 9 <= chosenFilterMikro.AnzahlStudenten) || (chosenFilterMikro.AnzahlStudenten === ""))) {
            document.getElementById(allOfItMikro[i].Fachbereich + "FachbereichMikroId").hidden = false;
        }
        if (((allOfItMikro[i].Kurs === chosenFilterMikro.Kurs) || (chosenFilterMikro.Kurs === "")) &&
            ((allOfItMikro[i].Fachbereich === chosenFilterMikro.Fachbereich) || (chosenFilterMikro.Fachbereich === "")) &&
            ((allOfItMikro[i].Semesterzahl - 2 <= chosenFilterMikro.SemesterZahl) || (chosenFilterMikro.SemesterZahl === "")) &&
            ((allOfItMikro[i].AnzahlStudenten - 9 <= chosenFilterMikro.AnzahlStudenten) || (chosenFilterMikro.AnzahlStudenten === ""))) {
            document.getElementById(allOfItMikro[i].Uni + "UniMikroId").hidden = false;
        }
        if (((allOfItMikro[i].Uni === chosenFilterMikro.Uni) || (chosenFilterMikro.Uni === "")) &&
            ((allOfItMikro[i].Fachbereich === chosenFilterMikro.Fachbereich) || (chosenFilterMikro.Fachbereich === "")) &&
            ((allOfItMikro[i].Semesterzahl - 2 <= chosenFilterMikro.SemesterZahl) || (chosenFilterMikro.SemesterZahl === "")) &&
            ((allOfItMikro[i].AnzahlStudenten - 9 <= chosenFilterMikro.AnzahlStudenten) || (chosenFilterMikro.AnzahlStudenten === ""))) {
            document.getElementById(allOfItMikro[i].Kurs + "KursMikroId").hidden = false;
        }
        if (((allOfItMikro[i].Uni === chosenFilterMikro.Uni) || (chosenFilterMikro.Uni === "")) &&
            ((allOfItMikro[i].Fachbereich === chosenFilterMikro.Fachbereich) || (chosenFilterMikro.Fachbereich === "")) &&
            ((allOfItMikro[i].Kurs === chosenFilterMikro.Kurs) || (chosenFilterMikro.Kurs === "")) &&
            ((allOfItMikro[i].AnzahlStudenten - 9 <= chosenFilterMikro.AnzahlStudenten) || (chosenFilterMikro.AnzahlStudenten === ""))) {
            if ((allOfItMikro[i].Semesterzahl >= 1) && (allOfItMikro[i].Semesterzahl <= 3)) {
                document.getElementById("SemesterZahlMikroId1").hidden = false;
            }
            if ((allOfItMikro[i].Semesterzahl >= 4) && (allOfItMikro[i].Semesterzahl <= 6)) {
                document.getElementById("SemesterZahlMikroId4").hidden = false;
            }
            if (allOfItMikro[i].Semesterzahl >= 7) {
                document.getElementById("SemesterZahlMikroId6").hidden = false;
            }
            document.getElementById("SemesterZahlMikroId8").hidden = false;
        }
        if (((allOfItMikro[i].Uni === chosenFilterMikro.Uni) || (chosenFilterMikro.Uni === "")) &&
            ((allOfItMikro[i].Fachbereich === chosenFilterMikro.Fachbereich) || (chosenFilterMikro.Fachbereich === "")) &&
            ((allOfItMikro[i].Kurs === chosenFilterMikro.Kurs) || (chosenFilterMikro.Kurs === "")) &&
            ((allOfItMikro[i].Semesterzahl - 2 <= chosenFilterMikro.SemesterZahl) || (chosenFilterMikro.SemesterZahl === ""))) {
            if ((allOfItMikro[i].AnzahlStudenten >= 1) && (allOfItMikro[i].AnzahlStudenten <= 10)) {
                document.getElementById("AnzahlStudentenMikroId1").hidden = false;
            }
            if ((allOfItMikro[i].AnzahlStudenten >= 11) && (allOfItMikro[i].AnzahlStudenten <= 20)) {
                document.getElementById("AnzahlStudentenMikroId11").hidden = false;
            }
            if ((allOfItMikro[i].AnzahlStudenten >= 21) && (allOfItMikro[i].AnzahlStudenten <= 30)) {
                document.getElementById("AnzahlStudentenMikroId21").hidden = false;
            }
            if (allOfItMikro[i].AnzahlStudenten >= 31) {
                document.getElementById("AnzahlStudentenMikroId30").hidden = false;
            }
        }
    }
}
function adjustFilterMeso() {
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
    elements = document.getElementsByClassName("AnzahlStudentenMeso");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    elements = document.getElementsByClassName("SemesterZahlMeso");
    for (let j = 0; j < elements.length; j++) {
        elements[j].hidden = true;
    }
    for (let i = 0; i < allOfItMeso.length; i++) {
        if (((allOfItMeso[i].Uni === chosenFilterMeso.Uni) || (chosenFilterMeso.Uni === "")) &&
            ((allOfItMeso[i].Kurs === chosenFilterMeso.Kurs) || (chosenFilterMeso.Kurs === "")) &&
            ((allOfItMeso[i].Semesterzahl - 2 <= chosenFilterMeso.SemesterZahl) || (chosenFilterMeso.SemesterZahl === "")) &&
            ((allOfItMeso[i].AnzahlStudenten - 9 <= chosenFilterMeso.AnzahlStudenten) || (chosenFilterMeso.AnzahlStudenten === ""))) {
            document.getElementById(allOfItMeso[i].Fachbereich + "FachbereichMesoId").hidden = false;
        }
        if (((allOfItMeso[i].Kurs === chosenFilterMeso.Kurs) || (chosenFilterMeso.Kurs === "")) &&
            ((allOfItMeso[i].Fachbereich === chosenFilterMeso.Fachbereich) || (chosenFilterMeso.Fachbereich === "")) &&
            ((allOfItMeso[i].Semesterzahl - 2 <= chosenFilterMeso.SemesterZahl) || (chosenFilterMeso.SemesterZahl === "")) &&
            ((allOfItMeso[i].AnzahlStudenten - 9 <= chosenFilterMeso.AnzahlStudenten) || (chosenFilterMeso.AnzahlStudenten === ""))) {
            document.getElementById(allOfItMeso[i].Uni + "UniMesoId").hidden = false;
        }
        if (((allOfItMeso[i].Uni === chosenFilterMeso.Uni) || (chosenFilterMeso.Uni === "")) &&
            ((allOfItMeso[i].Fachbereich === chosenFilterMeso.Fachbereich) || (chosenFilterMeso.Fachbereich === "")) &&
            ((allOfItMeso[i].Semesterzahl - 2 <= chosenFilterMeso.SemesterZahl) || (chosenFilterMeso.SemesterZahl === "")) &&
            ((allOfItMeso[i].AnzahlStudenten - 9 <= chosenFilterMeso.AnzahlStudenten) || (chosenFilterMeso.AnzahlStudenten === ""))) {
            document.getElementById(allOfItMeso[i].Kurs + "KursMesoId").hidden = false;
        }
        if (((allOfItMeso[i].Uni === chosenFilterMeso.Uni) || (chosenFilterMeso.Uni === "")) &&
            ((allOfItMeso[i].Fachbereich === chosenFilterMeso.Fachbereich) || (chosenFilterMeso.Fachbereich === "")) &&
            ((allOfItMeso[i].Kurs === chosenFilterMeso.Kurs) || (chosenFilterMeso.Kurs === "")) &&
            ((allOfItMeso[i].AnzahlStudenten - 9 <= chosenFilterMeso.AnzahlStudenten) || (chosenFilterMeso.AnzahlStudenten === ""))) {
            if ((allOfItMeso[i].Semesterzahl >= 1) && (allOfItMeso[i].Semesterzahl <= 3)) {
                document.getElementById("SemesterZahlMesoId1").hidden = false;
            }
            if ((allOfItMeso[i].Semesterzahl >= 4) && (allOfItMikro[i].Semesterzahl <= 6)) {
                document.getElementById("SemesterZahlMesoId4").hidden = false;
            }
            if (allOfItMeso[i].Semesterzahl >= 7) {
                document.getElementById("SemesterZahlMesoId6").hidden = false;
            }
            document.getElementById("SemesterZahlMesoId8").hidden = false;
        }
        if (((allOfItMeso[i].Uni === chosenFilterMeso.Uni) || (chosenFilterMeso.Uni === "")) &&
            ((allOfItMeso[i].Fachbereich === chosenFilterMeso.Fachbereich) || (chosenFilterMeso.Fachbereich === "")) &&
            ((allOfItMeso[i].Kurs === chosenFilterMeso.Kurs) || (chosenFilterMeso.Kurs === "")) &&
            ((allOfItMeso[i].Semesterzahl - 2 <= chosenFilterMeso.SemesterZahl) || (chosenFilterMeso.SemesterZahl === ""))) {
            if ((allOfItMeso[i].AnzahlStudenten >= 1) && (allOfItMeso[i].AnzahlStudenten <= 10)) {
                document.getElementById("AnzahlStudentenMesoId1").hidden = false;
            }
            if ((allOfItMeso[i].AnzahlStudenten >= 11) && (allOfItMeso[i].AnzahlStudenten <= 20)) {
                document.getElementById("AnzahlStudentenMesoId11").hidden = false;
            }
            if ((allOfItMeso[i].AnzahlStudenten >= 21) && (allOfItMeso[i].AnzahlStudenten <= 30)) {
                document.getElementById("AnzahlStudentenMesoId21").hidden = false;
            }
            if (allOfItMeso[i].AnzahlStudenten >= 31) {
                document.getElementById("AnzahlStudentenMesoId30").hidden = false;
            }
        }
    }
}

function cleanall() {
    let idclass = document.getElementsByClassName("dia");
    for (let i = 0; i < idclass.length; i++) {
        idclass[i].innerHTML = '';
    }
    document.getElementById("labels1").hidden = true;
    document.getElementById("labels0").hidden = true;
    return false;
}
function cleanDia(diacount){
    let diagram = 'diagram'+diacount;
    let labels = "labels"+diacount;
    let background = "background"+diacount;
    document.getElementById(diagram).innerHTML='';
    document.getElementById(background).innerHTML='';
    document.getElementById(labels).hidden = true;
}

function setKriterien(mikro, lang) {
    if (mikro) {
        if (lang == 'en') {
            return ["research topic", "research question", "scheduling", "conduct", "results", "reflection", "feedback"];
        } else {
            return ["Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Ergebnisdarstellung", "Reflexion", "Feedback"];
        }
    }
    else {
        if (lang=='en') {
            return ["curricular embedding", "number of credit points", "modular location", "recourses", "time", "assessement"];
        } else {
            return ["Curriculare Einbindung", "Anzahl der Credit Points", "Modulare Verortung", "Ressourcenrahmen", "Zeitrahmen", "Prüfungsrahmen"];
        }
    }
}

function seturl(mikro, Filter) {
    let tempurl = "serviceout.php";
    if (mikro) {
        tempurl = tempurl + "?mikro=true";
    }
    else {
        tempurl = tempurl + "?mikro=false";
    }
    for (let i = 0; i < Filter.length; i++) {
        if (i % 2 === 0) {
            tempurl = tempurl + "&" + Filter[i];
        }
        else tempurl = tempurl + "=" + Filter[i];
    }
    return tempurl;
}

let number_of_showall_mikro;
let number_of_showall_meso;

function showResults(Filter) {
    $('.beneficialExists').hide();
    $('.poorlyExists').hide();
    $('.emailExists').hide();
    document.getElementById('nextmikro').disabled = true;
    document.getElementById('previousmikro').disabled = true;
    document.getElementById('nextmeso').disabled = true;
    document.getElementById('previousmeso').disabled = true;
    document.getElementById('labels0').hidden = true;
    document.getElementById('labels1').hidden = true;
    cleanall();
    number_of_showall_mikro = 0;
    number_of_showall_meso = 0;
    let values = [];
    let Kriterienmikro = [];
    let Kriterienmeso = [];
    let urlmikro = "";
    let urlmeso = "";
    if (Filter.length === 4) {
        if (document.cookie.match('en') !== null) {
            Kriterienmikro = ["research topic", "research question", "scheduling", "conduct", "results", "relfection", "feedback"];
            urlmikro = "serviceout.php?mikro=true&id=" + Filter[1] + "&anyway=1" + "&from=0";
            Kriterienmeso = ["curricular embedding", "number of credit points", "modular location", "recourses", "time", "assessement"];
            urlmeso = "serviceout.php?mikro=false&id=" + Filter[3] + "&anyway=1" + "&from=0";
        }
        if (document.cookie.match('de') !== null) {
            Kriterienmikro = ["Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Ergebnisdarstellung", "Reflexion", "Feedback"];
            urlmikro = "serviceout.php?mikro=true&id=" + Filter[1] + "&anyway=1" + "&from=0";
            Kriterienmeso = ["Curriculare Einbindung", "Anzahl der Credit Points", "Modulare Verortung", "Ressourcenrahmen", "Zeitrahmen", "Prüfungsrahmen"];
            urlmeso = "serviceout.php?mikro=false&id=" + Filter[3] + "&anyway=1" + "&from=0";
        }
    }
    else if (Filter.length === 0) {
        return false;
    }
    else if (Filter[0].match('mikro') !== null) {
        if (document.cookie.match('en') !== null) {
            Kriterienmikro = ["research topic", "research question", "scheduling", "conduct", "results", "relfection", "feedback"];
            urlmikro = "serviceout.php?mikro=true&id=" + Filter[1] + "&anyway=1" + "&from=0";
        } else {
            Kriterienmikro = ["Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Ergebnisdarstellung", "Reflexion", "Feedback"];
            urlmikro = "serviceout.php?mikro=true&id=" + Filter[1] + "&anyway=1" + "&from=0";
        }
    } else {
        if (document.cookie.match('enF') !== null) {
            Kriterienmeso = ["curricular embedding", "number of credit points", "modular location", "recourses", "time", "assessement"];
            urlmeso = "serviceout.php?mikro=false&id=" + Filter[1] + "&anyway=1" + "&from=0";
        } else {
            Kriterienmeso = ["Curriculare Einbindung", "Anzahl der Credit Points", "Modulare Verortung", "Ressourcenrahmen", "Zeitrahmen", "Prüfungsrahmen"];
            urlmeso = "serviceout.php?mikro=false&id=" + Filter[1] + "&anyway=1" + "&from=0";
        }
    }
    if (urlmikro !== "") {
        $.ajax({
            url: urlmikro,
            dataType: 'json',
            success: function (data) {
                values = [data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Ergebnisdarstellung, data[0].Reflexion, data[0].feedback];
                labels.Uni = data[0].Uni;
                labels.Kurs = data[0].Kurs;
                labels.Fachbereich = data[0].Fachbereich;
                updateDiagram(Kriterienmikro, values, 0, true);
                number_of_showall_mikro++;
                if (data[0].SemesterZahl !== "8") {
                    document.getElementById('Semesterzahllabel0').innerHTML = data[0].Semesterzahl;
                } else {
                    document.getElementById('Semesterzahllabel0').innerHTML = "gemischt";
                }
                document.getElementById('AnzahlStudentenlabel0').innerHTML = data[0].AnzahlStudenten;
                if (data[0].beneficial != null) {
                    $('.beneficialExists').show();
                    document.getElementById('beneficialmikro').innerHTML = data[0].beneficial;
                }
                if (data[0].poorly != null) {
                    $('.poorlyExists').show();
                    document.getElementById('poorlymikro').innerHTML = data[0].poorly;
                }
                if (data[0].contact != null) {
                    $('.emailExists').show();
                    document.getElementById('contactmikro').innerHTML = data[0].contact;
                }
            },
            async: false
        });
        document.getElementById('labels0').hidden = false;
    }
    if (urlmeso !== "") {
        $.ajax({
            url: urlmeso,
            dataType: 'json',
            success: function (data) {
                values = [data[0].Einbindung, data[0].CreditPoints, data[0].Verortung, data[0].Ressourcenrahmen, data[0].Zeitrahmen, data[0].Prufungsrahmen];
                labels.Uni = data[0].Uni;
                labels.Kurs = data[0].Kurs;
                labels.Fachbereich = data[0].Fachbereich;
                updateDiagram(Kriterienmeso, values, 1, true);
                number_of_showall_meso++;
                if (data[0].SemesterZahl !== "8") {
                    document.getElementById('Semesterzahllabel1').innerHTML = data[0].Semesterzahl;
                } else {
                    document.getElementById('Semesterzahllabel1').innerHTML = "gemischt";
                }
                document.getElementById('AnzahlStudentenlabel1').innerHTML = data[0].AnzahlStudenten;
                if (data[0].beneficial != "") {
                    $('.beneficialExists').show();
                    document.getElementById('beneficialmeso').innerHTML = data[0].beneficial;
                }
                if (data[0].poorly != "") {
                    $('.poorlyExists').show();
                    document.getElementById('poorlymeso').innerHTML = data[0].poorly;
                }
                if (data[0].contact != "") {
                    $('.emailExists').show();
                    document.getElementById('contactmeso').innerHTML = data[0].contact;
                }
            },
            async: false
        });
        document.getElementById('labels1').hidden = false;
    }
}

function showall(Filter, mikro, background, lang) {
    resultArray = [];
    $('.beneficialExists').hide();
    $('.poorlyExists').hide();
    $('.emailExists').hide();
    document.getElementById("Pagination0").hidden = true;
    document.getElementById("Pagination1").hidden = true;
    if (mikro) {
        document.getElementById('nextmikro').disabled = false;
        document.getElementById('previousmikro').disabled = true;
        document.getElementById('nextmeso').disabled = true;
        document.getElementById('previousmeso').disabled = true;
    }
    else {
        document.getElementById('nextmeso').disabled = false;
        document.getElementById('previousmeso').disabled = true;
        document.getElementById('nextmikro').disabled = true;
        document.getElementById('previousmikro').disabled = true;
    }
    document.getElementById('labels0').hidden = true;
    document.getElementById('labels1').hidden = true;
    cleanall();
    if (mikro) number_of_showall_mikro = 0;
    else number_of_showall_meso = 0;
    let values = [];
    let Kriterien = setKriterien(mikro, lang);
    let url = seturl(mikro, Filter);
    if (mikro) {
        url = url + "&from=" + String(number_of_showall_mikro);
    }
    else {
        url = url + "&from=" + String(number_of_showall_meso);
    }
    $.ajax({
        url: url,
        dataType: 'json',
        mikro: mikro,
        success: function (data) {
            if (data[0].hasOwnProperty("limit")) {
                if (mikro) {
                    if (lang=="de"){
                        document.getElementById("Pagination0").innerHTML = "Es liegen keine Ergebnisse für diese Filter vor.";
                    }
                    else{
                        document.getElementById("Pagination0").innerHTML = "No results are available for these filters.";
                    }

                    document.getElementById("Pagination0").hidden = false;
                    document.getElementById('nextmikro').disabled = true;
                }
                else {
                    if (lang=="de"){
                        document.getElementById("Pagination1").innerHTML = "Es liegen keine Ergebnisse für diese Filter vor.";
                    }
                    else{
                        document.getElementById("Pagination1").innerHTML = "No results are available for these filters.";
                    }
                    document.getElementById("Pagination1").hidden = false;
                    document.getElementById('nextmeso').disabled = true;
                }
            } else {
                if (mikro) {
                    values = [data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Ergebnisdarstellung, data[0].Reflexion, data[0].feedback];
                    labels.Uni = data[0].Uni;
                    labels.Kurs = data[0].Kurs;
                    labels.Fachbereich = data[0].Fachbereich;
                    resultArray.push([data[0].Uni, data[0].Kurs, data[0].Fachbereich]);
                    updateDiagram(Kriterien, values, 0, background);
                    number_of_showall_mikro++;
                    if (data[1].limit == 1 ){
                        document.getElementById("nextmikro").disabled = true;
                    }
                    if (data[0].Semesterzahl !== "8") {
                        document.getElementById('Semesterzahllabel0').innerHTML = data[0].Semesterzahl;
                    } else {
                        document.getElementById('Semesterzahllabel0').innerHTML = "gemischt";
                    }
                    document.getElementById('AnzahlStudentenlabel0').innerHTML = data[0].AnzahlStudenten;
                    document.getElementById('beneficialmikro').innerHTML = data[0].beneficial;
                    document.getElementById('poorlymikro').innerHTML = data[0].poorly;
                    document.getElementById('contactmikro').innerHTML = data[0].contact;
                } else {
                    values = [data[0].Einbindung, data[0].Verortung, data[0].CreditPoints, data[0].Prufungsrahmen, data[0].Ressourcenrahmen, data[0].Zeitrahmen];
                    labels.Uni = data[0].Uni;
                    labels.Kurs = data[0].Kurs;
                    labels.Fachbereich = data[0].Fachbereich;
                    resultArray.push([data[0].Uni, data[0].Kurs, data[0].Fachbereich]);
                    updateDiagram(Kriterien, values, 1, background);
                    number_of_showall_meso++;
                    if (data[1].limit == 1){
                        document.getElementById("nextmeso").disabled = true;
                    }
                    if (data[0].Semesterzahl !== "8") {
                        document.getElementById('Semesterzahllabel1').innerHTML = data[0].Semesterzahl;
                    } else {
                        document.getElementById('Semesterzahllabel1').innerHTML = "gemischt";
                    }
                    document.getElementById('AnzahlStudentenlabel1').innerHTML = data[0].AnzahlStudenten;

                }
                if (data[0].beneficial != "") {
                    $('.beneficialExists').show();
                        document.getElementById('beneficialmikro').innerHTML = data[0].beneficial;

                }
                if (data[0].poorly != "") {
                    $('.poorlyExists').show();
                        document.getElementById('poorlymikro').innerHTML = data[0].poorly;
                }
                if (data[0].contact != "") {
                    $('.emailExists').show();
                        document.getElementById('contactmikro').innerHTML = data[0].contact;
                }
                if (mikro) {
                    if (lang=="de"){
                        document.getElementById("Pagination0").innerHTML = "<span class=\"paginationout>\">Die Anwendung des Filters ergab " + data[1].limit + " Ergebnisse - <span> " + number_of_showall_mikro + " von " + data[1].limit+ "</span>"
                    }
                    else{
                        document.getElementById("Pagination0").innerHTML = "<span class=\"paginationout>\">The application of the filter resulted in " + data[1].limit + " Results - <span> " + number_of_showall_mikro + " of " + data[1].limit +"</span>"
                    }
                    document.getElementById("Pagination0").hidden = false;
                }
                else {
                    if (lang=="de"){
                        document.getElementById("Pagination1").innerHTML = "<span class=\"paginationout>\">Die Anwendung des Filters ergab " + data[1].limit + " Ergebnisse - <span> " + number_of_showall_meso + " von " + data[1].limit+ "</span>"
                    }
                    else{
                        document.getElementById("Pagination1").innerHTML = "<span class=\"paginationout>\">The application of the filter resulted in " + data[1].limit + " Results - <span> " + number_of_showall_meso + " of " + data[1].limit +"</span>"
                    }
                    document.getElementById("Pagination1").hidden = false;
                }
            }
        },
        async: false
    });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso >= 1) {
        document.getElementById('labels1').hidden = false;
    }
}
function next(Filter, mikro, background, lang) {
    $('.beneficialExists').hide();
    $('.poorlyExists').hide();
    $('.emailExists').hide();
    document.getElementById('labels0').hidden = true;
    document.getElementById('labels1').hidden = true;
    let values = [];
    let Kriterien = setKriterien(mikro);
    let url = seturl(mikro, Filter);
    if (mikro) url = url + "&from=" + String(number_of_showall_mikro);
    else url = url + "&from=" + String(number_of_showall_meso);
    $.ajax({
        url: url,
        dataType : 'json',
        success: function (data) {
            resultArray.push([data[0].Uni, data[0].Kurs, data[0].Fachbereich]);
            if (mikro){
                    if (data[1].limit-number_of_showall_mikro <= 1){
                         document.getElementById("nextmikro").disabled = true;
                     }
            }
            else {
                    if (data[1].limit - number_of_showall_meso <= 1){
                        document.getElementById("nextmeso").disabled = true;
                    }
            }

            if (mikro) document.getElementById('previousmikro').disabled = false;
            else document.getElementById('previousmeso').disabled = false;
            cleanall();
            if (mikro) {
                    values = [data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Ergebnisdarstellung, data[0].Reflexion, data[0].feedback];
                    labels.Uni = data[0].Uni;
                    labels.Kurs = data[0].Kurs;
                    labels.Fachbereich = data[0].Fachbereich;
                    updateDiagram(Kriterien, values, 0, background);
                    number_of_showall_mikro++;
                    if (data[0].Semesterzahl !== "8") {
                        document.getElementById('Semesterzahllabel0').innerHTML = data[0].Semesterzahl;
                    } else {
                        document.getElementById('Semesterzahllabel0').innerHTML = "gemischt";
                    }
                    document.getElementById('AnzahlStudentenlabel0').innerHTML = data[0].AnzahlStudenten;
                    if (data[0].beneficial != "") {
                        $('.beneficialExists').show();
                        document.getElementById('beneficialmikro').innerHTML = data[0].beneficial;
                    }
                    if (data[0].poorly != "") {
                        $('.poorlyExists').show();
                        document.getElementById('poorlymikro').innerHTML = data[0].poorly;
                    }
                    if (data[0].contact != "") {
                        $('.emailExists').show();
                        document.getElementById('contactmikro').innerHTML = data[0].contact;
                    }

            } else {
                    values = [data[0].Einbindung, data[0].CreditPoints, data[0].Verortung, data[0].Ressourcenrahmen, data[0].Zeitrahmen, data[0].Prufungsrahmen];
                    labels.Uni = data[0].Uni;
                    labels.Kurs = data[0].Kurs;
                    labels.Fachbereich = data[0].Fachbereich;
                    updateDiagram(Kriterien, values, 1, background);
                    number_of_showall_meso++;
                    if (data[0].Semesterzahl !== "8") {
                        document.getElementById('Semesterzahllabel1').innerHTML = data[0].Semesterzahl;
                    } else {
                        document.getElementById('Semesterzahllabel1').innerHTML = "gemischt";
                    }
                    document.getElementById('AnzahlStudentenlabel1').innerHTML = data[0].AnzahlStudenten;
                    if (data[0].beneficial != "") {
                        $('.beneficialExists').show();
                        document.getElementById('beneficialmeso').innerHTML = data[0].beneficial;
                    }
                    if (data[0].poorly != "") {
                        $('.poorlyExists').show();
                        document.getElementById('poorlymeso').innerHTML = data[0].poorly;
                    }
                    if (data[0].contact != "") {
                        $('.emailExists').show();
                        document.getElementById('contactmeso').innerHTML = data[0].contact;
                    }
            }
            if (mikro) {
                    if (lang=="de"){
                        document.getElementById("Pagination0").innerHTML = "<span class=\"paginationout>\">Die Anwendung des Filters ergab " + data[1].limit + " Ergebnisse - <span> " + number_of_showall_mikro + " von " + data[1].limit+ "</span>"
                    }
                    else{
                        document.getElementById("Pagination0").innerHTML = "<span class=\"paginationout>\">The application of the filter resulted in " + data[1].limit + " Results - <span> " + number_of_showall_mikro + " of " + data[1].limit +"</span>"
                    }
            }
            else {
                    if (lang=="de"){
                        document.getElementById("Pagination1").innerHTML = "<span class=\"paginationout>\">Die Anwendung des Filters ergab " + data[1].limit + " Ergebnisse - <span> " + number_of_showall_meso + " von " + data[1].limit+ "</span>"
                    }
                    else{
                        document.getElementById("Pagination1").innerHTML = "<span class=\"paginationout>\">The application of the filter resulted in " + data[1].limit + " Results - <span> " + number_of_showall_meso + " of " + data[1].limit +"</span>"
                    }
            }



        },
        error: function () {
            if (mikro) {
                document.getElementById('nextmikro').disabled = true;
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
    if (number_of_showall_meso >= 1) {
        document.getElementById('labels1').hidden = false;
    }
}
function showResultArray() {
    let outputResult = "";
    for (let j = 0; j < resultArray.length; j++){
        outputResult = outputResult  + resultArray[j][0] + "/" + resultArray[j][1] + "/" + resultArray[j][2] + "</br>";
    }
}
function previous(Filter, mikro, background, lang) {
    $('.beneficialExists').hide();
    $('.poorlyExists').hide();
    $('.emailExists').hide();
    if (mikro) document.getElementById('nextmikro').disabled = false;
    else document.getElementById('nextmeso').disabled = false;
    if (mikro) number_of_showall_mikro--;
    else number_of_showall_meso--;
    cleanall();
    let values = [];
    let Kriterien = setKriterien(mikro);
    let url = seturl(mikro, Filter);
    if (mikro) url = url + "&from=" + String(number_of_showall_mikro - 1);
    else url = url + "&from=" + String(number_of_showall_meso - 1);
    $.ajax({
        url: url,
        dataType: 'json',
        success: function (data) {
            if ((mikro) && number_of_showall_mikro <= 1){
                document.getElementById("previousmikro").disabled = true;
            }
            else{ if ((!mikro) && number_of_showall_meso <= 1){
                document.getElementById("previousmeso").disabled = true;
            }

            }
            if (data[0].hasOwnProperty("limit")) {
                if (mikro) {
                    if (lang=="de"){
                        document.getElementById("Pagination0").innerHTML = "Es liegen keine Ergebnisse für diese Filter vor.";
                    }
                    else{
                        document.getElementById("Pagination0").innerHTML = "No results are available for these filters.";
                    }
                }
                else {
                    if (lang=="de"){
                        document.getElementById("Pagination1").innerHTML = "Es liegen keine Ergebnisse für diese Filter vor.";
                    }
                    else{
                        document.getElementById("Pagination1").innerHTML = "No results are available for these filters.";
                    }
                }
            }
            else {
                if (mikro) {
                    values = [data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Ergebnisdarstellung, data[0].Reflexion, data[0].feedback];
                    labels.Uni = data[0].Uni;
                    labels.Kurs = data[0].Kurs;
                    labels.Fachbereich = data[0].Fachbereich;
                    updateDiagram(Kriterien, values, 0, background);
                    if (data[0].Semesterzahl !== "8") {
                        document.getElementById('Semesterzahllabel0').innerHTML = data[0].Semesterzahl;
                    } else {
                        document.getElementById('Semesterzahllabel0').innerHTML = "gemischt";
                    }
                    document.getElementById('AnzahlStudentenlabel0').innerHTML = data[0].AnzahlStudenten;
                    if (data[0].beneficial != "") {
                        $('.beneficialExists').show();
                        document.getElementById('beneficialmikro').innerHTML = data[0].beneficial;
                    }
                    if (data[0].poorly != "") {
                        $('.poorlyExists').show();
                        document.getElementById('poorlymikro').innerHTML = data[0].poorly;
                    }
                    if (data[0].contact != "") {
                        $('.emailExists').show();
                        document.getElementById('contactmikro').innerHTML = data[0].contact;
                    }
                } else {
                    values = [data[0].Einbindung, data[0].CreditPoints, data[0].Verortung, data[0].Ressourcenrahmen, data[0].Zeitrahmen, data[0].Prufungsrahmen];
                    labels.Uni = data[0].Uni;
                    labels.Kurs = data[0].Kurs;
                    labels.Fachbereich = data[0].Fachbereich;
                    updateDiagram(Kriterien, values, 1, background);
                    if (data[0].Semesterzahl !== "8") {
                        document.getElementById('Semesterzahllabel1').innerHTML = data[0].Semesterzahl;
                    } else {
                        document.getElementById('Semesterzahllabel1').innerHTML = "gemischt";
                    }
                    document.getElementById('AnzahlStudentenlabel1').innerHTML = data[0].AnzahlStudenten;
                    if (data[0].beneficial != "") {
                        $('.beneficialExists').show();
                        document.getElementById('beneficialmeso').innerHTML = data[0].beneficial;
                    }
                    if (data[0].poorly != "") {
                        $('.poorlyExists').show();
                        document.getElementById('poorlymeso').innerHTML = data[0].poorly;
                    }
                    if (data[0].contact != "") {
                        $('.emailExists').show();
                        document.getElementById('contactmeso').innerHTML = data[0].contact;
                    }
                }
                if (mikro) {
                    if (lang=="de"){
                        document.getElementById("Pagination0").innerHTML = "<span class=\"paginationout>\">Die Anwendung des Filters ergab " + data[1].limit + " Ergebnisse - <span> " + number_of_showall_mikro + " von " + data[1].limit+ "</span>"
                    }
                    else{
                        document.getElementById("Pagination0").innerHTML = "<span class=\"paginationout>\">The application of the filter resulted in " + data[1].limit + " Results - <span> " + number_of_showall_mikro + " of " + data[1].limit +"</span>"
                    }
                }
                else {
                    if (lang=="de"){
                        document.getElementById("Pagination1").innerHTML = "<span class=\"paginationout>\">Die Anwendung des Filters ergab " + data[1].limit + " Ergebnisse - <span> " + number_of_showall_meso + " von " + data[1].limit+ "</span>"
                    }
                    else{
                        document.getElementById("Pagination1").innerHTML = "<span class=\"paginationout>\">The application of the filter resulted in " + data[1].limit + " Results - <span> " + number_of_showall_meso + " of " + data[1].limit +"</span>"
                    }
                }
            }
        },
        async: false
    });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso >= 1) {
        document.getElementById('labels1').hidden = false;
    }
}
function cleanFilter() {
    chosenFilterMikro.Uni = "";
    chosenFilterMikro.Fachbereich = "";
    chosenFilterMikro.Kurs = "";
    adjustFilterMikro();
    chosenFilterMeso.Uni = "";
    chosenFilterMeso.Fachbereich = "";
    chosenFilterMeso.Kurs = "";
    adjustFilterMeso();
    inputs = document.getElementsByClassName("stringFilterMikro");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].value = "";
    }
    inputs = document.getElementsByClassName("dimensionFilterMikro");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].checked = false;
    }
    inputs = document.getElementsByClassName("stringFilterMeso");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].value = "";
    }
    inputs = document.getElementsByClassName("dimensionFilterMeso");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].checked = false;
    }
}

function updateDiagram(criteria, values, diacount, background) {
        cleanDia(diacount);
        if (diacount == 0){
            if (criteria != null) {
                latestDiagramMikro.Kriterien = criteria;
                latestDiagramMikro.values = values;
            }
            latestDiagramMikro.diacount = diacount;
            diagram(latestDiagramMikro, background);
            displayLabels(latestDiagramMikro.diacount);

        }else{
            if (criteria != null) {
                latestDiagramMeso.Kriterien = criteria;
                latestDiagramMeso.values = values;
            }
            latestDiagramMeso.diacount = diacount;
            diagram(latestDiagramMeso, background);
            displayLabels(latestDiagramMeso.diacount);
        }

}

function displayLabels(diacount){
    document.getElementById('Unilabel'+diacount).innerHTML = labels.Uni;
    document.getElementById('Kurslabel'+diacount).innerHTML = labels.Kurs;
    document.getElementById('Fachbereichlabel'+diacount).innerHTML = labels.Fachbereich;
    document.getElementById('labels'+diacount).hidden = false;
}