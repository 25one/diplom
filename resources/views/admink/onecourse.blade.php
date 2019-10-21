@extends ('admink.layouts.app_admink')

@section ('content')

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Зареєстровані</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Розклад</a>
  </li>
</ul>
{{--<img src="/uploads/{{$student->pasport}}" width="
150px" height="300px">--}}

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
        @foreach ($profiles as $student)

            <tr>
                <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('admink.user_details', [$student->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td>{{$student->name}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->gender}}</td>
                
                <td>{{$student->fullname_en}}</td>
                <td>{{$student->surnamefirst}}</td>
                <td>{{$student->country}}</td>
                <td>{{$student->city}}</td>
                <td>{{$student->village}}</td>
                <td>{{$student->index}}</td>
                <!-- <td>{{$student->email}}</td>
                <td>{{$student->adress}}</td>
                <td>{{$student->house}}</td>
                <td>{{$student->apartment}}</td>
                 <td>{{$student->telc}}</td>
                <td>{{$student->telm}}</td>
                <td>{{$student->country1}}</td>
                <td>{{$student->city1}}</td>
                <td>{{$student->village1}}</td>
                <td>{{$student->index1}}</td>
                <td>{{$student->adres1}}</td>
                <td>{{$student->house1}}</td>
                <td>{{$student->apartment1}}</td>
                <td>{{$student->country2}}</td>
                <td>{{$student->city2}}</td>
                <td>{{$student->village2}}</td>
                <td>{{$student->index2}}</td>
                <td>{{$student->adres2}}</td>
                <td>{{$student->tel1}}</td>
 -->
                

                
                
               </tr>
        @endforeach
        </tbody>
    </table>



@endsection