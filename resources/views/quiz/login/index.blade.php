@extends('layouts.master')

@section('title', 'Login')

@section('menu')
    @parent
@endsection

@section('content')

	<div id="login-form-div" class="col-xs-12 col-sm-8 col-md-6 col-lg-4">

		<form id="login-form">

	    		<div class="form-group">
				<label for="emailaddress">Email Address:</label>
	    			<input type="email" name="emailaddress" class="form-control" placeholder="Email Address" />
	    		</div>

	    		<div class="form-group">
				<label for="password">Password:</label>
	    			<input type="password" name="password" class="form-control" placeholder="Password" />
	    		</div>

	    		<button type="submit" class="btn btn-success">Login</button>
	    		<br />
	    		<p>Don't have an account? <strong><a href="/register">Register</a></strong> now.</p>

	    	</form>

    	</div>

    	<div class="hidden-xs col-sm-4 col-md-6 col-lg-4">

    	</div>

    	<div class="hidden-xs hidden-sm hidden-md col-lg-4">

    	</div>

@endsection