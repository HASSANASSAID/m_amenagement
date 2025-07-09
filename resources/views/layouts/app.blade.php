<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M.A_aménagment</title>
    <script src="{{ asset('assets/js/jquery/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
    <link href="assets/js/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
    <link href="{{ asset("assets/css/stylesheet.css") }}" rel="stylesheet" />

    <!-- Codezeel - Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery/magnific/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/codezeel/carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/codezeel/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/codezeel/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/codezeel/lightbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/codezeel/animate.css') }}" />


    <link href="style.href" type="text/css" rel="style.rel" media="style.media" />
    <link href="style.href" type="text/css" rel="style.rel" media="style.media" />


    <link href="{{ asset('assets/js/jquery/swiper/css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/js/jquery/swiper/css/opencart.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <script src="{{ asset('assets/js/jquery/swiper/js/swiper.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/codezeel/jquery.countdown.min.js') }}" type="text/javascript"></script>

    <link href="assets/image/catalog/cart.png" rel="icon" />
    <!-- Codezeel - Start -->
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/codezeel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/jquery.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/jquery.formalize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/lightbox/lightbox-2.6.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/tabs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/jquery.elevatezoom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/doubletaptogo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/codezeel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery/magnific/jquery.magnific-popup.min.js') }}"></script>
    <!-- Codezeel - End -->

    <script src="{{ asset('assets/js/common.js') }}" type="text/javascript"></script>
  <style>
    .ramage {
        max-height: 360px !important;
    } 
  </style>
</head>


<body class="common-home layout-1">
    <nav id="top">
    </nav>

   @include('layouts.header')


    <div class="wrap-breadcrumb parallax-breadcrumb">
        <div class="container"></div>
    </div>

    <!-- ======= Quick view JS ========= -->
    <!-- <script>

        function quickbox() {
            if ($(window).width() > 767) {
                $('.quickview-button').magnificPopup({
                    type: 'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }
        jQuery(document).ready(function () { quickbox(); });
        jQuery(window).resize(function () { quickbox(); });

    </script>
    <div class="content-top">
        <div class="home-container">
            <section id="sectionhome" class="main-slider">
                <div id="spinner"></div>
                <div class="swiper-viewport">
                    <div id="slideshow0" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center"><a href="#"><img
                                        src="assets/image/amenagment_img/nf.jpg" alt="Mainbanner1"class="img-responsive" /></a></div>
   
                                        
                    </div>
                    <div class="swiper-pagination slideshow0"></div>
                    <div class="swiper-pager">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </section>
            <script type="text/javascript">

                // $('#slideshow0').swiper({
                // mode: 'horizontal',
                // slidesPerView: 1,
                // pagination: '.slideshow0',
                // paginationClickable: true,
                // nextButton: '.swiper-button-next',
                // prevButton: '.swiper-button-prev',
                // spaceBetween: 0,
                // autoplay: 5000,
                // autoplayDisableOnInteraction: true,
                // loop: true
                // });

            </script>

            <script type="text/javascript">
                // Can also be used with $(document).ready()
                $(window).load(function () {
                    $("#spinner").fadeOut("slow");
                });	
            </script>

            <section id="section1">
                <div id="czservicecmsblock">
                    <div class="service_container container">
                        <div class="service-area">
                            <div class="service-third service1">
                                <div class="service-inner">
                                    <div class="service-icon icon1"></div>
                                    <div class="service-content">
                                        <div class="service-heading">Livraison gratuite  </div>
                                        
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="service-third service2">
                                <div class="service-inner">
                                    <div class="service-icon icon2"></div>
                                    <div class="service-content">
                                        <div class="service-heading">+212 655 502 068</div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-third service3">
                                <div class="service-inner">
                                    <div class="service-icon icon3"></div>
                                    <div class="service-content">
                                        <div class="service-heading">Garantie de remboursement
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="czaboutcmsblock" class="about-cms-block">
                    <div class="container aboutus-container">
                        <div class="hometab-heading box-heading">Pour qoui M.A_aménagment</div>
                        <div class="about-store">
                            <div class="about-store-inner">
                                <div class="about-text1">Bienvenue chez M.A_aménagment, votre partenaire privilégié dans
                                    l'art de réinventer votre habitat. Nous croyons que chaque maison mérite un aménagement
                                     qui reflète la personnalité et le style de vie de ses occupants.
                                    Notre équipe d'experts en design d'intérieur et en aménagement d'espace s'engage à créer 
                                    des solutions fonctionnelles et esthétiques qui transformeront votre maison en un espace 
                                    harmonieux où il fait bon vivre. Que vous souhaitiez optimiser un petit appartement, réaménager
                                     une pièce à vivre ou repenser entièrement votre intérieur, nous sommes à votre écoute pour concrétiser
                                      vos rêves.</div>
                                <div class="about-text2">Nous proposons une approche personnalisée qui commence par une consultation approfondie 
                                    pour comprendre vos besoins, votre budget et vos aspirations. Notre savoir-faire s'étend à tous les aspects
                                     de l'aménagement intérieur : mobilier sur mesure, optimisation d'espace, conseils en décoration, solutions
                                      de rangement intelligentes et coordination des travaux.
                                    Faites confiance à notre expertise pour valoriser votre patrimoine et créer un environnement qui vous ressemble.
                                     Contactez-nous dès aujourd'hui pour un devis gratuit et découvrez comment nous pouvons transformer votre maison
                                      en un espace où chaque détail compte.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div> -->

    <div class="row home_row">

        <div id="content" class="col-sm-12">

            <div class="content-home-center">
                @yield('content-top')
                @yield('content')

            </div>

         
        </div>

    </div>

    @include('layouts.footer')

    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
    <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body>

</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#testimonial-carousel').owlCarousel({
            singleItem: true,
            navigation: false,
            pagination: true,
            autoPlay: true
        });

        // Custom Navigation Events
        $(".cztestimonial_next").click(function () {
            $('#testimonial-carousel').trigger('owl.next');
        })
        $(".cztestimonial_prev").click(function () {
            $('#testimonial-carousel').trigger('owl.prev');
        });
    });	
 @yield('scripts')
</script>