<nav>
    <div class="navcont">
        <div id="iconcont">
            <a href="/"><img src="<?php echo e(asset('img/shopicon.png')); ?>" class="shopicon"></a>
        </div>
        <div class="navbarcont">
            <div class="navbar">
                <a href="/"><div><h5>Pradinis</h5></div></a>
                <a href="/admin"><div><h5>Admin</h5></div></a>
                <?php if(Auth::check()): ?>
                <a href="/logout"><div><h5>Atsijungti</h5></div></a>
                <?php else: ?>
                <a href="/login"><div><h5>Prisijungti</h5></div></a>
                <?php endif; ?>
            </div>
            <div class="categorycont">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <a href="/category/<?php echo e($item->id); ?>"><?php echo e($item->category); ?></a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div id="carticoncont">
            <a href="/cart"><img src="<?php echo e(asset('img/carticon.png')); ?>" class="shopicon"></a>
        </div>
    </div>
</nav><?php /**PATH C:\Users\Tom\Desktop\eshop\laravelShop\resources\views/shop/_partials/nav.blade.php ENDPATH**/ ?>