<table class="table table-responsive" id="platees-table">
    <thead>
        <tr>
            <th>Titolo</th>
        <th>Citta</th>
        <th>Provincia</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($platees as $platee)
        <tr>
            <td>{!! $platee->titolo !!}</td>
            <td>{!! $platee->citta !!}</td>
            <td>{!! $platee->provincia !!}</td>
            <td>
                {!! Form::open(['route' => ['platees.destroy', $platee->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('platees.show', [$platee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('platees.edit', [$platee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>