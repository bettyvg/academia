
<?php $__env->startSection('content'); ?>
<section>
<form method="POST" >
  <div class="box box-default" >
      <!-- /.box-header -->
      <div class="box-body" style="margin: 40px 0px 0px 0px">
          <div class="single-pro-review-area mt-t-30 mg-b-15 ">
              <div class="container-fluid ">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="product-payment-inner-st">
                              <ul id="myTabedu1" class="tab-review-design">
                                  <li class="active"><a href="#description">Modifica usuario</a></li>
                              </ul>
                              <div id="myTabContent" class="tab-content custom-product-edit">
                                  <div class="product-tab-list tab-pane fade active in" id="description">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <div class="review-content-section">
                                                  <div id="dropzone1" class="pro-ad addcoursepro">
                                                      <div class="dropzone dropzone-custom needsclick addcourse"
                                                              id="formulario-usuarios">
                                                          <div class="row">
                                                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                  <div class="form-group">
                                                                      <input name="nombre" id="nombre" type="text"
                                                                             <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->nombre); ?>"
                                                                             <?php endif; ?>
                                                                             required="true"
                                                                             class="form-control"
                                                                             placeholder="Nombre">
                                                                  </div>

                                                                  <div class="form-group">
                                                                      <input name="apat" id="apat" type="text"
                                                                             <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_paterno); ?>" <?php endif; ?>
                                                                             required="true"
                                                                             class="form-control"
                                                                             placeholder="Apellido paterno">
                                                                  </div>
                                                                  <div class="form-group">

                                                                      <input name="amat" id="amat" type="text"
                                                                             <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_materno); ?>" <?php endif; ?>
                                                                             required="true"
                                                                             class="form-control"
                                                                             placeholder="Apellido materno">
                                                                  </div>
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
                                                                      <span class="spantext" style="color: darkgrey;">Área a la que pertenece</span>
                                                                      <select class="form-control"
                                                                              name="area"
                                                                              id="area">
                                                                          <option value="">Área a la que pertenece..
                                                                          </option>
                                                                          <?php $__currentLoopData = $cat_direcciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $direccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                              <option value="<?php echo e($direccion->id_direccion); ?>"
                                                                                      <?php if(isset($edit_user) && $edit_user->id_direcciones == $direccion->id_direccion): ?> selected <?php endif; ?>><?php echo e($direccion->nom_dir); ?></option>
                                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                      </select>
                                                                  </div>


                                                              </div>

                                                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                  <div class="form-group">
                                                                      <span class="spantext" style="color: darkgrey;">Puesto que desempeña</span>
                                                                      <select class="form-control" name="puesto"
                                                                              id="puesto">
                                                                          <option value="">Seleccionar puesto..
                                                                          <?php $__currentLoopData = $cat_puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                              <option value="<?php echo e($puesto->id_puesto); ?>"
                                                                                          <?php if(isset($edit_user) && $edit_user->id_puesto == $puesto->id_puesto): ?> selected <?php endif; ?>><?php echo e($puesto->nom_puesto); ?></option>

                                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                      </select>
                                                                  </div>

                                                                  <div class="form-group">
                                                                      <input name="correo"  type="text"
                                                                             <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->correo_electronico); ?>" <?php endif; ?>
                                                                             class="form-control"
                                                                             required="true" placeholder="Correo">
                                                                  </div>
                                                                  <div class="form-group">

                                                                      <input name="contrasena"  type="password"
                                                                             <?php if(!isset($edit_user)): ?> required="true" <?php endif; ?>
                                                                             class="form-control"
                                                                             placeholder="Contraseña">
                                                                  </div>

                                                                  <div class="form-group">

                                                                      <input name="confirma-contrasena"  type="password"
                                                                             <?php if(!isset($edit_user)): ?> required="true" <?php endif; ?>
                                                                             class="form-control"
                                                                             placeholder="Confirma contraseña">
                                                                  </div>

                                                              </div>
                                                          </div>
                                                          <br>
                                                          <?php if(isset($edit_user)): ?>
                                                              <p> <b>Nota:</b> Si no requiere cambiar la contraseña, dejar en blanco el campo "Contraseña" y "Repetir contraseña"</p>
                                                          <?php endif; ?>
                                                          <div class="row">
                                                              <div class="col-lg-6">

                                                                      <button type="submit"
                                                                              class="btn btn-info waves-effect waves-light">Guardar
                                                                      </button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <a href="<?php echo e(route('usuarios')); ?>" type="button" class="btn btn-default pull-right" name="regresar">Cancelar</a>
                                                              </div>
                                                              <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(csrf_token()); ?>">
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
          </div>
<br>

      </div>
    </div>

        </form>
        <br>
        <?php if(isset($alert) && $alert != null && isset($alert->type)): ?>
                    <div class="alert alert-<?php echo e($alert->type); ?>" role="alert">
                        <?php echo e($alert->message); ?>

                    </div>
        <?php endif; ?>

      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

        <script src="<?php echo e(asset('js/form_academia.js')); ?>" charset="utf-8"></script>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/fojal.net/httpdocs/fojal_academia/resources/views/usuarios/registro.blade.php ENDPATH**/ ?>