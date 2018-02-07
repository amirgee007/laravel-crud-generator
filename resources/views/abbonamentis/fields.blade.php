<!-- Idut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idut', 'Idut:') !!}
    {!! Form::number('idut', null, ['class' => 'form-control']) !!}
</div>

<!-- Idab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idab', 'Idab:') !!}
    {!! Form::number('idab', null, ['class' => 'form-control']) !!}
</div>

<!-- Scadenza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scadenza', 'Scadenza:') !!}
    {!! Form::date('scadenza', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcorporate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcorporate', 'Idcorporate:') !!}
    {!! Form::number('idcorporate', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('abbonamentis.index') !!}" class="btn btn-default">Cancel</a>
</div>
