@extends('app')
@section('title', 'Create a Business')


@section('content')

	@include ('admin.includes._header')

	<h1>Create a Business</h1>

	<hr>

	@include ('errors._list')

	{!! Form::open(['url' => 'admin/businesses', 'files' => true]) !!}
		@include ('admin.businesses._form', ['submitButtonText' => 'Add Business'])
	{!! Form::close() !!}

@endsection