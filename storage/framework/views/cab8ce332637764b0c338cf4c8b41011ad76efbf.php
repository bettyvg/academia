
<?php $__env->startSection('content'); ?>
    <section>

        <?php if(isset($alert2)): ?>
            <div class="row" style="padding: 10px;">
                <div class="col-12">
                    <div class="alert alert-<?php echo e($alert2->type); ?>">
                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                        <?php echo e($alert2->message); ?>

                    </div>
                </div>
            </div>

        <?php endif; ?>
        <div class="single-pro-review-area mt-t-30 mg-b-15 ">
            <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Perfiles</a></li>
                            </ul>


                            <!-- Tabla de registros evaluación   -->
                            <div class="product-tab-list tab-pane fade active in"
                                 id="description">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                <div class="sparkline13-hd">
                                                    <div class="main-sparkline13-hd">
                                                        <!--<h1>Projects <span class="table-project-n">Data</span> Table</h1>-->
                                                    </div>
                                                </div>
                                                <div id="myTabContent" class="tab-content custom-product-edit">
                                                    <div class="product-tab-list tab-pane fade active in"
                                                         id="description">
                                                        <div class="row">
                                                            <div class="col-md-offset-8">
                                                                <div class="payment-adress">
                                                                    <br>
                                                                    <button type="button"
                                                                            class="btn btn-info pull-right"
                                                                            data-toggle="modal" name="agregar_perfil"
                                                                            id="agregar_perfil"
                                                                            data-target="#modal_perfil">Nuevo perfil
                                                                    </button>
                                                                    <input type="hidden" name="_token"
                                                                           id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                                                </div>
                                                            </div>
                                                            <br>
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
                                                                       data-search="true"
                                                                       data-show-columns="true"
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
                                                                        <th data-field="id_perfil">id_perfil</th>
                                                                        <th data-field="Perfil">Perfil</th>
                                                                        <th data-field="acciones">Acciones</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $__currentLoopData = $perfiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr role="row" class="odd">
                                                                            <td class="sorting_1"></td>
                                                                            <td class="sorting_1"><?php echo e($Items->id_perfil); ?></td>
                                                                            <td class="sorting_1"><?php echo e($Items->nom_perfil); ?></td>
                                                                            <td class="sorting_1">
                                                                                <button type="button"
                                                                                        title="Editar registro"
                                                                                        class="pd-setting-ed">
                                                                                    <a href='editar_perfil/<?php echo e($Items->id_perfil); ?>'>
                                                                                        <i class="fa fa-pencil-square-o"> </i>
                                                                                    </a></button>
                                                                                <button class="btn-delete pd-setting-ed btn-delete"
                                                                                        type="button"
                                                                                        data-toggle="modal"
                                                                                        data-target="#DangerModalalert"
                                                                                        name=delete_user"
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
        <br>
        <!-- Modal Agregar perfil   -->
        <form action="<?php echo e(route('perfiles')); ?>" method="POST" class="form-horizontal"><?php echo e(csrf_field()); ?>

            <div class="modal" tabindex="-1" role="dialog" name="modal_perfil" id="modal_perfil">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: whiteSmoke;">
                            <h2 class="modal-title">Agregar perfil</h2>
                        </div>
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <br>
                                            <label for="nuevo_perfil" class="col-sm-4">Perfil nuevo</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <input type="text" class="form-control" name="nom_perfil" id="nom_perfil"
                                                   required="true">
                                        </div>
                                        <input type="hidden" class="form-control" name="estatus" id="estatus"
                                               required="true" value="activo">
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


        <!-- End Modal Agregar perfil  -->

        <form action="delete_perfil/<?php echo e($Items->id_perfil); ?>" method="POST">
            <?php echo e(method_field('PATCH')); ?>

            <?php echo e(csrf_field()); ?>

            <div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"
                              style="align:center;width:200px"></span>
                            <h2 style="text-align: center">Aviso!</h2><br><br>
                            <h4 style="text-align: center">¿Estas seguro de eliminar el perfil?</h4>
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
                                    title="Aceptar">Aceptar
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php if(isset($alert) && $alert != null && isset($alert->type)): ?>
            <div class="alert alert-<?php echo e($alert->type); ?>" role="alert">
                <?php echo e($alert->message); ?>

            </div>
        <?php endif; ?>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.btn-delete').on('click', function (e) {
            $(this).parents('form:first').submit()
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/cat_perfiles/perfiles.blade.php ENDPATH**/ ?>