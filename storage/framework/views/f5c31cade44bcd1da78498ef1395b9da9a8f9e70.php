

<?php $__env->startSection('content'); ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Зареєстровані</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Розклад</a>
  </li>
</ul>


    <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
        <tr>
            <th></th>
            <th>Ім'я</th>
            <th>Прізвище</th>
            <th>По батькові</th>
            <th>Стать</th>
            
            <th>ПІБ en</th>
            <th>ПІБ раніше</th>
            <th>Країна</th>
            <th>Місто</th>
            <th>ПГТ</th>
             <th>Індекс</th>

             
             <!-- <th>Вулиця</th>
                <th>Email</th> 
            <th>Будинок</th>
            <th>Квартира</th>
            <th>Дом тел<th>
           <th> Моб тел</th>
            <th>Адреса прописки Країна</th>

           <th> Місто</th>
           <th> ПГТ</th>
            <th> Індекс</th>
           <th> Вулиця</th>
            <th>Будинок</th>
            <th>Квартира</th>

           <th> Адреса батьків Країна</th>
           <th> Місто</th>
           <th> ПГТ</th>
           <th> Індекс</th>
           <th> Адреса</th>
            <th>Телефон батьків</th>
 -->
         


           

        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="<?php echo e(route('admink.user_details', [$student->id])); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->lastname); ?></td>
                <td><?php echo e($student->surname); ?></td>
                <td><?php echo e($student->gender); ?></td>
                
                <td><?php echo e($student->fullname_en); ?></td>
                <td><?php echo e($student->surnamefirst); ?></td>
                <td><?php echo e($student->country); ?></td>
                <td><?php echo e($student->city); ?></td>
                <td><?php echo e($student->village); ?></td>
                <td><?php echo e($student->index); ?></td>
                <!-- <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->adress); ?></td>
                <td><?php echo e($student->house); ?></td>
                <td><?php echo e($student->apartment); ?></td>
                 <td><?php echo e($student->telc); ?></td>
                <td><?php echo e($student->telm); ?></td>
                <td><?php echo e($student->country1); ?></td>
                <td><?php echo e($student->city1); ?></td>
                <td><?php echo e($student->village1); ?></td>
                <td><?php echo e($student->index1); ?></td>
                <td><?php echo e($student->adres1); ?></td>
                <td><?php echo e($student->house1); ?></td>
                <td><?php echo e($student->apartment1); ?></td>
                <td><?php echo e($student->country2); ?></td>
                <td><?php echo e($student->city2); ?></td>
                <td><?php echo e($student->village2); ?></td>
                <td><?php echo e($student->index2); ?></td>
                <td><?php echo e($student->adres2); ?></td>
                <td><?php echo e($student->tel1); ?></td>
 -->
                

                
                
               </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admink.layouts.app_admink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/resources/views/admink/onecourse.blade.php ENDPATH**/ ?>