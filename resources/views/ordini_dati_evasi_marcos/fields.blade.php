<!-- Dataord Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataord', 'Dataord:') !!}
    {!! Form::date('dataord', null, ['class' => 'form-control']) !!}
</div>

<!-- Idut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idut', 'Idut:') !!}
    {!! Form::number('idut', null, ['class' => 'form-control']) !!}
</div>

<!-- Dataconsegna Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataconsegna', 'Dataconsegna:') !!}
    {!! Form::date('dataconsegna', null, ['class' => 'form-control']) !!}
</div>

<!-- Oraritiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oraritiro', 'Oraritiro:') !!}
    {!! Form::text('oraritiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Idab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idab', 'Idab:') !!}
    {!! Form::number('idab', null, ['class' => 'form-control']) !!}
</div>

<!-- Stato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stato', 'Stato:') !!}
    {!! Form::text('stato', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('ordiniDatiEvasiMarcos.index') !!}" class="btn btn-default">Cancel</a>
</div>
