<section id="loginForm" class="hide popover-custom">
	<button class="btn close-popover">&times;</button>
    {{Form::open(['url' => url('user/login')])}}
		<h2 class="text-center">Sign In</h2>

    	<div class="form-group">
    		<input type="text" class="form-control" name="username" id="username" placeholder="Username">
    	</div>
    	<div class="form-group">
    		<input type="password" class="form-control" name="password" id="password" placeholder="Password">
    	</div>
		<div class="row bottom">
			<div class="col-md-4 txt">
				<a href="#">Forgot password?</a>
			</div>
			<div class="col-md-4 text-center">
				<button type="submit" class="btn">Sign in</button>
			</div>
			<div class="col-md-4 text-right txt">
				No account? <a href="{{url('user/signUp')}}">Sign Up</a>
			</div>
		</div>
    {{Form::close()}}
	<a href="" class="twitter">CONNECT <span>with</span> TWITTER</a>
	<a href="" class="facebook">CONNECT <span>with</span> FACEBOOK</a>
</section>