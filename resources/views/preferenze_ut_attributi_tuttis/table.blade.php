<table class="table table-responsive" id="preferenzeUtAttributiTuttis-table">
    <thead>
        <tr>
            <th>Idut</th>
        <th>Idatt</th>
        <th>Datains</th>
        <th>Piace</th>
        <th>Idord</th>
        <th>Nascondi</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($preferenzeUtAttributiTuttis as $preferenzeUtAttributiTutti)
        <tr>
            <td>{!! $preferenzeUtAttributiTutti->idut !!}</td>
            <td>{!! $preferenzeUtAttributiTutti->idatt !!}</td>
            <td>{!! $preferenzeUtAttributiTutti->datains !!}</td>
            <td>{!! $preferenzeUtAttributiTutti->piace !!}</td>
            <td>{!! $preferenzeUtAttributiTutti->idord !!}</td>
            <td>{!! $preferenzeUtAttributiTutti->nascondi !!}</td>
            <td>
                {!! Form::open(['route' => ['preferenzeUtAttributiTuttis.destroy', $preferenzeUtAttributiTutti->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('preferenzeUtAttributiTuttis.show', [$preferenzeUtAttributiTutti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('preferenzeUtAttributiTuttis.edit', [$preferenzeUtAttributiTutti->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>