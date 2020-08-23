<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6">
    <label for="inputcategory">Select Category</label>
    <select name="category_id" class="form-control" id="inputcategory">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach 
    </select>
</div>  

<!-- Introduction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('introduction', 'Introduction:') !!}
    {!! Form::text('introduction', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Url1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url1', 'Course Url1:') !!}
    {!! Form::text('course_url1', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url2', 'Course Url2:') !!}
    {!! Form::text('course_url2', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url3', 'Course Url3:') !!}
    {!! Form::text('course_url3', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url4', 'Course Url4:') !!}
    {!! Form::text('course_url4', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Url5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_url5', 'Course Url5:') !!}
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('createcourses.index') }}" class="btn btn-default">Cancel</a>
</div>
