

<?php $__env->startSection('content'); ?>
<div class="viewcont">
    <div>
        <h2><?php echo e($post->title); ?></h2>
    </div>
    <div class="viewproduct">
        <div class="productimg">
            <img src="<?php echo e(asset('/storage/'.$post->path)); ?>" class="bigimg" alt="????">
        </div>
        <div class="productinfo">
            <span>Kategorija:</span>
            <h4><?php echo e($post->category->category); ?></h4>
            <hr />
            <span>Kiekis sandelyje:</span>
            <h4><?php echo e($post->quantity); ?></h4>
            <hr />
            <span>Kaina:</span>
            <h4><?php echo e($post->price); ?>$</h4>
            <?php if($post->quantity == 0): ?>
            <h5>Prekių neliko</h5>
            <?php else: ?>
            <form action="/addToCart/<?php echo e($post->id); ?>" method="post">
            <?php echo e(csrf_field()); ?>

                <button type="submit">Į Krepšelį</button>
            </form>
            <?php endif; ?>
        </div>
    </div>
    <div class="content">
        <p><?php echo e($post->content); ?></p>
    </div>
    <div class="commentcont">
        <form action="/post/<?php echo e($post->id); ?>/comment" method="POST">
            <?php echo e(csrf_field()); ?>

            <textarea name="body"></textarea>
            <button type="submit">Palikti atliepimą</button>
        </form>
    </div>
    <hr />
    <div class="comments">
        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <hr />
        <h6 style="color: gray; text-align:right;"><?php echo e($comment->created_at); ?></h6>
        <p><?php echo e($comment->body); ?></p>
        <hr />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\eshop\laravelShop\resources\views/shop/pages/show-product.blade.php ENDPATH**/ ?>