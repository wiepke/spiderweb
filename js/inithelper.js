/**
 * Created by fides-WHK on 20.07.2017.
 */
function showdiv(div){
    document.getElementsByClassName("Ebenen")[0].style="display:none";
    document.getElementsByClassName("Ebenen")[1].style="display:none";
    document.getElementById(div).style="display:inline";
}