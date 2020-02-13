@extends('main')
@section('content')

    <section>

        <form action="{{route('editar_instituciones', $instituciones->id_institucion)}}" method="POST">
            {{csrf_field()}}
            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificar institución</a></li>
                                </ul>
                                <br>

                                <div class="row">
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Nombre de Institución</span>
                                        <input name="nombre_inst_edit" id="nombre_inst_edit"
                                               @if(isset($instituciones)) value="{{$instituciones->nombre_inst}}"
                                               @endif type="text"
                                               required="true"
                                               class="form-control "
                                               placeholder="Nombre Institución">
                                    </div>
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Dirección</span>
                                        <input name="direccion_edit" id="direccion_edit"
                                               @if(isset($instituciones)) value="{{$instituciones->direccion}}"
                                               @endif type="text"                                       
                                               class="form-control "
                                               placeholder="Dirección">
                                    </div>
            						<div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Contacto</span>
                                        <input name="contacto_edit" id="contacto_edit"
                                               @if(isset($instituciones)) value="{{$instituciones->contacto}}"
                                               @endif type="text"
                                               class="form-control "
                                               placeholder="Contacto">
                                    </div>
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Teléfono</span>
                                        <input name="telefono_edit" id="telefono_edit"
                                               @if(isset($instituciones)) value="{{$instituciones->telefono}}"
                                               @endif type="number"                                             
                                               class="form-control "
                                               placeholder="Teléfono">
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
                                        <a href="{{route('instituciones')}}" type="button" class="btn btn-default pull-right"
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
