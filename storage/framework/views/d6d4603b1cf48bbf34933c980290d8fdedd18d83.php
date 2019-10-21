<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                Вітаємо!!!</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
     
                    Ви зареєструвались на сайті Кафедри хірургії!
                    <p>Для подальшої роботи вам необхідно Увійти в свій кабінет інтерна!</p>
                    <p>Для переходу натисніть на кнопку</p>
                        

                  <a class="btn btn-secondary btn-lg active" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     <?php echo e(__('Увійти')); ?>          </a>
 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/resources/views/home.blade.php ENDPATH**/ ?>