

<?php $__env->startSection('content'); ?>

<div class="tab-content" id="nav-tabContent">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <!-- SELECT2 EXAMPLE -->
    <div class="card">

                          <div class="card-footer">
 <button type="button" class="btn btn-primary" onclick="printit();">Друкувати</button>
 <a class="btn btn-light" href="<?php echo e(route('admink.user_details', [$details->id])); ?>">Повернутися</a>
                          </div>

        <div class="card-header">

            <h3 class="card-title">Особисті данні інтерна</h3>

        </div>
        <div class="card-body">
            <div class="row">
    <div class="form-group col-md-5">
      <label>Email</label>
      <div><?php echo e($details->email); ?></div>
    </div>

<div class="col-6">
    <label>Прізвище</label>
    <div><?php echo e($details->surname); ?></div>    
  </div>
      <div class="col-4">
    <label>Ім'я</label>
    <div><?php echo e($details->name); ?></div>      
  </div>
  <div class="col-5">
    <label>По батькові</label>
    <div><?php echo e($details->lastname); ?></div>
  </div> 
 
 <div class="col-3">
    <label>Стать</label>
    <div><?php echo e($details->gender); ?></div>   
    </div>
<div class="col-5">
    <label>ПІБ інтерна англійською мовою</label>
    <div><?php echo e($details->fullname_en); ?></div>    
  </div>

<div class="col-6">
    <label>ПІБ, які використ. раніше (здебільшого для жінок)</label>
    <div><?php echo e($details->surnamefirst); ?></div>        
  </div>

  </div>
</div>
    </div>
    <!-- SELECT2 EXAMPLE -->
      <div class="card">

          <div class="card-header">

              <h3 class="card-title">Поштова адреса місця мешкання інтерна</h3>

          </div>
          <div class="card-body">
              <div class="row">


     <div class="form-group col-md-4">
      <label>Країна</label>
      <div><?php echo e($details->country); ?></div>          
    </div>

    <div class="form-group col-md-4">
      <label for="inputCity">Місто</label>
      <div><?php echo e($details->city); ?></div>       
    </div>
                  <div class="form-group col-md-4">
                      <label>ПГТ</label>
                      <div><?php echo e($details->village); ?></div>                         
                  </div>

    <div class="form-group col-md-2">
        <label for="inputZip">Індекс</label>
        <div><?php echo e($details->index); ?></div>           
     </div>

  <div class="col-5">
    <label for="inputfio">Вулиця</label>
    <div><?php echo e($details->adress); ?></div>          
  </div>
  <div class="col">
    <label for="inputAddress">Будинок</label>
    <div><?php echo e($details->house); ?></div>      
  </div>
  <div class="col">
    <label for="inputAddress">Квартира</label>
    <div><?php echo e($details->apartment); ?></div>      
  </div>

<div class="col-5">
    <label for="inputAddress">Особисті контактні телефони </label>
    <div><?php echo e($details->telc); ?></div>    
     </div>
     <div class="col-5">
    <label for="inputAddress">Особисті контактні телефони</label>
    <div><?php echo e($details->telm); ?></div>       
     </div>
   </div>
          </div>
          </div>
              <!-- SELECT2 EXAMPLE -->
              <div class="card">

                  <div class="card-header">

                      <h3 class="card-title">Поштова адреса місця прописки інтерна</h3>

                  </div>
                  <div class="card-body">
                      <div class="row">
     <div class="form-group col-md-4">
      <label>Країна</label>
      <div><?php echo e($details->country1); ?></div>         
     </div>
  
    <div class="form-group col-md-4">
      <label>Місто</label>
      <div><?php echo e($details->city1); ?></div>         
    </div>
    <div class="form-group col-md-4">
      <label>ПГТ</label>
      <div><?php echo e($details->village1); ?></div>         
     </div>
      <div class="form-group col-md-2">
      <label>Індекс</label>
      <div><?php echo e($details->index1); ?></div>       
    </div>
<div class="col-5">
    <label>Вулиця</label>
    <div><?php echo e($details->adres1); ?></div>       
  </div>
  <div class="col">
    <label>Будинок</label>
    <div><?php echo e($details->house1); ?></div>    
  </div>
  <div class="col">
    <label>Квартира</label>
    <div><?php echo e($details->apartment1); ?></div>      
  </div>
                      </div>
                  </div>
                  </div>
                      <!-- SELECT2 EXAMPLE -->
                      <div class="card">

                          <div class="card-header">

                              <h3 class="card-title">Поштова адреса батьків</h3>

                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="form-group col-md-5">
      <label>Країна</label>
      <div><?php echo e($details->country2); ?></div>           
    </div>
  
    <div class="form-group col-md-6">
      <label>Місто</label>
      <div><?php echo e($details->city2); ?></div>         
    </div>

<div class="form-group col-md-7">
      <label>ПГТ</label>
      <div><?php echo e($details->village2); ?></div>        
    </div>
      <div class="form-group col-md-2">
      <label>Індекс</label>
      <div><?php echo e($details->index2); ?></div>           
    </div>
    
<div class="col-7">
    <label>Адреса батьків</label>
    <div><?php echo e($details->adres2); ?></div>      
  </div>
  
  <div class="col-7">
    <label>Телефон батьків</label>
    <div><?php echo e($details->tel1); ?></div>    
  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                    </div>

<?php $__env->stopSection(); ?>

<script>
function printit(){
if (window.print) { 
window.print(); 
} else { 
var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>'; 
document.body.insertAdjacentHTML('beforeEnd', WebBrowser); 
WebBrowser1.ExecWB(6, 2); 
}
}
</script>

<?php echo $__env->make('admink.layouts.app_print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/resources/views/admink/user_print.blade.php ENDPATH**/ ?>