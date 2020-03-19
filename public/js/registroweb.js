$(document).ready(function () {
    "use strict";
$("#regimen_fiscal").change(function () {

    var regimen_fiscal =  $("#regimen_fiscal").val();


    if(regimen_fiscal == 'Persona moral'){
        $("#datos_empresa").show();
    }

    if(regimen_fiscal == 'Persona física'){
        $("#datos_empresa").hide();
    }

})



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
               $("#municipio").empty();
               $("#region_pf").empty();
               $("#colonia").html('<option value="">Seleccionar colonia..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#colonia").append('<option value="' + data[i].d_asenta + '">' + data[i].d_asenta + '</option>');
                    $("#municipio").html('<option value="' + data[i].D_mnpio + ' " selected>' + data[i].D_mnpio + '</option>');
                    $("#region_pf").html('<option value="' + data[i].region + ' " selected>' + data[i].region + '</option>');
                }
           }
        });
    });

    /*Codigo Postal Empresa*/
    $("#cp_rep_empresa").keyup(function () {
        var $cp = $("#cp_rep_empresa").val();
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
                $("#colonia_empresa").empty();
                $("#municipio_empresa").empty();
                $("#region_pm").empty();
                $("#colonia_empresa").html('<option value="">Seleccionar colonia..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#colonia_empresa").append('<option value="' + data[i].d_asenta + '">' + data[i].d_asenta + '</option>');
                    $("#municipio_empresa").html('<option value="' + data[i].D_mnpio + ' " selected>' + data[i].D_mnpio + '</option>');
                    $("#region_pm").html('<option value="' + data[i].region + ' " selected>' + data[i].region + '</option>');
                }
            }
        });
    });

    /*region
    $("#cp").change(function () {
        var municipio = $("#municipio").val();
        console.log(municipio);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_region/" + municipio,
            dataType: 'json',
            type: "GET",
            data: municipio,
            contentType: false,
            processData: false,
            error: function () {

            },
            success: function (data) {
                $("#region_pm").empty();
                console.log(data[0]);
                $("#region_pm").append('<option value="">Seleccionar region..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#region_pm").html('<option value="' + data[i].region + ' " selected>' + data[i].region + '</option>');
                }
            }
        });
    });*/

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


