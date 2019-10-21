<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $page->render(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/alex/www/diplom/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/navigation/navigation.blade.php ENDPATH**/ ?>