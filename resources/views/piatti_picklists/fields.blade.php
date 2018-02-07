<!-- Idpick Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpick', 'Idpick:') !!}
    {!! Form::number('idpick', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpiatto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpiatto', 'Idpiatto:') !!}
    {!! Form::number('idpiatto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('piattiPicklists.index') !!}" class="btn btn-default">Cancel</a>
</div>
