<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="fr">


<head>

    {{-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="K-SOFT">
    <meta name="description" content="Secret spices- Faciliter la vie à ceux qui cuisinent, en leur offrant les assaisonnements nécessaires déjà prêts.">
    <meta name="keywords" content="secret, spices, assaisonnement, Seasoning, épices, Poivre blanc, Poulet, Poisson, Viande, Secret Poulet"> --}}

    <!-- SITE TITLE -->
    <Meta name=" robots " content="index, follow" />
    <meta name="twitter:card" content="@yield('meta_title')" />
    <meta name="twitter:site" content="secret-spices.net" />
    <meta name="twitter:title" content="@yield('meta_title')" />
    <meta name="twitter:description" content="@yield('meta_description')" />
    <meta name="twitter:image" content="@yield('meta_image')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }} " type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">


    <!-- GOOGLE FONTS -->
    <link href="{{ asset('css/css?family=Roboto:300,400,500,700&display=swap')}}" rel="stylesheet">
    <link href="{{ asset('css/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap')}}" rel="stylesheet">
    <link href="{{asset('css/css2-1?family=Lilita+One&display=swap')}}" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>


    <!-- PLUGINS STYLESHEET -->
    <link href="{{ asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/jquery.datetimepicker.min.css')}}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/added-style.css')}}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">





    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">

    <!-- FONT ICONS -->
    <link href="{{ asset('releases/v5.11.0/css/all.css')}}" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('css/flaticon.css')}}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

    <!-- Modernizr Js -->
    <script src="{{ asset('js-recipe/modernizr-3.6.0.min.js')}}"></script>
</head>




<body>




    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="cssload-spinner">
                <div class="cssload-ball cssload-ball-1"></div>
                <div class="cssload-ball cssload-ball-2"></div>
                <div class="cssload-ball cssload-ball-3"></div>
                <div class="cssload-ball cssload-ball-4"></div>
            </div>
        </div>
    </div>


    @include('layouts.header')


    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page">

        @yield('content')


        @include('layouts.footer')


    </div> <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('js/jquery.easing.js')}} "></script>
    <script src="{{ asset('js/jquery.appear.js')}}"></script>
    <script src="{{ asset('js/jquery.scrollto.js')}}"></script>
    <script src="{{ asset('js/menu.js')}} "></script>
    <script src="{{ asset('js/materialize.js')}}"></script>
    <script src="{{ asset('js/jquery.flexslider.js')}}"></script>

    <script src="{{ asset('js/jquery.magnific-popup.min.js')}} "></script>

    <script src="{{ asset('js/comment-form.js')}}"></script>
    <script src="{{ asset('js/booking-form.js')}} "></script>
    <script src="{{ asset('js/jquery.datetimepicker.full.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/custom.js')}}"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->


</body>



</html>
