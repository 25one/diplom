@extends('layouts.base')

@section('content')

    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                Завантаження ідентифікаційних даних</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
 <form role="form" enctype="multipart/form-data" method="post" action="{{route('download_profile')}}">
                {{ csrf_field() }}
            <div class="card-body">
               <div class="form-group">

                    <div class="input-group">
                        <div class="custom-file">

  {!! Form::label('pasport', 'Копія паспорта (1, 2 та 11 – 13 стор., сімейний стан, діти)', ['class' => 'custom-file-label']) !!}
                            <input id="pasport" class="custom-file-input" type="file" name="pasport" multiple="multiple">
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
     <input id="ident_code" type="file" name="ident_code">

         </div>
     </div>
         </div>
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
     <input id="foto" type="file" name="foto">
                 <!-- /.card-body -->
                 </div>
             </div>
         </div>
     </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Зберегти">
            </div>
        </form>
    </div>
    <!-- /.card -->




@endsection