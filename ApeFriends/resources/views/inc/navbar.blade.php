<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="{{ route('welcome') }}"> {{ Config::get('app.name') }}</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span> </button>

		<div class="collapse navbar-collapse" id="Navber">
			<ul class="navbar-nav mr-auto">
				@guest
				<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{__('Login') }}</a></li>
				<li class="nav-item"><a class="nav-link"
					href="{{ route('register') }}">{{ __('Register') }}</a></li>
				@else
				<li class="nav-item dropdown">
				    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }} </a>
						<form id="logout-form" action="{{ route('logout') }}"
							method="POST" style="display: none;">@csrf</form>
					</div>
				</li>
				@endguest
			</ul>
		</div>
		<!--/.nav-collapse -->
</nav>
