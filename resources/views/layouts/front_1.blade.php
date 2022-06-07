<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ $general->brand_name }}</title>
<link rel="shortcut icon" href="{{ asset('images/logo/' . $general->logo) }}">

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{ asset('front/assets/css/master.css') }}">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/navigation.css') }}">
</head>
<body>

<!--== Loader Start ==-->
<div id="loader-overlay">
    <div class="loader">
        <div class="spinner">
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle class="length" fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
        </div>
    </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

    <!--== Header Start ==-->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full brand-center">
        <div class="container">
            <!--== Start Atribute Navigation ==-->
            <div class="attr-nav hidden-xs sm-display-none">
                <ul>
                <li class="side-menu"><a href="#"><i class="icofont icofont-navigation-menu"></i></a></li>
                </ul>
            </div>
            <!--== End Atribute Navigation ==-->

            <!--== Start Header Navigation ==-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
                <div class="logo">
                    <a href="index.html"> <img class="logo logo-display" src="{{ asset('images/logo/' . $general->logo) }}" alt=""> <img class="logo logo-scrolled" src="{{ asset('images/logo/' . $general->logo) }}" alt=""> </a>
                </div>
            </div>
            <!--== End Header Navigation ==-->

            <!--== Collect the nav links, forms, and other content for toggling ==-->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
                    <li><a class="page-scroll" href="#home">Home</a></li>
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#work">Works</a></li>
                    <li><a class="page-scroll" href="#service">Services</a></li>
                    <li><a class="page-scroll" href="#clients">Clients</a></li>
                    <li><a class="page-scroll" href="#review">Reviews</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--== /.navbar-collapse ==-->
        </div>

        <!-- Start Side Menu -->
        <div class="side black-bg">
            <a href="index.html" class="logo-side"><img src="{{ asset('images/logo/' . $general->logo) }}" alt="side-logo"/></a>
            <a href="#" class="close-side"><i class="icofont icofont-close"></i></a>
            <div class="widget mt-120">
                <ul class="link">
                    <li class="link-item"><a class="page-scroll" href="#home">Home</a></li>
                    <li class="link-item"><a class="page-scroll" href="#about">About</a></li>
                    <li class="link-item"><a class="page-scroll" href="#work">Works</a></li>
                    <li class="link-item"><a class="page-scroll" href="#service">Services</a></li>
                    <li class="link-item"><a class="page-scroll" href="#clients">Clients</a></li>
                    <li class="link-item"><a class="page-scroll" href="#review">Reviews</a></li>
                    <li class="link-item"><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
            <ul class="social-media">
                <li><a href="#" class="icofont icofont-social-facebook"></a></li>
                <li><a href="#" class="icofont icofont-social-twitter"></a></li>
                <li><a href="#" class="icofont icofont-social-behance"></a></li>
                <li><a href="#" class="icofont icofont-social-dribble"></a></li>
                <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
            </ul>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!--== Header End ==-->

    @yield('content')

        
    <!--== Footer Start ==-->
    <footer class="footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="copy-right text-left">© 2022 {{ $general->brand_name }}. All rights reserved</div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <ul class="social-media">
                        @if(isset($contact->twitter))
                            <li><a href="{{ $contact->twitter }}" class="icofont icofont-twitter"></a></li>
                        @endif
                        @if(isset($contact->facebook))
                            <li><a href="{{ $contact->facebook }}" class="icofont icofont-facebook"></a></li>
                        @endif
                        @if(isset($contact->google))
                            <li><a href="mailto:{{ $contact->google }}" class="icofont icofont-google-map"></a></li>
                        @endif
                        @if(isset($contact->linkedin))
                            <li><a href="{{ $contact->linkedin }}" class="icofont icofont-linkedin"></a></li>                
                        @endif
                        @if(isset($contact->instagram))
                            <li><a href="{{ $contact->instagram }}" class="icofont icofont-instagram"></a></li>
                        @endif
                        @if(isset($contact->phone))
                            <li><a href="tel:{{ $contact->phone }}" class="icofont icofont-phone"></a></li>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--== Footer End ==-->

    <!--== Go to Top  ==-->
    <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
    <!--== Go to Top End ==-->


</div>
<!--== Wrapper End ==-->


<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Thank you</h2>
                <p class="modal-subtitle">Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Sorry</h2>
                <p class="modal-subtitle"> Something went wrong </p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<!--== Javascript Plugins ==-->
<!-- <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script> -->
<script src="{{ asset('front/assets/js/smoothscroll.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins.js') }}"></script>
<script src="{{ asset('front/assets/js/master.js') }}"></script>

<!-- Revolution js Files -->
<script src="{{ asset('front/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.video.min.js') }}"></script>
<!--== Javascript Plugins End ==-->

<!-- Scripts -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
