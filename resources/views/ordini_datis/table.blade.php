<table class="table table-responsive" id="ordiniDatis-table">
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
    @foreach($ordiniDatis as $ordiniDati)
        <tr>
            <td>{!! $ordiniDati->dataord !!}</td>
            <td>{!! $ordiniDati->idut !!}</td>
            <td>{!! $ordiniDati->dataconsegna !!}</td>
            <td>{!! $ordiniDati->oraritiro !!}</td>
            <td>{!! $ordiniDati->ip !!}</td>
            <td>{!! $ordiniDati->idab !!}</td>
            <td>{!! $ordiniDati->stato !!}</td>
            <td>
                {!! Form::open(['route' => ['ordiniDatis.destroy', $ordiniDati->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ordiniDatis.show', [$ordiniDati->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ordiniDatis.edit', [$ordiniDati->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>