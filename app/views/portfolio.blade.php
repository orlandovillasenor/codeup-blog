@extends('layouts.master')

@section('content')
<!-- PORTFOLIO -->
     
          <div class="container">
            <div class="row">
                <header class="section-header">
                    <h2 class="section-title"><span>Portfolio</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle">Web Development and Coding Portfolio</p>
                </header>
            
          
      
        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-4 ">
            <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/todo-shot.png" alt="">
              <figcaption>
                <h5>Web Application</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption><!-- /figcaption -->
            </figure><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
        
        
             <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
                  a modal for each of your projects. -->
                  
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Go List Pro</h4>
                    </div>
                    <div class="modal-body">
                      <p><img class="img-responsive" src="img/todo-shot.png" alt=""></p>
                      <p>This project is a basic to do list web application created using PHP. </p>
                      <p><b><a href="http://codeup.dev/landing-page/todo.php#">Visit Site</a></b></p>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
                    </div> -->
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
        
        
        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-4">
            <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/addy-shot.png" alt="">
              <figcaption>
                <h5>Web Application</h5>
                <a data-toggle="modal" href="#myModal2" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption><!-- /figcaption -->
            </figure><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
                
              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Go List Pro</h4>
                    </div>
                    <div class="modal-body">
                      <p><img class="img-responsive" src="img/addy-shot.png" alt=""></p>
                      <p>This project is a basic address book web application created using PHP. </p>
                      <p><b><a href="http://codeup.dev/landing-page/addy.php#">Visit Site</a></b></p>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
                    </div> -->
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->


                </div>
            </div>
        </div>
    <!-- portfolio ends -->
@stop