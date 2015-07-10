@extends('app')
@section('title', 'Edit Business')


@section('content')

	@include ('admin.includes._header')

	<h1>Edit: {{ $business->name }}</h1>

	<hr>

	@include ('errors._list')

	{!! Form::model($business, ['method' => 'PATCH', 'action' => ['Admin\BusinessesController@update', $business->id], 'files' => true]) !!}
		@include ('admin.businesses._form', ['submitButtonText' => 'Update Business'])
	{!! Form::close() !!}

	{!! Form::open(['method' => 'DELETE', 'action' => ['Admin\BusinessesController@destroy', $business->id]]) !!}
		<div class="form-group pull-left">
			{!! Form::submit('Delete', ['class' => 'btn btn-danger delete']) !!}
		</div>
	{!! Form::close() !!}

@endsection