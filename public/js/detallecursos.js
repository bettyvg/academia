$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var  frame = document.getElementById('fm-video');

    var video_container = document.getElementById('video_container'), duracion_video = document.getElementById('duracion_video');


    frame.addEventListener('loadedmetadata', function () {
        var duracion = frame.duration;

        duracion_video.innerHTML ="Duración curso: " + duracion.toFixed(0);
    });

    var stop_video = document.getElementById('id_stop_video').value;

   frame.currentTime = stop_video;



//    frame.load();

    frame.addEventListener('pause', function () {
       var k = frame.currentTime;
       var id_user = document.getElementById('id_user').value;
       var id_cursosonline = $(this).attr('data-id');

        var data = new FormData();
        data.append('id_user', id_user);
        data.append('id_cursosonline', id_cursosonline);
        data.append('minuto_curso', k);
		data.append('start', frame.played.start(0));
        data.append('pause', frame.played.end(0));
        data.append('terminado', frame.ended);

        $.ajax({
            url: "./guardar_minuto" ,
            type: "POST",
            data: data,
            processData: false,
            contentType: false,
            error: function () {
                console.log("ocurrio un error");
            },
            success: function(data){

            }

        });
    });
});









