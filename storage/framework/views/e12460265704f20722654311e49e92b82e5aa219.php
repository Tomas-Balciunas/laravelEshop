
<?php $__env->startSection('content'); ?>
<div class="cartview">
<table>
    <tr>
        <th>Prekės pavadinimas</th>
        <th>Kaina</th>
        <th>Kiekis</th>
    </tr>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="cartproduct"><?php echo e($item->product_name); ?></td>
        <td><?php echo e($item->price); ?>$</td>
        <td><?php echo e($item->quantity); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/pages/view-order.blade.php ENDPATH**/ ?>