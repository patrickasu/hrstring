<div class="table-responsive">
    <table class="table" id="certificates-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Category Id</th>
        <th>Course Id</th>
        <th>Assign Date</th>
        <th>Percentage</th>
        <th>Certificate Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($certificates as $certificate)
            <tr>
                <td>{{ $certificate->user_id }}</td>
            <td>{{ $certificate->category_id }}</td>
            <td>{{ $certificate->course_id }}</td>
            <td>{{ $certificate->assign_date }}</td>
            <td>{{ $certificate->percentage }}</td>
            <td>{{ $certificate->certificate_status }}</td>
                <td>
                    {!! Form::open(['route' => ['certificates.destroy', $certificate->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('certificates.show', [$certificate->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('certificates.edit', [$certificate->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
