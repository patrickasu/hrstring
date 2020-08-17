{{-- @if (Auth::check() AND (Auth::user()->role_id < 3  || $course->user_id == Auth::user()->id)) --}}
<div class="table-responsive">
    <table class="table" id="reportAConcerns-table">
        <thead>
            <tr>
                <th>Subject</th>
                {{-- <th>Message</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reportAConcerns as $reportAConcern)
            <tr>
                <td><a href="{{ route('reportAConcerns.show', [$reportAConcern->id]) }}">{{ $reportAConcern->subject }}</a></td>
                {{-- <td>{{ $reportAConcern->message }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['reportAConcerns.destroy', $reportAConcern->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reportAConcerns.show', [$reportAConcern->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {{-- <a href="{{ route('reportAConcerns.edit', [$reportAConcern->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
