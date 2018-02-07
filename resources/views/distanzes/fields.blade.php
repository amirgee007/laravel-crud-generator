<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user', 'User:') !!}
    {!! Form::text('user', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass', 'Pass:') !!}
    {!! Form::text('pass', null, ['class' => 'form-control']) !!}
</div>

<!-- Attivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attivo', 'Attivo:') !!}
    {!! Form::number('attivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('distanzes.index') !!}" class="btn btn-default">Cancel</a>
</div>
