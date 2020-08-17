<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date Enroll</th>
                <th>Email</th>
                {{-- <th>Email Verified At</th>
                <th>Password</th> --}}
                {{-- <th>Role Id</th> --}}
                {{-- <th>Remember Token</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><a href="{{ route('users.show', [$user->id]) }}" > {{ $user->name }}</a></td>       
                <td>{{ $user->date_enroll }}</td>
                <td>{{ $user->email }}</td>
                {{-- <td>{{ $user->email_verified_at }}</td>
                <td>{{ $user->password }}</td> --}}
                {{-- <td>{{ $user->role_id }}</td> --}}
                {{-- <td>{{ $user->remember_token }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
