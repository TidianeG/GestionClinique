<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Medilife - Mon clinique</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>

<body>
    <!-- Preloader -->
    

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p>Bienvenu à <span>Medilife</span> </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                    </ul>
                                    <!-- Appointment Button -->
                                    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
        <div class="">
            @yield('content')
        </div>
    
    <footer>
    <div class="container-fluid" style="background-color:#eff5f5;">

    <button onclick="topFunction()" id="to-top" title="Go to top">Top</button>

    <div class="row  row-no-gutters">
      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Contacts</li>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:99-999-999-9999">33 856 99 99</a>
          </li>
          <li>
            <i class="fa fa-mobile" aria-hidden="true"></i><a href="sms:99-999-999-9999">SMS Message</a>
          </li>
          <li>
             <i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Dakar Ngor-Almadies</a>
          </li> 
          <li>
             <i class="fa fa-envelope-square" aria-hidden="true"></i><a href="mailto:someone@yoursite.com?subject=Email Subject line">medifile@gmail.com</a>  
          </li> 
        </ul>
      </div>     

      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Services</li>
          <li><a href="#">Cardiologie</a></li>
          <li><a href="#">Churirgie Generale</a></li>
          <li><a href="#">Pediarie</a></li>
          <li><a href="#">Radiologie</a></li>
        </ul>
      </div>      

      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>
    </div> <!--  end row  -->
    
    <div class="row row-no-gutters" id="bottom-footer" >
      
      <div class="col-xs-12 col-md-5 text-center" >
          <ul class="vertical-links small">
            <li><a href="#">Conditions & Termes d'utilisation</a></li>
            <li><a href="#">www.medifile.sn</a></li>
          </ul>
      </div>
      <div class="col-xs-12 col-md-2 text-center" >
        <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
      </div>
      <div class="col-xs-12 col-md-5 text-center" >
        <ul>
          <li class="small">© Copyright 2019 Website by <a href="#" style="color:white;font-weight:500;">Developr</a>. All Rights reserved.</li>
        </ul>
      </div>
    </div> <!--  end row  -->

  </div> 
            
    </footer>
    <script src="{{asset('js/app.js')}}"></script>  
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>

</body>

</html>