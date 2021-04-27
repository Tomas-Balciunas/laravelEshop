
<?php $__env->startSection('content'); ?>
<?php if(count($posts) == 0): ?>
<h2 style="text-align: center;">Prekių krepšelyje nėra</h2>
<?php else: ?>
<div>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <p><?php echo e($post->product_name); ?></p>
        <p><?php echo e($post->price); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<a href="/order">Pirkti</a>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/pages/cart.blade.php ENDPATH**/ ?>