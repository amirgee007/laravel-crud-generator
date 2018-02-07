<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $menuRistorante->id !!}</p>
</div>

<!-- Idrist Field -->
<div class="form-group">
    {!! Form::label('idrist', 'Idrist:') !!}
    <p>{!! $menuRistorante->idrist !!}</p>
</div>

<!-- Idpiatto Field -->
<div class="form-group">
    {!! Form::label('idpiatto', 'Idpiatto:') !!}
    <p>{!! $menuRistorante->idpiatto !!}</p>
</div>

<!-- Approvato Field -->
<div class="form-group">
    {!! Form::label('approvato', 'Approvato:') !!}
    <p>{!! $menuRistorante->approvato !!}</p>
</div>

<!-- Disp In Menu Set Field -->
<div class="form-group">
    {!! Form::label('disp_in_menu_set', 'Disp In Menu Set:') !!}
    <p>{!! $menuRistorante->disp_in_menu_set !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $menuRistorante->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $menuRistorante->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $menuRistorante->deleted_at !!}</p>
</div>

