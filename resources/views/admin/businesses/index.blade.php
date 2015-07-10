@extends('app')
@section('title', 'Businesses')


@section('content')

	@include ('admin.includes._header')

	<h1>
		Businesses
		<a href="{{ url('admin/businesses/create') }}" class="btn btn-primary pull-right">Add New</a>
	</h1>

	<hr>

	@if (count($businesses))

	<table class="table table-hover table-striped">
		<colgroup>
			<col class="column-first" span="2">
			<col class="columns-end" span="2">
		</colgroup>
		<thead>
			<tr>
				<th>Name</th>
				<th>Created by</th>
				<th colspan="2">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($businesses as $business)
			<tr>
				<td>{{$business->name}}</td>
				<td>{{$business->user->name}}</td>
				<td><a href="{{ url('admin/businesses/'.$business->id) }}" class="glyphicon glyphicon-eye-open"></a></td>
				<td><a href="{{ url('admin/businesses/'.$business->id.'/edit') }}" class="glyphicon glyphicon-pencil"></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	@endif

@endsection