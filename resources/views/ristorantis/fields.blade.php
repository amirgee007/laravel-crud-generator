<!-- Ragionesociale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ragionesociale', 'Ragionesociale:') !!}
    {!! Form::text('ragionesociale', null, ['class' => 'form-control']) !!}
</div>

<!-- Insegna Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insegna', 'Insegna:') !!}
    {!! Form::text('insegna', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomereferente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomereferente', 'Nomereferente:') !!}
    {!! Form::text('nomereferente', null, ['class' => 'form-control']) !!}
</div>

<!-- Cognomereferente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cognomereferente', 'Cognomereferente:') !!}
    {!! Form::text('cognomereferente', null, ['class' => 'form-control']) !!}
</div>

<!-- Indirizzo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indirizzo', 'Indirizzo:') !!}
    {!! Form::text('indirizzo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cap Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cap', 'Cap:') !!}
    {!! Form::text('cap', null, ['class' => 'form-control']) !!}
</div>

<!-- Localita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('localita', 'Localita:') !!}
    {!! Form::text('localita', null, ['class' => 'form-control']) !!}
</div>

<!-- Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provincia', 'Provincia:') !!}
    {!! Form::text('provincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Cellulare Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cellulare', 'Cellulare:') !!}
    {!! Form::text('cellulare', null, ['class' => 'form-control']) !!}
</div>

<!-- Email1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email1', 'Email1:') !!}
    {!! Form::text('email1', null, ['class' => 'form-control']) !!}
</div>

<!-- Email2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email2', 'Email2:') !!}
    {!! Form::text('email2', null, ['class' => 'form-control']) !!}
</div>

<!-- Piva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('piva', 'Piva:') !!}
    {!! Form::text('piva', null, ['class' => 'form-control']) !!}
</div>

<!-- Cf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cf', 'Cf:') !!}
    {!! Form::text('cf', null, ['class' => 'form-control']) !!}
</div>

<!-- Capservito1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capservito1', 'Capservito1:') !!}
    {!! Form::number('capservito1', null, ['class' => 'form-control']) !!}
</div>

<!-- Capservito2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capservito2', 'Capservito2:') !!}
    {!! Form::number('capservito2', null, ['class' => 'form-control']) !!}
</div>

<!-- Capservito3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capservito3', 'Capservito3:') !!}
    {!! Form::number('capservito3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ristorantis.index') !!}" class="btn btn-default">Cancel</a>
</div>
