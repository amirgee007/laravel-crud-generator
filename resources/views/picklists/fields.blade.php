<!-- Titolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titolo', 'Titolo:') !!}
    {!! Form::text('titolo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('picklists.index') !!}" class="btn btn-default">Cancel</a>
</div>
