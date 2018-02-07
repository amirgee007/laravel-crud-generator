<!-- Titolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titolo', 'Titolo:') !!}
    {!! Form::text('titolo', null, ['class' => 'form-control']) !!}
</div>

<!-- Citta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citta', 'Citta:') !!}
    {!! Form::text('citta', null, ['class' => 'form-control']) !!}
</div>

<!-- Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provincia', 'Provincia:') !!}
    {!! Form::text('provincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('platees.index') !!}" class="btn btn-default">Cancel</a>
</div>
