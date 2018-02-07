<!-- Titolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titolo', 'Titolo:') !!}
    {!! Form::text('titolo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descrizione Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descrizione', 'Descrizione:') !!}
    {!! Form::textarea('descrizione', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto1', 'Foto1:') !!}
    {!! Form::text('foto1', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto2', 'Foto2:') !!}
    {!! Form::text('foto2', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto3', 'Foto3:') !!}
    {!! Form::text('foto3', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto4', 'Foto4:') !!}
    {!! Form::text('foto4', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto5', 'Foto5:') !!}
    {!! Form::text('foto5', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('piattis.index') !!}" class="btn btn-default">Cancel</a>
</div>
