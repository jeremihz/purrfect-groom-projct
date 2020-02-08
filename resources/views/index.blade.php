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
                  style="color: #fff; font-size: 30px; font-weight: normal; line-height:36px;"> We Welcome <br>you to <br> our website.</div>
            
      
          
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
                  style=""> <a href="form.html" class="btn btn-white margin-left-20">Address</a></div>
                
                
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
          <h2>Who we are</h2>
          <span>Need to know us better?</span> 
         <h3> <p> Luke used to be a metal finisher, but wasn’t happy what he doing. He came to this store and helped his friend who was the previous owner.</p>
        <p> He started out as the bather; he enjoyed and loved this job so much.</p></h3></div>
      
      
      
      <!-- What We do -->
        <div class="row">
          
          <div class="col-md-6"> 
            <!-- Tittle -->
            <div class="heading-block text-left margin-bottom-20">
              <h3>The Change</h3>
              <p>Luke became the new owner in 2005.</p>
        <p> He has worked as a groomer for more than 20 years and his special ability to work with even the most difficult dogs.</p>
        <p>The team with 3 professional groomers serve 15-20 customers daily.</p>
            </div>
            
            <!-- List Style -->
            <ul class="row list-what-we">
              <li class="col-sm-6">
                <h6>What else?</h6>
                <hr>
                <p>This store has been owned and operated by experienced groomers since 1991.</P>
        <p>Throughout the years, ownership of the business has been passed down to the groomers who worked here.</p>
        <p>This is the oldest grooming shop in Falls Church.</p>

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
        <a href="form.html" class="btn btn-orange">Visit Us</a> </div>
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
