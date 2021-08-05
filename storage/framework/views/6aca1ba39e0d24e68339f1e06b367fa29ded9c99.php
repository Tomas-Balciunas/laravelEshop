<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('shop/_partials/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
        <!-- Navigation-->
        <?php echo $__env->make('shop/_partials/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Header-->
        <?php echo $__env->make('shop/_partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main Content-->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\Tom\Desktop\eshop\laravelShop\resources\views/shop/main.blade.php ENDPATH**/ ?>