<table class="table table-responsive" id="distanzes-table">
    <thead>
        <tr>
            <th>User</th>
        <th>Pass</th>
        <th>Attivo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($distanzes as $distanze)
        <tr>
            <td>{!! $distanze->user !!}</td>
            <td>{!! $distanze->pass !!}</td>
            <td>{!! $distanze->attivo !!}</td>
            <td>
                {!! Form::open(['route' => ['distanzes.destroy', $distanze->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('distanzes.show', [$distanze->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('distanzes.edit', [$distanze->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>