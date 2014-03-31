@extends('layouts.master')

<!-- CONTACT -->
@section('content')     
      <div class="container">
              <header class="section-header">
                  <h2 class="section-title"><span>Contact</span></h2>
                  <div class="spacer"></div>
                  <p class="section-subtitle"></p>
              </header>
        <div class="row">
          <div class="col-sm-5 contact-info">
            <h3 id="contact-info">Contact Info</h3>
            <!-- <p><i class="fa fa-map-marker"></i> San Antonio, TX </p> -->
            <p><i class="fa fa-phone"></i> &nbsp (210) 913-1556 </p>
            <p><i class="fa fa-envelope-o"></i> &nbsp <a id="mail-to" href="mailto:orlandovillasenor@me.com">orlandovillasenor@me.com</a></p>

          </div>
          
          <div class="col-sm-7">
            
            
            
            <!-- <h4>Get In Touch</h4> -->
             <form  class="form-horizontal" id="contact-form">
              <div class="control-group">
                  <label class="control-label" for="name">Name</label>
                  <div class="controls">
                      <input type="text" name="name" id="name" placeholder="Your name" class="form-control input-lg ">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label" for="email">Email Address</label>
                  <div class="controls">
                      <input type="text" name="email" id="email" placeholder="Your email address" class="form-control input-lg">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label" for="message">Message</label>
                  <div class="controls">
                      <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
                  </div>
              </div>
              <div class="form-actions">
                  <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
              </div>
            </form><!-- End contact-form -->
          
          </div>
        </div><!-- End row -->

      </div>
@stop