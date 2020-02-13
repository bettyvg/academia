$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".fechas").change(function () {
       var ffin = $("#fecha_fin").val();
       var hfin = $("#horario_fin").val();
       var finicio = $("#fecha_inicio").val();
       var hinicio = $("#horario_inicio").val();
       var fecha_inicio = Date.parse(finicio+' '+hinicio);
       var fecha_fin = Date.parse(ffin+' '+hfin);

       if(ffin !== '' && finicio !== '' && hfin !== '' && hinicio !== ''){

           if(fecha_inicio < fecha_fin){
               $("#enviar").attr('disabled', false);
           }else{
               $.notify({
                   message: 'ERROR: La fecha de inicio es mayor a la fecha final.'
               }, {
                   type: 'danger'
               });
               $("#enviar").attr('disabled', true);
           }

       }

    });
    /*
    Dropzone.options.form_cursos = {
        maxFilesize: 1,
        autoProcessQueue: false,
        acceptedFiles: ".png,.jpg,.jpeg",
        url: '/upload/document',
        init:function(){
            var submitButton = document.querySelector("#enviar");
            var self = this;
            // config
            submitButton.addEventListener("click", function() {
                self.processQueue(); // Tell Dropzone to process all queued files.
            });

            this.on('sending', function(file, xhr, formData) {
                // Append all form inputs to the formData Dropzone will POST
                var data = $('#form_cursos').serializeArray();
                $.each(data, function(key, el) {
                    formData.append(el.name, el.value);
                });
            });
        }
    };*/

    $(".ver_cursos").click(function () {
        var id = $(this).attr('id');

        $.ajax({
            url: "./get_curso/" + id,
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
                if (data[0].direccion == null){ data[0].direccion = ''}
                $("#nombre_curso_modal").html(data[0].nom_curso);
                $("#tema_modal").html(data[0].tema);
                $("#fecha_hora_modal").html('<b>Fecha de inicio: </b>'+ data[0].fecha_inicio +'   <b>Hora: </b>'+ data[0].hora_inicio);
                $("#profesor_modal").html('<b>Profesor:</b> '+ data[0].nombre_capacitador +' '+data[0].apellido_paterno_capacitador +' '+data[0].apellido_materno_capacitador);
                $("#ubicacion_modal").html('<b>Ubicación:</b> '+data[0].nombre_inst+', '+data[0].direccion);
                $("#descripcion_modal").html('<b>Descripción:</b> '+ data[0].descripcion);
            }

        });
    });

    $(".editar_curso").click(function () {
        var id = $(this).attr('id');

        $("#id_curso").val(0);
        $("#editar").val(0);

        $.ajax({
            url: "./get_curso/" + id,
            dataType: 'json',
            type: "GET",
            error: function () {
                console.log("ocurrio un error");
            },
            success: function (data) {
                $("#nombre_curso").val(data[0].nom_curso);
                $("#categoria").val(data[0].id_tema);
                $("#fecha_inicio").val(data[0].fecha_inicio);
                $("#horario_inicio").val(data[0].hora_inicio);
                $("#fecha_fin").val(data[0].fecha_fin);
                $("#horario_fin").val(data[0].hora_fin);
                $("#capacitador").val(data[0].id_capacitador);
                $("#ubicacion").val(data[0].id_institucion);
                $("#descripcion").val(data[0].descripcion);
                $("#id_curso").val(data[0].id_curso);
                $("#editar").val(1);
            }
        });

        $("#agregar_curso").click();
    });
});









