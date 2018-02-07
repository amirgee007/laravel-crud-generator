<table class="table table-responsive" id="preferenzeUtPiattis-table">
    <thead>
        <tr>
            <th>Idut</th>
        <th>Idpiatto</th>
        <th>Piace</th>
        <th>Idord</th>
        <th>Tipoazione</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($preferenzeUtPiattis as $preferenzeUtPiatti)
        <tr>
            <td>{!! $preferenzeUtPiatti->idut !!}</td>
            <td>{!! $preferenzeUtPiatti->idpiatto !!}</td>
            <td>{!! $preferenzeUtPiatti->piace !!}</td>
            <td>{!! $preferenzeUtPiatti->idord !!}</td>
            <td>{!! $preferenzeUtPiatti->tipoazione !!}</td>
            <td>
                {!! Form::open(['route' => ['preferenzeUtPiattis.destroy', $preferenzeUtPiatti->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('preferenzeUtPiattis.show', [$preferenzeUtPiatti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('preferenzeUtPiattis.edit', [$preferenzeUtPiatti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>