<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">        

        <title>F.O.A Foundation | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">

        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

        <!-- Owl-Carousel -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.transitions.css') }}">

        <!-- Custom CSS -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

        <!-- Colors CSS -->
        <link rel="stylesheet" type="text/css" title="green" href="{{ asset('assets/css/color/green.css') }}">

        <!-- Modernizer js -->
        <link rel="stylesheet" href="{{ asset('assets/js/modernizr.custom.js') }}">        

    </head>
    <body class="index">
        @section('navbar')
            <p>This is the master navigation bar.</p>
            <!-- Start  Logo & Naviagtion  -->
            <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
                <div class="container">
                    <!-- Start Toggle Navigation For Mobile display -->
                    <div class="navbar-header">                 
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <!-- <i class="fa fa-bars"></i> -->
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>                    
                        <a class="navbar-brand" href="index.html">F.O.A Foundation</a>
                    </div>
                    <!-- End Toggle Navigation For Mobile display -->

                    <div class="collapse navbar-collapse">
                                
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden">
                                <a href="index.html"></a>
                            </li>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="service.html">Service</a>
                            </li>
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </nav>
            <!-- End Header Logo & Naviagtion -->   
        @show     

        <div class="container">
            @yield('content')
        </div>

        <!-- Start Footer Section -->
        <section id="contact" class="contact">
            <nav class="navbar navbar-default navbar-inverse navbar-fixed-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="footer-social">
                                <ul>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    &nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    &nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    &nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    &nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </ul>
                            </div>                 
                        </div>

                        <div class="col-md-4 col-xs-10">
                            <div class="footer-link">
                                <ul class="text-center">
                                    <span class="copyright">Copyright &copy; 2016 | All Rights Reserved.</span>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="footer-link">
                                <ul class="pull-right">
                                    <a href="#">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;            
                                    <a href="#">Terms of Use</a>                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section> 
        <!-- End Footer Section -->

        <div id="loader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>        

    </body>
</html>