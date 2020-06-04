/**
 * Created by fides-WHK on 22.03.2017.
 */

function Listingmikro(){
    let output = [];
    let idclass = document.getElementsByClassName("idclass");
    for (let i=0;i<idclass.length;i++){
        if (idclass[i].value.match(/[0-9].*/)!==null){
            output.push(idclass[i].name);
            output.push(idclass[i].value);
        }
    }
    let stringFilter = document.getElementsByClassName("stringFilterMikro");
    for (let i=0;i<stringFilter.length;i++){
        if (stringFilter[i].value!==""){
            if (stringFilter[i].name==="AnzahlStudenten"){
                output.push(stringFilter[i].name+">");
                output.push(stringFilter[i].value);
                if (parseInt(stringFilter[i].value)<6){
                    output.push(stringFilter[i].name+"<");
                    output.push(String(parseInt(stringFilter[i].value)+9));
                }
            }else
            if (stringFilter[i].name==="Semesterzahl"){
                if (stringFilter[i].value!=="8"){           //"8" means, that there are "composite" semesters in this course
                    output.push(stringFilter[i].name+">");
                } else{
                    output.push(stringFilter[i].name);
                }
                output.push(stringFilter[i].value);
                if (parseInt(stringFilter[i].value)<6){
                    output.push(stringFilter[i].name+"<");
                    output.push(String(parseInt(stringFilter[i].value)+2));
                }
            }else {
                output.push(stringFilter[i].name);
                output.push(stringFilter[i].value);
            }
            /*
             * You could check for name additions as "st.", "uni", "bad" or "an der" here.
             * This can be achieved with str_replace(). It's not implemented because I don't see the necessity.
             * It will become necessary as soon as people enter there universities with different names.
             * Lower and uppercase words don't matter at this point, this is solved in "serviceout.php"
             */
        }
    }
    let dimensionFilter = document.getElementsByClassName("dimensionFilterMikro");
    for (let i=0;i<dimensionFilter.length;i++){
        if (dimensionFilter[i].checked===true){
            output.push(dimensionFilter[i].name);
            output.push(dimensionFilter[i].value);
        }
    }
    if (location.search.match('anyway=1')!==null) {
        output.push("anyway");
        output.push("1");
    }

    return output;
}
function Listingmeso(){
    let output = [];
    let idclass = document.getElementsByClassName("idclass");
    for (let i=0;i<idclass.length;i++){
        if (idclass[i].value.match(/[0-9].*/)!==null){
            output.push(idclass[i].name);
            output.push(idclass[i].value);
        }
    }
    let stringFilter = document.getElementsByClassName("stringFilterMeso");


    for (let i=0;i<stringFilter.length;i++){
        if (stringFilter[i].value!==""){
            if (stringFilter[i].name==="AnzahlStudenten"){
                output.push(stringFilter[i].name+">");
                output.push(stringFilter[i].value);
                if (parseInt(stringFilter[i].value)<6){
                    output.push(stringFilter[i].name+"<");
                    output.push(String(parseInt(stringFilter[i].value)+9));
                }
            }else
            if (stringFilter[i].name==="Semesterzahl"){
                output.push(stringFilter[i].name+">");
                output.push(stringFilter[i].value);
                if (parseInt(stringFilter[i].value)<6){
                    output.push(stringFilter[i].name+"<");
                    output.push(String(parseInt(stringFilter[i].value)+2));
                }
            }else {
                output.push(stringFilter[i].name);
                output.push(stringFilter[i].value);
            }
            /*
             * You could check for name additions as "st.", "uni", "bad" or "an der" here.
             * This can be achieved with str_replace(). It's not implemented because I don't see the necessity.
             * It will become necessary as soon as people enter there universities with different names.
             * Lower and uppercase words don't matter at this point, this is solved in "serviceout.php"
             */
        }
    }
    let dimensionFilter = document.getElementsByClassName("dimensionFilterMeso");
    for (let i=0;i<dimensionFilter.length;i++){
        if (dimensionFilter[i].checked===true){
            output.push(dimensionFilter[i].name);
            output.push(dimensionFilter[i].value);
        }
    }

    if (location.search.match('anyway=1')!==null) {
        output.push("anyway");
        output.push("1");
    }

    return output;
}