<div class="table-responsive">
    <table class="table" id="courseUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>Category Id</th>
        <th>Course Name</th>
        {{-- <th>Introduction</th>
        <th>Description</th>
        <th>Assign Date</th>
        <th>Expire Date</th>
        <th>Course Url1</th>
        <th>Course Url2</th>
        <th>Course Url3</th>
        <th>Course Url4</th>
        <th>Course Url5</th>
        <th>Exam Url</th>
        <th>Resources</th>
        <th>Paid Amount</th>
        <th>Status</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseUsers as $courseUser)
            <tr>
                <td>{{ $courseUser->user_id }}</td>
            <td>{{ $courseUser->course_id }}</td>
            <td>{{ $courseUser->category_id }}</td>
             <td>{{ $courseUser->course_name }}</td>
            {{-- <td>{{ $courseUser->introduction }}</td>
            <td>{{ $courseUser->description }}</td>
            <td>{{ $courseUser->assign_date }}</td>
            <td>{{ $courseUser->expire_date }}</td>
            <td>{{ $courseUser->course_url1 }}</td>
            <td>{{ $courseUser->course_url2 }}</td>
            <td>{{ $courseUser->course_url3 }}</td>
            <td>{{ $courseUser->course_url4 }}</td>
            <td>{{ $courseUser->course_url5 }}</td>
            <td>{{ $courseUser->exam_url }}</td>
            <td>{{ $courseUser->resources }}</td>
            <td>{{ $courseUser->paid_amount }}</td>
            <td>{{ $courseUser->status }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['courseUsers.destroy', $courseUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courseUsers.show', [$courseUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courseUsers.edit', [$courseUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
