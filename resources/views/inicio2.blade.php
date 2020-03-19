@extends('main2')
@section('content')
    <link rel="stylesheet" href="{{asset('estiloscard.css')}}">
    <script src="{{asset('./js/inscripcioncursos.js')}}"></script>
    <script src="{{asset('./js/examen/site.js')}}"></script>
    <?php
    $user = Session::get('usuario');
    ?>
    <section>
       <div class="analytics-sparkle-area" >
            <div class="container-fluid">
                <br>
                <br>
                <div class="row" style="margin: 30px 0px 0px 0px">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                @if(isset($inscritos_municipio))
                                    @foreach($inscritos_municipio as $total)
                                        <h5>Inscritos en tu municipio</h5>
                                        <br>
                                        <h2><span class="tuition-fees">Total Inscritos en {{$total->nom_mun}}</span>
                                            <span class="counter">{{$total->total}}</span>
                                        </h2>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Gestiona tu credito</h5>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Califica a tu capacitador</h5>
                                <br>
                                <div class="payment-adress">
                                    <br>

                                    <input type="hidden" name="_token"
                                           id="csrf-token" value="{{csrf_token()}}">
                                </div>
                                    <br>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Indice de empleo en tu municipio</h5>
                                <h2><span class="counter">90</span> <span class="tuition-fees">....</span>
                                </h2>
                                <span class="text-info">90%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:90%;"><span class="sr-only">30% Completados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 10px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st" id="tabs">
                            <ul id="myTabedu1" class="tab-review-design">
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="agregar">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone" class="pro-ad addcoursepro">
                                                    <h3>Todos los cursos</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<div class="row container">
                                <?php $contador = 0; ?>
                                @foreach($cursos as $curso)
                                    @if ($contador == 4)
                                <div class="row  mg-b-15">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 container">
                                    <div class="card" id="{{$curso->id_cursosonline}}">
                                    <a href="#">
                                        @if($curso->nombre_documento != null )
                                            <img src="{{asset('img/documentos/'.$curso->nombre_documento)}}"
                                                 alt=""></a>
                                    @else
                                        <img src="{{asset('img/documentos/default.jpeg')}}"
                                             alt=""></a>
                                    @endif
                                        <br><br>
                                    <h4 style="text-align: left; padding-left: 20px">{{$curso->nombre_curso}}</h4>
                                        <h5 style="color: darkgrey; text-align: left; padding-left: 20px">{{$curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador }}</h5>
                                        <button type="button" class="button-default cart-btn ver_cursos" id="{{$curso->id_cursosonline}}">Ver detalles</button>
                                    </div>
                                    </div>
                                    @else
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="card" id="{{$curso->id_cursosonline}}" >
                                                <a href="{{url('cursodetalle', ['id_cursonline' => $curso->id_cursosonline])}}">
                                                    @if($curso->nombre_documento != null)
                                                        <img src="{{asset('img/documentos/'.$curso->nombre_documento)}}"
                                                             alt=""></a>
                                                @else
                                                    <img src="{{asset('img/documentos/default.jpeg')}}"
                                                         alt=""></a>
                                                @endif
                                                <br><br>

                                                <h4 style="text-align: center">{{$curso->nombre_curso}}</h4>
                                                <h5 style="color: darkgrey; text-align: center; padding-left: 10px">{{$curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador }}</h5>
                                                    <a href="{{url('cursodetalle', ['id_cursonline' => $curso->id_cursosonline])}}" type="button" class="btn2 btn-primary2 btn_inscripcion" data-id="{{$curso->id_cursosonline}}">Ver video</a>
                                                <button type="button" class="button-default cart-btn ver_cursos btn btn-secondary" id="{{$curso->id_cursosonline}}" data-target="#modal-curso"
                                                        data-toggle="modal">Acerca del curso</button>


                                            </div>
                                            </div>

                                        <?php
                                        $contador++;
                                        IF ($contador == 4) {
                                            echo '</div>';
                                            $contador = 0;
                                        }
                                        ?>
                                    @endif


                            @endforeach

                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="{{asset('js/cursos_online.js')}}"></script>
                <script src="{{asset('js/notify.min.js')}}"></script>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" name="modal-curso" id="modal-curso">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: whiteSmoke;" >
                        <h2 class="modal-title">Curso</h2>
                    </div>
                    <div class="modal-body" style="height: 230px">
                        <div class="box-body" >
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="imagen_curso_modal" src="" class="img-fluid" width="60%"></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h1 id="nombre_curso_modal"></h1>
                                <h5 id="tema_modal"></h5>
                                <br>
                                <p id="profesor_modal"></p>
                                <p id="descripcion_modal"></p>
                            </div>
                            <input type="hidden" name="_token" id="id_user" value ="{{$user->id_usuario}}" >
                            @foreach($cursos as $curso)
                            <input type="hidden" name="_token" id="id_cursosonline" value="">
                            @endforeach
                        </div>
                    </div>

                    <div class="modal-footer" style="background-color: whiteSmoke;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id='btn_cerrar'>Cerrar</button>

                    </div>
                </div>
            </div>
        </div>





    </section>
@endsection
