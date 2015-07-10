@extends('app')
@section('title', 'Users')


@section('content')

	@include ('admin.includes._header')

	<h1>
		Users
		<a href="{{ url('admin/users/create') }}" class="btn btn-primary pull-right">Add New</a>
	</h1>

	<hr>

	@if (count($users))

	<table class="table table-hover table-striped">
		<colgroup>
			<col class="columns-first">
			<col class="columns-end" span="2">
		</colgroup>
		<thead>
			<tr>
				<th>Name</th>
				<th colspan="2">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td><a href="{{ url('admin/users/'.$user->id) }}" class="glyphicon glyphicon-eye-open"></a></td>
				<td><a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="glyphicon glyphicon-pencil"></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	@endif

@endsection