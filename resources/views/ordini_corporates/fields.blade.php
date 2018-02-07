<!-- Idcorporate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcorporate', 'Idcorporate:') !!}
    {!! Form::number('idcorporate', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Abb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_abb', 'Cod Abb:') !!}
    {!! Form::text('cod_abb', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Abb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_abb', 'Num Abb:') !!}
    {!! Form::number('num_abb', null, ['class' => 'form-control']) !!}
</div>

<!-- Scadenza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scadenza', 'Scadenza:') !!}
    {!! Form::date('scadenza', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ordiniCorporates.index') !!}" class="btn btn-default">Cancel</a>
</div>
