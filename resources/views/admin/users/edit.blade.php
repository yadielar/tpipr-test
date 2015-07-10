@extends('app')
@section('title', 'Edit User')


@section('content')

	@include ('admin.includes._header')

	<h1>Edit: {{ $user->name }}</h1>

	<hr>

	@include ('errors._list')

	{!! Form::model($user, ['method' => 'PATCH', 'action' => ['Admin\UsersController@update', $user->id]]) !!}
		@include ('admin.users._form', ['submitButtonText' => 'Update User'])
	{!! Form::close() !!}

	{!! Form::open(['method' => 'DELETE', 'action' => ['Admin\UsersController@destroy', $user->id]]) !!}
		<div class="form-group pull-left">
			{!! Form::submit('Delete', ['class' => 'btn btn-danger delete']) !!}
		</div>
	{!! Form::close() !!}

@endsection