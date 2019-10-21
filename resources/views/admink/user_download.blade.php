@extends ('admink.layouts.app_admink')

@section('content')

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
                {{ csrf_field() }}
            <div class="card-body">
               <div class="form-group">

                    <div class="input-group">
                        <div class="custom-file">

  {!! Form::label('pasport', 'Копія паспорта (1, 2 та 11 – 13 стор., сімейний стан, діти)', ['class' => 'custom-file-label']) !!}
                            <input class="custom-file-input" type="file" name="pasport" multiple="multiple">
                        </div>

                    </div>
               </div>

            </div>

                            <div class="card-body">
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="custom-file">

 {!! Form::label('diplom', 'Копія диплома про вищу освіту (обидві сторони)', ['class' => 'custom-file-label'])!!}
  <input id="diplom" type="file" name="diplom" multiple="multiple">
                        </div>

                    </div>
                </div>

            </div>
     <div class="card-body">
         <div class="form-group">
              <div class="input-group">
                 <div class="custom-file">

     {!! Form::label('ident_code', 'Копія ідентифікаційного коду платника податків',['class' => 'custom-file-label']) !!}
     <form id="form_ident_code" name="form_ident_code" enctype="multipart/form-data" method="post" action="{{route('admink.user_upload')}}" style="display: none;" target="ifr">
          {{ csrf_field() }}
     <input id="ident_code" type="file" name="ident_code">
     <input type="hidden" name="whatimage" value="ident_code">
     </form>     

         </div>
     </div>
         </div>
          <img id="img_ident_code" class="photo_mini" src="@if(count($images)) {{$images[0]->ident_code}} @else {{'/public/uploads/nophoto.jpg'}} @endif" alt />  
     </div>

     <div class="card-body">
         <div class="form-group">
            <div class="input-group">
                 <div class="custom-file">

     {!! Form::label('diplom_compl', 'Копія додатку до диплому з прорахованим середнім балом за навчання у ВУЗі', ['class' => 'custom-file-label']) !!}
     <input id="diplom_compl" type="file" name="diplom_compl">
                 </div>
             </div>
         </div>
     </div>

     <div class="card-body">
         <div class="form-group">
             <div class="input-group">
                 <div class="custom-file">

     {!! Form::label('certificate', 'Копії сертифікатів ліцензійного іспиту „Крок -1” та „Крок – 2” (обидві сторони в кожному)', ['class' => 'custom-file-label']) !!}
     <input id="certificate" type="file" name="certificate">
                 </div>
             </div>
         </div>
     </div>

     <div class="card-body">
         <div class="form-group">
             <div class="input-group">
                 <div class="custom-file">

     {!! Form::label('health_book', 'Копія сан. книжки з рез-ми об-ня або довідка санепідемстанції з рез-ми бак. посіву та об-ня органів грудної клітини (ФЛГ)', ['class' => 'custom-file-label'] ) !!}
     <input id="doc" type="file" name="health_book">
                 </div>
             </div>
         </div>
     </div>

     <div class="card-body">
         <div class="form-group">
                  <div class="input-group">
                 <div class="custom-file">
     {!! Form::label('foto', 'Фотокартка інтерна', ['class' => 'custom-file-label'] ) !!}
     <form id="form_foto" name="form_foto" enctype="multipart/form-data" method="post" action="{{route('admink.user_upload')}}" style="display: none;" target="ifr">
          {{ csrf_field() }}
     <input id="foto" type="file" name="foto">
     <input type="hidden" name="whatimage" value="foto">
     </form>
                 <!-- /.card-body -->
                 </div>
             </div>
         </div>
         <img id="img_foto" class="photo_mini" src="@if(count($images)) {{$images[0]->foto}} @else {{'/public/uploads/nophoto.jpg'}} @endif" alt />
     </div>
            <div class="card-footer">
                <!-- <input type="submit" class="btn btn-primary" value="Зберегти"> -->
            </div>
        <!-- </form> -->
       
    </div>
    <!-- /.card -->

<form role="form" method="post" action="{{route('admink.upload_profile')}}">
                {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$id}}">                  
    <input type="hidden" name="id_student" value="{{$id_student}}">                
    <input type="hidden" id="hidden_foto" name="foto" value="@if(count($images)) {{$images[0]->foto}} @else {{'/public/uploads/nophoto.jpg'}} @endif">
    <input type="hidden" id="hidden_ident_code" name="ident_code" value="@if(count($images)) {{$images[0]->ident_code}} @else {{'/public/uploads/nophoto.jpg'}} @endif">
    <!-- ... -->
    <input type="submit" class="btn btn-primary" value="Зберегти">   
</form>

@endsection

@section('js')
<script>
$('[type="file"]').change(function(){
	$(this).parent().submit();
});
</script>
@endsection 