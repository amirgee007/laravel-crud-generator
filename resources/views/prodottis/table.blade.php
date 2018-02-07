<table class="table table-responsive" id="prodottis-table">
    <thead>
        <tr>
            <th>Codprod</th>
        <th>Titolo</th>
        <th>Idplatea</th>
        <th>Dispgiornaliara</th>
        <th>Stock</th>
        <th>Prezzo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prodottis as $prodotti)
        <tr>
            <td>{!! $prodotti->codprod !!}</td>
            <td>{!! $prodotti->titolo !!}</td>
            <td>{!! $prodotti->idplatea !!}</td>
            <td>{!! $prodotti->dispgiornaliara !!}</td>
            <td>{!! $prodotti->stock !!}</td>
            <td>{!! $prodotti->prezzo !!}</td>
            <td>
                {!! Form::open(['route' => ['prodottis.destroy', $prodotti->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prodottis.show', [$prodotti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prodottis.edit', [$prodotti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>