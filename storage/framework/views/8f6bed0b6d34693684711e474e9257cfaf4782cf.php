

<?php $__env->startSection('content'); ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Звіт заочників</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Звіт очників</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/admink/course/1">Перший курс</a>
      <a class="dropdown-item" href="/admink/course/2">Другий курс</a>
      <a class="dropdown-item" href="/admink/course/3">Третій курс</a>
      <div class="dropdown-divider"></div>
      </div>
  </li>
  </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admink.layouts.app_admink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/resources/views/admink/dashboard.blade.php ENDPATH**/ ?>