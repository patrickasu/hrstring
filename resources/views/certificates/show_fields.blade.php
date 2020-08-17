<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $certificate->user_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $certificate->category_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $certificate->course_id }}</p>
</div>

<!-- Assign Date Field -->
<div class="form-group">
    {!! Form::label('assign_date', 'Assign Date:') !!}
    <p>{{ $certificate->assign_date }}</p>
</div>

<!-- Percentage Field -->
<div class="form-group">
    {!! Form::label('percentage', 'Percentage:') !!}
    <p>{{ $certificate->percentage }}</p>
</div>

<!-- Certificate Status Field -->
<div class="form-group">
    {!! Form::label('certificate_status', 'Certificate Status:') !!}
    <p>{{ $certificate->certificate_status }}</p>
</div>

