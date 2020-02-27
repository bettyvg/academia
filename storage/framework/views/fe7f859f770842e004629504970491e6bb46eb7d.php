<?php $__env->startSection('content'); ?>
    <section>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica" id="agregar_capacitador">Capacitador</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">

                                    <div class="col-md-offset-12">
                                        <div class="payment-adress">
                                            <br>
                                            <button type="button" class="btn btn-info pull-right" data-toggle="modal"
                                                    name="agregar_capacitador" id="agregar_capacitador"
                                                    data-target="#modal_capacitador">Agregar capacitador
                                            </button>
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
                                                               data-search="true"
                                                               data-show-columns="true"
                                                               data-show-pagination-switch="true"
                                                               data-show-toggle="true" data-resizable="true"
                                                               data-cookie="true"
                                                               data-cookie-id-table="saveId"
                                                               data-show-export="true"
                                                               data-click-to-select="true"
                                                               data-toolbar="#toolbar">
                                                            <thead>
                                                            <tr>
                                                                <th data-field="state" data-checkbox="true"></th>
                                                                <th class="sorting_asc" tabindex="0" rowspan="1"
                                                                    colspan="1">Nombre
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Apellido paterno
                                                                </th>
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Apellido materno
                                                                </th>
                                                                <!--<th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >RFC</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >telefono</th>-->
                                                                <th class="sorting" tabindex="0" rowspan="1"
                                                                    colspan="1">Acciones
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $capacitadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capacitador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1"><?php echo e($capacitador->nom_cap); ?></td>
                                                                    <td class="sorting_1"><?php echo e($capacitador->apellido_paterno); ?></td>
                                                                    <td class="sorting_1"><?php echo e($capacitador->apellido_materno); ?></td>
                                                                    <td class="sorting_1">


                                                                        <button type="button"
                                                                                title="Editar registro"
                                                                                class="pd-setting-ed">
                                                                            <a href='cat_capacitadores/<?php echo e($capacitador->id_capacitador); ?>/edit'>
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

        <!-- Modal Agregar capacitores   -->
        <form action="<?php echo e(route('cat_capacitadores.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="modal" tabindex="-1" role="dialog" name="modal_capacitador" id="modal_capacitador">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: whiteSmoke;">
                            <h2 class="modal-title">Agregar capacitador</h2>
                        </div>
                        <div class="modal-body">
                            <div class="col-6">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <br>
                                            <input name="nom_cap" id="nom_cap" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Nombre">
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <input name="apellido_paterno" id="apellido_paterno" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Apellido paterno">
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <input name="apellido_materno" id="apellido_materno" type="text"
                                                   required="true"
                                                   class="form-control"
                                                   placeholder="Apellido materno">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="estatus" id="estatus"
                                                   value="activo">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <br>
                                            <select name="genero" id="genero" class="form-control">
                                                <option value="none" selected="" disabled="" style="color: darkgrey;">
                                                    Genero
                                                </option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <input name="correo" id="correo" type="email"
                                                   class="form-control"
                                                   placeholder="Correo">
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                            <input name="fechanacimiento" id="fechanacimiento" type="date"
                                                   class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <input name="rfc" id="rfc" type="text"
                                                   class="form-control"
                                                   placeholder="RFC">
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <input name="telefono" id="telefono" type="number"
                                                   class="form-control"
                                                   placeholder="Teléfono">
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

                            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Agregar capacitores  -->


        <form action="./delete_capacitador/<?php echo e($capacitador->id_capacitador); ?>" method="POST">
            <?php echo e(method_field('PATCH')); ?>

            <?php echo e(csrf_field()); ?>

        <div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"
                              style="align:center;width:200px"></span>
                        <h2 style="text-align: center">Aviso!</h2><br><br>
                        <h4 style="text-align: center">¿Estas seguro de eliminar el capacitador</h4>
                        <h4 style="text-align: center"><?php echo e(' '.$capacitador->nom_cap .' '.$capacitador->apellido_paterno.' '.$capacitador->apellido_materno); ?>

                            ?</h4>
                    </div>
                    <div class="modal-footer danger-md">
                        <button class="btn btn-danger" data-dismiss="modal" href="#" style="text-align: left">Cancel
                        </button>
                        <br><br>
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

                    </div>
                </div>
            </div>
        </div>
        </form>
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\academia\resources\views/cat_capacitadores/cat_capacitadores.blade.php ENDPATH**/ ?>