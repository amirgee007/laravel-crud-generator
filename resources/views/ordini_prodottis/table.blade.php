<table class="table table-responsive" id="ordiniProdottis-table">
    <thead>
        <tr>
            <th>Idord</th>
        <th>Idpiatto</th>
        <th>Idrist</th>
        <th>Qta</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ordiniProdottis as $ordiniProdotti)
        <tr>
            <td>{!! $ordiniProdotti->idord !!}</td>
            <td>{!! $ordiniProdotti->idpiatto !!}</td>
            <td>{!! $ordiniProdotti->idrist !!}</td>
            <td>{!! $ordiniProdotti->qta !!}</td>
            <td>
                {!! Form::open(['route' => ['ordiniProdottis.destroy', $ordiniProdotti->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ordiniProdottis.show', [$ordiniProdotti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ordiniProdottis.edit', [$ordiniProdotti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>