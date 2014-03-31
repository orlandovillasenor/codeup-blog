@extends('layouts.master')

        
@section('content')
<!-- Begin page content -->
    <div class="container">
      <a id="resume-download" class="btn pull-right"><span class="glyphicon glyphicon-cloud-download"> PDF</span></a>
      <div class="page-header">
        <h1>Orlando Villaseñor <small id="resume-subtitle">Web Application Developer</small></h1>

      </div>
        <div class="row">
          <div class="col-md-3 section-header" > 
            <p class="text-left" id="left-menu"><strong>CONTACT</strong></p>
          </div>
          <div class="col-md-7">
            <address>
              <p class="text-left"><strong>Email: &nbsp </strong>
                <a href="mailto: orlandovillasenor@me.com">orlandovillasenor@me.com</a>
              </p>
              <p class="text-left"><strong>Phone: &nbsp </strong>
                <i class="fa fa-phone" style="color: #FFF">&nbsp (210) 913-1556</i> 
              </p>
            </address>
          </div>
          <div class="col-md-2">
            <p class="text-left"> <a href="http://linkedin.com/in/orlandovillasenor/" target="_blank"> <i class="fa fa-linkedin-square fa-lg"></i> Linkedin</a></p>
            <p>
              <a href="http://github.com/orlandovillasenor" target="_blank"> <i class="fa fa-github fa-lg"></i> GitHub</a> </p>
          </div>
        </div>
        
        <hr>

        <div class="row">
          <div class="col-md-3 section-header"> 
            <p class="text-left"><strong>SKILLS</strong></p>
          </div>
            <div class="col-md-9">
              <div class="well resume-well">
                <ul>
                  <li>Recently finished a coding bootcamp with a focus on Linux, Apache, MySQL, PHP, JavaScript, HTML and CSS. </li>
                  <li>Knowledge of different frameworks such as Laravel, JQuery, and Twitter Bootstrap.</li>
                  <li>A former small business owner who understands the importance of exceptional customer service, creative marketing strategies, and efficient financial management in order to maintain a successful business.
                  </li>
                  <li>Experience as a business manager for a successful startup which included sole responsibility for all financials such as bookkeeping, payroll, taxes and accounting statements.</li>
                </ul>
              </div>
            </div>
        </div>
        
        <hr>
        
        <div class="row">
          <div class="col-md-3 section-header"> 
            <p class="text-left"><strong>EXPERIENCE</strong></p>
          </div>
            <div class="col-md-9">
              <div class="well resume-well">
                  <p><strong>Everlong Recording Company &nbsp | &nbsp 2000 - Present</strong><br><em>Owner - Recording/Mix Engineer</em></p>
                  <ul>
                    <li>Established independent music recording business as a freelance recording engineer and progressed business to a commercial recording studio and independent record label. </li>
                    <li>Handled all aspects of the business as a sole proprietor including all marketing, bookings, accounting, and hiring.</li>
                    <li>Mentored many young aspiring audio engineers through internships and employment for recording studio.
                    </li>
                  </ul>
                  <p><strong>GMR Painting, LLC &nbsp | &nbsp 2003 - 2008</strong><br><em>Operations Manager</em></p>
                  <ul>
                    <li>Established and managed all business aspects for a start-up painting contractor business.</li>
                    <li>Developed and executed marketing plans for new business development.</li>
                    <li>Responsible for all financials and accounting including bookkeeping, payroll, and taxes.</li>
                  </ul>
                </div>
              </div>
          <!-- <div class="col-md-2">
            <p class="text-left">May 2000 - Present</p>
            <p class="work-dates">Jan 2003 - 2008</p>
          </div> -->
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3 section-header"> 
            <p class="text-left"><strong>EDUCATION</strong></p>
          </div>
          <div class="col-md-9">
            <div class="well resume-well">
              <address>
                <strong>Codeup &nbsp | &nbsp 2014</strong><br>
                LAMP+J Software Development Bootcamp<br>
                San Antonio, TX<br>
              </address>
              <address>
                <strong>University of Texas at Austin &nbsp | &nbsp 1997 - 2000</strong><br>
                Economics<br>
                Austin, TX<br>
              </address>
              <address>
                <strong>Austin Community College &nbsp | &nbsp 2000 - 2001</strong><br>
                Commercial Music Management<br>
                Austin, TX<br>
              </address>
            </div>
          </div>
          <!-- <div class="col-md-2">
            <a href="http://codeup.com" target="_blank"><p class="text-left"><button type="button" class="btn btn-success">In Progress</button></a><br>
              Spring 2014</p>

            <p class="ed-dates" >1997 - 2000</p>
            <p class="ed-dates" >2000 - 2001</p>
          </div> -->
        </div> 
    
    <!-- <hr class="featurette-divider"> -->
    <!-- <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2014 Orlando Villaseñor</p>
    </footer> -->
    </div>
@stop