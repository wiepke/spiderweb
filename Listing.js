/**
 * Created by fides-WHK on 22.03.2017.
 */
function Listing(){
var output=[];
if (document.getElementById('id').value!="") {
    output.push("id");
    output.push(document.getElementById('id').value);
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