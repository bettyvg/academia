
<?php $__env->startSection('content'); ?>

    <script src="<?php echo e(asset('/js/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/form_solicitudes.js')); ?>"></script>
    <script src="<?php echo e(asset('js/cursos_online.js')); ?>"></script>
    <script src="<?php echo e(asset('js/notify.min.js')); ?>"></script>

    <section>

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st" id="tabs">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#agregar" id="agregar_curso">Agregar curso</a></li>
                                <li><a href="#cursos_online"> Detalle cursos</a></li>
                                <!--<li><a href="#INFORMATION">Información</a></li>-->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="agregar">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone" class="pro-ad addcoursepro">
                                                    <form action="cursos_online" method="POST"  enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="form-group ">
                                                                    <input name="nombre_curso_online" id="nombre_curso_online" type="text"
                                                                           class="form-control"
                                                                           placeholder="Nombre del curso" required>                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group ">
                                                                    <select name="categoria_online" id="categoria_online"
                                                                            class="form-control" required>
                                                                        <option value="">Selecciona una categoría..
                                                                        </option>
                                                                        <?php $__currentLoopData = $cat_temas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_tema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($cat_tema->id_tema); ?>"><?php echo e($cat_tema->tema); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                <div class="form-group">
                                                                    <select name="capacitador_online" id="capacitador_online"
                                                                            class="form-control" required>
                                                                        <option value="">Selecciona un capacitador..
                                                                        </option>
                                                                        <?php $__currentLoopData = $cat_capacitadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_capacitador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($cat_capacitador->id_capacitador); ?>"><?php echo e($cat_capacitador->nom_cap. ' ' .$cat_capacitador->apellido_paterno. ' ' .$cat_capacitador->apellido_materno); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>


                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <textarea name="descripcion_online" id="descripcion_online"
                                                                              placeholder="Descripción" style="height: 80%"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <span>Selecciona imagen para el curso</span>
                                                                <div class="file-upload-inner ts-forms">
                                                                    <input type="file" name="imagen_curso"
                                                                           id="imagen_curso" class="form-control"
                                                                           accept="image/*" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br>

                                                       <!-- <video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
                                                            <source src="../public/videos/programasdefinanciamiento.mp4" type="video/mp4">
                                                        </video>-->
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="card">
                                                                <div class="header">
                                                                    <h2>
                                                                        Agregar contenido del curso
                                                                    </h2>
<br>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <span>Video del curso</span>
                                                                            <div class="file-upload-inner ts-forms">
                                                                                <input type="file" name="video_curso"
                                                                                       id="video_curso" class="form-control"
                                                                                       accept="video/*" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <br><br>
                                                                    <div class="col-sm-6">
                                                                        <span>Documentos del curso</span>
                                                                        <div class="file-upload-inner ts-forms">
                                                                            <input type="file" name="archivo_apoyo"
                                                                                   id="archivo_apoyo" class="form-control"
                                                                                   accept="application/pdf">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <br><br>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <?php echo csrf_field(); ?>
                                                                    <input type="hidden" id="editar_online" name="editar_online" value="0">
                                                                    <input type="hidden" id="id_cursosonline" name="id_cursosonline" value="0">
                                                                    <button type="submit" id="enviar_curso"
                                                                            class="btn btn-primary waves-effect waves-light">
                                                                        Enviar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if(isset($alert)): ?>
                                                            <div class="row" style="padding: 10px;">
                                                                <div class="col-lg-12">
                                                                    <div class="alert alert-<?php echo e($alert->type); ?>">
                                                                        <button class="close" data-dismiss="alert">
                                                                            <span>&times;</span></button>
                                                                        <?php echo e($alert->message); ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="product-tab-list tab-pane fade" id="cursos_online">
                                    <?php if(isset($cursos)): ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="courses-area">
                                                                <div class="container-fluid courses-inner  table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                                                                    <div class="row">
                                                                        <?php $contador = 0; ?>
                                                                        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($contador == 4): ?>
                                                                                <div class='row mg-b-15'>
                                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                                                                         id="<?php echo e($curso->id_cursosonline); ?>">
                                                                                        <div class="courses-inner res-mg-b-30">
                                                                                            <div class="courses-title">
                                                                                                <a href="#">
                                                                                                    <?php if($curso->nombre_documento != null): ?>
                                                                                                        <img src="<?php echo e(asset('img/documentos/'.$curso->nombre_documento)); ?>"
                                                                                                             alt=""></a>
                                                                                                <?php else: ?>
                                                                                                    <img src="<?php echo e(asset('img/documentos/default.jpeg')); ?>"
                                                                                                         alt=""></a>
                                                                                                <?php endif; ?>
                                                                                                <h2><?php echo e($curso->tema); ?></h2>
                                                                                                <h5><?php echo e($curso->nom_curso); ?></h5>
                                                                                            </div>
                                                                                            <div class="course-des">
                                                                                                <p>
                                                                                                    <span><i class="fa fa-clock"></i></span>
                                                                                                    <b>Profesor:</b> <?php echo e($curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador); ?>

                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="product-buttons">
                                                                                                <button type="button"
                                                                                                        class="button-default cart-btn ver_cursos"
                                                                                                        id="<?php echo e($curso->id_cursosonline); ?>"
                                                                                                        data-target="#modal-curso"
                                                                                                        data-toggle="modal">
                                                                                                    Ver
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                        class="button-blue cart-btn editar_curso" id="<?php echo e($curso->id_cursosonline); ?>">
                                                                                                    Editar
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php else: ?>
                                                                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                                                                             id="<?php echo e($curso->id_cursosonline); ?>">
                                                                                            <div class="courses-inner res-mg-b-30">
                                                                                                <div class="courses-title">
                                                                                                    <a href="#">
                                                                                                        <?php if($curso->nombre_documento != null): ?>
                                                                                                            <img src="<?php echo e(asset('img/documentos/'.$curso->nombre_documento)); ?>"
                                                                                                                 alt=""></a>
                                                                                                    <?php else: ?>
                                                                                                        <img src="<?php echo e(asset('img/documentos/default.jpeg')); ?>"
                                                                                                             alt=""></a>
                                                                                                    <?php endif; ?>
                                                                                                    <br><br>
                                                                                                    <h4><?php echo e($curso->tema); ?></h4>

                                                                                                </div>
                                                                                                <div class="course-des">
                                                                                                    <p>
                                                                                                        <span><i class="fa fa-clock"></i></span>
                                                                                                        <b>Profesor:</b> <?php echo e($curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador); ?>

                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="product-buttons">
                                                                                                    <button type="button"
                                                                                                            class="button-default cart-btn ver_cursos"
                                                                                                            id="<?php echo e($curso->id_cursosonline); ?>"
                                                                                                            data-target="#modal-curso"
                                                                                                            data-toggle="modal">
                                                                                                        Ver
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                            class="button-blue cart-btn editar_curso" id="<?php echo e($curso->id_cursosonline); ?>">
                                                                                                        Editar
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $contador++;
                                                                                        IF ($contador == 4) {
                                                                                            echo '</div>';
                                                                                            $contador = 0;
                                                                                        }
                                                                                        ?>
                                                                                    <?php endif; ?>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <!--<div class="product-tab-list tab-pane fade" id="INFORMATION">
                                                <div class="row">

                                                </div>
                                            </div> -->
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

                <div class="modal fade" tabindex="-1" role="dialog" name="modal-curso" id="modal-curso">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: whiteSmoke;" >
                                <h2 class="modal-title">Cursos</h2>
                            </div>
                            <div class="modal-body" style="height: 330px">
                                    <div class="box-body " >
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="imagen_curso_modal" src="" class="img-fluid" width="60%"></div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <h1 id="tema_modal"></h1>
                                            <h5 id="nombre_curso_modal"></h5>
                                            <br>
                                            <p id="fecha_hora_modal"></p>
                                            <p id="profesor_modal"></p>
                                            <p id="ubicacion_modal"></p>
                                            <p id="descripcion_modal"></p>
                                            <p id="video_modal"></p>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer" style="background-color: whiteSmoke;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>




             <!--   <div class="modal fade" id="modal-curso" tabindex="-1" role="dialog">
                    <div class="modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-header" style="background-color: whiteSmoke;">
                                    <h2 class="modal-title">Cursos</h2>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="imagen_curso_modal" src="" class="img-fluid" width="60%"></div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                        <h1 id="tema_modal"></h1>
                                        <h5 id="nombre_curso_modal"></h5>
                                        <br>
                                        <p id="fecha_hora_modal"></p>
                                        <p id="profesor_modal"></p>
                                        <p id="ubicacion_modal"></p>
                                        <p id="descripcion_modal"></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section>

  <!--  <script>
        var reproductor = videojs('fm-video', {
            fluid: true
        });
    </script>-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/cursos/cursos_online.blade.php ENDPATH**/ ?>