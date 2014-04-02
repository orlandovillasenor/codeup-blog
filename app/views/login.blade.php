@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
    	<header class="section-header">
            <h2 class="section-title"><span>Login</span></h2>
              <div class="spacer"></div>
            <p class="section-subtitle"></p>
        </header>
        <div id="form" class="col-lg-12">
        	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}			
		        <h2 class="form-signin-heading">Please sign in</h2>
		        <div class="form-group">
		        {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email address'))}}
		    	</div>
		        <div class="form-group">
		        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
		    	</div>
		        <label class="checkbox">
		          <input name="remember" type="checkbox" value="remember-me"> Remember me
		        </label>		    	
		        <button class="btn btn-lg btn-default" type="submit">Sign in</button>
		    {{ Form::close() }}			
		</div>
	</div>
</div>
@stop


	

