@extends('app')
@section('title', 'Register')


@section('content')

    <h1>Login</h1>

    <hr>

    @include ('errors._list')

    {!! Form::open(['url' => 'auth/register']) !!}

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
        <div class="form-group">
            {!! Form::label('password_confirmation') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        <hr>

        <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        
    {!! Form::close() !!}

@endsection
