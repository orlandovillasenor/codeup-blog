@extends('layouts.master')


@section('content')
	<div class="container">

	        <div class="row">
	            <div class="col-lg-8">
	                <!-- blog entry -->
	                <h1><a href="#">{{{ $posts->title }}}</a></h1>	                
	                <p class="lead">by <a href="#">{{{ $posts->user->username }}}</a>
	                </p>
	                <hr>
	                <p>
	                    <span class="glyphicon glyphicon-time"></span> {{{ $posts->created_at->format('l, F jS Y @ h:i A') }}}</p>
	                
	                @if ($posts->image_path)
	                	<img src="../uploads/{{ $posts->image_path }}" alt="" class="img-responsive" id="post-photo">
	                @endif
	                
	                <hr>
	                <div class="well">
	                	<p id="blog-body">{{ $posts->body }}</p>
	                </div>
	               	<button href="#" id="btnDeletePost" class="btn btn-default">Delete</button>&nbsp &nbsp
					<a class="btn btn-default" href=" {{{ action('PostsController@edit', $posts->id)}}} ">Edit </a>&nbsp &nbsp
	                <a class="btn btn-default" href=" {{{ action('PostsController@index')}}} ">All Posts <span class="glyphicon glyphicon-chevron-right"></span></a>

	                <!-- <hr> -->

					<!-- Hidden form for Delete Post -->
					{{ Form::open(array('action' => array('PostsController@destroy', $posts->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
					{{ Form::close() }}

					<hr>

	                <!-- the comments -->
	                <!-- <p><h5 class="commenter">WebKid 2000</h5>
	                    <span class="glyphicon glyphicon-time"></span> {{{ $posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>
	                
	                <p>This has to be the worst blog post I have ever read. It simply makes no sense. You start off by talking about space or something, then you randomly start babbling about cupcakes, and you end off with random fish names.</p>
					<hr>
	                <p><h5 class="commenter">Max Dev</h5>
	                    <span class="glyphicon glyphicon-time"></span> {{{ $posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>
	                
	                <p>Don't listen to this guy, any blog with the categories 'dinosaurs, spaceships, fried foods, wild animals, alien abductions, business casual, robots, and fireworks' has true potential.</p>

	                <hr> -->

	                <!-- the regular comment box -->
	                <!-- <div class="well well-dark">
	                    <h4>Leave a Comment:</h4>
	                    {{ Form::open(array('action' => 'PostsController@store')) }}
	                    <div class="form-group">
                        	{{ Form::textarea('comment', null, array('class' => 'form-control', 'rows' => '3'))}}
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
	                    {{ Form::close() }}
	                </div>  -->
	            <!-- Disqus Comment Box-->
	            <div class="well well-dark">
					<div id="disqus_thread"></div>
				    <script type="text/javascript">
				        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				        var disqus_shortname = 'orlandovillasenor'; // required: replace example with your forum shortname

				        /* * * DON'T EDIT BELOW THIS LINE * * */
				        (function() {
				            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				        })();
				    </script>
				    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    			</div>
    
    

	            </div>
	                
	                <!-- pager -->
	                <!-- <ul class="pager">
	                    <li class="previous"><a href="{{{ action('PostsController@show', $posts->id - 1) }}}">&larr; Previous</a>
	                    </li>
	                    <li class="next"><a href="{{{ action('PostsController@show', $posts->id + 1) }}}">Next &rarr;</a>
	                    </li>
	                </ul> -->
	            

	            <div id="right-sidebar" class="col-lg-4">
	                <div class="well well-dark">
	                    <h4>Blog Search</h4>
	                    <div class="input-group">
	                    	{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'get')) }}
	                        {{ Form::text('search', null, array('class' => 'form-control'))}}
	                        <span class="input-group-btn">
	                            <button class="btn search" type="submit">
	                                <span class="glyphicon glyphicon-search"></span>
	                            </button>
	                        {{ Form::close() }}
	                        </span>
	                    </div>
	                    <!-- /input-group -->
	                </div>
	                <!-- /well -->
	                <div class="well well-dark">
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
	                <div class="well well-dark">
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

           <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'orlandovillasenor'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
    
    
@stop

@section('deleteScript')
<script>
	
</script>
@stop
