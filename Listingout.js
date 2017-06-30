/**
 * Created by fides-WHK on 22.03.2017.
 */
function Listing(){
let output = [];
let idclass = document.getElementsByClassName("idclass");
for (let i=0;i<idclass.length;i++){
    if (idclass[i].value.match(/[0-9].*/)!=null){
        output.push(idclass[i].name);
        output.push(idclass[i].value);
    }
}
let stringFilter = document.getElementsByClassName("stringFilter");
for (let i=0;i<stringFilter.length;i++){
    if (stringFilter[i].value!=""){
        output.push(stringFilter[i].name);
        output.push("'"+stringFilter[i].value+"'");
        /*
        * You could check for name additions as "st.", "uni", "bad" or "an der" here.
        * This can be achieved with str_replace(). It's not implemented because I don't see the necessity.
        * It will become necessary as soon as people enter there universities with different names.
        * Lower and uppercase words don't matter at this point, this is solved in "serviceout.php"
         */
    }
}
let dimensionFilter = document.getElementsByClassName("dimensionFilter");
for (let i=0;i<dimensionFilter.length;i++){
    if (dimensionFilter[i].checked==true){
    //if (dimensionFilter[i].value.match(/0|1|2|3/)!=null){
        output.push(dimensionFilter[i].name);
        output.push(dimensionFilter[i].value);
    }
}

return output;
}