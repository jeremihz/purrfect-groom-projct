@isset($message)
<div class="alert alert-success">
<strong>{{$message}}</strong>
</div>
@endif
@extends('layouts.frontend')
@section('title', 'Services')

@section('content')

  <!-- Content -->
  <div id="content">

    <!-- What We do -->
    <section class="intro padding-top-100 padding-bottom-100">
      <div class="container">
        <!-- Tittle -->
        <div class="heading-block text-center margin-bottom-80">
          
          <h2>What We Offer</h2>
          <span>Taking payments is a crucial part of any grooming business. It may be the best part – this is where your clients reward you for the value you generated and communicated. Now you get remunerated!</span> </div>

        <!-- What We do -->
        <div class="row">
          <div class="col-md-6">
            <!-- Tittle -->
            <div class="heading-block text-left margin-bottom-20">
              <h2>Walk – in Services</h2>

            </div>

            <!-- List Style -->
            <ul class="row list-what-we">
              <li class="col-sm-6">
                <h6>Nail Clipping</h6>
                <hr>
                <p>The price ids done at $10
.</p>
              </li>
              <li class="col-sm-6">
                <h6>Nail Clip w/feet trim </h6>
                <hr>
                <p>The service price ids done at $15.</p>
              </li>
              <li class="col-sm-6">
                <h6>Nail Clip w/filling </h6>
                <hr>
                <p>The service price is done at $15.</p>
              </li>
              <li class="col-sm-6">
                <h6>Anal Gland Expression</h6>
                <hr>
                <p>The anal gland expression has a range price of between 5-10$.</p>
              </li>
               <li class="col-sm-6">
                <h6>Sanitary Clip </h6>
                <hr>
                <p>The Sanitary Clip has a range price of between 5-10$.</p>
              </li>
            </ul>

            <div class="heading-block text-left margin-bottom-20">
              <h2>Appointment Scheduling Services</h2>
               <ul class="list-style">
              <li>
                <p><img src="images/list.png" alt=""> Prices range from $15 - $120. </p>
              </li>
              <li>
                <p><img src="images/list.png" alt="">Primarily based on size of the dog, e.g. Chihuahua would be a $15, very large dogs like St. Bernards would be $120 since they can take all day. </p>
              </li>

            </ul>
            </div>


          </div>

          <!-- Image -->
          <div class="col-md-6"> <img class="img-responsive" src="images/dog.png" alt=" "> </div>
        </div>
      </div>
    </section>



    <!-- INTRO -->
 


  </div>
  <!-- End Content -->
  @endsection
