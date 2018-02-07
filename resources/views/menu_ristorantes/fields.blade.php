<!-- Idrist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idrist', 'Idrist:') !!}
    {!! Form::number('idrist', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpiatto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpiatto', 'Idpiatto:') !!}
    {!! Form::number('idpiatto', null, ['class' => 'form-control']) !!}
</div>

<!-- Approvato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('approvato', 'Approvato:') !!}
    {!! Form::number('approvato', null, ['class' => 'form-control']) !!}
</div>

<!-- Disp In Menu Set Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disp_in_menu_set', 'Disp In Menu Set:') !!}
    {!! Form::number('disp_in_menu_set', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('menuRistorantes.index') !!}" class="btn btn-default">Cancel</a>
</div>
