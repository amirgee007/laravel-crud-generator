<table class="table table-responsive" id="ordiniCorporates-table">
    <thead>
        <tr>
            <th>Idcorporate</th>
        <th>Cod Abb</th>
        <th>Num Abb</th>
        <th>Scadenza</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ordiniCorporates as $ordiniCorporate)
        <tr>
            <td>{!! $ordiniCorporate->idcorporate !!}</td>
            <td>{!! $ordiniCorporate->cod_abb !!}</td>
            <td>{!! $ordiniCorporate->num_abb !!}</td>
            <td>{!! $ordiniCorporate->scadenza !!}</td>
            <td>
                {!! Form::open(['route' => ['ordiniCorporates.destroy', $ordiniCorporate->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ordiniCorporates.show', [$ordiniCorporate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ordiniCorporates.edit', [$ordiniCorporate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>