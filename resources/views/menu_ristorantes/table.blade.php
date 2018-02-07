<table class="table table-responsive" id="menuRistorantes-table">
    <thead>
        <tr>
            <th>Idrist</th>
        <th>Idpiatto</th>
        <th>Approvato</th>
        <th>Disp In Menu Set</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($menuRistorantes as $menuRistorante)
        <tr>
            <td>{!! $menuRistorante->idrist !!}</td>
            <td>{!! $menuRistorante->idpiatto !!}</td>
            <td>{!! $menuRistorante->approvato !!}</td>
            <td>{!! $menuRistorante->disp_in_menu_set !!}</td>
            <td>
                {!! Form::open(['route' => ['menuRistorantes.destroy', $menuRistorante->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('menuRistorantes.show', [$menuRistorante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('menuRistorantes.edit', [$menuRistorante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>