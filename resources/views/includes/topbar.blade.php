<div class="container">
	<div class="row header">
		
		<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4"><img src="{{ asset('core_images/images/logo.svg') }}"></div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
			<input class="search-input" type="text" name="" placeholder="Search for products or style...">
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 sign-in-sec visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
			<img src="{{ asset('core_images/images/user-icon.svg') }}">
			@auth
			<a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item btn btn-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
			
			@else
            <a href="{{ route('login') }}"><button class="btn btn-link">Sign In</button></a>
			<a href="{{ route('register') }}"><button class="btn btn-link">/ Register</button></a>
    		@endguest



		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
			<img src="{{ asset('core_images/images/bag-icon.svg') }}"><button class="btn btn-link">My Bag</button>
		</div>
	
	</div>
	</div>