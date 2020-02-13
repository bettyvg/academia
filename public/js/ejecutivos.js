$(document).ready(function () {
    "use strict";
    /* Agregar identidad de accionistas */

    $("#guardar_ejecutivos").click(function () {

        var no_filas = $("#tabla_ejecutivos tr").length;
        var ejecutivos = new FormData();

            ejecutivos.append('nombre_ejecutivo', $("#nombre_ejecutivo").val());
            ejecutivos.append('apellido_paterno', $("#apellido_paterno").val());
            ejecutivos.append('apellido_materno', $("#apellido_materno").val());

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "../ejecutivos",
                type: "POST",
                data: ejecutivos,
                contentType: false,
                processData: false,

                success: function (data) {
                    $("#tabla_ejecutivos > tbody:last-child").append(
                        "<tr id='tr'>" +
                        "<td>" + "<input type='checkbox'></intput>" + "</td>" +
                        "<td>" + data.nombre_ejecutivo + "</td>" +
                        "<td>" + data.apellido_paterno + "</td>" +
                        "<td>" + data.apellido_materno + "</td>" +
                        "<td>" + "<button type='button' data-id='" + data.id_ejecutivo + "' class='pd-setting-ed'><i class='fa fa-pencil-square-o'></i></button> " +
                        "<button type='button' data-id='" + data.id_ejecutivo + "' class='btn-delete pd-setting-ed btn-delete'><i class='fa fa-fw fa-trash-o'></i></button></td>"
                    );
                }
            });


    });

});