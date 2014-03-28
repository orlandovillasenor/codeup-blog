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
        <header class="section-header">
            <h2 id="create-header" class="section-title"><span>Edit Post</span></h2>
              <div class="spacer"></div>
            <p class="section-subtitle"></p>
        </header>
        <div class="col-lg-8">
            {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
              <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class' => 'form-control'))}}
                {{ $errors->first('title', '<span class="help-block">:message</span>')}}
              </div>
              <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'col' => '10', 'row' => '10'))}}
                {{ $errors->first('body', '<span class="help-block">:message</span>')}}
              </div>
              <button type="submit" class="btn btn-default">Update Post</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
    
@section('bottomscripts')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

