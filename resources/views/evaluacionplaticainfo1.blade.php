@extends('main')
@section('content')

    <section>
        <form action="{{route('evaluacionplaticainfo')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            @if(isset($alert))
                <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
                    <div class="col-12">
                        <div  class="alert alert-info ">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$alert->message}}
                        </div>
                    </div>
                    @endif
            @if(isset($alert2))
                <div class="row" style="padding: 10px;">
                    <div class="col-12">
                        <div class="alert alert-{{$alert2->type}}">
                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                            {{$alert2->message}}
                        </div>
                    </div>
                </div>
            @endif

            <div id="myTabContent" class="custom-product-edit" style="margin: 40px 20px 0px 20px">
                    <div class="row">
                        <div class="container-fluid" >
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active "><a href="#registroplatica">Evaluación plática informativa</a></li>
                                        </ul>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="dropzone dropzone-custom needsclick addcourse"
                                                     id="formulario-usuarios">
                                                    <br>
                                                    <div><h4 class="textnegritas col-lg-12">Datos personales</h4></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                        <div class="form-group">
                                                            <input name="nombre" id="nombre" type="text"
                                                                   required="true"
                                                                   class="form-control"
                                                                   placeholder="Nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="correo" id="correo" type="email"
                                                                   required="true"
                                                                   class="form-control"
                                                                   placeholder="Correo electrónico">
                                                        </div>

                                                        <div class="from-group">
                                                            <select required='true' class="form-control"  name="id_ejecutivo" id="id_ejecutivo">
                                                                <option value="">Seleccionar ejecutivo..</option>
                                                                @foreach($cat_ejecutivos as $ejecutivos)
                                                                    <option value="{{$ejecutivos->id_ejecutivo}}">{{$ejecutivos->nombre." ". $ejecutivos->apellido_paterno." ".$ejecutivos->apellido_materno}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="telefono" id="telefono" type="text"
                                                                   required="true"
                                                                   class="form-control"
                                                                   placeholder="Teléfono">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="curp" id="curp" type="text"
                                                                   required="true"
                                                                   class="form-control"
                                                                   placeholder="CURP">
                                                        </div>
                                                        <div class="form-group">

                                                                <select required='true' class="form-control"  name="municipio" id="municipio">
                                                                    <option value="">Municipio</option>
                                                                    @foreach($cat_municipios as $municipios)
                                                                        <option value="{{$municipios->cve_compuesta_ent_mun}}" > {{$municipios->nom_mun}}</option>
                                                                    @endforeach
                                                                </select>

                                                        </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-pull-10 instruc">
                                            <h5 >Favor de seleccionar entre la escala del 1 (malo)  al 5 (excelente)  y marcar la casilla que considere más adecuada :</h5>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <br><br>
                                                <label class="col-sm-8">1. Puntualidad del Ejecutivo</label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="puntualidad"
                                                            id="puntualidad">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        @for($i = 5; $i >= 1; $i--)
                                                            <option value="{{$i}}"> {{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <br>

                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-8">2. Conocimiento del Ejecutivo </label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="conocimiento"
                                                            id="conocimiento">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        @for($i = 5; $i >= 1; $i--)
                                                            <option value="{{$i}}"> {{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <br>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-8">3. Capacidad para resolver dudas 
                                                </label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="capacidad"
                                                            id="capacidad">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        @for($i = 5; $i >= 1; $i--)
                                                            <option value="{{$i}}"> {{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <br>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-8 ">4. Claridad de la información</label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="claridad"
                                                            id="claridad">
                                                        <option value="" selected="" >Seleccionar...
                                                        </option>
                                                        @for($i = 5; $i >= 1; $i--)
                                                            <option value="{{$i}}"> {{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <br>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-8 ">5. Utilidad de la información</label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="utilidad"
                                                            id="utilidad">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        @for($i = 5; $i >= 1; $i--)
                                                            <option value="{{$i}}"> {{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <br>
                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-8 ">6. ¿Cuál es el modelo de emprendimiento adecuado
                                                    para
                                                    su proyecto de negocio?
                                                </label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="modelo"
                                                            id="modelo">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        <option value="Modelo Social Colaborativo">Modelo Social
                                                            Colaborativo
                                                        </option>
                                                        <option value="Modelo Tradicional">Modelo Tradicional</option>
                                                        <option value="Modelo Institucional">Modelo Institucional
                                                        </option>
                                                        <option value="Modelo Alto Inpacto">Modelo Alto Inpacto</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-8">7. Razón por la que asiste a FOJAL </label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="razonasiste"
                                                            id="razonasiste">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        <option value="Financiamiento">Financiamiento</option>
                                                        <option value="Capacitación">Capacitación</option>
                                                        <option value="Ambos">Ambos</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-8 ">8. Tipo de persona jurídica</label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="personajuridica"
                                                            id="personajuridica">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        <option value="Persona física">Persona física</option>
                                                        <option value="Persona Moral">Persona Moral</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-8 ">9. Esta dado de alta en hacienda</label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="altahacienda"
                                                            id="altahacienda">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-8 ">10. ¿Cuantos años tiene dado de alta en el SAT?
                                                </label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control " name="anosalta"
                                                            id="anosalta">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        <option value="Si">0 a 1 años</option>
                                                        <option value="No">1 a 3 años</option>
                                                        <option value="No">3 o más años</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-8 ">11. En caso de requerir financiamiento; ¿Cuál es el
                                                    monto que necesita?
                                                </label>
                                                <div class="col-sm-4">
                                                    <select required='true' class="form-control "
                                                            name="montofinanciamiento"
                                                            id="montofinanciamiento">
                                                        <option value="" selected=""
                                                        >Seleccionar...
                                                        </option>
                                                        <option value="$2,500.00 - $12,000.00">$2,500.00 - $12,000.00
                                                        </option>
                                                        <option value="$50,000.00 - $500,000.00">$50,000.00 -
                                                            $500,000.00
                                                        </option>
                                                        <option value="$500,000.00 - $5´000,000.00">$500,000.00 -
                                                            $5´000,000.00
                                                        </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="payment-adress">
                                                <br>
                                                <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">
                                                    Enviar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-lg-12">
                <div class="col-sm-10 aviso">
                    <p>Aviso de Confidencialidad El Fondo Jalisco de Fomento
                        Empresarial (FOJAL), ubicado en Av. Adolfo López Mateos Norte #1135,
                        esquina con Colomos, colonia Italia Providencia, C.P. 44648 en la ciudad
                        de Guadalajara, Jalisco, es responsable del uso y protección de sus datos
                        personales, por ello hace de su conocimiento lo siguiente: los datos personales
                        que usted proporcione a este Fideicomiso, serán única y exclusivamente utilizados
                        para llevar a cabo los objetivos y atribuciones de esta Institución. Si desea
                        consultar nuestro aviso de privacidad integral lo podrá consultar a través de la
                        página de internet de este Fideicomiso, en el siguiente link:
                        <a href="http://fojal.jalisco.gob.mx/" target="_blank">http://fojal.jalisco.gob.mx/</a></p>
                </div>
                <div class="col-sm-2 avisoimg">
                    <img src="img/aviso.png">
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
