@isset($message)
<div class="alert alert-success">
<strong>{{$message}}</strong>
</div>
@endif
@extends('layouts.frontend')
@section('title', 'Home')

@section('content')
<!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider">
    <div class="tp-banner-container">
      <div class="tp-banner-fix">
        <ul>

          <!-- Slider 1 -->
          <li data-transition="fade" data-slotamount="7"> <img src="images/slides/slide-bg-1.jpg" data-bgposition="center top" alt="" />

            <!-- Layer -->
            <div class="tp-caption sft tp-resizeme font-extra-bold"
                  data-x="right" data-hoffset="0"
                  data-y="center" data-voffset="0"
                  data-speed="700"
                  data-start="700"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"> <img src="images/dog.png" alt="" > </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme font-bold"
                  data-x="left" data-hoffset="40"
                  data-y="center" data-voffset="-100"
                  data-speed="500"
                  data-start="700"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 48px; font-weight: normal; letter-spacing:0px; line-height:55px;"> The Purrfect Grrooming  <br>
              Company </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme"
                  data-x="left" data-hoffset="40"
                  data-y="center" data-voffset="30"
                  data-speed="500"
                  data-start="1000"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 30px; font-weight: normal; line-height:36px;"> We Welcome you to  our website.</div>



          <!-- Slider 1 -->
          <li data-transition="fade" data-slotamount="7"> <img src="images/slides/slide-bg-2.jpg" data-bgposition="center top" alt="" />

            <!-- Layer -->
            <div class="tp-caption sft tp-resizeme font-extra-bold"
                  data-x="right" data-hoffset="0"
                  data-y="center" data-voffset="0"
                  data-speed="700"
                  data-start="700"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  > <img src="images/show.png" alt="" > </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme font-bold"
                  data-x="left" data-hoffset="40"
                  data-y="center" data-voffset="-100"
                  data-speed="500"
                  data-start="700"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 48px; font-weight: normal; letter-spacing:0px; line-height:55px;"> Feel free <br>
             To contact us </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme"
                  data-x="left" data-hoffset="40"
                  data-y="center" data-voffset="30"
                  data-speed="500"
                  data-start="1000"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 30px; font-weight: normal; line-height:36px;">We <br> Are here for you.</div>



            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme font-crimson"
                  data-x="left" data-hoffset="40"
                  data-y="center" data-voffset="150"
                  data-speed="500"
                  data-start="1300"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style=""> <a href="{{url('/address')}}" class="btn btn-white margin-left-20">Address</a></div>


          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Content -->
  <div id="content">


    <!-- Intro -->
      <section class="intro padding-top-100 padding-bottom-100">
      <div class="container">
      <!-- Tittle -->
        <div class="heading-block text-center margin-bottom-80">
            @if (Route::has('login'))
             @auth
              <h1 style="color:orange;">Schedule an appointment</h3><br>
              <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#scheduleForm">Schedule</button>
              <!-- Modal HTML Markup -->
    <div id="scheduleForm" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Schedule Appointment</h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{url ('send')}}">
                          {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label">Your Full Name</label>
                            <div>
                                <input type="text" class="form-control input-lg" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Your Email</label>
                            <div>
                                <input type="email" class="form-control input-lg" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <div>
                                <input type="textarea" class="form-control input-lg" name="message" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Appointment Time</label>
                            <div>
                                <!-- <input type="time" class="form-control input-lg" name="time" value=""> -->
                                <input type="time" class="form-control input-lg" name="time" value="<?php echo date('H:i'); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-success">
                                    SEND
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
              <br><br><br>
              <br>
              @endauth
            @endif
          <h2>Who we are</h2>
          <span>Need to know us better?</span>
         <h3> <p> The Purrfect Grrooming company goes back more than 10 years ago where it was founded by luke.he worked as a groomer for more than 20years ago. </p></h3></div>



      <!-- What We do -->
        <div class="row">

          <div class="col-md-6">
            <!-- Tittle -->
            <div class="heading-block text-left margin-bottom-20">
              <h3>The Change</h3>
              <p>The company was purchased 5 years ago where fornow it serves 15 - 20 customers daily with only 3 groomers as staff.</p>
            </div>

            <!-- List Style -->
            <ul class="row list-what-we">
              <li class="col-sm-6">
                <h6>What else?</h6>
                <hr>
                <p>The company latter transitioned to an online  schedule/ticket management system called 123Pet.</p>

              </li>
              <div class="col-md-6"> <img class="img-responsive" src="images/org2.jpg" alt=" "> </div>
            </ul>
           </div>

            <!-- Image -->
            <div class="col-md-6"> <img class="img-responsive" src="images/org.jpg" alt=" "> </div>
        </div>
      </div>
    </section>



    <!-- INTRO -->
    <section class="bg-parallax text-center padding-top-60 padding-bottom-60" style="background:url(images/add.png) no-repeat;">
      <div class="container">
        <div class="text-center margin-bottom-50">
          <p class="text-white intro-style font-14px">We love to hear from pet lovers like you, if you have a question or a suggestion, feel free to contact details below us. Oh, we also love to hear about your pets health , so don’t be shy.</p>
        </div>
        <a href="{{url('/address')}}" class="btn btn-orange">Contact us</a> </div>
    </section>






  <!-- TESTIMONIALS -->
    <section class="testimonial red-bg padding-top-100 padding-bottom-100">
      <div class="container">

        <!-- Tittle -->
        <div class="heading-block white-text text-center margin-bottom-80">
          <h2>Why Customer <i class="fa fa-heart white-text"></i> us! </h2>
          <h3><i class="white-text">TEAM MEMBERS </i></h3> </div>

        <!-- Testi Slider -->
        <div class="testi-slides-flex">
          <ul class="slides">

            <!-- Slide 1 -->
            <li>
              <div class="avatar"> <img src="images/user1.jpg" alt="" >
                <h6>Mark Gianopoulos / <span>Team Lead </span></h6>
                <p>Networking and Telecommunications and Business Minor
</p>
              </div>
            </li>

            <!-- Slide 2 -->
            <li>
              <div class="avatar"> <img src="images/user2.jpg" alt="" >
                <h6>Martin Le  / <span>Web Development and Multimedia
</span></h6>

              </div>
            </li>
             <!-- Slide 3 -->
            <li>
              <div class="avatar"> <img src="images/user3.jpg" alt="" >
                <h6>Nicholas Prum  / <span>Information Security
</span></h6>

              </div>
            </li>

             <!-- Slide 4 -->
            <li>
              <div class="avatar"> <img src="images/user4.jpg" alt="" >
                <h6>Youssef Banoub  / <span>Information Security
</span></h6>

              </div>
            </li>

            <!-- Slide 5 -->
            <li>
              <div class="avatar"> <img src="images/user5.jpg" alt="" >
                <h6>Jugdeep Singh  / <span>Database Technology and Programming
</span></h6>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>


  </div>
  <!-- End Content -->
  @endsection
