<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('estiloscard.css')); ?>">
    <script src="<?php echo e(asset('./js/inscripcioncursos.js')); ?>"></script>
    <?php
    $user = Session::get('usuario');
    ?>
    <section>
       <div class="analytics-sparkle-area" >
            <div class="container-fluid">
                <br>
                <br>
                <div class="row" style="margin: 30px 0px 0px 0px">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <?php if(isset($inscritos_municipio)): ?>
                                    <?php $__currentLoopData = $inscritos_municipio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <h5>Inscritos en tu municipio</h5>
                                        <br>
                                        <h2><span class="tuition-fees">Total Inscritos en <?php echo e($total->nom_mun); ?></span>
                                            <span class="counter"><?php echo e($total->total); ?></span>
                                        </h2>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Unidades económicas en tu municipio</h5>
                                <h2><span class="counter">30</span> <span class="tuition-fees">....</span>
                                </h2>
                                <span class="text-info">30%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:30%;"><span class="sr-only">30% Completados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Creditos otrogados en tu municipio</h5>
                                <h2><span class="counter">10</span> <span class="tuition-fees">....</span>
                                </h2>
                                <span class="text-info">10%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:10%;"><span class="sr-only">30% Completados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Indice de empleo en tu municipio</h5>
                                <h2><span class="counter">90</span> <span class="tuition-fees">....</span>
                                </h2>
                                <span class="text-info">90%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:90%;"><span class="sr-only">30% Completados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 10px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st" id="tabs">
                            <ul id="myTabedu1" class="tab-review-design">
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="agregar">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone" class="pro-ad addcoursepro">
                                                    <h3>Todos los cursos</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<div class="row container">
                                <?php $contador = 0; ?>
                                <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($contador == 4): ?>
                                <div class="row  mg-b-15">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 container">
                                    <div class="card" id="<?php echo e($curso->id_cursosonline); ?>">
                                    <a href="#">
                                        <?php if($curso->nombre_documento != null ): ?>
                                            <img src="<?php echo e(asset('img/documentos/'.$curso->nombre_documento)); ?>"
                                                 alt=""></a>
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('img/documentos/default.jpeg')); ?>"
                                             alt=""></a>
                                    <?php endif; ?>
                                        <br><br>
                                    <h4 style="text-align: left; padding-left: 20px"><?php echo e($curso->nombre_curso); ?></h4>
                                        <h5 style="color: darkgrey; text-align: left; padding-left: 20px"><?php echo e($curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador); ?></h5>
                                        <button type="button" class="button-default cart-btn ver_cursos" id="<?php echo e($curso->id_cursosonline); ?>">Ver detalles</button>
                                    </div>
                                    </div>
                                    <?php else: ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="card" id="<?php echo e($curso->id_cursosonline); ?>" >
                                                <a href="<?php echo e(url('cursodetalle', ['id_cursonline' => $curso->id_cursosonline])); ?>">
                                                    <?php if($curso->nombre_documento != null): ?>
                                                        <img src="<?php echo e(asset('img/documentos/'.$curso->nombre_documento)); ?>"
                                                             alt=""></a>
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('img/documentos/default.jpeg')); ?>"
                                                         alt=""></a>
                                                <?php endif; ?>
                                                <br><br>

                                                <h4 style="text-align: center"><?php echo e($curso->nombre_curso); ?></h4>
                                                <h5 style="color: darkgrey; text-align: center; padding-left: 10px"><?php echo e($curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador); ?></h5>
                                                    <a href="<?php echo e(url('cursodetalle', ['id_cursonline' => $curso->id_cursosonline])); ?>" type="button" class="btn2 btn-primary2 btn_inscripcion" data-id="<?php echo e($curso->id_cursosonline); ?>">Ver video</a>
                                                <button type="button" class="button-default cart-btn ver_cursos btn btn-secondary" id="<?php echo e($curso->id_cursosonline); ?>" data-target="#modal-curso"
                                                        data-toggle="modal">Acerca del curso</button>


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
                <script src="<?php echo e(asset('js/cursos_online.js')); ?>"></script>
                <script src="<?php echo e(asset('js/notify.min.js')); ?>"></script>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" name="modal-curso" id="modal-curso">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: whiteSmoke;" >
                        <h2 class="modal-title">Curso</h2>
                    </div>
                    <div class="modal-body" style="height: 230px">
                        <div class="box-body" >
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="imagen_curso_modal" src="" class="img-fluid" width="60%"></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h1 id="nombre_curso_modal"></h1>
                                <h5 id="tema_modal"></h5>
                                <br>
                                <p id="profesor_modal"></p>
                                <p id="descripcion_modal"></p>
                            </div>
                            <input type="hidden" name="_token" id="id_user" value ="<?php echo e($user->id_usuario); ?>" >
                            <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="hidden" name="_token" id="id_cursosonline" value="">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="modal-footer" style="background-color: whiteSmoke;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id='btn_cerrar'>Cerrar</button>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/fojal.net/httpdocs/fojal_academia/resources/views/inicio2.blade.php ENDPATH**/ ?>