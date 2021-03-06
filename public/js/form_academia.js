$(document).ready(function () {
    "use strict";

    /* áreas fojal*/
    $("#area").change(function () {
        var id_area = $("#area").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_puesto/" + id_area,
            dataType: 'json',
            type: "POST",
            data: id_area,
            contentType: false,
            processData: false,
            error: function () {

            },
            success: function (data) {
                $("#puesto").empty();
                $("#puesto").append('<option value="">Seleccionar puesto..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#puesto").append('<option value="' + data[i].id_puesto + '">' + data[i].nom_puesto + '</option>');

                }
            }
        });
    });



    /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular*/
    $(".MonitoreoEvalucion").change(function () {
        var puntualidad = $("#puntualidad").val();
        var dominiotema = $("#dominiotema").val();
        var exposicion = $("#exposicion").val();
        var ejemplos = $("#ejemplos").val();
        var ejercicios = $("#ejercicios").val();
        var empatia = $("#empatiagrupo").val();
        var fluidez = $("#fluidez").val();
        var todos_temas = $("#todostemas").val();
        var cap_resolucion = $("#capresolver").val();


        var Monitoreolista = [puntualidad, dominiotema, exposicion, ejemplos, ejercicios, empatia, fluidez, todos_temas, cap_resolucion];

        var malo = 0;
        var regular = 0;
        var bueno = 0;
        var excelente = 0;

        for (var contar = 0; contar < Monitoreolista.length; contar++) {
            if (Monitoreolista[contar] == 'Malo') {
                malo++;
            }

            if (Monitoreolista[contar] == 'Regular') {
                regular++;
            }
        }

        if (malo > 0 || regular > 0) {
            $("#monitoreoeva1").val('Monitorear');
        }
        else
        {
            $("#monitoreoeva1").val('Adecuado');
        }

        if (malo > 2 || regular > 2) {
            $("#monitoreoeva2").val('Monitorear');
        }
        else
        {
            $("#monitoreoeva2").val('Adecuado');
        }




    });

    /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular Logistica*/
    $(".MonitoreoLogistica").change(function () {
        var lugar = $("#lugar").val();
        var equipo = $("#equipo").val();

        var Monitoreolista = [lugar, equipo];

        var malo = 0;
        var regular = 0;

        for (var contar = 0; contar < Monitoreolista.length; contar++) {
            if (Monitoreolista[contar] == 'Malo') {
                malo++;
            }

            if (Monitoreolista[contar] == 'Regular') {
                regular++;
            }
        }

        if (malo > 0 || regular > 0) {
            $("#monitoreolog1").val('Monitorear');
        }
        else
        {
            $("#monitoreolog1").val('Adecuado');
        }

        if (malo > 1 || regular > 1) {
            $("#monitoreolog2").val('Monitorear');
        }
        else
        {
            $("#monitoreolog2").val('Adecuado');
        }

    });

        /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular*/
        $(".MonitoreoContenido").change(function () {
            var objetivoscurso = $("#objetivoscurso").val();
            var contenidocurso = $("#contenidocurso").val();
            var contenidocuaderno = $("#contenidocuaderno").val();
            var apoyo = $("#apoyo").val();



            var Monitoreolista = [objetivoscurso,contenidocurso,contenidocuaderno,apoyo];

            var malo = 0;
            var regular = 0;

            for (var contar = 0; contar < Monitoreolista.length; contar++) {
                if (Monitoreolista[contar] == 'Malo') {
                    malo++;
                }

                if (Monitoreolista[contar] == 'Regular') {
                    regular++;
                }
            }

            if (malo > 0 || regular > 0) {
                $("#monitoreocontenido1").val('Monitorear');
            }
            else
            {
                $("#monitoreocontenido1").val('Adecuado');
            }

            if (malo > 2 || regular > 2) {
                $("#monitoreocontenido2").val('Monitorear');
            }
            else
            {
                $("#monitoreocontenido2").val('Adecuado');
            }


    });

    /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular Organizacion*/
    $(".MonitoreoOrganizacion").change(function () {
        var registroorg = $("#registroorg").val();
        var atencionorg = $("#atencionorg").val();
        var registrocursos = $("#registrocursos").val();


        var Monitoreolista = [registroorg,atencionorg,registrocursos];

        var malo = 0;
        var regular = 0;

        for (var contar = 0; contar < Monitoreolista.length; contar++) {
            if (Monitoreolista[contar] == 'Malo') {
                malo++;
            }

            if (Monitoreolista[contar] == 'Regular') {
                regular++;
            }
        }

        if (malo > 0 || regular > 0) {
            $("#monitoreoorg1").val('Monitorear');
        }
        else
        {
            $("#monitoreoorg1").val('Adecuado');
        }

        if (malo > 2 || regular > 2) {
            $("#monitoreoorg2").val('Monitorear');
        }
        else
        {
            $("#monitoreoorg2").val('Adecuado');
        }


    });

    /*alertas*/
    $(document).ready (function(){
        $("#success-alert").hide();
        $("#myWish").click(function showAlert() {
            $("#success-alert").alert();
            window.setTimeout(function () {
                $("#success-alert").alert('close'); }, 2000);
        });
    });


    /*Mostrar modal*/

    $("#btnagregar_evaluacion").click(function () {

        var nombre = $("#nombre").val();
        var correo = $("#correo").val();
        var id_ejecutivo     = $("#id_ejecutivo").val();
        var telefono = $("#telefono").val();
        //var crup = $("#curp").val();
        var municipio = $("#municipio").val();


        if (nombre == "" || correo == "" || id_ejecutivo == "" || telefono == "" || id_ejecutivo =="" || municipio =="") {
            alert('Todos los campos son obligatorios');
            return false;

        } else {
            $("#modal_evaluacion").show();
            return true;
        }

    });


    $(".btneditar").click(function () {
        var id = $(this).attr('id');

        $("#id_capacitador").val(0);
        $("#editar").val(0);

        $.ajax({
            url: "cat_capacitadores/"+id+"/edit",
            dataType: 'json',
            data:{id:id},
            type: "GET",
            error: function () {
                console.log("ocurrio un error");

            },
            success: function (data) {
                $("#id_capacitador_edit").val(data.id_capacitador);
                $("#nom_cap_edit").val(data.nom_cap);
                $("#apellido_paterno_edit").val(data.apellido_paterno);
                $("#apellido_materno_edit").val(data.apellido_materno);
                $("#genero_edit").val(data.genero);
                $("#correo_edit").val(data.correo);
                $("#fechanacimiento_edit").val(data.fechanacimiento);
                $("#rfc_edit").val(data.rfc);
                $("#telefono_edit").val(data.telefono);

                console.log(data);
            }
        });

        $("#btn_actualizarCap").click();
        //$("#modal_capacitadoredit").hide();
    });

    /*municipio*/
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
    });

    /*colonia*/
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
    });

    /*Código Postal*/
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

    $("#act_empresarial").keyup(function(){
        var actividad_emp = $("#act_empresarial").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_act_empresarial/" + actividad_emp,
            dataType: 'json',
            type: "GET",
            data: actividad_emp,
            error: function () {
                console.log('entro a error');
            },
            success: function (data) {
                $.each( data, function( key, datito) {
                    console.log(datito);
                    $('.rows').append("<div value='"+datito.descripcion_sector+"'>"+datito.descripcion_sector+"</div>");
                });

            }
        });

    });


   /* $(".check").click(function() {
        console.log("entro");
        var actividad_emp = $(this).data("id");
        console.log(actividad_emp);
        //  console.log($(this).find(':checked').data("id"));
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_actividad/" + actividad_emp,
            dataType: 'json',
            type: "GET",
            data: actividad_emp,
            error: function () {
                console.log('entro a error');
            },
            success: function (data) {
                console.log(data);
                $("#codigo_clase").val(data.codigo_clase);
                $("#descripcion_clase").val(data.descripcion_clase);
                $("#codigo_sedeco").val(data.codigo_sedeco);
                $("#descripcion_sedeco").val(data.descripcion_sedeco);
            }
        });
    });*/

    /* $("#id_sian").click(function() {
         // in the handler, 'this' refers to the box clicked on
         var $actividad = $(this).attr("#data-id");
         //alert($(this).attr("#data-id"));
         console.log();
         if ($actividad.is(":checked")) {
             var group = "input:checkbox[name='" + $actividad.attr("name") + "']";
             $(group).prop("checked", false);
             $actividad.prop("checked", true);
         } else {
             $actividad.prop("checked", false);
         }
     });*/


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


