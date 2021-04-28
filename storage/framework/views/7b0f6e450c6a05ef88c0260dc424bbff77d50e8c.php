
<?php $__env->startSection('content'); ?>
<?php if(count($posts) == 0): ?>
<h2 style="text-align: center;">Prekių krepšelyje nėra</h2>
<?php else: ?>
<div class="cartview">
    <table>
        <tr>
            <th>Prekės pavadinimas</th>
            <th>Kaina</th>
            <th></th>
            <th>Kiekis</th>
            <th></th>
            <th>Pilna kaina</th>
        </tr>
        <tbody class="carttable">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="cartproduct">
                    <a href="/post/<?php echo e($post->product_id); ?>">
                        <?php echo e($post->product_name); ?>

                    </a>
                </td>
                <td class="count"><?php echo e($post->price); ?>$</td>
                <td>
                    <form method="POST" action="/removequantity/<?php echo e($post->id); ?>"><?php echo e(csrf_field()); ?><button type="submit">-</button></form>
                </td>
                <td class="quantity"><?php echo e($post->quantity); ?></td>
                <td>
                    <form method="POST" action="/addquantity/<?php echo e($post->id); ?>"><?php echo e(csrf_field()); ?><button type="submit">+</button></form>
                </td>
                <td class="totalprice"></td>
                <td class="del"><a id="del" href="/remove/<?php echo e($post->id); ?>">X</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div>
        <h4>Iš viso: <span id="total"></span>$</h4>
    </div>
    <a id="buy" href="/order">Pirkti</a>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/pages/cart.blade.php ENDPATH**/ ?>