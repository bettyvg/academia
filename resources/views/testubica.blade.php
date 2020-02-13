@extends('main')
@section('content')

    <section>
        <form action="" method="post" class="form-horizontal">

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

                    <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                        <div class="row">
                            <div class="col-lg-offset-1 col-sm-10 col-xs-10">
                                <div class="product-payment-inner-st">
                                    <ul id="myTabedu1" class="tab-review-design">
                                        <li class="active "><a href="#registroplatica">Test ubica tu financiamiento</a></li>
                                    </ul>

                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div id="dropzone1" class="pro-ad add-professors">
                                                            <form action="{{route('registro')}}">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="col-sm-8">
                                                                            <input required="true" type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre">
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-12 ">1. La razón por la cual asiste a FOJAL es:</label>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label>Financiamiento</label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label for="gridRadios2">Capacitación</label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check disabled">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="Ambos" checked>
                                                                                        <label class="form-check-label" for="gridRadios3">
                                                                                               Ambos
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <h5 class="col-sm-12">2. ¿Cuenta con un negocio formal establecido ante la Secretaria de Hacienda y Crédito Público (SHCP)?</h5>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label class="form-check-label" for="gridRadios1">
                                                                                            Si
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            No
                                                                                        </label>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-12 ">3. ¿Cuantos años tiene  de operación formal ante la Secretaría de Hacienda y Crédito Público con su negocio? 
                                                                                    </label>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label class="form-check-label" for="gridRadios1">
                                                                                            0 -1
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            1 y 2
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            3 o más
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-12 ">4. ¿Cuenta con ejercicios fiscales completos (01 de Enero al 31 de Diciembre )  de acuerdo a su registro de hacienda?</label>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label class="form-check-label" for="gridRadios1">
                                                                                            0 -1
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            1 y 2
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            3 o más
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-12 ">5. ¿Ha tenido algún financiamiento con FOJAL?</label>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label class="form-check-label" for="gridRadios1">
                                                                                            Si
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            No
                                                                                        </label>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-12 ">6. Su negocio tiene estados financieros (balance general, estado de resultados) con por lo menos un ejercicio completo (del 01 de enero al 31 de diciembre)
                                                                                </label>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label class="form-check-label" for="gridRadios1">
                                                                                            Si
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            No
                                                                                        </label>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-11">7. ¿Con cuántos estados financieros (balance general y estado de resultados) completos cuenta su empresa (del 1 de enero al 31 de diciembre)?</label>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label class="form-check-label" for="gridRadios1">
                                                                                            0 -1
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            1 y 2
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            3 o más
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-12 ">8. El financiamiento que requiere es para:
                                                                                </label>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-1"></div><br><div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Financiamiento" >
                                                                                        <label class="form-check-label" for="gridRadios1">
                                                                                            Si
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-sm-1"></div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Capacitación">
                                                                                        <label class="form-check-label" for="gridRadios2">
                                                                                            No
                                                                                        </label>
                                                                                    </div>

                                                                                </div>
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
