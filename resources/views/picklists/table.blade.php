<table class="table table-responsive" id="picklists-table">
    <thead>
        <tr>
            <th>Titolo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($picklists as $picklist)
        <tr>
            <td>{!! $picklist->titolo !!}</td>
            <td>
                {!! Form::open(['route' => ['picklists.destroy', $picklist->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('picklists.show', [$picklist->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('picklists.edit', [$picklist->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>