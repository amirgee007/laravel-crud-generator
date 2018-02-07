<table class="table table-responsive" id="ristorantis-table">
    <thead>
        <tr>
            <th>Ragionesociale</th>
        <th>Insegna</th>
        <th>Nomereferente</th>
        <th>Cognomereferente</th>
        <th>Indirizzo</th>
        <th>Cap</th>
        <th>Localita</th>
        <th>Provincia</th>
        <th>Telefono</th>
        <th>Cellulare</th>
        <th>Email1</th>
        <th>Email2</th>
        <th>Piva</th>
        <th>Cf</th>
        <th>Capservito1</th>
        <th>Capservito2</th>
        <th>Capservito3</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ristorantis as $ristoranti)
        <tr>
            <td>{!! $ristoranti->ragionesociale !!}</td>
            <td>{!! $ristoranti->insegna !!}</td>
            <td>{!! $ristoranti->nomereferente !!}</td>
            <td>{!! $ristoranti->cognomereferente !!}</td>
            <td>{!! $ristoranti->indirizzo !!}</td>
            <td>{!! $ristoranti->cap !!}</td>
            <td>{!! $ristoranti->localita !!}</td>
            <td>{!! $ristoranti->provincia !!}</td>
            <td>{!! $ristoranti->telefono !!}</td>
            <td>{!! $ristoranti->cellulare !!}</td>
            <td>{!! $ristoranti->email1 !!}</td>
            <td>{!! $ristoranti->email2 !!}</td>
            <td>{!! $ristoranti->piva !!}</td>
            <td>{!! $ristoranti->cf !!}</td>
            <td>{!! $ristoranti->capservito1 !!}</td>
            <td>{!! $ristoranti->capservito2 !!}</td>
            <td>{!! $ristoranti->capservito3 !!}</td>
            <td>
                {!! Form::open(['route' => ['ristorantis.destroy', $ristoranti->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ristorantis.show', [$ristoranti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ristorantis.edit', [$ristoranti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>