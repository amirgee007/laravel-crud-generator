<table class="table table-responsive" id="ordiniProdottiEvasis-table">
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
    @foreach($ordiniProdottiEvasis as $ordiniProdottiEvasi)
        <tr>
            <td>{!! $ordiniProdottiEvasi->idord !!}</td>
            <td>{!! $ordiniProdottiEvasi->idpiatto !!}</td>
            <td>{!! $ordiniProdottiEvasi->idrist !!}</td>
            <td>{!! $ordiniProdottiEvasi->qta !!}</td>
            <td>
                {!! Form::open(['route' => ['ordiniProdottiEvasis.destroy', $ordiniProdottiEvasi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ordiniProdottiEvasis.show', [$ordiniProdottiEvasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ordiniProdottiEvasis.edit', [$ordiniProdottiEvasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>