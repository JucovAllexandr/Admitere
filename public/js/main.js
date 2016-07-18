
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
    function predmet($select) {
        
        var value = $($select+' :selected').val();
        var inf_mat=new Array(3,4,5);
        var eco = [7];
        var cor = [6,9,10];
        var asist = [1,2,8];
       $('#lim_instruire').prop("disabled",false);

        if($.inArray(parseInt(value), inf_mat)!= -1){
            // $($pd1).text('Limba staina');
            // $($pd2).text('Matematica');
            // $($pd3).text('Informatica');
            $('#lim_straina').prop("disabled",false);
            $('#matem').prop("disabled",false);
            $('#informatica').prop("disabled",false);
        }
        if($.inArray(parseInt(value), eco)!= -1){
            // $($pd1).text('Biologie');
            // $($pd2).text('Chimie');
            // $($pd3).text('Matematica');
            $('#biologia').prop("disabled",false);
            $('#chimia').prop("disabled",false);
            $('#matem').prop("disabled",false);
        }
        if($.inArray(parseInt(value), cor)!= -1){
            // $($pd1).text('Limba staina');
            // $($pd2).text('Istoria');
            // $($pd3).text('Proba de aptitudini');
            $('#lim_straina').prop("disabled",false);
            $('#istoria').prop("disabled",false);
            $('#aptitudini').prop("disabled",false);
        }
        if($.inArray(parseInt(value), asist)!= -1){
            // $($pd1).text('Limba staina');
            // $($pd2).text('Matematica');
            // $($pd3).text('Istoria');
            $('#lim_straina').prop("disabled",false);
            $('#matem').prop("disabled",false);
            $('#istoria').prop("disabled",false);
        }
    }
    function null_options () {
        $('#lim_instruire').prop("disabled",true);
        $('#lim_straina').prop("disabled",true);
        $('#matem').prop("disabled",true);
        $('#informatica').prop("disabled",true);
        $('#istoria').prop("disabled",true);
        $('#aptitudini').prop("disabled",true);
        $('#biologia').prop("disabled",true);
        $('#chimia').prop("disabled",true);
    }

    // null_options('Selectati Optiunea 1','#opt1p1','#opt1p2','#opt1p3');
    // null_options('Selectati Optiunea 2','#opt2p1','#opt2p2','#opt2p3');
    // null_options('Selectati Optiunea 3','#opt3p1','#opt3p2','#opt3p3');

    // TogleEnable('#specialitate1', '.opt1');
    // TogleEnable('#specialitate2', '.opt2');
    // TogleEnable('#specialitate3', '.opt3');

    predmet('#specialitate1');
    predmet('#specialitate2');
    predmet('#specialitate3');

    $('#specialitate1').change(function () {
        var value = $('#specialitate1').val();
        if(value==0)
            null_options();
        null_options();
        predmet('#specialitate1');
        predmet('#specialitate2');
        predmet('#specialitate3');
       // TogleEnable('#specialitate1', '.opt1');
    });
    $('#specialitate2').change(function () {
        var value = $('#specialitate2').val();
        if(value==0)
            null_options();

        null_options();
        predmet('#specialitate1');
        predmet('#specialitate2');
        predmet('#specialitate3');
        //TogleEnable('#specialitate2', '.opt2');
    });
    $('#specialitate3').change(function () {
        var value = $('#specialitate3').val();
        if(value==0)
            null_options();

        null_options();
        predmet('#specialitate1');
        predmet('#specialitate2');
        predmet('#specialitate3');
        //TogleEnable('#specialitate3', '.opt3');
    });

    function med_inf($not1, $not2, $not3, $not4, $med_exam_abs, $est)
    {
        // console.log($not1);
        // console.log($not2);
        // console.log($not3);
        // console.log($not4);
        // console.log($med_exam_abs);

        if ($est) {
            $media = (($not1 + $not2 + $not3 + $not4) / 4) * 0.4;
            $media += $med_exam_abs * 0.6;
        } else {
            $media = ((parseInt($not1) + parseInt($not2) + parseInt($not3) + parseInt($not4)) / 4) * 0.6;
            $media += parseFloat($med_exam_abs) * 0.4

        }
        return $media;
    }

    function med_coreg($not1, $not2, $not3, $aptitudini, $med_exam_abs, $est)
    {

        if ($est) {
            $media = (($not1 + $not2 + $not3 ) / 3) * 0.2;
            $media += $med_exam_abs * 0.3;
        } else {
            $media = (($not1 + $not2 + $not3 ) / 3) * 0.3;
            $media += $med_exam_abs * 0.2;
        }
        return $media;
    }

    $('#calc').click(function () {
        var sum = 0;
        var  lim_instruire = parseInt($('#lim_instruire').val());
        var lim_straina = parseInt($('#lim_straina').val());
        var matem = parseInt($('#matem').val());
        var informatica = parseInt($('#informatica').val());
        var istoria = parseInt($('#istoria').val());
        var aptitudini = parseInt($('#aptitudini').val());
        var biologia = parseInt($('#biologia').val());
        var chimia = parseInt($('#chimia').val());
        var med_ex_ab = parseFloat($('#med_ex_ab').val());
        var est = $('#copil_est').is(':checked');
        if ($('#specialitate1 :selected').val() != 0) {
            var sp = $('#specialitate1 :selected').val();
            if ( sp == 3 || sp == 4 || sp == 5) {
                $media1 = med_inf(lim_instruire,lim_straina,matem,informatica,med_ex_ab,est);
            }
            if (sp == 7) {
                $media1 = med_inf(lim_instruire,biologia,matem,chimia,med_ex_ab,est);
            }
            if (sp == 6 || sp == 9 || sp == 10) {
                $media1 = med_coreg(lim_instruire,lim_straina,istoria,med_ex_ab,est);
            }
            if (sp == 1 || sp == 2 || sp == 8 ) {
                $media1 = med_inf(lim_instruire,lim_straina,matem,istoria,med_ex_ab,est);
            }
            $('#media1').val($media1);
            $('#md1').text("Media "+$('#specialitate1 :selected').text());
        }
        sum = 0;
        if ($('#specialitate2 :selected').val() != 0) {
            var sp = $('#specialitate2 :selected').val();
            if ( sp == 3 || sp == 4 || sp == 5) {
                $media1 = med_inf(lim_instruire,lim_straina,matem,informatica,med_ex_ab,est);
            }
            if (sp == 7) {
                $media1 = med_inf(lim_instruire,biologia,matem,chimia,med_ex_ab,est);
            }
            if (sp == 6 || sp == 9 || sp == 10) {
                $media1 = med_coreg(lim_instruire,lim_straina,istoria,med_ex_ab,est);
            }
            if (sp == 1 || sp == 2 || sp == 8) {
                $media1 = med_inf(lim_instruire,lim_straina,matem,istoria,med_ex_ab,est);
            }
            $('#media2').val($media1);
            $('#md2').text("Media "+$('#specialitate2 :selected').text());
        }
        sum = 0;
        if ($('#specialitate3 :selected').val() != 0) {
            var sp = $('#specialitate3 :selected').val();
            if (sp == 3 || sp == 4 || sp == 5) {
                $media1 = med_inf(lim_instruire,lim_straina,matem,informatica,med_ex_ab,est);
            }
            if (sp == 7) {
                $media1 = med_inf(lim_instruire,biologia,matem,chimia,med_ex_ab,est);
            }
            if (sp == 6 || sp == 9 || sp == 10) {
                $media1 = med_coreg(lim_instruire,lim_straina,istoria,med_ex_ab,est);
            }
            if (sp == 1 || sp == 2 || sp == 8) {
                $media1 = med_inf(lim_instruire,lim_straina,matem,istoria,med_ex_ab,est);
            }
            $('#media3').val($media1);
            $('#md3').text("Media "+$('#specialitate3 :selected').text());
        }
    });


});