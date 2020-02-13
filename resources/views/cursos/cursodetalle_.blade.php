@extends('main2')
@section('content')
    <script src="{{asset('js/cursos_online.js')}}"></script>
    <?php
    $user = Session::get('usuario');
    ?>
    <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <section>
        <div class="left-sidebar-pro">
            <nav id="" class="">
                <div class="sidebar-header">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </nav>
        </div>

        <div class="single-pro-review-area mt-t-30 mg-b-15" >
        <div class="mailbox-view-area mg-b-15">

            <div class="col-md-8 col-md-8 col-sm-8 col-xs-12" >

                <video id="" class="video-js vjs-default-skin" width="640px" height="267px"
                       controls preload="none" poster=''
                       data-setup=''>
                    <source src="./img/documentos/201911252345325ddc679ce1c639.50465733.mp4" type='video/mp4' />
                    <source src="" type='video/webm' />
                </video>


        </div>

            </div>



        </div>
            <script src="https://vjs.zencdn.net/7.5.5/video.js"></script>

    </section>
<!--<script>
    $('.fm-video').change(function(){
        $('#reproduccion').html($('#fm-video').find('fm-video').get(0).load());
        $('#reproduccion').html($('#fm-video').find('fm-video').get(0).play());
    })
    setInterval(function(){
        $('#reproduccion').html($('#container-video').find('fm-video').get(0).currentTime);
        console.log(reproduccion);
    },500)
</script>-->
