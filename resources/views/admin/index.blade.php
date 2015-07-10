@extends('app')
@section('title', 'Admin')


@section('content')

	@include ('admin.includes._header')

	<h1>Dashboard</h1>

	<hr>

	<div class="row">
		<div class="col-sm-6">
			@if (count($businesses))

			<h2><a href="{{ url('admin/businesses') }}">Businesses</a></h2>

			<div class="panel panel-default panel-dashboard">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($businesses as $business)
						<tr>
							<td>{{$business->name}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			@endif
		</div>
		<div class="col-sm-6">
			@if (count($users))

			<h2><a href="{{ url('admin/users') }}">Users</a></h2>

			<div class="panel panel-default panel-dashboard">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
						<tr>
							<td>{{$user->name}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			@endif
		</div>
	</div>

@endsection