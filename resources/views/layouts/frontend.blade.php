<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Sarbjit Singh" />
<!-- Document Title -->
<title>The Purrfect Grrooming  - @yield('title')</title>


<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,900,300,100' rel='stylesheet' type='text/css'>


<!-- StyleSheets -->
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen" />

<!-- JavaScripts -->
<script src="{{asset('js/vendors/modernizr.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>


  <!-- Header -->
  <header class="header coporate-header">
    <div class="sticky">
      <div class="container">
        <div class="logo"><a href="{{url('home')}}"><img src="images/logo.png" alt=""></a> </div>

        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li><a href="{{url('home')}}">HOME</a></li>
            <li><a href="{{url ('/services')}}"> SERVICES </a></li>
            <li><a href="{{url ('/hours')}}"> HOURS OF OPERATION </a></li>
            <li><a href="{{url ('/address')}}"> ADDRESS</a></li>

 <!-- <ul id="ownmenu" class="ownmenu"> -->
            @if (Route::has('login'))
                <!-- <div class="top-right links"> -->
                    @auth
                    <!-- <nav>
                      <ul> -->

                        <li><a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a></li>
                      <!-- </ul>
                    </nav> -->



                        <form id="frm-logout" action="{{route('logout')}}" method="post" style="display: none;">
                          {{ csrf_field() }}
                        </form>

                    @else
                      <!-- <nav>
                        <ul> -->
                          <li><a href="{{ route('login') }}">Login</a></li>
                        <!-- </ul>

                      </nav> -->


                        @if (Route::has('register'))
                            <!-- <nav>
                              <ul> -->
                                <li><a href="{{ route('register') }}">Register</a></li>
                              <!-- </ul>
                            </nav> -->
                        @endif
                    @endauth
                  </ul>
                </nav>
              </div>
            </div>
               </ul>
            @endif
  </header>
  <!-- End Header -->

  @yield('content')

  <!-- Footer -->
  <footer>
    <div class="container">

    </div>

    <!-- Footer Info -->
    <div class="footer-info">
      <div class="container">
        <div class="row">

          <!-- About -->
          <div class="col-md-4"> <img class="margin-bottom-30" src="images/logo-footer.png" alt="" >
            <p>We are here for you</p>
            <ul class="personal-info">
              <li><i class="fa fa-map-marker"></i> The Purrfect Grrooming Company,grrooming street</li>
              <li><i class="fa fa-envelope"></i> SupportPurrfectGrrooming.com</li>
              <li><i class="fa fa-phone"></i> (004)+ 124 45 78 678 </li>
            </ul>
          </div>

          <!-- Service provided -->
          <div class="col-md-4">
            <h6>Service provided</h6>
            <ul class="links">
              <li><a href="{{url('/services')}}">Services</a></li>
              <li><a href="{{url('/hours')}}">Hour of operation</a></li>
              <li><a href="{{url('/address')}}">Address</a></li>


            </ul>
          </div>

          <!-- Quote -->
          <div class="col-md-4">
            <h6>Contact us</h6>
            <div class="quote">
              <form>
                <input class="form-control" type="text" placeholder="Name">
                <input class="form-control" type="text" placeholder="Phone No">
                <textarea class="form-control" placeholder="Messages"></textarea>
                <button type="submit" class="btn btn-orange">SEND NOW</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rights -->
    <div class="rights">
      <div class="container">
        <p>Copyright © 2020 The Purrfect Grrooming Company. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</div>
<!-- End Page Wrapper -->

<!-- JavaScripts --> ')}}
<script src="{{asset('js/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/vendors/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendors/own-menu.js')}}"></script>
<script src="{{asset('js/vendors/flexslider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.sticky.js')}}"></script>

@if($controller=="HomeController" and $action=="index")
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
@endif
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
