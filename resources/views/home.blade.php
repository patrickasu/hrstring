@extends('layouts.app')

@section('content')
<div class="container">
<section class="content-header">
      <h1 style="margin-bottom: 20px;">
        Dashboard
        @if (Auth::check() AND (Auth::user()->role_id < 3))
          <small style="text-muted">Admin portal</small>
          @else
          <small style="text-muted">Candidate portal</small>
        @endif
      </h1>
      <ol class="breadcrumb" style="margin-right: 100px;">
        <li><a href="/home"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Courses</span>
              <span class="info-box-number">{{ $CreateCourseCount }} +<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-anchor"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Package</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        {{-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> --}}
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Candidates</span>
              <span class="info-box-number">{{ $userCount }} +</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    </div>
    <div class="course-dsc" style="background-color:#fff;padding: 30px; margin-top: 30px; margin-bottom: 30px; margin-right: 90px;">
        <h3 style="color: #3c8dbc;font-weight: bold;">Welcome to HRString</h3>
        <b>Note:</b>
        <p>To start on a single course click on Start Course</p>
        <p>To start on a single exam click on Start Exam</p>
    </div>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @if (Auth::check() AND (Auth::user()->role_id < 3))
          <h3 class="text-center">Enrollment History</h3>
        @endif
        <div class="clearfix"></div>
        <div class="box box-primary container">
            <div class="box-body">
              @if (Auth::check() AND (Auth::user()->role_id < 3))
                @include('courses.courseshistory')
                @else
                @include('courses.table')
              @endif
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
  </div>
@endsection
