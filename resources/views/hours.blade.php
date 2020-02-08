@extends('layouts.frontend')
@section('title', 'hours')

@section('content')
  
 <!-- Google Front Page -->
 <!-- Google Front Page -->
    <section class="front-page padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <img class="img-responsive margin-top-20" src="images/ipad.jpg" alt=" "> </div>
          <div class="col-md-6"> 
            <!-- Tittle -->
            <div class="heading-block text-left margin-bottom-20">
              <h2>Get to know our working hours!</h2>
              <p>What we do during our working hours determines what we have,what we do to make or services better and also determines what we are.</p>
            </div>
            
            <!-- List Style -->
            <ul class="list-style">
              <li>
                <p><img src="images/list-icon-1.png" alt=""> We deliver. </p>
              </li>
              <li>
                <p><img src="images/list-icon-2.png" alt=""> Better customer service. </p>
              </li>
              <li>
                <p><img src="images/list-icon-3.png" alt=""> We always return e-mails and calls within one business day. </p>
              </li>
              
            </ul>
            
            <!-- Buttons --> 
            <a href="form.html" class="btn margin-top-20">Questions?</a> </div>
        </div>
      </div>
    </section>

 <!-- Contact Info -->
    <section class="contact-info padding-top-80 padding-bottom-80">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="font-alegreya margin-top-30">Hours of Operation</h3>
          </div>
          <div class="col-md-8">
            <ul class="row">
            
              <li class="col-sm-4"> <i class="fa fa-clock-o"></i>
                <h4 class="font-alegreya">Working Hours</h4>
                <p>Mon - closed</p>
                <p>Tue : 7:30 AM - 6:00 PM</p>
                 <p>Wed : 7:30 AM - 6:00 PM</p>
                 <p>Thur : 7:30 AM - 6:00 PM</p>
                 <p>Fri : 7:30 AM - 6:00 PM</p>
                 <p>Sat : 8:00 AM - 5:00 PM</p>
                 <p>Sun - closed</p>
              </li>
              <li class="col-sm-4"> <i class="fa fa-map"></i>
                <h4 class="font-alegreya">Location</h4>
                 <div class="col-md-6"> <img src="images/map.png" width="400px" length="50px "alt=" "> </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
   <!-- Footer -->  <!-- End Content --> 
  <!-- End Content --> 
  @endsection