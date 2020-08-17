<div class="table-responsive">
    <table class="table" id="courseProgresses-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Category Id</th>
        <th>Course Id</th>
        <th>Assign Date</th>
        <th>Start Date</th>
        <th>Completed Date</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseProgresses as $courseProgress)
            <tr>
                <td>{{ $courseProgress->user_id }}</td>
            <td>{{ $courseProgress->category_id }}</td>
            <td>{{ $courseProgress->course_id }}</td>
            <td>{{ $courseProgress->assign_date }}</td>
            <td>{{ $courseProgress->start_date }}</td>
            <td>{{ $courseProgress->completed_date }}</td>
            <td>{{ $courseProgress->status }}</td>
                <td>
                    {!! Form::open(['route' => ['courseProgresses.destroy', $courseProgress->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courseProgresses.show', [$courseProgress->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courseProgresses.edit', [$courseProgress->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
