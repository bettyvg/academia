
<?php $__env->startSection('content'); ?>
    <section>
            <div class="alert" style="margin: 20px 0px 0px 0px">
                <strong><?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></strong>
            </div>

        <form action="<?php echo e(route('EvaluacionCapacitadores')); ?>" method="post" class="form-horizontal">
            <?php echo csrf_field(); ?>
                    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                        <div class="container-fluid" style="margin: 0px 0px 0px 0px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#description">Encuesta de satisfacción</a></li>
                                            <li><a href="#modificacioninscritos">Detalle encuaestas</a></li>

                                        </ul>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                                <br>
                                                                <div><h4>Datos <span
                                                                                class="table-project-n">Personales</span>
                                                                    </h4>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="fecha" id="fecha"
                                                                               type="date"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Fecha del curso"
                                                                               value="<?php echo e(old('fecha')); ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="nombrepar" id="nombrepar"
                                                                               type="text"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Nombre del participante"
                                                                               value="<?php echo e(old('nombrepar')); ?>">
                                                                    </div>

                                                                    <div class="from-group">
                                                                        <select
                                                                                class="form-control"
                                                                                name="id_capacitador"
                                                                                required="true"
                                                                                id="id_capacitador">
                                                                            <option value="">Seleccionar
                                                                                capacitador..
                                                                            </option>
                                                                            <?php $__currentLoopData = $cat_capacitador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capacitadores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($capacitadores->id_capacitador); ?>" <?php if(old('id_capacitador')==$capacitadores->id_capacitador): ?>selected="selected"<?php endif; ?>><?php echo e($capacitadores->nom_cap." ". $capacitadores->apellido_paterno." ".$capacitadores->apellido_materno); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select
                                                                                class="form-control"
                                                                                required="true"
                                                                                name="id_tema"
                                                                                id="id_tema">
                                                                            <option value="">Sesión
                                                                            </option>
                                                                            <?php $__currentLoopData = $cat_temas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($temas->id_tema); ?>" <?php if(old('id_tema')==$temas->id_tema): ?>selected="selected"<?php endif; ?>> <?php echo e($temas->num_sesion." - ".$temas->tema); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select
                                                                                class="form-control"
                                                                                required="true"
                                                                                name="cve_compuesta_ent_mun"
                                                                                id="cve_compuesta_ent_mun">
                                                                            <option value="">Municipio
                                                                            </option>
                                                                            <?php $__currentLoopData = $cat_municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($municipios->cve_compuesta_ent_mun); ?>" <?php if(old('cve_compuesta_ent_mun')==$municipios->cve_compuesta_ent_mun): ?>selected="selected"<?php endif; ?>> <?php echo e($municipios->nom_mun); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select
                                                                                class="form-control"
                                                                                name="id_institucion"
                                                                                required="true"
                                                                                id="id_institucion">
                                                                            <option value="">Institución
                                                                            </option>
                                                                            <?php $__currentLoopData = $cat_instituciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($institucion->id_institucion); ?>" <?php if(old('id_institucion')==$institucion->id_institucion): ?>selected="selected"<?php endif; ?>><?php echo e($institucion->nombre_inst); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>

                                                                    <br>
                                                                </div>

                                                                <h4>Evaluación capacitador</h4>

                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="puntualidad" id="puntualidad">
                                                                            <option value="">Puntualidad..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="dominiotema" id="dominiotema">
                                                                            <option value="">Dominio del tema..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="exposicion" id="exposicion">
                                                                            <option value="">Técnica de exposición..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="ejemplos" id="ejemplos">
                                                                            <option value="">Ejemplos aplicados a las empresas ..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="ejercicios" id="ejercicios">
                                                                            <option value="">Ejercicios al finalizar cada tema..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="empatiagrupo" id="empatiagrupo">
                                                                            <option value="">Empatía con el grupo..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="fluidez" id="fluidez">
                                                                            <option value="">Fluidez para hablar..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="todostemas" id="todostemas">
                                                                            <option value="">El capacitador impartió todos los temas..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="capresolver" id="capresolver">
                                                                            <option value="">Capacidad de resolver preguntas sobre el tema que impartió..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreoeva1" name="monitoreoeva1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 3 malos y 3 regulares</label>
                                                                            <input type="text" id="monitoreoeva2" name="monitoreoeva2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                </div>

                                                                <h4>Logistica del curso</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoLogistica"  name="lugar" id="lugar">
                                                                            <option value="">Servicio del lugar en dónde se realizó el curso..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoLogistica"  name="equipo" id="equipo">
                                                                            <option value="">Equipo y herramientas para la exposición del capacitador...</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreolog1" name="monitoreolog1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 2 malos y 2 regulares</label>
                                                                            <input type="text" id="monitoreolog2" name="monitoreolog2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <br><br><br>
                                                                </div>

                                                                <h4>Contenido y materiales</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoContenido"  name="objetivoscurso" id="objetivoscurso">
                                                                            <option value="">Considera que se cumplieron los objetivos del curso..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoContenido"  name="contenidocurso" id="contenidocurso">
                                                                            <option value="">El contenido del curso se puede aplicar...</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoContenido"  name="contenidocuaderno" id="contenidocuaderno">
                                                                            <option value="">Considera adecuado el contenido de los cuadernos de trabajo ..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreocontenido1" name="monitoreocontenido1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 3 malos y 3 regulares</label>
                                                                            <input type="text" id="monitoreocontenido2" name="monitoreocontenido2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <br><br><br>
                                                                    <br><br><br><br>

                                                                </div>

                                                                <h4>Organizacón del equipo FOJAL</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoOrganizacion"  name="registroorg" id="registroorg">
                                                                            <option value="">Considera adecuado el tiempo que tarda en registrarse en las instalaciones de fojal</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoOrganizacion"  name="atencionorg" id="atencionorg">
                                                                            <option value="">Comó considera la atención del personal de recepción...</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoOrganizacion"  name="registrocursos" id="registrocursos">
                                                                            <option value="">Considera que el registro para los cursos es…</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="Ninguno">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreoorg1" name="monitoreoorg1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 3 malos y 3 regulares</label>
                                                                            <input type="text" id="monitoreoorg2" name="monitoreoorg2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    </div>
                                                                    <br><br><br><br>
                                                                </div>

                                                                <h4>Comentarios</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <h5>Comentarios adicionales al curso</h5>
                                                                        <textarea name="comentariocurso" rows="10" cols="50" placeholder="Escribir comentario..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <h5>Tema que te gustaría añadir al curso</h5>
                                                                            <textarea name="temacurso" rows="10" cols="50" placeholder="Escribir comentario..."></textarea>
                                                                        </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                            class="btn btn-primary waves-effect waves-light" id="guardar">
                                                                        Enviar
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tabla de registros evaluación   -->
                                            <div class="product-tab-list tab-pane fade data-table-area mg-b-15" id="modificacioninscritos">
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
                                                                                <option value="all">Exportar todo</option>
                                                                                <option value="selected">Exportar Seleccionados
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                        <table id="table"
                                                                               data-toggle="table"
                                                                               data-pagination="true"
                                                                               data-show-columns="true"
                                                                               data-search="true"
                                                                               data-show-pagination-switch="true"
                                                                               data-show-toggle="true"
                                                                               data-resizable="true"
                                                                               data-cookie="true"
                                                                               data-cookie-id-table="saveId"
                                                                               data-show-export="true"
                                                                               data-click-to-select="true"
                                                                               data-toolbar="#toolbar">
                                                                            <thead>
                                                                            <tr>
                                                                                <th data-field="state"
                                                                                    data-checkbox="true"></th>
                                                                                <th data-field="fecha">
                                                                                    Fecha del curso
                                                                                </th>
                                                                                <th data-field="nombrepar">
                                                                                    Nombre
                                                                                    participante
                                                                                </th>
                                                                                <th data-field="Ejecutivo">
                                                                                    Capacitador
                                                                                </th>
                                                                                <th data-field="sesion">
                                                                                    Sesion
                                                                                </th>
                                                                                <th data-field="cve_compuesta_ent_mun">
                                                                                    Municipio
                                                                                </th>
                                                                                <th data-field="id_institucion">
                                                                                    Institución
                                                                                </th>
                                                                                <th data-field="Puntualidad"
                                                                                    data-checkbox="false">
                                                                                    Puntualidad
                                                                                </th>
                                                                                <th data-field="Conocimiento">
                                                                                    Dominio del tema
                                                                                </th>
                                                                                <th data-field="Capacidad">
                                                                                    Técnica de
                                                                                    exposición
                                                                                </th>
                                                                                <th data-field="Claridad">
                                                                                    Ejemplos
                                                                                    aplicados a las
                                                                                    empresas
                                                                                </th>
                                                                                <th data-field="Utilidad">
                                                                                    Ejercicios al
                                                                                    finalizar cada
                                                                                    tema
                                                                                </th>
                                                                                <th data-field="ModeloEmprendimiento">
                                                                                    Empatía con el
                                                                                    grupo
                                                                                </th>
                                                                                <th data-field="AisteFojal">
                                                                                    Fluidez para
                                                                                    hablar
                                                                                </th>
                                                                                <th data-field="PersonaJuridica">
                                                                                    Impartió todos
                                                                                    los temas
                                                                                </th>
                                                                                <th data-field="AltaHacienda">
                                                                                    Capacidad de
                                                                                    resolver
                                                                                    preguntas sobre
                                                                                    el tema
                                                                                </th>
                                                                                <!--<th data-field="AltaHacienda">Servicio del lugar donde se desarrollo el Curso</th>
                                                                                <th data-field="AltaHacienda">Equipo y herramientas de la exposición</th>
                                                                                <th data-field="AltaHacienda">Considera que se cumplieron los objetivos del curso</th>
                                                                                <th data-field="AltaHacienda">El contenido del cuso aplica para la idea de negocio o negocio establecido</th>
                                                                                <th data-field="AltaHacienda">Considera adecuado el contenido de los cuadernos de trabajo como fuente de apoyo a la presentación</th>
                                                                                <th data-field="AltaHacienda">Es adecuado el tiempo que tarda en registarse en las instalaciones de Fojal</th>
                                                                                <th data-field="AltaHacienda">La atención del personal de recepción</th>
                                                                                <th data-field="AltaHacienda">El registro para los cursos es...</th>-->
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php $__currentLoopData = $busqueda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <tr role="row"
                                                                                    class="odd">
                                                                                    <td class="sorting_1"></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->fecha); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombrepar); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombre_cap->nom_cap." ".$Items->nombre_cap->apellido_paterno." ".$Items->nombre_cap->apellido_materno); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->temas->num_sesion." - ".$Items->temas->tema); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombre_municipio->nom_mun); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombre_institucion->nombre_inst); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->puntualidad); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->dominiotema); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->exposicion); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->ejemplos); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->ejercicios); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->empatiagrupo); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->fluidez); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->todostemas); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->capresolver); ?></td>
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
                                            <!-- Tabla de registros de platica -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <br>

        <script src="<?php echo e(asset('js/form_academia.js')); ?>" charset="utf-8"></script>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/fojal.net/httpdocs/fojal_academia/resources/views/EvaluacionCapacitadores.blade.php ENDPATH**/ ?>