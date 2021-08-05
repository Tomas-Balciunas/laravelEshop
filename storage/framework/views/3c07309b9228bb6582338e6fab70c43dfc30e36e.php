

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('shop/_partials/errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="updatecont">
    <form action="/storeupdate/<?php echo e($post->id); ?>" method="post" enctype="multipart/form-data" class="addproduct">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PATCH')); ?>

        <h6>Pavadinimas:</h6>
            <input type="text" name="title" value="<?php echo e($post->title); ?>"></input>
            <h6>Aprašymas:</h6>
            <textarea type="textarea" name="content"><?php echo e($post->content); ?></textarea>
            <h6>Kiekis:</h6>
            <input type="number" name="quantity" value="<?php echo e($post->quantity); ?>"></input>
            <h6>Kaina:</h6>
            <input type="number" name="price" step=".01" value="<?php echo e($post->price); ?>"></input>
            <h6>Karegorija:</h6>
            <select name="categoryselect">
                <option style="display: none;"></option>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </select>
            <h6>Nuotrauka:</h6>
            <input type="file" name="img">
            <button type="submit">Keisti</button>
    </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\eshop\laravelShop\resources\views/shop/pages/update.blade.php ENDPATH**/ ?>