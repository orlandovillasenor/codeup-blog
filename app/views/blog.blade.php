@extends('layouts.master')

 

    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <!-- blog entry -->
                <h1><a href="#">A Web Developer Blog</a>
                </h1>
                <p class="lead">by <a href="index.php">Orlando Villaseñor</a>
                </p>
                <hr>
                <p>
                    <span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img src="http://placehold.it/900x300" class="img-responsive">
                <hr>
                <p>This is a very basic starter template for a blog homepage. It makes use of Glyphicons that are built into Bootstrap 3, and it makes use of the Pager at the bottom of the page. Make sure you get the Glyphicons files by downloading the entire
                    <code>/fonts</code>directory that you can download in the source files or at <a href="http://getbootstrap.com">getbootstrap.com</a>. That directory has all of the web fonts in it which makes Glyphicons work.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- second blog entry -->
                <h1><a href="#">Another Blog Post</a>
                </h1>
                <p class="lead">by <a href="index.php">Orlando Villaseñor</a>
                </p>
                <hr>
                <p>
                    <span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img src="http://placehold.it/900x300" class="img-responsive">
                <hr>
                <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science...</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- third blog entry -->
                <h1><a href="#">Third Blog Post Entry</a>
                </h1>
                <p class="lead">by <a href="index.php">Orlando Villaseñor</a>
                </p>
                <hr>
                <p>
                    <span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img src="http://placehold.it/900x300" class="img-responsive">
                <hr>
                <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science...</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- pager -->
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
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

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Orlando Villaseñor 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
