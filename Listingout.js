/**
 * Created by fides-WHK on 22.03.2017.
 */
function Listing(){
let output = [];
/*let Filter = document.getElementsByClassName("Filter");
for (let i=0;i<Filter.length-1;i++){
    if (Filter[i].value!=""){
        output.push(Filter[i].name);
        output.push(Filter[i].value);
    }
}*/
if (document.getElementById('id').value!="") {
    output.push("id");
    output.push(document.getElementById('id').value);
}
if (document.getElementById('fromid').value!="") {
    output.push("fromid");
    output.push(document.getElementById('fromid').value);
}
if (document.getElementById('toid').value!="") {
    output.push("toid");
    output.push(document.getElementById('toid').value);
}
if (document.getElementById('Uni').value!="") {
    output.push("Uni");
    output.push(document.getElementById('Uni').value);
}
if (document.getElementById('oeffentlichkeit').value!="") {
    output.push("oeffentlichkeit");
    output.push(document.getElementById('oeffentlichkeit').value);
}
if (document.getElementById('Bewertung').value!="") {
    output.push("Bewertung");
    output.push(document.getElementById('Bewertung').value);
}
return output;
}