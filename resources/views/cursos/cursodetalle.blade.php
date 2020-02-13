@extends('main2')
@section('content')
    <?php
    $user = Session::get('usuario');
    ?>
    <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet"/>
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    
    <section>
        <div class="left-sidebar-pro">
            <nav id="" class="">
                <div class="sidebar-header">
                    <a href="index.html"><img class="main-logo" src="{{asset('img/logo/logo.png')}}" alt=""/></a>
                </div>
            </nav>
        </div>
        <br><br>
        @foreach($cursos as $curso)
            <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="mailbox-view-area mg-b-15">
                    <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
                        <video class="vjs-default-skin fm-video"
                               controls poster=''  id="fm-video" data-id='{{$curso->id_cursosOnline}}' >
                            <source src="{{asset('img/documentos/'.$curso->nombre_documento)}}" type='video/mp4'/>
                        </video>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="hpanel shadow-inner responsive-mg-b-30">
                                    <div class="panel-body">
                                        <h3 style="font-weight: bold">Descripción del curso</h3>
                                        <br>
                                        <h4 style="text-align: left">{{$curso->nombre_curso}}</h4>
                                        <h5 style="color: darkgrey; text-align: left">Tema: {{$curso->tema}}</h5>
                                        <h5 style="color: darkgrey; text-align: left">
                                            Profesor: {{$curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador }}</h5>
                                        <p id="duracion_video" style="color: darkgrey; text-align: left"></p>
                                        <p id="pausa_video" style="color: darkgrey; text-align: left"></p>
                                        <b>Aprenderas:</b><h5
                                                style="color:dimgray; text-align: left"> {{$curso->descripcion}}</h5>
                                        <h3 style="font-weight: bold">Recursos</h3>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                @if($curso->tipo_documento = 'DOCUMENTO')
                                                    @foreach($documentos as $documento)
                                                        <div class="panel-body file-body incon-ctn-view"
                                                             style="width: 20px">
                                                            <a href="{{asset('img/documentos/'.$documento->nombre_documento)}}"
                                                               target="_blank"><i
                                                                        class="fa fa-file-pdf-o text-info"></i></a>
                                                        </div>

                                                        <div class="panel-footer ft-pn" style="width: 80px">
                                                            <a href="{{asset('img/documentos/'.$documento->nombre_documento)}}"
                                                               target="_blank">Archvio
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                        <input type="hidden" name="id_cursosonline" id="id_cursosonline"  value="{{$curso->id_cursosonline}}">
                                        <input type="hidden" name="id_user" id="id_user" value="{{$user->id_usuario}}">
                                        <input type="hidden" name="id_stop_video" id="id_stop_video" value="{{$curso->stop_video}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <script src="https://vjs.zencdn.net/7.5.5/video.js"></script>
    </section>

