$(document).ready(function () {
    "use strict";

/*Codigo Postal*/
    $("#cp").keyup(function () {
        var $cp = $("#cp").val();
//console.log($cp);
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            url: "./get_cp/" + $cp,
            dataType: 'json',
            type: "GET",
            data: $cp,
            contentType: false,
            processData: false,
            error: function () {

            },
            success: function (data) {
                console.log(data);
               $("#colonia").empty();
                $("#estado").empty();
               $("#colonia").html('<option value="">Seleccionar colonia..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#colonia").append('<option value="' + data[i].id_codigocp + '">' + data[i].d_asenta + '</option>');
                    $("#estado").html('<option value="' + data[i].D_mnpio + ' selected">' + data[i].D_mnpio + '</option>');
                }
           }
        });
    });


    $("#fecha_nacimiento").change(function () {
        var fecha = $("#fecha_nacimiento").val();
        var dat = fecha.split('-');
        var today_date = new Date();
        var year_date = today_date.getFullYear();
        var year_nacimiento = dat[0];
        var month_nacimiento = dat[1];
        var day_nacimiento = dat[2];
        var edad = year_date - year_nacimiento;
        //console.log(edad);
            $("#edad").val(edad);
    });


    /*municipio
    $("#estado").change(function () {
        var estado = $("#estado").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_municipio/" + estado,
            dataType: 'json',
            type: "POST",
            data: estado,
            contentType: false,
            processData: false,
            error: function () {

            },
            success: function (data) {
                $("#municipio").empty();
                $("#municipio").append('<option value="">Seleccionar municipio..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#municipio").append('<option value="' + data[i].c_mnpio + '">' + data[i].D_mnpio + '</option>');
                }
            }
        });
    });*/

    /*colonia
    $("#municipio").change(function () {
        var colonia = $("#municipio").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_colonia/" + colonia,
            dataType: 'json',
            type: "POST",
            data: colonia,
            contentType: false,
            processData: false,
            error: function () {

            },
            success: function (data) {
                //console.log(data);
                $("#colonia").empty();
                $("#colonia").append('<option value="">Seleccionar colonia..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#colonia").append('<option value="' + data[i].id_codigocp + '">' + data[i].d_asenta + '</option>');

                }
            }
        });
    });*/

    /*Código Postal
    $("#colonia").change(function () {
        var cp = $("#colonia").val();
        //console.log(cp);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_cp/" + cp,
            dataType: 'json',
            type: "POST",
            data: cp,
            contentType: false,
            processData: false,
            error: function () {

            },
            success: function (data) {
                //console.log(data.d_codigo);
                $("#cp").val(data.d_codigo);
            }
        });
    });
*/

  function fr_calculaRFC( RFC, HOMOCLAVE, NOMBRE1, NOMBRE2, APAT, AMAT, FECHA, TIPO_EVENTO ) {

        var persona_tipo = jQuery('#' + TIPO_EVENTO).val();

        if(persona_tipo !== 'Persona moral'){

            if( jQuery('#'+RFC).val() == '' ) {
                var nombre_uno = jQuery('#'+NOMBRE1).val();
                var nombre_dos = jQuery('#'+NOMBRE2).val();
                var nombre     =  nombre_uno + ' ' + nombre_dos;
                var pat        = jQuery('#'+APAT).val();
                var mat        = jQuery('#'+AMAT).val();
                var fecha      = jQuery('#'+FECHA).val();

                if( mat == '' ) { mat = 'X'; }

                if( nombre_uno == '' ) {
                    alert('El primer nombre es necesario');
                    jQuery('#'+NOMBRE1).focus();
                } else if( pat == '' ) {
                    alert('El apellido paterno es necesario');
                    jQuery('#'+APAT).focus();
                } else if( mat == '' ) {
                    alert('El apellido materno es necesario');
                    jQuery('#'+AMAT).focus();
                } else if( fecha == '' ) {
                    alert('La fecha de nacimiento es necesaria');
                    jQuery('#'+FECHA).focus();
                } else {

                    var rfc = fr_CoreCalcularRFC(nombre, pat,  mat, fecha);
                    jQuery('#'+RFC).val(rfc);
                    jQuery.post(FR_PATH,{
                        fr_cmd:'getHomoclave',
                        Nombre: nombre,
                        Apat  :   pat,
                        Amat  :   mat,
                        Rfc   :    rfc,
                        PM    :     'true'
                    }, function(data) {
                        jQuery('#'+HOMOCLAVE).val(data);
                    },'text' );
                }
            }
        }
    }
/*
    function fr_calculaRFC_PM( RFC, HOMOCLAVE, NOMBRE1, FECHA ) {
        if( jQuery('#'+RFC).val() == '' ) {
            var nombre_uno = jQuery('#'+NOMBRE1).val();
            var fecha      = jQuery('#'+FECHA).val();

            if( nombre_uno == '' ) {
                alert('El primer nombre es necesario');
                jQuery('#'+NOMBRE1).focus();
            } else if( fecha == '' ) {
                alert('La fecha de nacimiento es necesaria');
                jQuery('#'+FECHA).focus();
            } else {

                jQuery.post(FR_PATH,{
                    fr_cmd: 'getRFC_PM',
                    Nombre: nombre_uno,
                    fecha : fecha,
                    PM    : 'true'
                }, function(data) {
                    var arr = data.split("|");
                    jQuery('#'+RFC).val(arr[0]);
                    jQuery('#'+HOMOCLAVE).val(arr[1]);
                },'text' );
            }
        }
    }




*/




    /*$('#calendar').fullCalendar({
         div: {
             left: 'prev,next today',
             center: 'title',
             right: 'month,basicWeek,basicDay,agendaWeek,agendaDay'
         },
         //defaultDate: ano+"-"+mes,
         navLinks: true,
         eventLimit: true,
         events: [        ]
     });*/

    });


