<!-- Codprod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codprod', 'Codprod:') !!}
    {!! Form::text('codprod', null, ['class' => 'form-control']) !!}
</div>

<!-- Titolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titolo', 'Titolo:') !!}
    {!! Form::text('titolo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idplatea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idplatea', 'Idplatea:') !!}
    {!! Form::number('idplatea', null, ['class' => 'form-control']) !!}
</div>

<!-- Dispgiornaliara Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dispgiornaliara', 'Dispgiornaliara:') !!}
    {!! Form::number('dispgiornaliara', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Prezzo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prezzo', 'Prezzo:') !!}
    {!! Form::number('prezzo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prodottis.index') !!}" class="btn btn-default">Cancel</a>
</div>
