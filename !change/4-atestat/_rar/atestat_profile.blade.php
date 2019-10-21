@extends('layouts.base')

@section('content')


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
            	
     <form role="form" method="post" action="{{asset('atestat_profile')}}">
    {{ csrf_field() }}

   
    
<input type="hidden" name="user_id" value="{{$id_user}}">


    @foreach ($details as $diplom)
<tr>
    
   
            	 
<td>{{$diplom->id_name}}</td>
<input type="hidden" name="id_name[]" value="{{$diplom->id_name}}">
<td>{{$diplom->course_title}}</td>
<input type="hidden" name="course_title[]" value="{{$diplom->course_title}}">

<td><input type="text" name="credits[]" class="form-control" ></td>
<td><input type="text" name="hours[]" class="form-control"></td>
<td><input type="text"name="marks[]"  class="form-control"></td>
<td>  
<select name="nac_grade[]" class="form-control">
    <option>Задовільно/ Satisfactory</option>
    <option>Зараховано/ Passed</option>
    <option>Добре/ Good</option>
</select>
</td>
<td><input type="text" name="ects_grade[]"  class="form-control"></td>
</tr>
 @endforeach
</tbody>
</table>
</div>

<input type="submit" value="Відправити" name="sub">
</form>
    @endsection
