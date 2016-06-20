
$(document).ready(function () {
    $("#liv_mil").click(function () {
        if($("#liv_mil").is(':checked')){
            $("#liv_mil_nr").prop("disabled",false);
        }else  $("#liv_mil_nr").prop("disabled",true);
    });
    function TogleEnable($select, $option) {
        if ($($select + ' :selected').val() == 0) {
            $($option).prop("disabled", true);
        }
        else {
            $($option).prop("disabled", false);
        }
    }
    function predmet($select, $media1 , $media2, $media3) {
        
        var value = $($select+' :selected').val();
        var inf_mat=new Array(8,3,4,5);
        var eco = [7];
        var cor = [6,9,10];
        var asist = [1,2];

        if($.inArray(parseInt(value), inf_mat)!= -1){
            $($media1).text('Limba staina');
            $($media2).text('Matematica');
            $($media3).text('Informatica');
        }
        if($.inArray(parseInt(value), eco)!= -1){
            $($media1).text('Biologie');
            $($media2).text('Chimie');
            $($media3).text('Matematica');
        }
        if($.inArray(parseInt(value), cor)!= -1){
            $($media1).text('Limba staina');
            $($media2).text('Istoria');
            $($media3).text('Proba de aptitudini');
        }
        if($.inArray(parseInt(value), asist)!= -1){
            $($media1).text('Limba staina');
            $($media2).text('Matematica');
            $($media3).text('Istoria');
        }
    }
    function null_options ($text,$media1 , $media2, $media3) {
        $($media1).text($text);
        $($media2).text($text);
        $($media3).text($text);
    }

    null_options('Selectati Optiunea 1','#opt1p1','#opt1p2','#opt1p3');
    null_options('Selectati Optiunea 2','#opt2p1','#opt2p2','#opt2p3');
    null_options('Selectati Optiunea 3','#opt3p1','#opt3p2','#opt3p3');

    TogleEnable('#specialitate1', '.opt1');
    TogleEnable('#specialitate2', '.opt2');
    TogleEnable('#specialitate3', '.opt3');

    predmet('#specialitate1','#opt1p1','#opt1p2','#opt1p3');
    predmet('#specialitate2','#opt2p1','#opt2p2','#opt2p3');
    predmet('#specialitate3','#opt3p1','#opt3p2','#opt3p3');

    $('#specialitate1').change(function () {
        var value = $('#specialitate1').val();
        if(value==0)
            null_options('Selectati Optiunea 1','#opt1p1','#opt1p2','#opt1p3');

        predmet('#specialitate1','#opt1p1','#opt1p2','#opt1p3');
        TogleEnable('#specialitate1', '.opt1');
    });
    $('#specialitate2').change(function () {
        var value = $('#specialitate2').val();
        if(value==0)
            null_options('Selectati Optiunea 2','#opt2p1','#opt2p2','#opt2p3');

        predmet('#specialitate2','#opt2p1','#opt2p2','#opt2p3');
        TogleEnable('#specialitate2', '.opt2');
    });
    $('#specialitate3').change(function () {
        var value = $('#specialitate3').val();
        if(value==0)
            null_options('Selectati Optiunea 3','#opt3p1','#opt3p2','#opt3p3');

        predmet('#specialitate3','#opt3p1','#opt3p2','#opt3p3');
        TogleEnable('#specialitate3', '.opt3');
    });

    $('#calc').click(function () {
        var sum = 0;
        if ($('#specialitate1 :selected').val() != 0) {
            for (var i = 0; i < $('.nt1').length; i++) {
                sum += parseInt($('.nt1').eq(i).val());
            }
            $('#media1').val(sum / 4);
        }
        sum = 0;
        if ($('#specialitate2 :selected').val() != 0) {
            for (var i = 0; i < $('.nt2').length; i++) {
                sum += parseInt($('.nt2').eq(i).val());
            }
            $('#media2').val(sum / 4);
        }
        sum = 0;
        if ($('#specialitate3 :selected').val() != 0) {
            for (var i = 0; i < $('.nt3').length; i++) {
                sum += parseInt($('.nt3').eq(i).val());
            }
            $('#media3').val(sum / 4);
        }
    });


});