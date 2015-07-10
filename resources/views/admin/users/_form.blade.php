{!! csrf_field() !!}

<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<hr>

<div class="form-group pull-left">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>