<?php $__env->startSection('content'); ?>
    <section>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica" id="agregar_usuarios">Usuarios</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">

                                        <div class="col-md-offset-12">
                                            <div class="payment-adress" >
                                                <br>
                                                <button type="button" class="btn btn-info pull-right" data-toggle="modal" name="agregar_usuario" id="agregar_usuario" data-target="#modal_usuario">Agregar usuario</button>
                                                <input type="hidden" name="_token"
                                                       id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                            </div>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <div id="toolbar">
                                                            <select class="form-control dt-tb">
                                                                <option value="all">Exportar todo</option>
                                                                <option value="selected">Exportar Seleccionados
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <table id="table" data-toggle="table"
                                                               data-pagination="true"
                                                               data-show-columns="true"
                                                               data-search="true"
                                                               data-show-pagination-switch="true"
                                                               data-show-toggle="true" data-resizable="true"
                                                               data-cookie="true"
                                                               data-cookie-id-table="saveId"
                                                               data-show-export="true"
                                                               data-click-to-select="true"
                                                               data-toolbar="#toolbar">
                                                            <thead>
                                                            <tr>
                                                                <th data-field="state"
                                                                    data-checkbox="true"></th>
                                                                <th class="sorting_asc" tabindex="0" rowspan="1"
                                                                    colspan="1">Nombre
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Apellido paterno
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Apellido materno
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Perfil
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Área
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Puesto
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Correo
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Acciones
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $detalle_registrousuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1"><?php echo e($registro->nombre); ?></td>
                                                                    <td class="sorting_1"><?php echo e($registro->apellido_paterno); ?></td>
                                                                    <td class="sorting_1"><?php echo e($registro->apellido_materno); ?></td>
                                                                    <td class="sorting_1"><?php echo e($registro->nom_perfil); ?></td>
                                                                    <td class="sorting_1"><?php echo e($registro->nom_dir); ?></td>
                                                                    <td class="sorting_1"><?php echo e($registro->nom_puesto); ?></td>
                                                                    <td class="sorting_1"><?php echo e($registro->correo_electronico); ?></td>
                                                                    <td class="sorting_1">
                                                                        <button type="button"
                                                                                title="Editar registro"
                                                                                class="pd-setting-ed">
                                                                            <a href='edit_user/<?php echo e($registro->id_usuario); ?>'>
                                                                                <i class="fa fa-pencil-square-o"> </i>
                                                                            </a></button>
                                                                        <button class="btn-delete pd-setting-ed btn-delete"
                                                                                type="button"
                                                                                data-toggle="modal"
                                                                                data-target="#DangerModalalert"
                                                                                name="delete_user"
                                                                                id="delete_user"
                                                                                data-toggle="tooltip"
                                                                                title="Eliminar registro">
                                                                            <i class="fa fa-fw fa-trash-o"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div id="dropzone1" class="pro-ad add-professors">
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

            <!-- Modal Agregar usuarios   -->
            <div class="modal" tabindex="-1" role="dialog" name="modal_usuario" id="modal_usuario">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: whiteSmoke;">
                            <h2 class="modal-title">Agregar usuario</h2>
                        </div>
                        <div class="modal-body">
                            <div class="col-6">
                                <div class="box-body">
                                    <form action="<?php echo e(route('usuarios_registro')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input name="nombre" id="nombre" type="text"
                                                           <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->nombre); ?>"
                                                           <?php endif; ?>
                                                           required="true"
                                                           class="form-control"
                                                           placeholder="Nombre"
                                                           value="<?php echo e(old('nombre')); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input name="apat" id="apat" type="text"
                                                           <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_paterno); ?>"
                                                           <?php endif; ?>
                                                           required="true"
                                                           class="form-control"
                                                           placeholder="Apellido paterno"
                                                           value="<?php echo e(old('apat')); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input name="amat" id="amat" type="text"
                                                           <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_materno); ?>"
                                                           <?php endif; ?>
                                                           required="true"
                                                           class="form-control"
                                                           placeholder="Apellido materno"
                                                           value="<?php echo e(old('amat')); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control"
                                                            name="area"
                                                            required="true"
                                                            id="area">
                                                        <option value="">Área a la que pertenece..
                                                        <?php $__currentLoopData = $cat_direcciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $direccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($direccion->id_direccion); ?>"
                                                                    <?php if(isset($edit_user) && $edit_user->id_direcciones == $direccion->id_direccion): ?> selected <?php endif; ?>><?php echo e($direccion->nom_dir); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">

                                                    <select class="form-control" name="puesto" required="true"
                                                            id="puesto">
                                                        <option value="">Seleccionar puesto..
                                                        <?php if(isset($edit_user)): ?>
                                                            <?php $__currentLoopData = $cat_puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($puesto->id_puesto); ?>" selected><?php echo e($puesto->nom_puesto); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <!--<div class="form-group">
                                                <input name="extension" type="text"
                                                       class="form-control"
                                                       required="true"
                                                       onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                       placeholder="Extensión telefónica"
                                                       value="//">
                                                <div style="color: #fe4138"> !!}</div>

                                                </div>-->
                                                <div class="form-group">
                                                    <span class="spantext" style="color: darkgrey;">Perfil del usuario</span>
                                                    <select class="form-control"
                                                            name="perfil"
                                                            id="perfil">
                                                        <option value="">Seleccionar perfil
                                                            usuario..
                                                        </option>
                                                        <?php $__currentLoopData = $cat_perfiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perfiles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($perfiles->id_perfil); ?>"
                                                                    <?php if(old('perfil')==$perfiles->id_perfil): ?>selected="selected" <?php endif; ?>
                                                                    <?php if(isset($edit_user) && $edit_user->id_perfil == $perfiles->id_perfil): ?> selected <?php endif; ?>><?php echo e($perfiles->nom_perfil); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input name="correo" type="email"
                                                           <?php if(isset($edit_user)): ?>
                                                           value="<?php echo e($edit_user->correo_electronico); ?>"
                                                           <?php endif; ?>
                                                           class="form-control"
                                                           required="true" placeholder="Correo"
                                                           value="<?php echo e(old('correo')); ?>">
                                                    <div style="color: #fe4138"><?php echo $errors->first('correo', '<small>:message</small>'); ?></div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="contrasena" type="password"
                                                           <?php if(!isset($edit_user)): ?> required="true"
                                                           <?php endif; ?>
                                                           class="form-control"
                                                           placeholder="Contraseña"
                                                           value="<?php echo e(old('contrasena')); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <input name="confirma-contrasena"
                                                           type="password"
                                                           <?php if(!isset($edit_user)): ?> required="true"
                                                           <?php endif; ?>
                                                           class="form-control"
                                                           placeholder="Confirma contraseña"
                                                           value="<?php echo e(old('confirma-contrasena')); ?>">
                                                </div>


                                            </div>
                                            <?php if(isset($edit_user)): ?>
                                                <p><b>Nota:</b> Si no requiere cambiar la
                                                    contraseña,
                                                    dejar en blanco el campo "Contraseña" y "Repetir
                                                    contraseña"</p>

                                            <?php endif; ?>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress">
                                                        <br>


                                                        <input type="hidden" name="_token"
                                                               id="csrf-token"
                                                               value="<?php echo e(csrf_token()); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row" style="display: none; padding: 10px;" id="alert-modal">
                                <div class="col-6">
                                    <div class="alert alert-warning" id="alerta">
                                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="background-color: whiteSmoke;">

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Agregar</button>
                            </form>
                                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Modal Agregar usuarios  -->



        <div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro" style="align:center;width:200px"></span>
                        <h2 style="text-align: center">Aviso!</h2><br><br>
                        <h4 style="text-align: center">¿Estas seguro de eliminar el usuario</h4>
                        <h4 style="text-align: center"><?php echo e(' '.$registro->nombre .' '.$registro->apellido_paterno.' '.$registro->apellido_materno); ?> ?</h4>
                    </div>
                    <div class="modal-footer danger-md">
                        <button class="btn btn-danger" data-dismiss="modal" href="#" style="text-align: left">Cancel</button><br><br>
                        <form action="<?php echo e(route('delete_user', $registro->id_usuario)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <button onclick="document.reload()"
                                    class="btn btn-info btn-delete"
                                    type="button" data-toggle="modal"
                                    data-target="#DangerModalalert"
                                    name=delete_user"
                                    id="delete_user"
                                    data-toggle="tooltip"
                                    title="Aceptar"
                            >Aceptar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="<?php echo e(asset('js/form_academia.js')); ?>" charset="utf-8"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.btn-delete').on('click', function(e) {
            $(this).parents('form:first').submit()
        })
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/fojal.net/httpdocs/fojal_academia/resources/views/usuarios/usuarios.blade.php ENDPATH**/ ?>