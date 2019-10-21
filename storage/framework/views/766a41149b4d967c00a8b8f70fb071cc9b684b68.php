

<?php $__env->startSection('content'); ?>

<style>
.photo_mini {
width: 100px;
}
</style>
<?php 
//print_r($images[0]->foto);
?>
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                Завантаження ідентифікаційних даних</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
 <!-- <form ... -->
                <?php echo e(csrf_field()); ?>

            <div class="card-body">
               <div class="form-group">

                    <div class="input-group">
                        <div class="custom-file">

  <?php echo Form::label('pasport', 'Копія паспорта (1, 2 та 11 – 13 стор., сімейний стан, діти)', ['class' => 'custom-file-label']); ?>

                            <input class="custom-file-input" type="file" name="pasport" multiple="multiple">
                        </div>

                    </div>
               </div>

            </div>

                            <div class="card-body">
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="custom-file">

 <?php echo Form::label('diplom', 'Копія диплома про вищу освіту (обидві сторони)', ['class' => 'custom-file-label']); ?>

  <input id="diplom" type="file" name="diplom" multiple="multiple">
                        </div>

                    </div>
                </div>

            </div>
     <div class="card-body">
         <div class="form-group">
              <div class="input-group">
                 <div class="custom-file">

     <?php echo Form::label('ident_code', 'Копія ідентифікаційного коду платника податків',['class' => 'custom-file-label']); ?>

     <form id="form_ident_code" name="form_ident_code" enctype="multipart/form-data" method="post" action="<?php echo e(route('admink.user_upload')); ?>" style="display: none;" target="ifr">
          <?php echo e(csrf_field()); ?>

     <input id="ident_code" type="file" name="ident_code">
     <input type="hidden" name="whatimage" value="ident_code">
     </form>     

         </div>
     </div>
         </div>
          <img id="img_ident_code" class="photo_mini" src="<?php if(count($images)): ?> <?php echo e($images[0]->ident_code); ?> <?php else: ?> <?php echo e('/public/uploads/nophoto.jpg'); ?> <?php endif; ?>" alt />  
     </div>

     <div class="card-body">
         <div class="form-group">
            <div class="input-group">
                 <div class="custom-file">

     <?php echo Form::label('diplom_compl', 'Копія додатку до диплому з прорахованим середнім балом за навчання у ВУЗі', ['class' => 'custom-file-label']); ?>

     <input id="diplom_compl" type="file" name="diplom_compl">
                 </div>
             </div>
         </div>
     </div>

     <div class="card-body">
         <div class="form-group">
             <div class="input-group">
                 <div class="custom-file">

     <?php echo Form::label('certificate', 'Копії сертифікатів ліцензійного іспиту „Крок -1” та „Крок – 2” (обидві сторони в кожному)', ['class' => 'custom-file-label']); ?>

     <input id="certificate" type="file" name="certificate">
                 </div>
             </div>
         </div>
     </div>

     <div class="card-body">
         <div class="form-group">
             <div class="input-group">
                 <div class="custom-file">

     <?php echo Form::label('health_book', 'Копія сан. книжки з рез-ми об-ня або довідка санепідемстанції з рез-ми бак. посіву та об-ня органів грудної клітини (ФЛГ)', ['class' => 'custom-file-label'] ); ?>

     <input id="doc" type="file" name="health_book">
                 </div>
             </div>
         </div>
     </div>

     <div class="card-body">
         <div class="form-group">
                  <div class="input-group">
                 <div class="custom-file">
     <?php echo Form::label('foto', 'Фотокартка інтерна', ['class' => 'custom-file-label'] ); ?>

     <form id="form_foto" name="form_foto" enctype="multipart/form-data" method="post" action="<?php echo e(route('admink.user_upload')); ?>" style="display: none;" target="ifr">
          <?php echo e(csrf_field()); ?>

     <input id="foto" type="file" name="foto">
     <input type="hidden" name="whatimage" value="foto">
     </form>
                 <!-- /.card-body -->
                 </div>
             </div>
         </div>
         <img id="img_foto" class="photo_mini" src="<?php if(count($images)): ?> <?php echo e($images[0]->foto); ?> <?php else: ?> <?php echo e('/public/uploads/nophoto.jpg'); ?> <?php endif; ?>" alt />
     </div>
            <div class="card-footer">
                <!-- <input type="submit" class="btn btn-primary" value="Зберегти"> -->
            </div>
        <!-- </form> -->
       
    </div>
    <!-- /.card -->

<form role="form" method="post" action="<?php echo e(route('admink.upload_profile')); ?>">
                <?php echo e(csrf_field()); ?>

    <input type="hidden" name="id" value="<?php echo e($id); ?>">                  
    <input type="hidden" name="id_student" value="<?php echo e($id_student); ?>">                
    <input type="hidden" id="hidden_foto" name="foto" value="<?php if(count($images)): ?> <?php echo e($images[0]->foto); ?> <?php else: ?> <?php echo e('/public/uploads/nophoto.jpg'); ?> <?php endif; ?>">
    <input type="hidden" id="hidden_ident_code" name="ident_code" value="<?php if(count($images)): ?> <?php echo e($images[0]->ident_code); ?> <?php else: ?> <?php echo e('/public/uploads/nophoto.jpg'); ?> <?php endif; ?>">
    <!-- ... -->
    <input type="submit" class="btn btn-primary" value="Зберегти">   
</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$('[type="file"]').change(function(){
	$(this).parent().submit();
});
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admink.layouts.app_admink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/resources/views/admink/user_download.blade.php ENDPATH**/ ?>