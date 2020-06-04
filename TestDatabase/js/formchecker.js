/**
 * Created by fides-WHK on 02.08.2017.
 */

$(document).ready(function(){
    if (location.pathname.match('mikroger')!==null){
        document.getElementById('firstButton').disabled=true;
        $('#uniInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="")&&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&($('#semesterInput').val()!=="") &&($('#anzahlInput').val()!==""));
        });
        $('#kursInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&($('#semesterInput').val()!=="") &&($('#anzahlInput').val()!==""));
        });
        $('#semesterInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&($('#semesterInput').val()!=="") &&($('#anzahlInput').val()!==""));
        });
        $('#fachbereichInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&($('#semesterInput').val()!=="") &&($('#anzahlInput').val()!==""));
        });
        $('#anzahlInput').keyup(function() {
            document.getElementById('firstButton').disabled=
                !(($('#uniInput').val()!=="") &&($('#fachbereichInput').val()!=="") &&($('#kursInput').val()!=="") &&($('#semesterInput').val()!=="") &&($('#anzahlInput').val()!==""));
        });
    }

    let i=1;
    let id=-1;
    if (location.search.match('mikroid')!==null){
        id=0;
        while(location.search[i]!=="="){
            i++;
        }
        i++;
        while(location.search[i]!==undefined){
            id=id*10;
            id=id+parseInt(location.search[i]);
            i++;
        }
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