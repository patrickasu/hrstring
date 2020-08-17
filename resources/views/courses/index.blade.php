@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
    <div class="course-dsc" style="background-color:#fff;padding: 30px; margin-top: 30px; margin-bottom: 30px; margin-right: 90px; margin-left: 20px;">
        <h3 style="color: #3c8dbc;font-weight: bold;">Welcome to HRString</h3>
        <b>Note:</b>
        <p>To start on a single course click on Start Course</p>
        <p>To start on a single exam click on Start Exam</p>
    </div>
    <section class="content-header">
        <h1 class="pull-left">Courses</h1>
         @if (Auth::check() AND (Auth::user()->role_id < 3))
            <h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('courses.create') }}">Add New</a>
            </h1>
            <br>
        @endif
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('courses.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

