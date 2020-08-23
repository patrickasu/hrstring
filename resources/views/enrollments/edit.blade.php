@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Enrollment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($enrollment, ['route' => ['enrollments.update', $enrollment->id], 'method' => 'patch']) !!}

                        @include('enrollments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection