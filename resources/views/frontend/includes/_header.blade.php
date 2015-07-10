<div class="white-header clearfix">
	<nav>
		<ul class="nav nav-pills pull-right">
			@if(Auth::check())
				<li><a href="{{ url('admin') }}">Admin</a></li>
				<li><a href="{{ url('auth/logout') }}">Logout</a></li>
			@else
				<li><a href="{{ url('auth/login') }}">Login</a></li>
				<li><a href="{{ url('auth/register') }}">Register</a></li>
			@endif
		</ul>
	</nav>
	<h3 class="text-muted"><a href="{{ url('home') }}">TPiPR</a></h3>
</div>