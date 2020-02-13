@extends('main')
@section('content')

    <section>

        <form action="{{route('editar_perfil', $perfiles->id_perfil)}}" method="POST">
            {{csrf_field()}}
            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificar perfil</a></li>
                                </ul>
                                <br>

                                <div class="row">
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Perfil</span>
                                        <input name="nom_perfil_edit" id="nom_perfil_edit"
                                               @if(isset($perfiles)) value="{{$perfiles->nom_perfil}}"
                                               @endif type="text"
                                               required="true"
                                               class="form-control "
                                               placeholder="Sesión">
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
                                        <a href="{{route('perfiles')}}" type="button" class="btn btn-default pull-right"
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
