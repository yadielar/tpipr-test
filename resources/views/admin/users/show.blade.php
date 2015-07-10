@extends('app')
@section('title', $user->name)


@section('content')

	@include ('admin.includes._header')

	<h1>{{ $user->name }}</h1>

	<hr>

	<div>
		<p><strong>Name</strong></p>
		<p>{{ $user->name }}</p>
	</div>

	<hr>

	<div>
		<p><strong>Email</strong></p>
		<p>{{ $user->email }}</p>
	</div>

	<hr>

	<div class="form-group">
		<a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-primary">Edit User</a>
		<a href="{{ url('admin/users') }}" class="btn btn-default">Go Back</a>
	</div>

@endsection