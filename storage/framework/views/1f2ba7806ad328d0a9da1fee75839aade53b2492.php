
<?php $__env->startSection('content'); ?>
<?php if(count($categoryshow) == 0): ?>
<h2 style="text-align: center;">Prekių šioje kategorijoje nėra</h2>
<?php else: ?>

<div class="homecont">
    <?php $__currentLoopData = $categoryshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="product">
        <h3><?php echo e($post->title); ?></h3>
        <div class="productcontent">
            <div class="productimg">
                <img width="100px" src="<?php echo e(asset('/storage/'.$post->path)); ?>" alt="????">
            </div>
            <div class="summary">
                <img src="<?php echo e(asset('/img/pointer.png')); ?>" id="pointer">
                <div class="abc">
                    <p><?php echo e($post->content); ?></p>
                </div>
                <h4><?php echo e($post->price); ?>$</h4>
            </div>
        </div>
        <a href="/post/<?php echo e($post->id); ?>">
            <h5>Plačiau</h5>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/pages/category.blade.php ENDPATH**/ ?>