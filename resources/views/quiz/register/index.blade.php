@extends('layouts.master')

@section('title', 'Register Account')

@section('menu')
    @parent
@endsection

@section('content')

	<div id="register-form-div" class="col-xs-12 col-sm-8 col-md-6 col-lg-4">

		<form id="register-form">
			<div class="form-group">
				<label for="forename">Forename:</label>
	    			<input type="text" name="forename" class="form-control" placeholder="Forename" />
	    		</div>

	    		<div class="form-group">
				<label for="surname">Surname:</label>
	    			<input type="text" name="surname" class="form-control" placeholder="Surname" />
	    		</div>

	    		<div class="form-group">
				<label for="emailaddress">Email Address:</label>
	    			<input type="email" name="emailaddress" class="form-control" placeholder="Email Address" />
	    		</div>

	    		<div class="form-group">
				<label for="password">Password:</label>
	    			<input type="password" name="password" class="form-control" placeholder="Password" />
	    		</div>

	    		<div class="form-group">
				<label for="confirmpassword">Confirm Password:</label>
	    			<input type="password" name="confirmpassword" class="form-control" placeholder="Password" />
	    		</div>

	    		<button type="button" onclick="registerUser('register-form');" class="btn btn-success">Register</button>
	    		<br />
	    		<p>Already have an account? <strong><a href="/login">Login</a></strong> now.</p>

	    	</form>

    	</div>

    	<div class="hidden-xs col-sm-4 col-md-6 col-lg-4">

    	</div>

    	<div class="hidden-xs hidden-sm hidden-md col-lg-4">

    	</div>

@endsection