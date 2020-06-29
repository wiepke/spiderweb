/**
 * Created by fides-WHK on 02.08.2017.
*/

$(document).ready(function(){

    if (location.pathname.match('mikroger')!==null ){
        document.getElementById('firstButton').disabled=true;
        $('#uniInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="")&&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&(!isNaN($('#semesterInput').val())) &&(!isNaN($('#anzahlInput').val())));
        });
        $('#kursInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&(!isNaN($('#semesterInput').val())) &&(!isNaN($('#anzahlInput').val())));
        });
        $('#semesterInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&(!isNaN($('#semesterInput').val())) &&(!isNaN($('#anzahlInput').val())));
        });
        $('#fachbereichInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&(!isNaN($('#semesterInput').val())) &&(!isNaN($('#anzahlInput').val())));
        });
        $('#anzahlInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&(!isNaN($('#semesterInput').val())) &&(!isNaN($('#anzahlInput').val())));
        });
    }

    let id=-1;
    if (location.search.match('mikroid')!==null){
        let params = getParams(location.search);
        id = params["mikroid"];
        //id = location.search.match(/(\d+)/)[0];
        $.ajax({
            url: "serviceout.php?mikro=true&id="+id+"&from=0",
            success: function (data) {
                data = JSON.parse(data);
                $('#uniInput').val(data[0].Uni);
                $('#fachbereichInput').val(data[0].Fachbereich);
                $('#kursInput').val(data[0].Kurs);
                $('#semesterInput').val(data[0].Semesterzahl);
                $('#anzahlInput').val(data[0].AnzahlStudenten);
            },
            contentType: "application/x-www-form-urlencoded;charset=UTF-8",
        });
    }
    $('#uniInput').keypress(function(e){
        if(e.keyCode===13){
            $('#kursInput').select();
            return false;
        }
    });
    $('#kursInput').keypress(function(e){
        if(e.keyCode===13){
            $('#fachbereichInput').select();
            return false;
        }
    });
    $('#fachbereichInput').keypress(function(e){
        if(e.keyCode===13) {
            $('#zeroButton').click();
            $('#anzahlInput').select();
            return false;
        }
    });
    $('#anzahlInput').keypress(function(e){
        if(e.keyCode===13) {
            $('#semesterInput').select();
            return false;
        }
    });
    $('#semesterInput').keypress(function(e){
        if(e.keyCode===13) {
            $('#firstButton').click();
            return false;
        }
    });
});

/**
 * Get the URL parameters
 * source: https://css-tricks.com/snippets/javascript/get-url-variables/
 * @param  {String} url The URL
 * @return {Object}     The URL parameters
 */
function getParams (url) {
    let params = {};
    let parser = document.createElement('a');
    parser.href = url;
    let query = parser.search.substring(1);
    let vars = query.split('&');
    for (let i = 0; i < vars.length; i++) {
        let pair = vars[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
}