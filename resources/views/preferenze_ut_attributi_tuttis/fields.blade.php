<!-- Idut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idut', 'Idut:') !!}
    {!! Form::number('idut', null, ['class' => 'form-control']) !!}
</div>

<!-- Idatt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idatt', 'Idatt:') !!}
    {!! Form::number('idatt', null, ['class' => 'form-control']) !!}
</div>

<!-- Datains Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datains', 'Datains:') !!}
    {!! Form::date('datains', null, ['class' => 'form-control']) !!}
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

<!-- Nascondi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nascondi', 'Nascondi:') !!}
    {!! Form::number('nascondi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('preferenzeUtAttributiTuttis.index') !!}" class="btn btn-default">Cancel</a>
</div>
