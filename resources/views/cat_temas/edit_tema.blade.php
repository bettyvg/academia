@extends('main')
@section('content')

    <section>

        <form action="{{route('editar_tema', $tema->id_tema)}}" method="POST">
            {{csrf_field()}}
            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificar tema</a></li>
                                </ul>
                                <br>
                                <input type="hidden" id="id_capacitador_edit" name="id_capacitador_edit">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Sesión</span>
                                        <input name="nom_cap_edit" id="numero_sesion"
                                               @if(isset($tema)) value="{{$tema->num_sesion}}"
                                               @endif type="text"
                                               required="true"
                                               class="form-control "
                                               placeholder="Sesión">
                                    </div>
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Tema</span>
                                        <input name="apellido_paterno_edit" id="tema"
                                               @if(isset($tema)) value="{{$tema->tema}}"
                                               @endif type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Tema">
                                    </div>

                                </div>
                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit"
                                                class="btn btn-info waves-effect waves-light">Guardar
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('temas')}}" type="button" class="btn btn-default pull-right"
                                           name="regresar">Cancelar</a>
                                    </div>
                                    <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

        @endsection

    </section>
