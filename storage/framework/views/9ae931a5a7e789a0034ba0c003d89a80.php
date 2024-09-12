
<?php $__env->startSection('main'); ?>
    <h1>Saya Praktik Laravel</h1>

<?php
for ($i=1; $i <= 10; $i++) { ?>
<h2>Praktik Laravel</h2>
<?php } ?>

<?php for($i = 1; $i <= 3; $i++): ?>
<h2>Sekarang Praktik Laravel</h2>
<?php endfor; ?>

<img src="<?php echo e(asset('img/matahari.
jpg')); ?>" width="300px">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp5cd\belajarlaravel\resources\views/praktik.blade.php ENDPATH**/ ?>