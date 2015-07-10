@extends('app')
@section('title', 'Create a User')


@section('content')

	@include ('admin.includes._header')

	<h1>Create a User</h1>

	<hr>

	@include ('errors._list')

	{!! Form::open(['url' => 'admin/users']) !!}
		@include ('admin.users._form', ['submitButtonText' => 'Add User'])
	{!! Form::close() !!}

@endsection