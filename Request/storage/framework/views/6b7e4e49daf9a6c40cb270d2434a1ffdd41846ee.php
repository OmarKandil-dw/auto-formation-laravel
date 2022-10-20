<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
    id : <?php echo e($item->id); ?> , nom : <?php echo e($item->nom); ?>, <a href="">Delete</a>
</div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\Kandil\brief2\Controlle\resources\views/select.blade.php ENDPATH**/ ?>