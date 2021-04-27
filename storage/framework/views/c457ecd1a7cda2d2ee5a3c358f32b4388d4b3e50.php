

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('shop/_partials/errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="orders">
<form action="/placeOrder" method="post">
    <?php echo e(csrf_field()); ?>

    <div>
        <h6 for="name">Name</h6>
        <input type="text" name="name"></input>
    </div>
    <div>
        <h6 for="lastname">Last Name</h6>
        <input type="text" name="lastname"></input>
    </div>
    <div>
        <h6 for="address">Address</h6>
        <input type="text" name="address"></input>
    </div>
    <div>
        <h6 for="address">Contact Phone</h6>
        <input type="text" name="contact"></input>
    </div>
    <div>
        <button type="submit">Užsakyti</button>
    </div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/pages/order.blade.php ENDPATH**/ ?>