@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Report A Concern
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reportAConcern, ['route' => ['reportAConcerns.update', $reportAConcern->id], 'method' => 'patch']) !!}

                        @include('report_a_concerns.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection