<table class="table table-responsive" id="piattiPicklists-table">
    <thead>
        <tr>
            <th>Idpick</th>
        <th>Idpiatto</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($piattiPicklists as $piattiPicklist)
        <tr>
            <td>{!! $piattiPicklist->idpick !!}</td>
            <td>{!! $piattiPicklist->idpiatto !!}</td>
            <td>
                {!! Form::open(['route' => ['piattiPicklists.destroy', $piattiPicklist->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('piattiPicklists.show', [$piattiPicklist->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('piattiPicklists.edit', [$piattiPicklist->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>