@extends('main')
@section('content')

    <section>
        <form action="{{route('cat_capacitadores.update', $capacitador->id_capacitador)}}" method="POST">
            {{method_field('PATCH')}}
            {{csrf_field()}}

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificar capacitador</a></li>
                                </ul>
                                <br>
                                <input type="hidden" id="id_capacitador_edit" name="id_capacitador_edit">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Nombre</span>
                                        <input name="nom_cap_edit" id="nom_cap_edit"
                                               @if(isset($capacitador)) value="{{$capacitador->nom_cap}}"
                                               @endif type="text"
                                               required="true"
                                               class="form-control "
                                               placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-4">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Apellido Paterno</span>
                                        <input name="apellido_paterno_edit" id="apellido_paterno_edit"
                                               @if(isset($capacitador)) value="{{$capacitador->apellido_paterno}}"
                                               @endif type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Apellido paterno">
                                    </div>
                                    <div class="col-sm-4">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Apellido Materno</span>
                                        <input name="apellido_materno_edit" id="apellido_materno_edit"
                                               @if(isset($capacitador)) value="{{$capacitador->apellido_materno}}"
                                               @endif type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Apellido materno">
                                    </div>

                                    <div class="col-sm-4 ">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Genero</span>
                                        <select name="genero_edit" id="genero_edit" class="form-control">
                                            <option value="none" selected="" disabled="" style="color: darkgrey;">
                                                Genero
                                            </option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Email</span>
                                        <input name="correo_edit" id="correo_edit" type="email"
                                               class="form-control"
                                               @if(isset($capacitador)) value="{{$capacitador->correo}}"
                                               @endif
                                               placeholder="Correo">
                                    </div>

                                    <div class="col-sm-4">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                        <input name="fechanacimiento_edit" id="fechanacimiento_edit" type="date"
                                               @if(isset($capacitador)) value="{{$capacitador->fecha_nacimiento}}"
                                               @endif
                                               class="form-control"
                                        >
                                    </div>
                                    <div class="col-sm-6">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">RFC</span>
                                        <input name="rfc_edit" id="rfc_edit" type="text"
                                               class="form-control"
                                               @if(isset($capacitador)) value="{{$capacitador->rfc}}"
                                               @endif
                                               placeholder="RFC">
                                    </div>

                                    <div class="col-sm-6">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Teléfono</span>
                                        <input name="telefono_edit" id="telefono_edit" type="text"
                                               @if(isset($capacitador)) value="{{$capacitador->telefono}}"
                                               @endif
                                               class="form-control"
                                               placeholder="Teléfono">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit"
                                                class="btn btn-info waves-effect waves-light">Guardar
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('cat_capacitadores.index')}}" type="button"
                                           class="btn btn-default pull-right" name="regresar">Cancelar</a>
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
