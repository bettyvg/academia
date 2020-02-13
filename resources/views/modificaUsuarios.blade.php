@extends('main')
@section('content')
    <section>
        <form action="ModificaUsuarios" method="put" class="form-horizontal">

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificación de usuario</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad addcoursepro">
                                                        <form
                                                                class="dropzone dropzone-custom needsclick addcourse"
                                                                id="formulario-usuarios">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="nombre" id="nombre" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->nombre}}"
                                                                               @endif

                                                                               class="form-control"
                                                                               placeholder="Nombre"
                                                                               value="{{old('nombre')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="apat" id="apat" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->apellido_paterno}}"
                                                                               @endif

                                                                               class="form-control"
                                                                               placeholder="Apellido materno"
                                                                               value="{{old('apat')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="amat" id="amat" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->apellido_materno}}"
                                                                               @endif

                                                                               class="form-control"
                                                                               placeholder="Apellido materno"
                                                                               value="{{old('amat')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select required='true' class="form-control"
                                                                                name="area"
                                                                                id="area" value="{{old('area')}}">
                                                                            <option value="">Área a la que pertenece..
                                                                            </option>
                                                                            @foreach($cat_direcciones as $direccion)
                                                                                <option value="{{$direccion->id_direccion}}">{{$direccion->nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <select class="form-control" name="puesto"
                                                                                id="puesto">
                                                                            <option value="">Seleccione puesto..
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                </div>


                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="extension" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->extension}}"
                                                                               @endif
                                                                               class="form-control"
                                                                               onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                                               placeholder="Extensión telefónica"
                                                                               value="{{old('extension')}}">
                                                                        <div style="color: #fe4138">{!! $errors->first('extension', '<small>:message</small>') !!}</div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select required='true' class="form-control"
                                                                                name="perfil"
                                                                                id="perfil" value="{{old('perfil')}}">
                                                                            <option value="">Seleccionar perfil
                                                                                usuario..
                                                                            </option>
                                                                            @foreach($cat_perfiles as $perfiles)
                                                                                <option value="{{$perfiles->id_perfil}}"
                                                                                >{{$perfiles->nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="correo" type="email"
                                                                               @if(isset($edit_user)) value="{{$edit_user->correo_electronico}}"
                                                                               @endif
                                                                               class="form-control"
                                                                                placeholder="Correo"
                                                                               value="{{old('correo')}}">
                                                                        <div style="color: #fe4138">{!! $errors->first('correo', '<small>:message</small>') !!}</div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="contrasena" type="password"
                                                                               @if(!isset($edit_user))
                                                                               @endif
                                                                               class="form-control"
                                                                               placeholder="Contraseña">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="confirma-contrasena"
                                                                               type="password"
                                                                               @if(!isset($edit_user))
                                                                               @endif
                                                                               class="form-control"
                                                                               placeholder="Confirma contraseña">
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            @if(isset($edit_user))
                                                                <p><b>Nota:</b> Si no requiere cambiar la contraseña,
                                                                    dejar en blanco el campo "Contraseña" y "Repetir
                                                                    contraseña"</p>

                                                            @endif
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <br>
                                                                        <button type="submit"
                                                                                class="btn btn-primary waves-effect waves-light">
                                                                            Modificar
                                                                        </button>
                                                                        <input type="hidden" name="_token"
                                                                               id="csrf-token" value="{{csrf_token()}}">
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
        </form>
        <br>
        @if(isset($alert) && $alert != null && isset($alert->type))
            <div class="alert alert-{{ $alert->type }}" role="alert">
                {{ $alert->message }}
            </div>
        @endif
        <script src="{{asset('js/form_academia.js')}}" charset="utf-8"></script>
    </section>
@endsection

@section('scripts')
    <script>
        $('.btn-delete').on('click', function(e) {
            $(this).parents('form:first').submit()
        })
    </script>
@endsection