<?php $__env->startSection('content'); ?>

    <section>
        <?php if(isset($alert)): ?>
            <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
                <div class="col-12">
                    <div  class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo e($alert->message); ?>

                    </div>
                </div>
                <?php endif; ?>
        <form action="<?php echo e(route('edit_registrop.update', $detalle_registrop->id_registro)); ?>" method="post" class="form-horizontal">

             <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
             <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica">Editar Registro</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad add-professors">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Nombre</span>
                                                                    <input name="nombre_edit" id="nombre_edit" type="text"
                                                                           class="form-control" <?php if(isset($detalle_registrop)): ?> value="<?php echo e($detalle_registrop->nombre); ?>"<?php endif; ?>
                                                                           placeholder="Nombre"
                                                                           value="<?php echo e(old('nombre')); ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Apellido paterno</span>
                                                                    <input name="apellido_paterno_edit" id="apellido_paterno_edit" type="text"
                                                                           class="form-control" <?php if(isset($detalle_registrop)): ?> value="<?php echo e($detalle_registrop->apellido_paterno); ?>"<?php endif; ?>
                                                                           placeholder="Apellido paterno"
                                                                           value="<?php echo e(old('apellido_paterno')); ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Apellido materno</span>
                                                                    <input name="apellido_materno_edit" id="apellido_materno_edit" type="text"
                                                                           class="form-control" <?php if(isset($detalle_registrop)): ?> value="<?php echo e($detalle_registrop->apellido_materno); ?>"<?php endif; ?>
                                                                           placeholder="Apellido materno"
                                                                           value="<?php echo e(old('apellido_materno')); ?>">
                                                                </div>
                                                                <div class="form-group " >
                                                                    <span class="spantext" style="color: darkgrey;">Genero</span>
                                                                    <select name="genero_edit" id="genero_edit" class="form-control" value="<?php echo e(old('genero')); ?>">
                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                                        <option value="Masculino" <?php if(isset($detalle_registrop) && $detalle_registrop->genero == "Masculino"): ?>  selected="selected"<?php endif; ?> <?php if(old('genero')=='Masculino'): ?> selected="selected"<?php endif; ?>>Masculino</option>
                                                                        <option value="Femenino" <?php if(isset($detalle_registrop) && $detalle_registrop->genero == "Femenino"): ?>  selected="selected"<?php endif; ?> <?php if(old('genero')=='Femenino'): ?> selected="selected"<?php endif; ?>>Femenino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Pais de nacimiento</span>
                                                                    <select class="form-control select2"  name="id" id="id">
                                                                        <option value="146" selected="" >México</option>
                                                                        <?php $__currentLoopData = $cat_pais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e(($pais->id)); ?>"
                                                                                    <?php if(isset($detalle_registrop) && $detalle_registrop->id == $pais->id): ?>  selected="selected" value="<?php echo e($detalle_registrop->id); ?>"<?php endif; ?>
                                                                                    <?php if(old('id')==$pais->id): ?> selected="selected"<?php endif; ?>><?php echo e(($pais->nombre)); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group" >
                                                                    <span class="spantext" style="color: darkgrey;">Estado de nacimiento</span>
                                                                    <select  class="form-control select2"  name="cve_ent" id="cve_ent">
                                                                        <option value="none" selected="" disabled="">Estado de nacimiento</option>
                                                                        <?php $__currentLoopData = $cat_entidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entidades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e(($entidades->cve_ent)); ?>"
                                                                                    <?php if(isset($detalle_registrop) && $detalle_registrop->cve_ent == $entidades->cve_ent): ?> selected="selected" value="<?php echo e(($detalle_registrop->cve_ent)); ?>" <?php endif; ?>
                                                                                    <?php if(old('cve_compuesta_ent_mun')==$entidades->cve_ent): ?> selected="selected"<?php endif; ?>><?php echo e(($entidades->nom_ent)); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Municipio de donde nos visita</span>
                                                                    <select  class="form-control select2"  name="cve_compuesta_ent_mun" id="cve_compuesta_ent_mun">
                                                                        <option value="none" selected="" disabled="">Municipio de donde nos visita</option>
                                                                        <?php $__currentLoopData = $cat_municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e(($municipios->cve_compuesta_ent_mun)); ?>"
                                                                                    <?php if(isset($detalle_registrop) && $detalle_registrop->cve_compuesta_ent_mun == $municipios->cve_compuesta_ent_mun): ?> selected="selected" value="<?php echo e($detalle_registrop->cve_compuesta_ent_mun); ?>" <?php endif; ?>
                                                                                    <?php if(old('cve_compuesta_ent_mun')==$municipios->cve_compuesta_ent_mun): ?> selected="selected"<?php endif; ?>><?php echo e(($municipios->nom_mun)); ?></option>

                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group" >
                                                                    <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                                                    <input name="fecha_nacimiento_edit" id="fecha_nacimiento_edit" type="date"
                                                                           class="form-control" <?php if(isset($detalle_registrop)): ?> value="<?php echo e($detalle_registrop->fecha_nacimiento); ?>"<?php endif; ?>
                                                                           value="<?php echo e(old('fecha_nacimiento')); ?>">
                                                                </div>

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Correo</span>
                                                                    <input name="correo_edit" id="correo_edit" type="email"
                                                                           class="form-control" <?php if(isset($detalle_registrop)): ?> value="<?php echo e($detalle_registrop->correo); ?>"<?php endif; ?>
                                                                           placeholder="Correo"
                                                                           value="<?php echo e(old('correo')); ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Teléfono</span>
                                                                    <input name="telefono_edit" id="telefono_edit" type="text"
                                                                           onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                                           <?php if(isset($detalle_registrop)): ?> value="<?php echo e($detalle_registrop->telefono); ?>"<?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Teléfono"
                                                                           value="<?php echo e(old('telefono')); ?>">
                                                                </div>

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Escolaridad</span>
                                                                    <select  class="form-control select2"  name="id_escolaridad" id="id_escolaridad">
                                                                        <option value="none" selected="" disabled="">Escolaridad</option>
                                                                        <?php $__currentLoopData = $cat_escolaridad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $escolaridad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($escolaridad->id_escolaridad); ?>" <?php if(isset($detalle_registrop) && $detalle_registrop->id_escolaridad == $escolaridad->id_escolaridad): ?> selected value="<?php echo e($detalle_registrop->id_escolaridad); ?>"<?php endif; ?>><?php echo e($escolaridad->nivel." ".$escolaridad->estatus); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Ocupación</span>
                                                                    <input name="ocupacion_edit" id="ocupacion_edit" type="text"
                                                                           <?php if(isset($detalle_registrop)): ?>  value="<?php echo e($detalle_registrop->ocupacion); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Ocupación"
                                                                           value="<?php echo e(old('ocupacion')); ?>">
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <br>
                                                                    <button type="submit"
                                                                            class="btn btn-primary waves-effect waves-light" id="guardar">
                                                                        Guardar
                                                                    </button>
                                                                    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\academia\resources\views/registro_platica/edit_registrop.blade.php ENDPATH**/ ?>