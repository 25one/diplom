

<?php $__env->startSection('content'); ?>

<style>
.red {
color: MediumVioletRed; 
}
</style>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Особисті данні </a>

    <a href="<?php echo e(asset('admink.user_download/?id_student=' . $details->user_id)); ?>" class="nav-item nav-link" >Завантаженні документи</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Примітки</a>
    <a href="<?php echo e(route('admink.user_print', [$details->id])); ?>" class="nav-item nav-link red" >Друк</a>      
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">

                      <?php if(session('message-updated')): ?>
                         <?php $__env->startComponent('admink.components.alert'); ?>
                             <?php $__env->slot('type'); ?>
                                 success
                             <?php $__env->endSlot(); ?>
                             <?php echo session('message-updated'); ?>

                         <?php echo $__env->renderComponent(); ?>
                      <?php endif; ?>          

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <form role="form" method="post" action="<?php echo e(route('user_profile_update', [$details->id])); ?>">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" class="form-control" name="id" value="<?php echo e($details->id); ?>">
    <input type="hidden" class="form-control" name="user_id" value="<?php echo e($details->user_id); ?>">    
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-danger">

        <div class="card-header">

            <h3 class="card-title">Особисті данні інтерна</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
    <div class="form-group col-md-5">
      <label>Email</label>
      <input type="text" class="form-control" name="email" placeholder="Email" value="<?php if(old('email')): ?><?php echo e(old('email')); ?><?php else: ?><?php echo e($details->email); ?><?php endif; ?>">
    <?php echo $errors->first('email', '<small class="help-block red">:message</small>'); ?>      
    </div>

<div class="col-6">
    <label>Прізвище</label>
    <input type="text" class="form-control" name="surname" value="<?php if(old('surname')): ?><?php echo e(old('surname')); ?><?php else: ?><?php echo e($details->surname); ?><?php endif; ?>">
    <?php echo $errors->first('surname', '<small class="help-block red">:message</small>'); ?>

  </div>
      <div class="col-4">
    <label>Ім'я</label>
    <input type="text" class="form-control" name="name" value="<?php if(old('name')): ?><?php echo e(old('name')); ?><?php else: ?><?php echo e($details->name); ?><?php endif; ?>">
    <?php echo $errors->first('name', '<small class="help-block red">:message</small>'); ?>    
  </div>
  <div class="col-5">
    <label>По батькові</label>
    <input type="text" class="form-control" name="lastname" value="<?php if(old('lastname')): ?><?php echo e(old('lastname')); ?><?php else: ?><?php echo e($details->lastname); ?><?php endif; ?>">
    <?php echo $errors->first('lastname', '<small class="help-block red">:message</small>'); ?>    
  </div> 
 
 <div class="col-3">
                   <?php echo Form::label('gender', 'Стать'); ?>

                   <select name="gender" class="form-control select2" style="width: 100%;">
                    <option <?php if(strpos($details->gender,'іноча')) echo 'selected'; ?>>Жіноча</option>
                    <option <?php if(strpos($details->gender,'оловіча')) echo 'selected'; ?>>Чоловіча</option>
                    </select>
                </div>
<div class="col-5">
    <label>ПІБ інтерна англійською мовою</label>
    <input type="text" class="form-control" name="surnamefirst" value="<?php echo e($details->surnamefirst); ?>">
  </div>

<div class="col-6">
    <label>ПІБ, які використовувались раніше (здебільшого для жінок)</label>
    <input type="text" class="form-control" name="fullname_en" value="<?php echo e($details->fullname_en); ?>">
  </div>

  </div>
</div>
    </div>
    <!-- SELECT2 EXAMPLE -->
      <div class="card card-danger">

          <div class="card-header">

              <h3 class="card-title">Поштова адреса місця мешкання інтерна</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
              </div>
          </div>
          <div class="card-body">
              <div class="row">


     <div class="form-group col-md-4">
      <label>Країна</label>
      <input type="text" class="form-control" name="country" value="<?php echo e($details->country); ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="inputCity">Місто</label>
      <input type="text" class="form-control" name="city" value="<?php echo e($details->city); ?>">
    </div>
                  <div class="form-group col-md-4">
                      <label>ПГТ</label>
                      <input type="text" class="form-control" name="village" value="<?php echo e($details->village); ?>">
                  </div>

    <div class="form-group col-md-2">
        <label for="inputZip">Індекс</label>
        <input type="text" class="form-control" name="index" value="<?php echo e($details->index); ?>">
    </div>

  <div class="col-5">
    <label for="inputfio">Вулиця</label>
    <input type="text" class="form-control" name="adress" placeholder="Вулиця" value="<?php echo e($details->adress); ?>">
  </div>
  <div class="col">
    <label for="inputAddress">Будинок</label>
    <input type="text" class="form-control" name="house" placeholder="будинок" value="<?php echo e($details->house); ?>">
  </div>
  <div class="col">
    <label for="inputAddress">Квартира</label>
    <input type="text" class="form-control" name="apartment" placeholder="номер" value="<?php echo e($details->apartment); ?>">
  </div>

<div class="col-5">
    <label for="inputAddress">Особисті контактні телефони </label>
    <input type="text" class="form-control" name="telc" placeholder="домашній" value="<?php echo e($details->telc); ?>">
     </div>
     <div class="col-5">
    <label for="inputAddress">Особисті контактні телефони</label>
    <input type="text" class="form-control" name="telm" placeholder="мобільний" value="<?php echo e($details->telm); ?>">
     </div>
   </div>
          </div>
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-danger">

                  <div class="card-header">

                      <h3 class="card-title">Поштова адреса місця прописки інтерна</h3>

                      <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                          <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="row">
     <div class="form-group col-md-4">
      <label>Країна</label>
      <input type="text" class="form-control" name="country1" value="<?php echo e($details->country1); ?>">
    </div>
  
    <div class="form-group col-md-4">
      <label>Місто</label>
      <input type="text" class="form-control" name="city1" value="<?php echo e($details->city1); ?>">
    </div>
    <div class="form-group col-md-4">
      <label>ПГТ</label>
      <input type="text" class="form-control" name="village1" value="<?php echo e($details->village1); ?>">
    </div>
      <div class="form-group col-md-2">
      <label>Індекс</label>
      <input type="text" class="form-control" name="index1" value="<?php echo e($details->index1); ?>">
    </div>
<div class="col-5">
    <label>Вулиця</label>
    <input type="text" class="form-control" name="adres1" placeholder="Вулиця" value="<?php echo e($details->adres1); ?>">
  </div>
  <div class="col">
    <label>Будинок</label>
    <input type="text" class="form-control" name="house1" placeholder="будинок" value="<?php echo e($details->house1); ?>">
  </div>
  <div class="col">
    <label>Квартира</label>
    <input type="text" class="form-control" name="apartment1" placeholder="номер" value="<?php echo e($details->apartment1); ?>">
  </div>
                      </div>
                  </div>
                      <!-- SELECT2 EXAMPLE -->
                      <div class="card card-danger">

                          <div class="card-header">

                              <h3 class="card-title">Поштова адреса батьків</h3>

                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="form-group col-md-5">
      <label>Країна</label>
      <input type="text" class="form-control" name="country2" value="<?php echo e($details->country2); ?>">
    </div>
  
    <div class="form-group col-md-6">
      <label>Місто</label>
      <input type="text" class="form-control" name="city2" value="<?php echo e($details->city2); ?>">
    </div>

<div class="form-group col-md-7">
      <label>ПГТ</label>
      <input type="text" class="form-control" name="village2" value="<?php echo e($details->village2); ?>">
    </div>
      <div class="form-group col-md-2">
      <label>Індекс</label>
      <input type="text" class="form-control" name="index2" value="<?php echo e($details->index2); ?>">
    </div>
    
<div class="col-7">
    <label>Адреса батьків</label>
    <input type="text" class="form-control" name="adres2" placeholder=" Вулиця будинок\квартира" value="<?php echo e($details->adres2); ?>">
  </div>
  
  <div class="col-7">
    <label>Телефон батьків</label>
    <input type="text" class="form-control" name="tel1" placeholder="номер" value="<?php echo e($details->tel1); ?>">
  </div>
                              </div>
                          </div>
                          <div class="card-footer">
 <button type="submit" class="btn btn-primary">Відправити</button>
                          </div>
                      </div>
                    </div>
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admink.layouts.app_admink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/resources/views/admink/user_details.blade.php ENDPATH**/ ?>