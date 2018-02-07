<!-- Idord Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idord', 'Idord:') !!}
    {!! Form::number('idord', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Qta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qta', 'Qta:') !!}
    {!! Form::number('qta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ordiniProdottiEvasis.index') !!}" class="btn btn-default">Cancel</a>
</div>
