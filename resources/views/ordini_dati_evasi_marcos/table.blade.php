<table class="table table-responsive" id="ordiniDatiEvasiMarcos-table">
    <thead>
        <tr>
            <th>Dataord</th>
        <th>Idut</th>
        <th>Dataconsegna</th>
        <th>Oraritiro</th>
        <th>Ip</th>
        <th>Idab</th>
        <th>Stato</th>
        <th>Idpiatto</th>
        <th>Idrist</th>
        <th>Qta</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ordiniDatiEvasiMarcos as $ordiniDatiEvasiMarco)
        <tr>
            <td>{!! $ordiniDatiEvasiMarco->dataord !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->idut !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->dataconsegna !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->oraritiro !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->ip !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->idab !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->stato !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->idpiatto !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->idrist !!}</td>
            <td>{!! $ordiniDatiEvasiMarco->qta !!}</td>
            <td>
                {!! Form::open(['route' => ['ordiniDatiEvasiMarcos.destroy', $ordiniDatiEvasiMarco->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ordiniDatiEvasiMarcos.show', [$ordiniDatiEvasiMarco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ordiniDatiEvasiMarcos.edit', [$ordiniDatiEvasiMarco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>