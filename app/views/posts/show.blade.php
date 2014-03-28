@extends('layouts.master')

@section('topscripts')
	<!-- Bootstrap core CSS -->
	{{ HTML::style('/css/bootstrap.min.css') }}
    <!-- Custom styles for this template -->
    {{ HTML::style('/css/blog-home.css') }}
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
     <!-- Magnific popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- Color styles -->
    <!-- <link rel="stylesheet" href="css/colors/blue.css"> -->
   	<!-- <link rel="stylesheet" href="css/colors/yellow.css">-->
    <link rel="stylesheet" href="/css/colors/red.css">
   	<!--  <link rel="stylesheet" href="css/colors/purple.css">-->
   	<!--  <link rel="stylesheet" href="css/colors/orange.css">-->
   	<!--  <link rel="stylesheet" href="css/colors/green.css">-->
@stop


@section('content')
	<div class="container">

	        <div class="row">
	            <div class="col-lg-8">
		                <!-- blog entry -->
		                <h1><a href="#">{{{ $posts->title }}}</a>
		                </h1>
		                <p class="lead">by <a href="#">Orlando Villaseñor</a>
		                </p>
		                <hr>
		                <p>
		                    <span class="glyphicon glyphicon-time"></span> {{{ $posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>
		                <hr>
		                <img src="http://placehold.it/900x300" class="img-responsive">
		                <hr>
		                <p>{{{ $posts->body }}}</p>
		                <a class="btn btn-primary" href=" {{{ action('PostsController@index')}}} ">All Posts <span class="glyphicon glyphicon-chevron-right"></span></a>

		                <hr>
	               	<a href="#" id="btnDeletePost">Delete</a>
					<a href="{{{ action('PostsController@edit', $posts->id) }}}" class="btn">Edit</a>
					<!-- Hidden form for Delet Post -->
					{{ Form::open(array('action' => array('PostsController@destroy', $posts->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
					{{ Form::close() }}
	                
	                <!-- pager -->
	                <ul class="pager">
	                    <li class="previous"><a href="#">&larr; Previous</a>
	                    </li>
	                    <li class="next"><a href="#">Next &rarr;</a>
	                    </li>
	                </ul>

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

@section('myJquery')
<script>
	$('#btnDeletePost').click(function(e){
		e.preventDefault();
		if (confirm('Are you sure you want to delete this post?')) {
			$('#formDeletePost').submit();
		};
	});
</script>
@stop

@section('bottomscripts')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/jquery.nav.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.easypiechart.min.js"></script>
    <script src="/js/jquery.vegas.min.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/main.js"></script>
 @stop