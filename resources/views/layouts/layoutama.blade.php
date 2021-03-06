<!doctype html>
<html lang="en">

<head>
    <title>GOGA &mdash; Website Lowongan Kerja SV UGM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ url('css/custom-bs.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/line-icons/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body id="top">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        <header class="site-navbar mt-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6">
                        <a href="{{ url('/') }}"><img src="images/whitelogos.png" alt="" height="50px" width="150px"></a>
                    </div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/list') }}">Lowongan Dibuat</a></li>
                            <li><a href="{{ url('/lowongan') }}">Buat Lowongan</a></li>
                            <li><a href="Cv.html">Buat CV</a></li>
                            <li><a href="{{ url('/tentang') }}">Tentang</a></li>
                            <!-- <li><a href=" blog.html">Daftar</a></li> -->
                            <!-- <li class="d-lg-none"><a href="daftar.html">Masuk</a></li> -->
                        </ul>
                    </nav>

                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                        <div class="ml-auto">
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                <a href="{{ url('/home') }}">Home</a>
                                @else
                                <a class="btn btn-primary border-width-2 d-none d-lg-inline-block" href="{{ route('login') }}"><span class="mr-2 icon-user"></span>Masuk</a>

                                <!-- @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                                @endif -->
                                @endauth
                            </div>
                            @endif
                            <!-- <a href="Daftar.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-user"></span>Masuk</a> -->
                        </div>
                        <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                    </div>

                </div>
            </div>
        </header>

        <!-- HOME -->
        <section class="home-section section-hero overlay bg-image" style="background-image: url({{ url('images/gedungsv.jpg') }});" id="home-section">
        @yield('konten')
        </section>
            <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/gedungsv.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="text-white">Looking For A Job?</h2>
                            <p class="mb-0 text-white lead">Segera bergabung dengan kami.
                            </p>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <a href="{{ url('/login') }}" class="btn btn-warning btn-block btn-lg">Sign Up</a>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="site-footer">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                            <h3>Search Trending</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">Web Developers</a></li>
                                <li><a href="#">Python</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">CSS3</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                            <h3>Company</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Resources</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                            <h3>Support</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                            <h3>Contact Us</h3>
                            <div class="footer-social">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-instagram"></span></a>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-12">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
    </div>

    <!-- SCRIPTS -->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('js/stickyfill.min.js') }}"></script>
    <script src="{{ url('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ url('js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
</body>

</html>