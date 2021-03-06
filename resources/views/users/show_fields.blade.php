<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<div class="form-group">
    {!! Form::label('date_enroll', 'Date Created:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
{{-- <div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div> --}}

<!-- Password Field -->
{{-- <div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div> --}}

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    <p>{{ $user->role['name'] }}</p>
</div>

<!-- Remember Token Field -->
{{-- <div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div> --}}

