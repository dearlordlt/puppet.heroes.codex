<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ URL::route('home') }}">HOME</a>
		</div>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
        </form>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
		        @if(Auth::check())
		        	<li><a href="{{ URL::route('account-sign-out') }}">Sign out</a></li>
		        	<li><a href="{{ URL::route('account-change-password') }}">Change password</a></li>
		        @else
		        	<li><a href="{{ URL::route('account-sign-in') }}">Sign in</a></li>
		        	<li><a href="{{ URL::route('account-create') }}">Create account</a></li>
		        	<li><a href="{{ URL::route('account-forgot-password') }}">Forgot password</a></li>
		        @endif
		    </ul>
		</div>
	</div>
</nav>
