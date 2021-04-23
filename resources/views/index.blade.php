<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>SMBarber</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="barber_version">

<!-- LOADER -->
<div id="preloader">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <span class="loading" data-name="Loading">SMBarber Loading</span>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->

<div id="wrapper">

    <!-- Sidebar-wrapper -->
    <div id="sidebar-wrapper">
        <div class="side-top">
            <div class="logo-sidebar">
                <a href="#"><img src="images/logos/logo.png" alt="image"></a>
            </div>
            <ul class="sidebar-nav">
                <li><a class="active" href="home">@lang('main.menu.home')</a></li>
                <li><a href="about">@lang('main.menu.about')</a></li>
                <li><a href="services">@lang('main.menu.services')</a></li>
                <li><a href="barbers">@lang('main.menu.barbers')</a></li>
                <li><a href="appointment">@lang('main.menu.appointment')</a></li>
                <li><a href="{{route('locale', __('main.set_lang'))}}">@lang('main.set_lang')</a></li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

        <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('uploads/barber_slider.jpg');">
            <div class="container-fluid">
                <div class="row">
                    <div id="full-width" class="owl-carousel owl-theme">
                        <div class="text-center item">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="big-tagline text-center">
                                    <h2><strong>@lang('main.main.barbershop')</strong><br>
                                        @lang('main.main.city')</h2>
                                    <p class="lead">@lang('main.main.text')</p>
                                    <a href="appointment" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">@lang('main.main.appoint')</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center item">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="big-tagline text-center">
                                    <h2><strong>@lang('main.main.barbershop')</strong><br>
                                        @lang('main.main.city')</h2>
                                    <p class="lead">@lang('main.main.text2')</p>
                                    <a href="about" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">@lang('main.main.about')</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center item">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="big-tagline text-center">
                                    <h2><strong>@lang('main.main.barbershop')</strong><br>
                                        @lang('main.main.city')</h2>
                                    <p class="lead">@lang('main.main.text3')</p>
                                    <a href="services" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">@lang('main.main.services')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <section class="section nopad cac text-center">
            <a href="appointment"><h3>@lang('main.main.interest')</h3></a>
        </section>

        <div class="section wb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="message-box">
                            <h4>@lang('main.section1.1')</h4>
                            <h2>@lang('main.section1.2')</h2>
                            <p class="lead">@lang('main.section1.3')</p>

                            <p> @lang('main.section1.4') </p>

                            <canvas id="doughnut-chart" width="800" height="450"></canvas>

                            <a href="about" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">@lang('main.section1.5')</a>

                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <hr class="hr1">

                <div class="row">
                    <div class="col-md-12">
                        <div class="about-tab">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_a" data-toggle="tab">@lang('main.section2.1')</a></li>
                                <li><a href="#tab_b" data-toggle="tab">@lang('main.section2.2')</a></li>
                                <li><a href="#tab_c" data-toggle="tab">@lang('main.section2.3')</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab_a">
                                    <p>@lang('main.section2.4')</p>
                                    <p>@lang('main.section2.5') </p>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <p>@lang('main.section2.6')</p>
                                    <ul>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>@lang('main.section2.7')</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>@lang('main.section2.8')</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>@lang('main.section2.9')</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>@lang('main.section2.10')</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>@lang('main.section2.11')</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>@lang('main.section2.12')</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <p>@lang('main.section2.13')</p>
                                </div>
                            </div><!-- tab content -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="hr1">

                <div class="row text-center">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-widget">
                            <div class="post-media wow fadeIn">
                                <a href="uploads/barber_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/barber_01.jpg" alt="" class="img-responsive img-rounded">
                            </div>
                            <h3>@lang('main.section3.1')</h3>
                            <p>@lang('main.section3.2')</p>
                        </div><!-- end service -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-widget">
                            <div class="post-media wow fadeIn">
                                <a href="uploads/barber_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/barber_02.jpg" alt="" class="img-responsive img-rounded">
                            </div>
                            <h3>@lang('main.section3.3')</h3>
                            <p>@lang('main.section3.4')</p>
                        </div><!-- end service -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-widget">
                            <div class="post-media wow fadeIn">
                                <a href="uploads/barber_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/barber_03.jpg" alt="" class="img-responsive img-rounded">
                            </div>
                            <h3>@lang('main.section3.5')</h3>
                            <p>@lang('main.section3.6')</p>
                        </div><!-- end service -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="barbers" class="section lb">
            <div class="container-fluid">
                <div class="section-title row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <small>@lang('main.section3.7')</small>
                        <h3>@lang('main.section3.8')</h3>
                        <hr class="grd1">
                        <p class="lead">@lang('main.section3.9')</p>
                    </div>
                </div><!-- end title -->

                <div class="row dev-list text-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="widget clearfix">
                            <div class="hover-br">
                                <img src="izbassar.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>@lang('main.section3.10')</h3>
                                <small>@lang('main.section3.11')</small>
                            </div>
                            <!-- end title -->
                            <p>@lang('main.section3.12')</p>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="widget clearfix">
                            <div class="hover-br">
                                <img src="uploads/barber_team_03.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>@lang('main.section3.13')</h3>
                                <small>@lang('main.section3.14')</small>
                            </div>
                            <!-- end title -->
                            <p>@lang('main.section3.15')</p>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="widget clearfix">
                            <div class="hover-br">
                                <img src="uploads/barber_team_02.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>@lang('main.section3.16')</h3>
                                <small>@lang('main.section3.17')</small>
                            </div>
                            <!-- end title -->
                            <p>@lang('main.section3.18')</p>
                        </div><!--widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->


        <div class="copyrights">
            <div class="container-fluid">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-links">
                            <a href="#">@lang('main.end.1')</a>
                            <a href="barbers">@lang('main.end.2')</a>
                            <a href="services">@lang('main.end.3')</a>
                            <a href="about">@lang('main.end.4')</a>
                            <a href="#">@lang('main.end.5')</a>
                            <a href="contact">@lang('main.end.6')</a>
                        </p>
                        <p class="footer-company-name">@lang('main.end.7') &copy; 2021</p>
                    </div>

                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->
    </div>
</div><!-- end wrapper -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


<script src="js/all.js"></script>
<script src="js/responsive-tabs.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>

<!-- Menu Toggle Script -->
<script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
</script>
<script>
    new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
            labels: ["Visited", "Not visited"],
            datasets: [
                {
                    label: "Population (millions)",
                    backgroundColor: ["#64cd3e","#c45850"],
                    data: [30, 70]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Percentage of men in Kazakhstan'
            }
        }
    });
</script>

