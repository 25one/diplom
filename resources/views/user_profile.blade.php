@extends('layouts.base')

@section('content')
<ul class="nav justify-content-end"> 
    <li class="nav-item">
<a class="nav-link active" href="{{asset('download_profile')}}">Завантажити додатки</a>
</li>
</ul>
    <form role="form" method="post" action="{{route('user_profile')}}">
    {{ csrf_field() }}
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
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>

<div class="col-6">
    <label>Прізвище</label>
    <input type="text" class="form-control" name="surname"">
  </div>
      <div class="col-4">
    <label>Ім'я</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="col-5">
    <label>По батькові</label>
    <input type="text" class="form-control" name="lastname">
  </div> 
 
 <div class="col-3">
                   {!! Form::label('gender', 'Стать') !!}
                   <select name="gender" class="form-control select2" style="width: 100%;">
                    <option>Жіноча</option>
                    <option>Чоловіча</option>
                    </select>
                </div>
<div class="col-5">
    <label>ПІБ інтерна англійською мовою</label>
    <input type="text" class="form-control" name="fullname_en">
  </div>

<div class="col-6">
    <label>ПІБ, які використовувались раніше (здебільшого для жінок)</label>
    <input type="text" class="form-control" name="surnamefirst">
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
      <input type="text" class="form-control" name="country">
    </div>

    <div class="form-group col-md-4">
      <label for="inputCity">Місто</label>
      <input type="text" class="form-control" name="city">
    </div>
                  <div class="form-group col-md-4">
                      <label>ПГТ</label>
                      <input type="text" class="form-control" name="village">
                  </div>

    <div class="form-group col-md-2">
        <label for="inputZip">Індекс</label>
        <input type="text" class="form-control" name="index">
    </div>

  <div class="col-5">
    <label for="inputfio">Вулиця</label>
    <input type="text" class="form-control" name="adress" placeholder="Вулиця ">
  </div>
  <div class="col">
    <label for="inputAddress">Будинок</label>
    <input type="text" class="form-control" name="house" placeholder="будинок">
  </div>
  <div class="col">
    <label for="inputAddress">Квартира</label>
    <input type="text" class="form-control" name="apartment" placeholder="номер">
  </div>

<div class="col-5">
    <label for="inputAddress">Особисті контактні телефони </label>
    <input type="text" class="form-control" name="telc" placeholder="домашній">
     </div>
     <div class="col-5">
    <label for="inputAddress">Особисті контактні телефони</label>
    <input type="text" class="form-control" name="telm" placeholder="мобільний">
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
      <input type="text" class="form-control" name="country1">
    </div>
  
    <div class="form-group col-md-4">
      <label>Місто</label>
      <input type="text" class="form-control" name="city1">
    </div>
    <div class="form-group col-md-4">
      <label>ПГТ</label>
      <input type="text" class="form-control" name="village1">
    </div>
      <div class="form-group col-md-2">
      <label>Індекс</label>
      <input type="text" class="form-control" name="index1">
    </div>
<div class="col-5">
    <label>Вулиця</label>
    <input type="text" class="form-control" name="adres1" placeholder="Вулиця ">
  </div>
  <div class="col">
    <label>Будинок</label>
    <input type="text" class="form-control" name="house1" placeholder="будинок">
  </div>
  <div class="col">
    <label>Квартира</label>
    <input type="text" class="form-control" name="apartment1" placeholder="номер">
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
      <input type="text" class="form-control" name="country2">
    </div>
  
    <div class="form-group col-md-6">
      <label>Місто</label>
      <input type="text" class="form-control" name="city2">
    </div>

<div class="form-group col-md-7">
      <label>ПГТ</label>
      <input type="text" class="form-control" name="village2">
    </div>
      <div class="form-group col-md-2">
      <label>Індекс</label>
      <input type="text" class="form-control" name="index2">
    </div>
    
<div class="col-7">
    <label>Адреса батьків</label>
    <input type="text" class="form-control" name="adres2" placeholder=" Вулиця будинок\квартира">
  </div>
  
  <div class="col-7">
    <label>Телефон батьків</label>
    <input type="text" class="form-control" name="tel1" placeholder="номер">
  </div>
                              </div>
                          </div>
                          <div class="card-footer">
 <button type="submit" class="btn btn-primary">Відправити</button>
                          </div>
                      </div>
</form>



@endsection