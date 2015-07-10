<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('logo') !!}
	{!! Form::file('logo', ['class' => 'form-upload']) !!}
</div>

<hr>

<div class="form-group pull-left">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>