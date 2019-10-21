<?php if($breadcrumbs): ?>
    <ol class="breadcrumb">
        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($breadcrumb->url && $breadcrumb !== $breadcrumbs->last()): ?>
                <li><a href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?></a></li>
            <?php else: ?>
                <li class="active"><?php echo e($breadcrumb->title); ?></li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
<?php endif; ?><?php /**PATH /home/alex/www/diplom/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/breadcrumbs.blade.php ENDPATH**/ ?>