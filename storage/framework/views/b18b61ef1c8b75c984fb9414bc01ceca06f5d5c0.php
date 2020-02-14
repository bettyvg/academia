<script src="<?php echo e(asset('js/registroweb.js')); ?>" charset="utf-8"></script>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Academia Fojal | Registro</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/stylesnuevoresgistro.css')); ?>">

</head>

<body>
<form action="nuevoregistro" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="container" id="registration-form">
    <div class="frm2">
        <br>
        <div style="text-align: center;"><img src="img/logo/logo.png" width="250px" style="margin-bottom: 15px"></div>
        <h1 >Bienvenido</h1>
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
                                            <input name="nombre" id="nombre" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Nombre"
                                                   value="<?php echo e(old('nombre')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="apellido_paterno" id="apellido_paterno" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Apellido paterno"
                                                   value="<?php echo e(old('apellido_paterno')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="apellido_materno" id="apellido_materno" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Apellido materno"
                                                   value="<?php echo e(old('apellido_materno')); ?>">
                                        </div>
                                        <div class="form-group" >
                                            <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                            <input name="fecha_nacimiento" id="fecha_nacimiento" type="date"
                                                   class="form-control"
                                                   required="true"
                                                   value="<?php echo e(old('fecha_nacimiento')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="edad" id="edad" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Edad"
                                                   value="<?php echo e(old('edad')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group " required="true">
                                            <select name="genero" id="genero" class="form-control" value="<?php echo e(old('genero')); ?>">
                                                <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                <option value="Masculino" <?php if(old('genero')=='Masculino'): ?> selected="selected"<?php endif; ?>>Masculino</option>
                                                <option value="Femenino" <?php if(old('genero')=='Femenino'): ?> selected="selected"<?php endif; ?>>Femenino</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input name="rfc" id="rfc" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="RFC"
                                                   value="<?php echo e(old('rfc')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="domicilio" id="domicilio" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Domicilio"
                                                   value="<?php echo e(old('domicilio')); ?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <input name="num_ext" id="num_ext" type="text"
                                                   class="form-control"
                                                   required="true" placeholder="Numero Ext."
                                                   value="<?php echo e(old('num_ext')); ?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <input name="num_int" id="num_int" type="text"
                                                   class="form-control"
                                                   required="true" placeholder="Numero Int."
                                                   value="<?php echo e(old('correo')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="correo" id="correo" type="email"
                                                   class="form-control"
                                                   required="true" placeholder="Correo"
                                                   value="<?php echo e(old('correo')); ?>">
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <H3>Datos de la empresa</H3>
                                <br>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <br>
                                        <input name="rfc_empresa" id="rfc_empresa" type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="RFC"
                                               value="<?php echo e(old('rfc')); ?>">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <br>
                                        <input name="nombre_empresa" id="nombre_empresa" type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Nombre de la empresa"
                                               value="<?php echo e(old('nombre_empresa')); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <br>
                                        <input name="calle" id="calle" type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Calle"
                                               value="<?php echo e(old('calle')); ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <br>
                                        <input name="no_ext" id="no_ext" type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Numero Exterior."
                                               value="<?php echo e(old('no_ext')); ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <br>
                                        <input name="no_int" id="no_int" type="text"
                                               required="true"
                                               class="form-control"
                                               placeholder="Numero interior."
                                               value="<?php echo e(old('no_int')); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="cp" id="cp" type="text"
                                               required="true"
                                               placeholder="Código Postal"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select required='true' class="form-control select2"  name="colonia" id="colonia" value="<?php echo e('colonia'); ?>">
                                            <option value="none" selected="" disabled="">Seleccionar colonia..</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" >
                                        <select required='true' class="form-control select2"  name="estado" id="estado" value="<?php echo e(old('cve_ent')); ?>">
                                            <option value="none" selected="" disabled="">Selecionar municipio..</option>
                                            <?php $__currentLoopData = $cat_municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($municipios->cve_ent <='9'): ?> value="<?php echo e("0".$municipios->cve_ent); ?>"
                                                        <?php if(old('cve_ent')=="0".$municipios->cve_ent): ?>selected="selected" <?php endif; ?>
                                                        <?php else: ?> value="<?php echo e($municipios->cve_ent); ?>" <?php if(old('d_estado')==($municipios->cve_ent)): ?>selected="selected"<?php endif; ?>
                                                        <?php endif; ?>><?php echo e(($municipios->D_mnpio)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span class="spantext" style="color: darkgrey;">Sector</span>
                                        <select name="sector" id="sector" class="form-control select2" required>
                                            <option value="">Seleccionar..</option>
                                            <?php $__currentLoopData = $sectores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($sector->codigo_sector); ?>" <?php if(isset($prospecto) && $prospecto->codigo_sector == $sector->codigo_sector): ?> selected <?php endif; ?>><?php echo e($sector->descripcion_sector); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="spantext" style="color: darkgrey;">Subsector</span>
                                        <select name="subsector" id="subsector" class="form-control select2" required>
                                            <option value="">Seleccionar..</option>
                                            <?php $__currentLoopData = $subsectores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($subsector->codigo_subsector); ?>" <?php if(isset($prospecto) && $prospecto->codigo_subsector == $subsector->codigo_subsector): ?> selected <?php endif; ?>><?php echo e($subsector->descripcion_subsector); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="spantext" style="color: darkgrey;">Rama</span>
                                        <select name="rama" id="rama" class="form-control select2" required>
                                            <option value="">Seleccionar..</option>
                                            <?php $__currentLoopData = $ramas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($rama->codigo_rama); ?>" <?php if(isset($prospecto) && $prospecto->codigo_rama == $rama->codigo_rama): ?> selected <?php endif; ?>><?php echo e($rama->descripcion_rama); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span class="spantext" style="color: darkgrey;">Subrama</span>
                                        <select name="subrama" id="subrama" class="form-control select2" required>
                                            <option value="">Seleccionar..</option>
                                            <?php $__currentLoopData = $subramas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subrama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($subrama->codigo_subrama); ?>" <?php if(isset($prospecto) && $prospecto->codigo_subrama == $subrama->codigo_subrama): ?> selected <?php endif; ?>><?php echo e($subrama->descripcion_subrama); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="spantext" style="color: darkgrey;">Actividad</span>
                                        <select name="clase_actividad" id="clase_actividad" class="form-control select2" required>
                                            <option value="">Seleccionar..</option>
                                            <?php $__currentLoopData = $clase_actividad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clase_actividades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($clase_actividades->codigo_clase); ?>" <?php if(isset($prospecto) && $prospecto->codigo_clase == $clase_actividades->codigo_clase): ?> selected <?php endif; ?>><?php echo e($clase_actividades->descripcion_clase); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-4">
                                        <br>
                                        <input name="telefono" id="telefono" type="text"
                                               onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                               <?php if(isset($registro)): ?> value="<?php echo e($registro->telefono); ?>" <?php endif; ?>
                                               class="form-control"
                                               placeholder="Teléfono"
                                               value="<?php echo e(old('telefono')); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="payment-adress">
                                            <br>
                                            <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light" id="guardar">
                                                Enviar
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
</form>


    </div>
</div>
</body>

</html>
<?php /**PATH C:\laragon\www\academia\resources\views/usuarios/nuevoregistro2.blade.php ENDPATH**/ ?>