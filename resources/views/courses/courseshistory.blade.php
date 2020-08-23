<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Student name</th>
                {{-- <th>Category Id</th> --}}
                <th>Category</th>
                <th>Course</th>
                <th>Assign On</th>
                {{-- <th>Course Url</th> --}}
                <th>Course</th>
                {{-- <th>Exam Url</th> --}}
                <th>Exam</th>
                {{-- <th>Resources</th> --}}
                {{-- <th>Expire Status</th> --}}
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            @if (Auth::check() AND (Auth::user()->role_id < 3 ))
            <tr>
            {{-- @if (Auth::check() AND (Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id))
                <td>{{ $course->user['name'] }}</td>
            @endif --}}
                <td>{{ $course->user['name'] }}</td>
                <td>{{ $course->category['name'] }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->assign_date }}</td>
                <td><a href="{{ route('courses.show', [$course->id]) }}">Start Course</a></td>
                <td><a href="{{ $course->exam_url }}" target="_blank">Start Exam</a></td>
                {{-- <td>{{ $course->resources }}</td> --}}
                <td><span style="color: red;">Expired On:</span> {{ $course->expire_date }}</td>
                <td>
                    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                         @if (Auth::check() AND (Auth::user()->role_id < 3))
                        <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endif
        @endforeach
       
        </tbody>
    </table>
</div>
