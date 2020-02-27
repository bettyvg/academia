<?php $__env->startSection('content'); ?>

    <section>

        <form action="<?php echo e(route('editar_instituciones', $instituciones->id_institucion)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificar institución</a></li>
                                </ul>
                                <br>

                                <div class="row">
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Nombre de Institución</span>
                                        <input name="nombre_inst_edit" id="nombre_inst_edit"
                                               <?php if(isset($instituciones)): ?> value="<?php echo e($instituciones->nombre_inst); ?>"
                                               <?php endif; ?> type="text"
                                               required="true"
                                               class="form-control "
                                               placeholder="Nombre Institución">
                                    </div>
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Dirección</span>
                                        <input name="direccion_edit" id="direccion_edit"
                                               <?php if(isset($instituciones)): ?> value="<?php echo e($instituciones->direccion); ?>"
                                               <?php endif; ?> type="text"                                       
                                               class="form-control "
                                               placeholder="Dirección">
                                    </div>
            						<div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Contacto</span>
                                        <input name="contacto_edit" id="contacto_edit"
                                               <?php if(isset($instituciones)): ?> value="<?php echo e($instituciones->contacto); ?>"
                                               <?php endif; ?> type="text"
                                               class="form-control "
                                               placeholder="Contacto">
                                    </div>
                                    <div class="col-sm-10">
                                        <br>
                                        <span class="spantext" style="color: darkgrey;">Teléfono</span>
                                        <input name="telefono_edit" id="telefono_edit"
                                               <?php if(isset($instituciones)): ?> value="<?php echo e($instituciones->telefono); ?>"
                                               <?php endif; ?> type="number"                                             
                                               class="form-control "
                                               placeholder="Teléfono">
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
                                        <a href="<?php echo e(route('instituciones')); ?>" type="button" class="btn btn-default pull-right"
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\academia\resources\views/cat_instituciones/edit_instituciones.blade.php ENDPATH**/ ?>