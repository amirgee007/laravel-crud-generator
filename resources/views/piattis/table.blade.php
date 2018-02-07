<table class="table table-responsive" id="piattis-table">
    <thead>
        <tr>
            <th>Titolo</th>
        <th>Descrizione</th>
        <th>Foto1</th>
        <th>Foto2</th>
        <th>Foto3</th>
        <th>Foto4</th>
        <th>Foto5</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($piattis as $piatti)
        <tr>
            <td>{!! $piatti->titolo !!}</td>
            <td>{!! $piatti->descrizione !!}</td>
            <td>{!! $piatti->foto1 !!}</td>
            <td>{!! $piatti->foto2 !!}</td>
            <td>{!! $piatti->foto3 !!}</td>
            <td>{!! $piatti->foto4 !!}</td>
            <td>{!! $piatti->foto5 !!}</td>
            <td>
                {!! Form::open(['route' => ['piattis.destroy', $piatti->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('piattis.show', [$piatti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('piattis.edit', [$piatti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>