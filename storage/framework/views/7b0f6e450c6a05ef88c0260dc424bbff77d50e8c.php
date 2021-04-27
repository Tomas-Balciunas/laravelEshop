
<?php $__env->startSection('content'); ?>
<?php if(count($posts) == 0): ?>
<h2 style="text-align: center;">Prekių krepšelyje nėra</h2>
<?php else: ?>
<div class="cartview">
    <table>
        <tr>
            <th class="line">Prekės pavadinimas</th>
            <th class="line">Kaina</th>
        </tr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="cells">
                <a href="/post/<?php echo e($post->id); ?>">
                    <?php echo e($post->product_name); ?>

                </a>
            </td>
            <td class="count cells"><?php echo e($post->price); ?>$</td>
            <td class="del"><a id="del" href="/remove/<?php echo e($post->id); ?>">X</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div>
        <h4>Iš viso: <span id="total"></span>$</h4>
    </div>
    <a id="buy" href="/order">Pirkti</a>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/pages/cart.blade.php ENDPATH**/ ?>