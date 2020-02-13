

<?php $__env->startSection('content'); ?>
    <section>
        <form action="" method="post" class="form-horizontal">
            <?php echo csrf_field(); ?>
                    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                        <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#description">Evaluación ejecutivos</a></li>
                                            <li><a href="#detalle_evaluaciones"> Detalle evaluaciones</a></li>
                                        </ul>
                                        <div class="col-md-offset-12">
                                            <div class="payment-adress" >
                                                <br>
                                                <button type="button" class="btn btn-info pull-right" name="agregar_capacitador" id="agregar_capacitador" onclick="window.location='<?php echo e(route('registroplatica')); ?>'">Regitrar participante</button>
                                            </div>
                                            <br><br>
                                        </div>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="from-group col-lg-4"><h5>Fecha de evaluación:</h5></div>
                                                                    <div class="from-group col-lg-offset-4">
                                                                           <div class="form-group">
                                                                            <input name="fecha" id="fecha"
                                                                                   type="date"
                                                                                   required="true"
                                                                                   class="form-control"
                                                                                   placeholder="Fecha de la evaluación"
                                                                                   value="<?php echo e(old('fecha')); ?>">
                                                                      </div>
                                                                    </div>
                                                                    <br>


                                                                    <div class="from-group">
                                                                        <select required='true'
                                                                                class="form-control"
                                                                                name="id_registro"
                                                                                id="id_registro">
                                                                            <option value="">Seleccionar participante...
                                                                            </option>
                                                                            <?php $__currentLoopData = $Registroplatica; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($visitante->id_registro); ?>" <?php if(old('id_registro')==$visitante->id_registro): ?>selected="selected"<?php endif; ?>><?php echo e($visitante->nombre." ". $visitante->apellido_paterno." ".$visitante->apellido_materno); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                    <input type="hidden" id="nombre_participante" name="nombre_participante" value="<?php echo e("$visitante->nombre"); ?>">
                                                                    <input type="hidden" id="apellidoP_participante" name="apellidoP_participante" value="<?php echo e("$visitante->apellido_paterno"); ?>">
                                                                    <input type="hidden" id="apellidoM_participante" name="apellidoM_participante" value="<?php echo e("$visitante->apellido_materno"); ?>">
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <h5></h5>
                                                                        <div class="from-group">
                                                                        <select required='true'
                                                                                class="form-control"
                                                                                name="id_ejecutivo"
                                                                                id="id_ejecutivo">
                                                                            <option value="">Seleccionar
                                                                                ejecutivo..
                                                                            </option>
                                                                            <?php $__currentLoopData = $cat_ejecutivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ejecutivos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($ejecutivos->id_ejecutivo); ?>" <?php if(old('id_ejecutivo')==$ejecutivos->id_ejecutivo): ?>selected="selected"<?php endif; ?>><?php echo e($ejecutivos->nombre_ejecutivo." ". $ejecutivos->apellido_paterno." ".$ejecutivos->apellido_materno); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-group">
                                                                        <input name="curp" id="curp" type="text"
                                                                               onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                                                               class="form-control" placeholder="CURP"
                                                                               value="<?php echo e(old('curp')); ?>">
                                                                        <div style="color: #fe4138"><?php echo $errors->first('curp', '<small>:message</small>'); ?></div>
                                                                    </div>
                                                                </div>

                                                                <div class="payment-adress" >
                                                                    <button type="button"
                                                                            class="btn btn-info pull-right"
                                                                            data-toggle="modal"
                                                                            name="btnagregar_evaluacion"
                                                                            id="btnagregar_evaluacion"
                                                                            data-target="#modal_evaluacion">Evaluar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal" tabindex="-1" role="dialog" name="modal_evaluacion"
                                                     id="modal_evaluacion">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header"
                                                                 style="background-color: whiteSmoke;">
                                                                <h2 class="modal-title">Evaluación</h2>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Favor de seleccionar entre la escala del 1 (malo) al
                                                                    10 (excelente) y marcar la casilla que considere más
                                                                    adecuada:
                                                                </h5> <br>
                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Puntualidad del
                                                                                                ejecutivo</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-time"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select name="inicio_platica" id="inicio_platica" class="form-control">
                                                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Seleccionar</option>
                                                                                                        <option value="Puntual">Puntual</option>
                                                                                                        <option value="Después de 10 min">Después de 10 min</option>
                                                                                                        <option value="Después de 15 min">Después de 15 min</option>
                                                                                                        <option value="mas de 15 min">mas de 15 min</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Atención del ejecutivo</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-thumbs-up"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="atencion_ejecutivo"
                                                                                                            id="atencion_ejecutivo">
                                                                                                        <option value="" selected="">Seleccionar...
                                                                                                        </option>
                                                                                                        <?php for($i = 10; $i >= 1; $i--): ?>
                                                                                                            <option value="<?php echo e($i); ?>"<?php if(old('atencion_ejecutivo')==$i): ?>selected="selected"<?php endif; ?>> <?php echo e($i); ?></option>
                                                                                                        <?php endfor; ?>
                                                                                                        <option value="No específico">No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Dominio de la plática informativa</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-ok"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select name="dominio_platica" id="dominio_platica" class="form-control">
                                                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Seleccionar</option>
                                                                                                        <option value="Si">Si</option>
                                                                                                        <option value="No">No</option>
                                                                                                        <option value="No específico">No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿El ejecutivo resolvió todas sus  dudas?</h4>
                                                                                            <br>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-question-sign"></i>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select name="resolucion_dudas" id="resolucion_dudas" class="form-control">
                                                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Seleccionar</option>
                                                                                                        <option value="Si">Si</option>
                                                                                                        <option value="No">No</option>
                                                                                                        <option value="No específico">No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿Como considera la información proporcionada?</h4>
                                                                                            <div class="m icon-box">
                                                                                               <i class="glyphicon glyphicon-ok-circle"></i>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="consideracion_info"
                                                                                                            id="consideracion_info">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <?php for($i = 10; $i >= 1; $i--): ?>
                                                                                                            <option value="<?php echo e($i); ?>" <?php if(old('utilidad')==$i): ?>selected="selected"<?php endif; ?>> <?php echo e($i); ?></option>
                                                                                                        <?php endfor; ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">La información recibida aclara el tipo de financiamiento a realizar</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="aclaracion_info"
                                                                                                            id="aclaracion_info">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <?php for($i = 10; $i >= 1; $i--): ?>
                                                                                                            <option value="<?php echo e($i); ?>" <?php if(old('utilidad')==$i): ?>selected="selected"<?php endif; ?>> <?php echo e($i); ?></option>
                                                                                                        <?php endfor; ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">La información recibida le será útil y le facilitará el trámite para el financiamiento</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="utilidad_info"
                                                                                                            id="utilidad_info">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <?php for($i = 10; $i >= 1; $i--): ?>
                                                                                                            <option value="<?php echo e($i); ?>" <?php if(old('utilidad')==$i): ?>selected="selected"<?php endif; ?>> <?php echo e($i); ?></option>
                                                                                                        <?php endfor; ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">La etapa en la cuál se encuentra su negocio es:</h4>
                                                                                            <br><br>
                                                                                            <div class="m icon-box">
                                                                                                <i class="educate-icon educate-project"></i>
                                                                                                <br><br>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="etapa_negocio"
                                                                                                            id="etapa_negocio"
                                                                                                    >
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <option value="Idea de negocio" <?php if(old('modelo')=="Modelo Social Colaborativo"): ?>selected="selected"<?php endif; ?>>
                                                                                                            Idea de negocio
                                                                                                        </option>
                                                                                                        <option value="Empresa en etapa temprana" <?php if(old('modelo')=="Modelo Tradicional"): ?>selected="selected"<?php endif; ?>>
                                                                                                            Empresa en etapa temprana
                                                                                                        </option>
                                                                                                        <option value="Mi empresa tiene por lo  menos 1 año en el mercado" <?php if(old('modelo')=="Modelo Institucional"): ?>selected="selected"<?php endif; ?>>
                                                                                                            Mi empresa tiene por lo  menos 1 año en el mercado
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿Ha solicitado anteriormente financiamiento para iniciar o crecer su negocio?</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-list-alt"></i>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select name="solicitudcredito_ant" id="solicitudcredito_ant" class="form-control">
                                                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Seleccionar</option>
                                                                                                        <option value="Si">Si</option>
                                                                                                        <option value="No">No</option>
                                                                                                        <option value="No específico">No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">

                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿Se le otorgó el financiamiento?</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-check"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select name="financiamiento_otorgado" id="financiamiento_otorgado" class="form-control">
                                                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Seleccionar</option>
                                                                                                        <option value="Si">Si</option>
                                                                                                        <option value="No">No</option>
                                                                                                        <option value="No específico">No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿Cuál fue la fuente de financiamiento?</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-credit-card"></i>
                                                                                                <br><br>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="fuente_financiamiento"
                                                                                                            id="fuente_financiamiento">
                                                                                                        <option value="" selected="">Seleccionar...</option>
                                                                                                        <option value="Recursos propios" <?php if(old('fuente_financiamiento')=="Recursos propios"): ?>selected="selected"<?php endif; ?>>Recursos propios</option>
                                                                                                        <option value="Sistema financiero" <?php if(old('fuente_financiamiento')=="Sistema financiero"): ?>selected="selected"<?php endif; ?>>Sistema financiero</option>
                                                                                                        <option value="Tarjetas de crédito" <?php if(old('fuente_financiamiento')=="Tarjetas de crédito"): ?>selected="selected"<?php endif; ?>>Tarjetas de crédito</option>
                                                                                                        <option value="Crédito de proveedor" <?php if(old('fuente_financiamiento')=="Crédito de proveedor"): ?>selected="selected"<?php endif; ?>>Crédito de proveedor</option>
                                                                                                        <option value="Prestamistas particulares" <?php if(old('fuente_financiamiento')=="Prestamistas particulares"): ?>selected="selected"<?php endif; ?>>Prestamistas particulares</option>
                                                                                                        <option value="Instituciones de gobierno" <?php if(old('fuente_financiamiento')=="Instituciones de gobierno"): ?>selected="selected"<?php endif; ?>>Instituciones de gobierno</option>
                                                                                                        <option value="Otros" <?php if(old('fuente_financiamiento')=="Otros"): ?>selected="selected"<?php endif; ?>>Otros</option>
                                                                                                        <option value="No específico" <?php if(old('fuente_financiamiento')=="No específico"): ?>selected="selected"<?php endif; ?>>No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿Cuál es el motivo por el que no se lo otorgaron?</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-thumbs-down"></i>
                                                                                                <br><br>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="motivo_nofinanciamiento"
                                                                                                            id="motivo_nofinanciamiento">
                                                                                                        <option value="" selected="">Seleccionar...</option>
                                                                                                        <option value="No tenía garantía o aval" <?php if(old('motivo_nofinanciamiento')=="No tenía garantía o aval"): ?>selected="selected"<?php endif; ?>>No tenía garantía o aval</option>
                                                                                                        <option value="No pude comprobar ingresos" <?php if(old('motivo_nofinanciamiento')=="No pude comprobar ingresos"): ?>selected="selected"<?php endif; ?>>No pude comprobar ingresos</option>
                                                                                                        <option value="No dijeron la causa" <?php if(old('motivo_nofinanciamiento')=="No dijeron la causa"): ?>selected="selected"<?php endif; ?>>No dijeron la causa</option>
                                                                                                        <option value="Mal historial crediticio" <?php if(old('motivo_nofinanciamiento')=="Mal historial crediticio"): ?>selected="selected"<?php endif; ?>>Mal historial crediticio</option>
                                                                                                        <option value="No tenía historial crediticio" <?php if(old('motivo_nofinanciamiento')=="No tenía historial crediticio"): ?>selected="selected"<?php endif; ?>>No tenía historial crediticio</option>
                                                                                                        <option value="Tenía muchas deudas" <?php if(old('motivo_nofinanciamiento')=="Tenía muchas deudas"): ?>selected="selected"<?php endif; ?>>Tenía muchas deudas</option>
                                                                                                        <option value="Otras razones" <?php if(old('motivo_nofinanciamiento')=="Otras razones"): ?>selected="selected"<?php endif; ?>>Otras razones</option>
                                                                                                        <option value="No específico" <?php if(old('No específico')=="No específico"): ?>selected="selected"<?php endif; ?>>No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Después de la información recibida le gustaría la/el:</h4>
                                                                                            <br>
                                                                                            <div class="m icon-box">
                                                                                                <i class="educate-icon educate-project"></i>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="depues_info"
                                                                                                            id="depues_info">
                                                                                                        <option value="" selected="">Seleccionar...</option>
                                                                                                        <option value="Capacitación" <?php if(old('depues_info')=="Capacitación"): ?>selected="selected"<?php endif; ?>>Capacitación</option>
                                                                                                        <option value="Financiamiento" <?php if(old('depues_info')=="Financiamiento"): ?>selected="selected"<?php endif; ?>>Financiamiento</option>
                                                                                                        <option value="Ambos" <?php if(old('depues_info')=="Ambos"): ?>selected="selected"<?php endif; ?>>Ambos</option>
                                                                                                        <option value="No específico" <?php if(old('depues_info')=="No específico"): ?>selected="selected"<?php endif; ?>>No específico</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="md-form">
                                                                                    <h5>En caso de requerir financiamiento,</h5>
                                                                                    <h5>¿Cuál es el monto?</h5>
                                                                                    <select required='true' class="form-control "
                                                                                            name="rango_financiamiento"
                                                                                            id="rango_financiamiento">
                                                                                        <option value="" selected=""
                                                                                        >Seleccionar...
                                                                                        </option>
                                                                                        <option value="hasta $100,000">hasta $100,000
                                                                                        </option>
                                                                                        <option value="De 100,001 - 300,000">$100,001 -
                                                                                            $300,000
                                                                                        </option>
                                                                                        <option value="De 300,001 - 500,000">$300,001 - $500,000
                                                                                        </option>
                                                                                        <option value="De 500,001 - 3,000,000">$500,001 - $3,000,000
                                                                                        </option>
                                                                                        <option value="De 3,000,001 - 5,000,000">$3,000,001 - $5,000,000
                                                                                        </option>
                                                                                        <option value="No específico" <?php if(old('montofinanciamiento')=="No específico"): ?>selected="selected"<?php endif; ?>>No específico</option>
                                                                                    </select>
                                                                                    <h5>Destino del crédito</h5>
                                                                                    <textarea name='destino_financiamiento' id="destino_financiamiento" class="md-textarea form-control" rows="2"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="md-form">
                                                                                    <h5>Comentarios adicionales a la plática informativa:</h5>
                                                                                   <br>
                                                                                    <textarea name="comentarios" id="comentarios" class="md-textarea form-control" rows="3"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row" style="display: none; padding: 10px;"
                                                                     id="alert-modal">
                                                                    <div class="col-12">
                                                                        <div class="alert alert-warning" id="alerta">
                                                                            <button class="close" data-dismiss="alert">
                                                                                <span>&times;</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"
                                                                 style="background-color: whiteSmoke;">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light" id="guardar">
                                                                    Enviar
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-secondary pull-left"
                                                                        data-dismiss="modal">Cerrar
                                                                </button>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="col-sm-10 aviso">
                                                                    <p>Aviso de Confidencialidad El Fondo Jalisco de
                                                                        Fomento
                                                                        Empresarial (FOJAL), ubicado en Av. Adolfo López
                                                                        Mateos
                                                                        Norte
                                                                        #1135,
                                                                        esquina con Colomos, colonia Italia Providencia,
                                                                        C.P. 44648
                                                                        en
                                                                        la
                                                                        ciudad
                                                                        de Guadalajara, Jalisco, es responsable del uso
                                                                        y protección
                                                                        de
                                                                        sus
                                                                        datos
                                                                        personales, por ello hace de su conocimiento lo
                                                                        siguiente:
                                                                        los
                                                                        datos
                                                                        personales
                                                                        que usted proporcione a este Fideicomiso, serán
                                                                        única y
                                                                        exclusivamente
                                                                        utilizados
                                                                        para llevar a cabo los objetivos y atribuciones
                                                                        de esta
                                                                        Institución.
                                                                        Si
                                                                        desea
                                                                        consultar nuestro aviso de privacidad integral
                                                                        lo podrá
                                                                        consultar a
                                                                        través de la
                                                                        página de internet de este Fideicomiso, en el
                                                                        siguiente
                                                                        link:
                                                                        <a href="http://fojal.jalisco.gob.mx/"
                                                                           target="_blank">http://fojal.jalisco.gob.mx/</a>
                                                                    </p>
                                                                </div>
                                                                <div class="col-sm-2 avisoimg">
                                                                    <img src="img/aviso.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Tabla de registros evaluación   -->
                                            <div class="product-tab-list tab-pane fade data-table-area mg-b-15"
                                                 id="detalle_evaluaciones">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="sparkline13-list">
                                                                <div class="sparkline13-hd">
                                                                    <div class="main-sparkline13-hd">
                                                                        <!--<h1>Projects <span class="table-project-n">Data</span> Table</h1>-->
                                                                    </div>
                                                                </div>
                                                                <div class="sparkline13-graph">
                                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                                        <div id="toolbar">
                                                                            <select class="form-control dt-tb">
                                                                                <option value="all">Exportar todo
                                                                                </option>
                                                                                <option value="selected">Exportar
                                                                                    Seleccionados
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                        <table id="table" data-toggle="table"
                                                                               data-pagination="true"
                                                                               data-show-columns="true"
                                                                               data-show-pagination-switch="true"
                                                                               data-show-toggle="true"
                                                                               data-resizable="true"
                                                                               data-cookie="true"
                                                                               data-cookie-id-table="saveId"
                                                                               data-show-export="true"
                                                                               data-click-to-select="true"
                                                                               data-toolbar="#toolbar" >
                                                                            <thead>
                                                                            <tr>
                                                                                <th data-field="state"
                                                                                    data-checkbox="true"></th>
                                                                                <th data-field="fecha">Fecha</th>
                                                                                <th data-field="nombre_participante">Nombre participante</th>
                                                                                <th data-field="nombre_ejecutivo">Nombre ejecutivo</th>
                                                                                <th data-field="Ejecutivo">Inicio de la plática</th>
                                                                                <th data-field="Atencion_Ejecutivos">Atención ejecutivo</th>
                                                                                <th data-field="Dominio_platica">Dominio platica</th>
                                                                                <th data-field="Resolucion_dudas">Resolución dudas</th>
                                                                                <th data-field="Consideracion de la información">Consideracion de la información</th>
                                                                                <th data-field="Aclaracion Información" data-checkbox="false">Aclaracion Información</th>
                                                                                <th data-field="Utilidad_info">Utilidad de información</th>
                                                                                <th data-field="etapa_negocio">Etapa de negocio</th>
                                                                                <th data-field="solicitudcredito">Solicito financiamiento ant.</th>
                                                                                <th data-field="financiamieto_otorgado">Financiamiento Otorgado</th>
                                                                                <th data-field="fuente_financiamiento">Fuente de financiamiento</th>
                                                                                <th data-field="motivo_nofinanciamiento">Motivo no financiamiento</th>
                                                                                <th data-field="despues_info">Acción despues de la información</th>
                                                                                <th data-field="rango_financiamiento">Rango financiamiento</th>
                                                                                <th data-field="destino_financiamiento">Destino financiamiento
                                                                                </th>
                                                                                <th data-field="comentarios">Comentarios
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php $__currentLoopData = $detalle_evaluacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1"></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->fecha); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombre_participante); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->ejecutivos->nombre_ejecutivo." ".$Items->ejecutivos->apellido_paterno." ".$Items->ejecutivos->apellido_materno); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->inicio_platica); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->atencion_ejecutivo); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->dominio_platica); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->resolucion_dudas); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->consideracion_info); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->aclaracion_info); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->utilidad_info); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->etapa_negocio); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->solicitudcredito_ant); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->financiamiento_otorgado); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->fuente_financiamiento); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->motivo_nofinanciamiento); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->despues_info); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->rango_financiamiento); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->destino_financiamiento); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->comentarios); ?></td>
                                                                                </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tabla de registros de evaluación -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <br>
        <?php if(isset($alert) && $alert != null && isset($alert->type)): ?>
            <div class="alert alert-<?php echo e($alert->type); ?>" role="alert">
                <?php echo e($alert->message); ?>

            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/fojal.net/httpdocs/fojal_academia/resources/views/ejecutivos/evaluacionejecutivos.blade.php ENDPATH**/ ?>