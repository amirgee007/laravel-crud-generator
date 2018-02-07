<!-- Idut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idut', 'Idut:') !!}
    {!! Form::number('idut', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpiatto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpiatto', 'Idpiatto:') !!}
    {!! Form::number('idpiatto', null, ['class' => 'form-control']) !!}
</div>

<!-- Piace Field -->
<div class="form-group col-sm-6">
    {!! Form::label('piace', 'Piace:') !!}
    {!! Form::number('piace', null, ['class' => 'form-control']) !!}
</div>

<!-- Idord Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idord', 'Idord:') !!}
    {!! Form::number('idord', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoazione Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoazione', 'Tipoazione:') !!}
    {!! Form::text('tipoazione', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('preferenzeUtPiattis.index') !!}" class="btn btn-default">Cancel</a>
</div>
