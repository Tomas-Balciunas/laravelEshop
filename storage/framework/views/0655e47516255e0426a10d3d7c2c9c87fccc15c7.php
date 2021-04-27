<nav class="">
            <div class="navcont">
                <div id="iconcont">
                    <a href="/"><img src="<?php echo e(asset('img/shopicon.png')); ?>" class="shopicon"></a>
                </div>
                <div class="navbarcont">
                    <div class="navbar">
                            <div class=""><a class="" href="/">Pradinis</a></div>
                            <div class=""><a class="" href="/admin">Admin</a></div>
                            <?php if(Auth::check()): ?>
                                <div class=""><a class="" href="/logout">Atsijungti</a></div>
                            <?php else: ?>
                                <div class=""><a class="" href="/login">Prisijungti</a></div>
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
        </nav><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/_partials/nav.blade.php ENDPATH**/ ?>