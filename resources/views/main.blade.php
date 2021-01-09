
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('style/image/mymovie.png ') }}" type="image/png">
        <title>@yield('title') MyMovie</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('style/css/bootstrap.css ') }}">
        <link rel="stylesheet" href="{{ asset('style/vendors/linericon/style.css ') }}">
        <link rel="stylesheet" href="{{ asset('style/css/font-awesome.min.css ') }}">
        <link rel="stylesheet" href="{{ asset('style/vendors/owl-carousel/owl.carousel.min.css ') }}">
        <link rel="stylesheet" href="{{ asset('style/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css ') }}">
        <link rel="stylesheet" href="{{ asset('style/vendors/nice-select/css/nice-select.css ') }}">
        <link rel="stylesheet" href="{{ asset('style/vendors/owl-carousel/owl.carousel.min.css ') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('style/css/style.css ') }}">
        <link rel="stylesheet" href="{{ asset('style/css/responsive.css ') }}">
    </head>
    <body>
    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('style/js/jquery-3.2.1.min.js ') }}"></script>
        <script src="{{ asset('style/js/popper.js ') }}"></script>
        <script src="{{ asset('style/js/bootstrap.min.js ') }}"></script>
        <script src="{{ asset('style/vendors/owl-carousel/owl.carousel.min.js ') }}"></script>
        <script src="{{ asset('style/js/jquery.ajaxchimp.min.js ') }}"></script>
        <script src="{{ asset('style/js/mail-script.js ') }}"></script>
        <script src="{{ asset('style/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js ') }}"></script>
        <script src="{{ asset('style/vendors/nice-select/js/jquery.nice-select.js ') }}"></script>
        <script src="{{ asset('style/js/mail-script.js ') }}"></script>
        <script src="{{ asset('style/js/stellar.js ') }}"></script>
        <script src="{{ asset('style/vendors/lightbox/simpleLightbox.min.js ') }}"></script>
        <script src="{{ asset('style/js/custom.js ') }}"></script>


        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/"><img src="{{ asset('style/image/logom.png ') }}" alt="" weight="90" height="30"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{Route('nowplaying')}}">Now Playing</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{Route('upcoming')}}">Upcoming</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{Route('theaters')}}">Theaters</a></li>
                            <li class="nav-item {{ request()->is('more') ? 'active': '' }}"><a class="nav-link" href="{{Route('more')}}">More</a></li>
                            <li class="nav-item"><a class="nav-link" href="@guest
                                /login
                                @else 
                                /
                                @endguest">Login</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

         @yield('content')

        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0">Copyright @2020</p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
    </body>
</html>