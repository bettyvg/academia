$(document).ready(function () {
    "use strict";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /* áreas fojal*/
    $("#area").change(function () {
        var id_area = $("#area").val();

        $.ajax({
            url: "./get_puesto/"+id_area,
            type: "get",
            contentType: false,
            processData: false,
            error: function () {
                $.notify({
                    message: 'Ocurrio un error al cargar datos contacte al administrador.'
                }, {
                    type: 'danger'
                });
            },
            success: function (data) {
                $("#puesto").empty();
                $("#puesto").append('<option value="">Seleccionar puesto..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#puesto").append('<option value="' + data[i].id_puesto + '">' + data[i].nombre + '</option>');


                }
            }

        });

    });


    $(document).ready(function () {
        setInterval(
            function () {
                $('#modificacionusuarios').load('usuarios')
            },2000
        )



    })


});
