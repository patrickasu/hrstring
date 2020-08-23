<div class="table-responsive">
    <table class="table" id="createcourses-table">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Course Name</th>
                <th>Course</th>
                <th>Exam</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($createcourses as $createcourse)
            <tr>
                <td>{{ $createcourse->category['name'] }}</td>
                <td>{{ $createcourse->course_name }}</td>
                <td>View Course</td>
                <td>View Exam</td>
                {{-- <td>{{ $createcourse->exam_url }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['createcourses.destroy', $createcourse->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('createcourses.show', [$createcourse->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('createcourses.edit', [$createcourse->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
