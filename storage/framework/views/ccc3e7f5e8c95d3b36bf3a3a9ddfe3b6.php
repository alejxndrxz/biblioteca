

<?php $__env->startSection('content'); ?>
<h1> Bienvenido <?php echo e(auth()->user()->name); ?> </h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/home/index_user.blade.php ENDPATH**/ ?>