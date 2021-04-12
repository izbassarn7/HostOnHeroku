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
                <a href="/"><img src="images/logos/logo.png" alt="image"></a>
            </div>
            <ul class="sidebar-nav">
                <li><a href="home">Home</a></li>
                <li><a class="active" href="about">About Us</a></li>
                <li><a href="services">Our Services</a></li>
                <li><a href="barbers">Our Barbers</a></li>
                <li><a href="appointment">Appointment</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="title--heading">
                                <h1>About Us</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li class="active">About Us</li>
                            </ol>
                            <div class="much">
                                <img src="uploads/mustache.png" alt=""/>
                            </div>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <section class="section nopad cac text-center">
            <a href="appointment"><h3>Interesting our awesome barber services? Just drop an appointment form below!</h3></a>
        </section>

        <div class="section wb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="message-box">
                            <h4>Unique Story</h4>
                            <h2>40 Years Of Experience</h2>
                            <p class="lead">At first glance, a men's haircut is a simple matter. However, she requires no less scrupulousness
                                and skill than women. And in addition to straight scissors, the usual tool of any barber,
                                thinning scissors are additionally used.</p>

                            <p> In addition, when deducing clearer contours, clippers and razors are used for edging. Double
                                shampooing and hair styling are the final touches that will give your new look freshness and shine. </p>

                            <a href="services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                        </div><!-- end messagebox -->
                        <canvas id="speedChart" width="600" height="400"></canvas>
                    </div><!-- end col -->
                </div><!-- end row -->




                <hr class="hr1">

                <div class="row">
                    <div class="col-md-12">
                        <div class="about-tab">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_a" data-toggle="tab">Our Mission</a></li>
                                <li><a href="#tab_b" data-toggle="tab">Why Us?</a></li>
                                <li><a href="#tab_c" data-toggle="tab">About Us</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab_a">
                                    <p>At first glance, a men's haircut is a simple matter. However, she requires no less scrupulousness
                                        and skill than women. And in addition to straight scissors, the usual tool of any barber,
                                        thinning scissors are additionally used.</p>
                                    <p>In addition, when deducing clearer contours, clippers and razors are used for edging. Double
                                        shampooing and hair styling are the final touches that will give your new look freshness and shine. </p>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <p>SMBarber is much more than just a men's hair salon. This is the place where you will be helped to
                                        find your own unique style. It is worth trusting the OldBoy masters once, and, believe me,
                                        the new look will not leave you indifferent. Men's haircuts and unsafe shaving are our profile
                                        and we are confident that our barbers do it the best. As the famous Ralph Lauren once said:
                                        "Whatever lifestyle you lead, you must have your own style, your own world." We will not promise,
                                        of course, that we will make Cary Grant out of you, but you can be sure of 3 things:</p>
                                    <ul>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>User Experince</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Full Devices</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Awesome Design</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Visual Impact</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>100% Sincronized</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Custom Support</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <p>We were the first to introduce compatriots to this culture; many students took their first steps
                                        within the walls of our barber school. Great efforts were made to develop the direction in
                                        Kazakhstan. Thanks to our efforts, today the Barbershop client is not only a harsh brutal but
                                        also every modern man who understands that a neat look and a well-groomed appearance are integral
                                        attributes of a successful personality.</p>
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
                            <h3>Show us Your Graft Style</h3>
                            <p>Only you decide who you are and what you want to express (Gianni Versace)</p>
                        </div><!-- end service -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-widget">
                            <div class="post-media wow fadeIn">
                                <a href="uploads/barber_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/barber_02.jpg" alt="" class="img-responsive img-rounded">
                            </div>
                            <h3>Outstanding Barber Shop</h3>
                            <p> We love our guests and therefore we regularly hold interesting promotions and prepare profitable special offers for you. </p>
                        </div><!-- end service -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-widget">
                            <div class="post-media wow fadeIn">
                                <a href="uploads/barber_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="uploads/barber_03.jpg" alt="" class="img-responsive img-rounded">
                            </div>
                            <h3>The Barber Materials</h3>
                            <p>In our salon we use only the best professional products from leading manufacturers of specialized barber hair care products.</p>
                        </div><!-- end service -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_20.jpg');">
            <div class="container-fluid">
                <div class="section-title row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <small>LET'S SEE OUR TESTIMONIALS</small>
                        <h3>HAPPY TESTIMONIALS</h3>
                        <hr class="grd1">
                        <p class="lead">OUR SATISFIED CLIENTS</p>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_01.png" alt="" class="img-responsive alignright">
                                    <h4>James Fernando <small>- Manager of Racer</small></h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_02.png" alt="" class="img-responsive alignright">
                                    <h4>Jacques Philips <small>- Designer</small></h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_03.png" alt="" class="img-responsive alignright">
                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_03.png" alt="" class="img-responsive alignright">
                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div class="copyrights">
            <div class="container-fluid">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-links">
                            <a href="home">Home</a>
                            <a href="barbers">Blog</a>
                            <a href="services">Pricing</a>
                            <a href="about">About</a>
                            <a href="#">Faq</a>
                            <a href="contact">Contact</a>
                        </p>
                        <p class="footer-company-name">Nurlan Izbassar. &copy; 2021</p>
                    </div>

                    <div class="footer-right">
                        <form method="get" action="#">
                            <input placeholder="Subscribe our newsletter.." name="search">
                            <i class="fa fa-envelope-o"></i>
                        </form>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->
    </div>
</div><!-- end wrapper -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
<script>
    var speedCanvas = document.getElementById("speedChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var speedData = {
        labels: ["2016", "2017", "2019", "2021"],
        datasets: [{
            label: "Number of barbers",
            data: [2, 3, 5, 7 ],
            lineTension: 0,
            fill: false,
            borderColor: 'orange',
            backgroundColor: 'transparent',
            borderDash: [5, 5],
            pointBorderColor: 'orange',
            pointBackgroundColor: 'rgba(255,150,0,0.5)',
            pointRadius: 5,
            pointHoverRadius: 10,
            pointHitRadius: 30,
            pointBorderWidth: 2,
            pointStyle: 'rectRounded'
        }]
    };

    var chartOptions = {
        legend: {
            display: true,
            position: 'top',
            labels: {
                boxWidth: 80,
                fontColor: 'black'
            }
        }
    };

    var lineChart = new Chart(speedCanvas, {
        type: 'line',
        data: speedData,
        options: chartOptions
    });
</script>
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

