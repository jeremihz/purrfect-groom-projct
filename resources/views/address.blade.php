@extends('layouts.frontend')
@section('title', 'address')

@section('content')
  
<!-- Content -->
  <div id="content"> 
    

     <!-- INTRO -->
    <section class="text-center" style="background:url(images/service.jpg no-repeat;">
      <div class="container">
        <div class="text-center margin-bottom-50">
          <p class="text-black intro-style font-14px"><b>Matted Fur Release Form. Download the Form (PDF) below. It can be downloaded by clicking on the orange button below.</b> </p>
        </div>
        <a href="form/PurrfectGroomingMattedFurReseaseForm.pdf" class="btn btn-orange">Download form</a> </div>
    </section>
    
    <!-- Contact Info -->
    <section class="contact-info padding-top-80 padding-bottom-80">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h3 class="font-alegreya margin-top-30">LET US TAKE CARE OF YOUR PETS</h3>
          </div>

          <div class="col-md-8">
            <ul class="row">
               <div class="col-md-4"> <img class="img-responsive" src="images/contact.png" alt=" "> </div>
              <li class="col-sm-4"> <i class="fa fa-map-marker"></i>
                <h4 class="font-alegreya">Visit Us</h4>
                <p>7183 LEE HWY,Falls church,<BR>VA 22046</p>
              </li>
             
              <li class="col-sm-2"> <i class="fa fa-phone"></i>
                <h4 class="font-alegreya">Call Us</h4>
                <p>703-237-0595</p>
             
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
  <!-- End Content --> 
  @endsection