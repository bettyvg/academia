@extends('main')
@section('content')

    <section>

<form action="{{route('editar_ejecutivos.update', $ejecutivo->id_ejecutivo)}}" method="Post" class="form-horizontal">

    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
        <div class="container-fluid " style="margin: 40px 0px 0px 0px">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Modificar ejecutivo</a></li>
                        </ul>
<br>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <label for="nombreejecutivo" class="col-sm-4">Nombre</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" @if(isset($ejecutivo)) value="{{$ejecutivo->nombre_ejecutivo}}"
                                                                           @endif name="nombre_ejecutivo_edit" id="nombre_ejecutivo_edit" required="true">

                                                                </div>
                                                                <br><br>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="AccionistaNombre" class="col-sm-4">Apellido paterno</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" @if(isset($ejecutivo)) value="{{$ejecutivo->apellido_paterno}}"
                                                                           @endif name="apellido_paterno_edit" id="apellido_paterno_edit" required="true">
                                                                </div>
                                                                <br><br>
                                                            </div>
                                                            <div class="form-group">

                                                                <label for="AccionistaNombre" class="col-sm-4">Apellido materno</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" @if(isset($ejecutivo)) value="{{$ejecutivo->apellido_materno}}"
                                                                           @endif name="apellido_materno_edit" id="apellido_materno_edit" required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" name="estatus" id="estatus" value="activo">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <button type="submit"
                                                                            class="btn btn-info waves-effect waves-light">Guardar
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="{{route('ejecutivos')}}" type="button" class="btn btn-default pull-right" name="regresar">Cancelar</a>
                                                                </div>
                                                                <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    @endsection

    </section>
