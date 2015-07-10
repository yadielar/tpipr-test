<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('home') }}">TPiPR</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="{{ Active::pattern('admin') }}">
					<a href="{{ url('admin') }}">Dashboard</a>
				</li>
				<li class="{{ Active::pattern('admin/businesses*') }}">
					<a href="{{ url('admin/businesses') }}">Businesses</a>
				</li>
				<li class="{{ Active::pattern('admin/users*') }}">
					<a href="{{ url('admin/users') }}">Users</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@if(Auth::check())
					<li><a href="{{ url('auth/logout') }}">Logout</a></li>
				@else
					<li><a href="{{ url('auth/login') }}">Login</a></li>
				@endif
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
