<table class="table table-responsive" id="menuSettimanales-table">
    <thead>
        <tr>
            <th>Idpiatto</th>
        <th>Idrist</th>
        <th>Giorno Settimana</th>
        <th>Datamenu</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($menuSettimanales as $menuSettimanale)
        <tr>
            <td>{!! $menuSettimanale->idpiatto !!}</td>
            <td>{!! $menuSettimanale->idrist !!}</td>
            <td>{!! $menuSettimanale->giorno_settimana !!}</td>
            <td>{!! $menuSettimanale->datamenu !!}</td>
            <td>
                {!! Form::open(['route' => ['menuSettimanales.destroy', $menuSettimanale->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('menuSettimanales.show', [$menuSettimanale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('menuSettimanales.edit', [$menuSettimanale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>