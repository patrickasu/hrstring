<!-- Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<div class="form-group col-sm-6">
    <label for="inputrole">Student Name</label>
    <select name="name" class="form-control" id="inputrole">
    {{-- <option value="{{ $user->role['id'] }}" > {{ $user->role['name'] }} </option> --}}
        @foreach ($users as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
        @endforeach 
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="inputrole">Course Name</label>
    <select name="course_name" class="form-control" id="inputrole">
    {{-- <option value="{{ $user->role['id'] }}" > {{ $user->role['name'] }} </option> --}}
        @foreach ($courses as $course)
            <option value="{{$course->course_name}}">{{$course->course_name}}</option>
        @endforeach 
    </select>
</div>

<!-- Course Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('enrollments.index') }}" class="btn btn-default">Cancel</a>
</div>
