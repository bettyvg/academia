
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#btn_inscripcion").click(function () {

        var id_user = document.getElementById('id_user').value;
        var id_cursosonline = document.getElementById('id_cursosonline').value;
        //var id_cursosonline = $(this).attr('id_cursosonline');

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









