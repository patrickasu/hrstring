<div class="table-responsive">
    <table class="table" id="enrollments-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Course Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->name }}</td>
            <td>{{ $enrollment->course_name }}</td>
            {{-- <td><a href="{{ route('courses.show', [$course->id]) }}">Start Course</a></td> --}}
                <td>
                    {!! Form::open(['route' => ['enrollments.destroy', $enrollment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('enrollments.show', [$enrollment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('enrollments.edit', [$enrollment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
