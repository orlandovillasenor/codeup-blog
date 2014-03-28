<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Orlando Villaseñor</title>
@section('topscripts')
    <!-- Bootstrap core CSS -->
	{{ HTML::style('css/bootstrap.min.css') }}
    <!-- Custom styles for this template -->
    {{ HTML::style('css/blog-home.css') }}
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <!-- Magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Color styles -->
    <!-- <link rel="stylesheet" href="css/colors/blue.css"> -->
   	<!-- <link rel="stylesheet" href="css/colors/yellow.css">-->
    <link rel="stylesheet" href="css/colors/red.css">
   	<!--  <link rel="stylesheet" href="css/colors/purple.css">-->
   	<!--  <link rel="stylesheet" href="css/colors/orange.css">-->
   	<!--  <link rel="stylesheet" href="css/colors/green.css">-->
@show
	<!-- Feature detection -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

   <!-- NAVBAR -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" id="main-menu">
          <li><a href="{{{ action('PostsController@index')}}}">Blog</a></li>
          <li><a href="{{{ action('HomeController@showResume')}}}">Resume</a></li>
          <!-- <li><a href="#page-skills">Skills</a></li>
          <li><a href="#page-education">Education</a></li>
          <li><a href="#page-experience">Experience</a></li> -->
          <li><a href="{{{ action('HomeController@showPortfolio')}}}">Portfolio</a></li>
          <li><a href="#page-contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>

@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

@yield('content')

<hr>

@section('footer')
<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="{{{ action('PostsController@index')}}}">Blog</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="{{{ action('HomeController@showResume')}}}">Resume</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="{{{ action('HomeController@showPortfolio')}}}">Portfolio</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; <a href="http://codeup.dev/my-site/index.html">Orlando Villaseñor</a>  2014</p>
                </div>
            </div>
        </div>
    </footer>
@show

@yield('myJquery')

@section('bottomscripts')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery.vegas.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/main.js"></script>
@show  
    
</body>
</html>