@extends('main')
@section('content')
    <section>
        <form action="" method="post" class="form-horizontal">

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">

                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>

                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Crear usuarios</a></li>
                                    <li><a href="#reviews"> Modificar usuarios</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad addcoursepro">
                                                        <form action="{{route('usuarios3')}}"
                                                              class="dropzone dropzone-custom needsclick addcourse"
                                                              id="demo1-upload">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="nombre" id="nombre" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->nombre}}" @endif
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Nombre">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="apat" id="apat" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->apellido_paterno}}" @endif
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="amat" id="amat" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->apellido_materno}}" @endif
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="area" id="area" type="number"
                                                                               @if(isset($edit_user)) value="{{$edit_user->area}}" @endif
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Area">
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <input name="puesto"  type="number"
                                                                            @if(isset($edit_user)) value="{{$edit_user->puesto}}" @endif
                                                                             class="form-control"
                                                                             required="true" placeholder="Puesto">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="extension"  type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->extension}}" @endif
                                                                               class="form-control"
                                                                               required="true" placeholder="Extensión">

                                                                    </div>




                                                                </div>



                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="extension"  type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->extension}}" @endif
                                                                               class="form-control"
                                                                               required="true" placeholder="Rol de usuario">

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="usuario"  type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->usuario}}" @endif
                                                                               class="form-control"
                                                                               required="true" placeholder="Usuario">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="correo"  type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->correo_electronico}}" @endif
                                                                               class="form-control"
                                                                               required="true" placeholder="Correo">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="contrasena"  type="password"
                                                                               @if(!isset($edit_user)) required="true" @endif
                                                                               class="form-control"
                                                                               placeholder="Contraseña">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="confirma-contrasena"  type="password"
                                                                               @if(!isset($edit_user)) required="true" @endif
                                                                               class="form-control"
                                                                               placeholder="Confirma contraseña">
                                                                    </div>



                                                                </div>
                                                            </div>
                                                            @if(isset($edit_user))
                                                                <p> <b>Nota:</b> Si no requiere cambiar la contraseña, dejar en blanco el campo "Contraseña" y "Repetir contraseña"</p>

                                                            @endif
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <br>
                                                                        <button type="submit"
                                                                                class="btn btn-primary waves-effect waves-light">
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
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control"
                                                                           placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control"
                                                                           placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control"
                                                                           placeholder="Confirm Password">
                                                                </div>
                                                                <a href="#"
                                                                   class="btn btn-primary waves-effect waves-light">Submit</a>
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
        <br>
        @if(isset($alert) && $alert != null && isset($alert->type))
            <div class="alert alert-{{ $alert->type }}" role="alert">
                {{ $alert->message }}
            </div>
        @endif
    </section>
@endsection
