@extends('layouts.master')

@section('content')
	<div class="container">

	        <div class="row">
	        	<header class="section-header">
			            <h2 class="section-title"><span>Orlando Villaseñor</span></h2>
			              <div class="spacer"></div>
			            <p class="section-subtitle">Web Dev &amp Small Business Blog</p>
			        </header>
	            <div class="col-lg-8">
	            	
	                @foreach($posts as $post)
		                <!-- blog entry -->
		                <h1><a href="{{{ action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a>
		                </h1>
		                <p class="lead">by &nbsp<a id="author" href="#">{{{ $post->user->username }}}</a>
		                </p>
		                <hr>
		                <p>
		                    <span class="glyphicon glyphicon-time"></span> {{{ $post->created_at->format('l, F jS Y @ h:i A') }}}</p>
		                <hr>
		                <!-- <img src="http://placehold.it/900x300" class="img-responsive">
		                <hr> -->
		                <div class="well well-light">
		                	<p class="blog-body">{{ Str::words(Markdown::parse($post->body, 75)) }}</p>
		            	</div>
		                <a class="btn btn-default" href=" {{{ action('PostsController@show', $post->id)}}} ">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

		                <hr>
	                @endforeach
					
					<div class='pull-right'>{{ $posts->appends(array('search' => Input::get('search')))->links() }}</div>
	                <a class="btn btn-default" href="{{{ action('PostsController@create') }}}">Create New Post</a>
	                
	                <!-- pager -->
	                <!-- <ul class="pager">
	                    <li class="previous"><a href="#">&larr; Older</a>
	                    </li>
	                    <li class="next"><a href="#">Newer &rarr;</a>
	                    </li>
	                </ul> -->

	            </div>
				
	            <div id="right-sidebar" class="col-lg-4">
	                <div class="well well-dark">
	                    <h4>Blog Search</h4>
	                    <div class="form-group">
	                    	{{ Form::open(array('action' => 'PostsController@index')) }}
	                        {{ Form::text('search', null, array('class' => 'form-control'))}}

	                        <!-- <span class="input-group-btn"> -->
	                        {{Form::submit('Submit', array('class' => 'btn btn-default search'))}}
	                            <!-- <button class="btn search" type="submit">
	                                <span class="glyphicon glyphicon-search"></span>
	                            </button> -->
	                        {{ Form::close() }}
	                        <!-- </span> -->
	                    </div>
	                    <!-- /input-group -->
	                </div>
	                <!-- /well -->
	                <!-- <div class="well well-dark">
	                    <h4>Popular Blog Categories</h4>
	                    <div class="row">
	                        <div class="col-lg-6">
	                            <ul class="list-unstyled">
	                                <li><a href="#html">HTML</a>
	                                </li>
	                                <li><a href="#css">CSS</a>
	                                </li>
	                                <li><a href="#php">PHP</a>
	                                </li>
	                                <li><a href="#jquery">JQuery</a>
	                                </li>
	                            </ul>
	                        </div>
	                        <div class="col-lg-6">
	                            <ul class="list-unstyled">
	                                <li><a href="#javascript">JavaScript</a>
	                                </li>
	                                <li><a href="#laravel">Laravel</a>
	                                </li>
	                                <li><a href="#codeup">Codeup</a>
	                                </li>
	                                <li><a href="#bootstrap">Bootstrap</a>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div> -->
	                
	                <!-- /well -->
	                <!-- <div class="well well-dark"> -->
	                <!-- Twitter API-->
	                    <a class="twitter-timeline" href="https://twitter.com/ododoubleg" data-widget-id="459200226574622720">Tweets by @ododoubleg</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	                <!-- </div> -->
	                <!-- /well -->
	            </div>
	        </div>

	        <!-- <hr>

	        <footer>
	            <div class="row">
	                <div class="col-lg-12">
	                    <p>Copyright &copy; Orlando Villaseñor 2014</p>
	                </div>
	            </div>
	        </footer> -->

	    </div>
    <!-- /.container -->
    <hr>
@stop


