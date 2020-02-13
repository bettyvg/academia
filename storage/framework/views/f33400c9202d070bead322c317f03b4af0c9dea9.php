<?php $__env->startSection('content'); ?>

    <section>

        <form action="<?php echo e(route('editar_tema', $tema->id_tema)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificar tema</a></li>
                                </ul>
                                <br>
                                <input type="hidden" id="id_capacitador_edit" name="id_capacitador_edit">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Sesión</span>
                                        <input name="nom_cap_edit" id="numero_sesion"
                                               <?php if(isset($tema)): ?> value="<?php echo e($tema->num_sesion); ?>"
                                               <?php endif; ?> type="text"
                                               required="true"
                                               class="form-control "
                                               placeholder="Sesión">
                                    </div>
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Tema</span>
                                        <input name="apellido_paterno_edit" id="tema"
                                               <?php if(isset($tema)): ?> value="<?php echo e($tema->tema); ?>"
                                               <?php endif; ?> type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Tema">
                                    </div>

                                </div>
                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit"
                                                class="btn btn-info waves-effect waves-light">Guardar
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo e(route('temas')); ?>" type="button" class="btn btn-default pull-right"
                                           name="regresar">Cancelar</a>
                                    </div>
                                    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

        <?php $__env->stopSection(); ?>

    </section>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/cat_temas/edit_tema.blade.php ENDPATH**/ ?>