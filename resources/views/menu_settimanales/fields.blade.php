<!-- Idpiatto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpiatto', 'Idpiatto:') !!}
    {!! Form::number('idpiatto', null, ['class' => 'form-control']) !!}
</div>

<!-- Idrist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idrist', 'Idrist:') !!}
    {!! Form::number('idrist', null, ['class' => 'form-control']) !!}
</div>

<!-- Giorno Settimana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giorno_settimana', 'Giorno Settimana:') !!}
    {!! Form::text('giorno_settimana', null, ['class' => 'form-control']) !!}
</div>

<!-- Datamenu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datamenu', 'Datamenu:') !!}
    {!! Form::date('datamenu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('menuSettimanales.index') !!}" class="btn btn-default">Cancel</a>
</div>
