<div class="form-group col-sm-6">
    <label for="inputcategory">Select Student</label>
    <select name="user_id" class="form-control" id="inputcategory">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach 
    </select>
</div> 

<div class="form-group col-sm-6">
    <label for="inputcategory">Select Category</label>
    <select name="category_id" class="form-control" id="inputcategory">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach 
    </select>
</div>  

<!-- Course Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<div class="form-group col-sm-6">
    <label for="inputcategory">Select Course</label>
    <select name="course_name" class="form-control" id="inputcategory">
        @foreach ($createcourses as $createcourse)
            <option value="{{$createcourse->course_name}}">{{$createcourse->course_name}}</option>
        @endforeach 
    </select>
</div> 

<!-- Introduction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('introduction', 'Sub Heading:') !!}
    {!! Form::text('introduction', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Assign Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assign_date', 'Assign Date:') !!}
    {!! Form::text('assign_date', null, ['class' => 'form-control','id'=>'assign_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#assign_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Expire Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expire_date', 'Expire Date:') !!}
    {!! Form::text('expire_date', null, ['class' => 'form-control','id'=>'expire_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#expire_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Course Url1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url1', 'Video Url:') !!}
    {!! Form::text('course_url1', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url2', 'Video Url:') !!}
    {!! Form::text('course_url2', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url3', 'Video Url:') !!}
    {!! Form::text('course_url3', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url4', 'Video Url:') !!}
    {!! Form::text('course_url4', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url5', 'Slider Url:') !!}
    {!! Form::text('course_url5', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Exam Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exam_url', 'Exam Url:') !!}
    {!! Form::text('exam_url', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Resources Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('resources', 'Resources:') !!}
    {!! Form::textarea('resources', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Create Course', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
</div>
