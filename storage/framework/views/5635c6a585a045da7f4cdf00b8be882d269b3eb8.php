

<?php $__env->startSection('content'); ?>


    <!-- SELECT2 EXAMPLE -->
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Данні додатку до диплома</h3>
           <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>


    <!-- Содержание категории -->

        <!-- Шапка категории -->

 <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width: 30px">#</th>
                <th style="width: 200px">Назва дисциплини</th>
                <th style="width: 50px">Кредит и СКТС</th>
                <th style="width: 50px">Години</th>
                <th style="width: 50px">Бали</th>
                <th style="width: 120px">Оцінка за національною шкалою</th>
                <th style="width: 50px">Рейтинг СКТС</th>
            </thead>
            <tbody>
            	
     <form role="form" method="post" action="<?php echo e(asset('atestat_profile')); ?>">
    <?php echo e(csrf_field()); ?>


   
    
    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diplom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    
<input type="hidden" name="user_id[]" value="<?php echo e($id_user); ?>">   
            	 
<td><?php echo e($diplom->id); ?></td>
<input type="hidden" name="course_id[]" value="<?php echo e($diplom->id); ?>">
<td><?php echo e($diplom->course_title); ?></td>

<td><input type="text" name="credits[]" class="form-control" value="<?php if(isset($diplom['atestatprofile']->credits)): ?> <?php echo e($diplom['atestatprofile']->credits); ?> <?php endif; ?>"></td>
<td><input type="text" name="hours[]" class="form-control" value="<?php if(isset($diplom['atestatprofile']->hours)): ?> <?php echo e($diplom['atestatprofile']->hours); ?> <?php endif; ?>"></td>
<td><input type="text" name="marks[]"  class="form-control" value="<?php if(isset($diplom['atestatprofile']->marks)): ?> <?php echo e($diplom['atestatprofile']->marks); ?> <?php endif; ?>"></td>
<td>  
<select name="nac_grade[]" class="form-control">
    <option value="0" <?php if(isset($diplom['atestatprofile']->nac_grade)): ?> <?php if($diplom['atestatprofile']->nac_grade == 0): ?> selected <?php endif; ?> <?php endif; ?>>Задовільно/ Satisfactory</option>
    <option value="1" <?php if(isset($diplom['atestatprofile']->nac_grade)): ?> <?php if($diplom['atestatprofile']->nac_grade == 1): ?> selected <?php endif; ?> <?php endif; ?>>Зараховано/ Passed</option>
    <option value="2" <?php if(isset($diplom['atestatprofile']->nac_grade)): ?> <?php if($diplom['atestatprofile']->nac_grade == 2): ?> selected <?php endif; ?> <?php endif; ?>>Добре/ Good</option>
</select>
</td>
<td><input type="text" name="ects_grade[]"  class="form-control" value="<?php if(isset($diplom['atestatprofile']->ects_grade)): ?> <?php echo e($diplom['atestatprofile']->ects_grade); ?> <?php endif; ?>"></td>


</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>

<input type="submit" value="Відправити" name="sub">
</form>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/resources/views/atestat_profile.blade.php ENDPATH**/ ?>