
<?php $__env->startSection('content'); ?>


    <link rel="stylesheet" href="./css/examen/style.css">
    <section>
        <div class="wrapper">
            <div>
                <i class="fas fa-award award_icon"></i>
                <h3 class="username">well done! <span class="name"></span></h3>
                <p class="userpoints">Your Points <span class="points"></span></p>
                <p class="usertime"> Time taken <span class="time_taken"></span></p>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/d56261bbb9.js"></script>

    <script src="<?php echo e(asset('/js/examen/start.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/fojal.net/httpdocs/fojal_academia/resources/views/examenes/fin_examen.blade.php ENDPATH**/ ?>