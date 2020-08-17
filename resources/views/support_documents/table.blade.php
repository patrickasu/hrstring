<div class="table-responsive">
    <table class="table" id="supportDocuments-table">
        <thead>
            <tr>
                <th>Course Name</th>
                {{-- <th>Url</th> --}}
                <th>Document</th>
                 @if (Auth::check() AND (Auth::user()->role_id < 3))
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
        @foreach($supportDocuments as $supportDocument)
            <tr>
                <td>{{ $supportDocument->course_name }}</td>
                {{-- <td>{{ $supportDocument->url }}</td> --}}
                <td><a href="{{ $supportDocument->url }}" target="_blank">View Document</a></td>
                <td>
                    {!! Form::open(['route' => ['supportDocuments.destroy', $supportDocument->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                     @if (Auth::check() AND (Auth::user()->role_id < 3))
                        <a href="{{ route('supportDocuments.show', [$supportDocument->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('supportDocuments.edit', [$supportDocument->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
