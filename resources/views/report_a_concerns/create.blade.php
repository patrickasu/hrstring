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
            @include('flash::message')
                <div class="row">
                    {!! Form::open(['route' => 'reportAConcerns.store']) !!}

                        @include('report_a_concerns.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
