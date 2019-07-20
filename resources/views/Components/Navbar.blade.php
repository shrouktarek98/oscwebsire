<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to OSC - Open Source Community</title>
    <!-- Title Icon-->
   
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/basefont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/headerFooter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/eventPageStyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/committesPage/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/committesPage/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/linuxWorkshop/linuxWorkshopStyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blenderWorkshop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/laravelWorkshop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Recruitment.css') }}">

</head>
<body>
<div class="navbarAndFooter"> 
        <nav  class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid pad" >
        
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        
                  <div class="collapse navbar-collapse baseNavbarText row" id="navbarsExample07">
                    
                    <ul class="navbar-nav mr-auto col-5">
                        <li class="nav-item">
                            <a class="nav-link baseNavbarText" href="#" >Our Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Committees<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Highboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sponsers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        
                    </ul>
                    <div class="nav-item imageLogo "  style="margin:0px auto" >
                        <img src="{{url('images/homePage/OSCLogo.png ')}}" width="30px" hight="30px;">
                    </div>
                    {{-- <div class="collapse navbar-collapse" > --}}
                        <ul class="navbar-nav ml-md-auto baseNavbarText col-5" style="direction:rtl">
                            <li class="nav-item ">
                                <a href="#" class="nav-link ">Events</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Workshops
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Laravel</a>
                                      <a class="dropdown-item" href="#">Linux</a>
                                      <a class="dropdown-item" href="#">Blander</a>
                                    </div>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link "></a>
                            </li>
                           
                        </ul>
                    {{-- </div> --}}
                </div>
            </div>
        </nav>
</div>