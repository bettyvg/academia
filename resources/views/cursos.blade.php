@extends('main')
@section('content')

    <section>

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Agregar nuevo curso</a></li>
                                <li><a href="#reviews"> Detalle cursos</a></li>
                                <li><a href="#INFORMATION">Información</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="coursename" type="text" class="form-control" placeholder="Nombre del curso">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Fecha inicio">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="duration" type="text" class="form-control" placeholder="Fecha fin">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="price" type="number" class="form-control" placeholder="horario">
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Subir imagen de identificación del curso</h2>
                                                                        <!--<p class="edudropnone"><span class="note needsclick">(La im <strong>not</strong> actually uploaded.)</span>
                                                                        </p>-->
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="department" type="text" class="form-control" placeholder="Categoría">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="description" placeholder="Descripción"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="crprofessor" type="text" class="form-control" placeholder="Capacitador">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="year" name="year" type="text" class="form-control" placeholder="Ubiciación">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Enviar</button>
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
                                                        <div class="courses-area">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner res-mg-b-30">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                                                <h2>Emprendimiento Social Colaborativo</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/2.jpg" alt=""></a>
                                                                                <h2>Incubación Tradicional de Negocios</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/3.jpg" alt=""></a>
                                                                                <h2>Emprendimiento Institucional..</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                                                <h2>Emprendimiento Social Colaborativo</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mg-b-15">
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner mg-t-30">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                                                <h2>Emprendimiento de Alto Impacto</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner mg-t-30">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/2.jpg" alt=""></a>
                                                                                <h2>Incubación Tradicional de Negocios</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner mg-t-30">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/3.jpg" alt=""></a>
                                                                                <h2>Emprendimiento Institucional..</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="courses-inner mg-t-30">
                                                                            <div class="courses-title">
                                                                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                                                <h2>Emprendimiento de Alto Impacto</h2>
                                                                            </div>
                                                                            <div class="courses-alaltic">
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Año</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class=""></i></span> 50</span>
                                                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                                                            </div>
                                                                            <div class="course-des">
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Meses</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Profesor:</b> Juan</p>
                                                                                <p><span><i class="fa fa-clock"></i></span> <b>Ubicación:</b> Jalisco</p>
                                                                            </div>
                                                                            <div class="product-buttons">
                                                                                <button type="button" class="button-default cart-btn">Editar</button>
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
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
