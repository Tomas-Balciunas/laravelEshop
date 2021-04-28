

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('shop/_partials/errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!----- NEW PRODUCT ----->
<div class="maincont">
    <button class="coll">Pridėti prekę</button>
    <div class="collcont">
        <form action="/store" method="post" enctype="multipart/form-data" class="addproduct">
            <?php echo e(csrf_field()); ?>

            <h6>Pavadinimas:</h6>
            <input type="text" name="title"></input>
            <h6>Aprašymas:</h6>
            <textarea type="textarea" name="content"></textarea>
            <h6>Kiekis:</h6>
            <input type="number" name="quantity"></input>
            <h6>Kaina:</h6>
            <input type="number" name="price" step=".01"></input>
            <h6>Kategorija:</h6>
            <select name="categoryselect">
                <option style="display: none;"></option>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <h6>Nuotrauka:</h6>
            <input type="file" name="img">
            <button type="submit">Pridėti</button>
        </form>
    </div>

    <!----- NEW CATEGORY ----->

    <button class="coll">Pridėti kategoriją</button>
    <div class="collcont">
        <form action="/storecategory" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="text" name="categorytitle"></input>
            <button type="submit">Pridėti</button>
        </form>
    </div>

    <!----- USER ORDERS ----->

    <button class="coll">Mano užsakymai</button>
    <div class="collcont">
        <div class="order">
            <table>
                <tr>
                    <th>Užsakymo nr.</th>
                    <th>Užsakymo kaina</th>
                    <th>Pristatymo adresas</th>
                    <th>Užsakymo data</th>
                </tr>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/vieworder/<?php echo e($order->id); ?>"><?php echo e($order->id); ?></a></td>
                    <td><?php echo e($order->price); ?>$</td>
                    <td><?php echo e($order->address); ?></td>
                    <td><?php echo e($order->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

    <!----- USER PRODUCTS ----->

    <button class="coll">Mano prekės</button>
    <div class="collcont">
        <div class="homecont">
            <?php $__currentLoopData = $userposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <div class="adminbuttons">
                    <a href=/delete/<?php echo e($post->id); ?>>
                        <h5>Trinti</h5>
                    </a>
                    <a href=/update/<?php echo e($post->id); ?>>
                        <h5>Redaguoti</h5>
                    </a>
                    <a href="/post/<?php echo e($post->id); ?>">
                        <h5>Plačiau</h5>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\shop\resources\views/shop/pages/admin.blade.php ENDPATH**/ ?>