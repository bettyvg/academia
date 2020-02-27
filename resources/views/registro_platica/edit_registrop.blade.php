@extends('main')
@section('content')

    <section>
        @if(isset($alert))
            <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
                <div class="col-12">
                    <div  class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{$alert->message}}
                    </div>
                </div>
                @endif
        <form action="{{route('edit_registrop.update', $detalle_registrop->id_registro)}}" method="post" class="form-horizontal">

             <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
             <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica">Editar Registro</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad add-professors">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Nombre</span>
                                                                    <input name="nombre_edit" id="nombre_edit" type="text"
                                                                           class="form-control" @if(isset($detalle_registrop)) value="{{$detalle_registrop->nombre}}"@endif
                                                                           placeholder="Nombre"
                                                                           value="{{old('nombre')}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Apellido paterno</span>
                                                                    <input name="apellido_paterno_edit" id="apellido_paterno_edit" type="text"
                                                                           class="form-control" @if(isset($detalle_registrop)) value="{{$detalle_registrop->apellido_paterno}}"@endif
                                                                           placeholder="Apellido paterno"
                                                                           value="{{old('apellido_paterno')}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Apellido materno</span>
                                                                    <input name="apellido_materno_edit" id="apellido_materno_edit" type="text"
                                                                           class="form-control" @if(isset($detalle_registrop)) value="{{$detalle_registrop->apellido_materno}}"@endif
                                                                           placeholder="Apellido materno"
                                                                           value="{{old('apellido_materno')}}">
                                                                </div>
                                                                <div class="form-group " >
                                                                    <span class="spantext" style="color: darkgrey;">Genero</span>
                                                                    <select name="genero_edit" id="genero_edit" class="form-control" value="{{old('genero')}}">
                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                                        <option value="Masculino" @if(isset($detalle_registrop) && $detalle_registrop->genero == "Masculino")  selected="selected"@endif @if(old('genero')=='Masculino') selected="selected"@endif>Masculino</option>
                                                                        <option value="Femenino" @if(isset($detalle_registrop) && $detalle_registrop->genero == "Femenino")  selected="selected"@endif @if(old('genero')=='Femenino') selected="selected"@endif>Femenino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Pais de nacimiento</span>
                                                                    <select class="form-control select2"  name="id" id="id">
                                                                        <option value="146" selected="" >México</option>
                                                                        @foreach($cat_pais as $pais)
                                                                            <option value="{{($pais->id)}}"
                                                                                    @if(isset($detalle_registrop) && $detalle_registrop->id == $pais->id)  selected="selected" value="{{$detalle_registrop->id}}"@endif
                                                                                    @if(old('id')==$pais->id) selected="selected"@endif>{{($pais->nombre)}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group" >
                                                                    <span class="spantext" style="color: darkgrey;">Estado de nacimiento</span>
                                                                    <select  class="form-control select2"  name="cve_ent" id="cve_ent">
                                                                        <option value="none" selected="" disabled="">Estado de nacimiento</option>
                                                                        @foreach($cat_entidades as $entidades)
                                                                            <option value="{{($entidades->cve_ent)}}"
                                                                                    @if(isset($detalle_registrop) && $detalle_registrop->cve_ent == $entidades->cve_ent) selected="selected" value="{{($detalle_registrop->cve_ent)}}" @endif
                                                                                    @if(old('cve_compuesta_ent_mun')==$entidades->cve_ent) selected="selected"@endif>{{($entidades->nom_ent)}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Municipio de donde nos visita</span>
                                                                    <select  class="form-control select2"  name="cve_compuesta_ent_mun" id="cve_compuesta_ent_mun">
                                                                        <option value="none" selected="" disabled="">Municipio de donde nos visita</option>
                                                                        @foreach($cat_municipios as $municipios)
                                                                            <option value="{{($municipios->cve_compuesta_ent_mun)}}"
                                                                                    @if(isset($detalle_registrop) && $detalle_registrop->cve_compuesta_ent_mun == $municipios->cve_compuesta_ent_mun) selected="selected" value="{{$detalle_registrop->cve_compuesta_ent_mun}}" @endif
                                                                                    @if(old('cve_compuesta_ent_mun')==$municipios->cve_compuesta_ent_mun) selected="selected"@endif>{{($municipios->nom_mun)}}</option>

                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group" >
                                                                    <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                                                    <input name="fecha_nacimiento_edit" id="fecha_nacimiento_edit" type="date"
                                                                           class="form-control" @if(isset($detalle_registrop)) value="{{$detalle_registrop->fecha_nacimiento}}"@endif
                                                                           value="{{old('fecha_nacimiento')}}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Correo</span>
                                                                    <input name="correo_edit" id="correo_edit" type="email"
                                                                           class="form-control" @if(isset($detalle_registrop)) value="{{$detalle_registrop->correo}}"@endif
                                                                           placeholder="Correo"
                                                                           value="{{old('correo')}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Teléfono</span>
                                                                    <input name="telefono_edit" id="telefono_edit" type="text"
                                                                           onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                                           @if(isset($detalle_registrop)) value="{{$detalle_registrop->telefono}}"@endif
                                                                           class="form-control"
                                                                           placeholder="Teléfono"
                                                                           value="{{old('telefono')}}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Escolaridad</span>
                                                                    <select  class="form-control select2"  name="id_escolaridad" id="id_escolaridad">
                                                                        <option value="none" selected="" disabled="">Escolaridad</option>
                                                                        @foreach($cat_escolaridad as $escolaridad)
                                                                            <option value="{{$escolaridad->id_escolaridad}}" @if(isset($detalle_registrop) && $detalle_registrop->id_escolaridad == $escolaridad->id_escolaridad) selected value="{{$detalle_registrop->id_escolaridad}}"@endif>{{$escolaridad->nivel." ".$escolaridad->estatus}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Ocupación</span>
                                                                    <input name="ocupacion_edit" id="ocupacion_edit" type="text"
                                                                           @if(isset($detalle_registrop))  value="{{$detalle_registrop->ocupacion}}" @endif
                                                                           class="form-control"
                                                                           placeholder="Ocupación"
                                                                           value="{{old('ocupacion')}}">
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <br>
                                                                    <button type="submit"
                                                                            class="btn btn-primary waves-effect waves-light" id="guardar">
                                                                        Guardar
                                                                    </button>
                                                                    <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
        <br>

    </section>
@endsection
