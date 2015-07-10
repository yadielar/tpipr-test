@extends('app')
@section('title', 'Home')


@section('content')

	@include ('frontend.includes._header')

	<div class="page-header">
		<h1>Businesses</h1>
	</div>

	@if (count($businesses))

	<div class="row">
		@foreach ($businesses as $business)
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-default business-card">
				<div class="panel-body">
					<h2>{{$business->name}}</h2>
					<small class="text-muted">Created by: {{$business->user->name}}</small>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	@endif

@endsection