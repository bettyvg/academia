<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/examen/style.css">
    <section>

            <div class="payment-adress">
                <br>
                <button type="button"
                                                               title="Editar registro"
                                                               class="btn btn-info"  name="iniciar_quiz" id="iniciar_quiz" value="50">
                        Iniciar quiz</button>
                <input type="hidden" name="_token"
                       id="csrf-token" value="<?php echo e(csrf_token()); ?>">
            </div>

        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="wrapper">
            <div class="quiz">
                <div class="quiz_header">
                    <div class="quiz_user">
                        <h4><?php echo e($pregunta->tema); ?> <span class="name"></span></h4>
                    </div>
                    <div class="quiz_timer">
                        <span class="time">00:00</span>
                    </div>
                </div>
                <div class="quiz_body">
                    <div id="preguntas" class="preguntas">
                          <ul class="option_group">
                          <li class="option" ></li>
                          <li class="option"></li>
                          <li class="option"></li>
                        </ul>
                    </div>
                    <button class="btn-next" onclick="next()">Proxima pregunta</button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

    <script src="<?php echo e(asset('/js/examen/site.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/examen/userInfo.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/examen/timer.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\academia\resources\views/examenes/examen.blade.php ENDPATH**/ ?>