
$(document).ready(function () {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".ver_cursos").click(function () {
        var id = $(this).attr('id');
        //console.log('el id es:'+ id);
        $.ajax({
            url: "./get_cursoonline/" + id,
            dataType: 'json',
            type: "GET",
            error: function () {
                console.log("ocurrio un error");
            },
            success: function (data) {
                if(data[0].nombre_documento != null){
                    $("#imagen_curso_modal").attr('src', './img/documentos/'+data[0].nombre_documento);
                }else{
                    $("#imagen_curso_modal").attr('src', './img/documentos/default.jpeg');
                }
                $("#nombre_curso_modal").html(data[0].nombre_curso);
                $("#tema_modal").html(data[0].tema);
                $("#profesor_modal").html('<b>Profesor:</b> '+ data[0].nombre_capacitador +' '+data[0].apellido_paterno_capacitador +' '+data[0].apellido_materno_capacitador);
                $("#descripcion_modal").html('<b>Descripción:</b> '+ data[0].descripcion);
            }

        });

        var  modal_curso = document.getElementById('modal-curso');

        modal_curso.addEventListener('click', function () {
            var id_user = document.getElementById('id_user').value;
            var id_cursosonline = document.getElementById('id_cursosonline').value;
            //var id_cursosonline = $(this).attr('data-id');

            console.log(id_user);
            console.log(id_cursosonline);


            var data = new FormData();
            data.append('id_user', id_user);
            data.append('id_cursosonline', id_cursosonline);


            $.ajax({
                url: "./guardar_inscripcion",
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                error: function () {
                    console.log("ocurrio un error");
                },
                success: function (data) {

                }
            });
        });

        $(".btn_inscripcion").click(function () {

            var id_user = document.getElementById('id_user').value;
            var id_cursosonline = $(this).attr('data-id');

            console.log(id_user);
            console.log(id_cursosonline);

            var data = new FormData();
            data.append('id_user', id_user);
            data.append('id_cursosonline', id_cursosonline);


            $.ajax({
                url: "./guardar_inscripcion",
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                error: function () {
                    console.log("ocurrio un error");
                },
                success: function (data) {

                }
            });
        });


    });

    $(".editar_curso").click(function () {
        var id = $(this).attr('id');

        $("#id_cursosonline").val(0);
        $("#editar_online").val(0);
console.log(id);
        $.ajax({
            url: "./get_cursoonline/" + id,
            dataType: 'json',
            type: "GET",
            error: function () {
                console.log("ocurrio un error");
            },
            success: function (data) {
                console.log("entro los datos");
               console.log(data[0].id_cursosonline);
                $("#nombre_curso_online").val(data[0].nombre_curso);
                $("#categoria_online").val(data[0].id_categoria);
                $("#capacitador_online").val(data[0].id_capacitador);
                $("#descripcion_online").val(data[0].descripcion);
                $("#id_cursosonline").val(data[0].id_cursosonline);
                $("#editar_online").val(1);
            }
        });

        $("#agregar_curso").click();
    });


});










