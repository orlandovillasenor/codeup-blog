@extends('layouts.master')

@section('content')
	<div class="container">

	        <div class="row">
	            <div class="col-lg-8">
	                @foreach($posts as $post)
		                <!-- blog entry -->
		                <h1><a href="{{{ action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a>
		                </h1>
		                <p class="lead">by <a href="#">Orlando Villaseñor</a>
		                </p>
		                <hr>
		                <p>
		                    <span class="glyphicon glyphicon-time"></span> {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>
		                <hr>
		                <!-- <img src="http://placehold.it/900x300" class="img-responsive">
		                <hr> -->
		                <p>{{{ Str::words ($post->body, 75) }}}</p>
		                <a class="btn btn-primary" href=" {{{ action('PostsController@show', $post->id)}}} ">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

		                <hr>
	                @endforeach
					
	                <a href="{{{ action('PostsController@create') }}}">Create New Post</a>
					<div class='pull-right'>{{ $posts->links() }}</div>
	                
	                <!-- pager -->
	                <!-- <ul class="pager">
	                    <li class="previous"><a href="#">&larr; Older</a>
	                    </li>
	                    <li class="next"><a href="#">Newer &rarr;</a>
	                    </li>
	                </ul> -->

	            </div>
				
	            <div class="col-lg-4">
	                <div class="well">
	                    <h4>Blog Search</h4>
	                    <div class="input-group">
	                        <input type="text" class="form-control">
	                        <span class="input-group-btn">
	                            <button class="btn btn-default" type="button">
	                                <span class="glyphicon glyphicon-search"></span>
	                            </button>
	                        </span>
	                    </div>
	                    <!-- /input-group -->
	                </div>
	                <!-- /well -->
	                <div class="well">
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
	                </div>
	                <!-- /well -->
	                <div class="well">
	                    <h4>Side Widget Well</h4>
	                    <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
	                </div>
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
@stop

