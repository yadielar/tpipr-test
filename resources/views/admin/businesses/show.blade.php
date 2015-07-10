@extends('app')
@section('title', $business->name)


@section('content')

	@include ('admin.includes._header')

	<h1>{{ $business->name }}</h1>

	<hr>

	<div>
		<p><strong>Name</strong></p>
		<p>{{ $business->name }}</p>
	</div>

	<hr>

	@if ($business->logo)

		<div>
			<p><strong>Image</strong></p>
			<p><img width="200" src="{{ url($business->logo) }}" alt="{{ $business->name }}" class="img-responsive img-thumbnail"></p>
		</div>

		<hr>

	@endif

	<div>
		<p><strong>Created by</strong></p>
		<p>{{ $business->user->name }}</p>
	</div>

	<hr>

	<div class="form-group">
		<a href="{{ url('admin/businesses/'.$business->id.'/edit') }}" class="btn btn-primary">Edit Business</a>
		<a href="{{ url('admin/businesses') }}" class="btn btn-default">Go Back</a>
	</div>

@endsection