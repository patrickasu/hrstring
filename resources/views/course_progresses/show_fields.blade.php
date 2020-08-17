<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $courseProgress->user_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $courseProgress->category_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $courseProgress->course_id }}</p>
</div>

<!-- Assign Date Field -->
<div class="form-group">
    {!! Form::label('assign_date', 'Assign Date:') !!}
    <p>{{ $courseProgress->assign_date }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $courseProgress->start_date }}</p>
</div>

<!-- Completed Date Field -->
<div class="form-group">
    {!! Form::label('completed_date', 'Completed Date:') !!}
    <p>{{ $courseProgress->completed_date }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $courseProgress->status }}</p>
</div>

