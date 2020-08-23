@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Createcourse
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($createcourse, ['route' => ['createcourses.update', $createcourse->id], 'method' => 'patch']) !!}

                        @include('createcourses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection