<table class="table table-responsive" id="ordiniDatiEvasis-table">
    <thead>
        <tr>
            <th>Dataord</th>
        <th>Idut</th>
        <th>Dataconsegna</th>
        <th>Oraritiro</th>
        <th>Ip</th>
        <th>Idab</th>
        <th>Stato</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ordiniDatiEvasis as $ordiniDatiEvasi)
        <tr>
            <td>{!! $ordiniDatiEvasi->dataord !!}</td>
            <td>{!! $ordiniDatiEvasi->idut !!}</td>
            <td>{!! $ordiniDatiEvasi->dataconsegna !!}</td>
            <td>{!! $ordiniDatiEvasi->oraritiro !!}</td>
            <td>{!! $ordiniDatiEvasi->ip !!}</td>
            <td>{!! $ordiniDatiEvasi->idab !!}</td>
            <td>{!! $ordiniDatiEvasi->stato !!}</td>
            <td>
                {!! Form::open(['route' => ['ordiniDatiEvasis.destroy', $ordiniDatiEvasi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ordiniDatiEvasis.show', [$ordiniDatiEvasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ordiniDatiEvasis.edit', [$ordiniDatiEvasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>