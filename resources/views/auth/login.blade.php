@extends('app')
@section('title', 'Login')


@section('content')

    <h1>Login</h1>

    <hr>

    @include ('errors._list')

    {!! Form::open(['url' => 'auth/login']) !!}

        {!! csrf_field() !!}

        <div class="form-group">
            {!! Form::label('email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('remember', 1, null) !!}
                    Remember me
                </label>
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        
    {!! Form::close() !!}

@endsection
