<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recette de {{ $recipe->name_recipe }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }} " type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}} ">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fonts-recipe/flaticon.css')}}">
    <!-- FONT ICONS -->
    <link href="{{ asset('releases/v5.11.0/css/all.css')}}" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('css/flaticon.css')}}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <!-- Modernizr Js -->
    <script src="{{ asset('js-recipe/modernizr-3.6.0.min.js')}}"></script>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->

    <!-- Preloader End Here -->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper">

        <!-- Header Area Start Here -->
        <header class="header-one">
            <div id="header-main-menu" class="header-main-menu header-sticky" style="background-color: #c70609;
            background-image: url({{ asset('images/bg_header.jpg') }}); color: white; ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-3 col-sm-4 col-4 possition-static d-flex flex-row">
                            <div class="p-2" style="margin-left: -75px" id="logo-secret-header">
                                <a href="{{ route('homepage')}}" class="sticky-logo-light"><img src="{{ asset('images/logos/logo-one.png') }}" style="width: 160px" alt="Site Logo"></a>
                            </div>


                            <div class="site-logo-mobile">
                                <a href="{{ route('homepage') }}" class="sticky-logo-light"><img src="{{ asset('images/logos/logo-one.png') }}" alt="Site Logo"></a>
                                <a href="{{ route('homepage') }}" class="sticky-logo-dark"><img src="{{ asset('images/logos/logo-one.png') }}" alt="Site Logo"></a>
                            </div>

                            <nav class="site-nav">
                                <ul id="site-menu" class="site-menu" style="margin-left:50px">
                                    <li><a href="#"> <span style="font-size:16px; text-transform: uppercase;"> Produits </span> <i class="fa fa-angle-down"></i> </a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="{{ route('homepage') }}">Home 1</a></li>
                                            <li><a href="{{ route('homepage') }}">Home 2</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#" style="font-size:16px; text-transform: uppercase;">Recettes</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="recipe-with-sidebar.html.htm">Recipes With Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="recipe-without-sidebar.html.htm">Recipes Without Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-recipe1.html.htm">Single Recipe 1</a>
                                            </li>
                                            <li>
                                                <a href="single-recipe2.html.htm">Single Recipe 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#" style="font-size:16px; text-transform: uppercase;">{{ __('Engagement') }}</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="shop.html.htm">Shop</a></li>
                                            <li><a href="single-shop.html.htm">Shop Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html.htm" style="font-size:16px; text-transform: uppercase;">{{ __('Évènements') }}</a>
                                    </li>
                                    <li>
                                        <a href="category.html.htm" style="font-size:16px; text-transform: uppercase;">{{ __('Blog') }}</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                        <div class="col-lg-4 col-md-9 col-sm-8 col-8 d-flex align-items-center justify-content-end">
                            <div class="nav-action-elements-layout1">
                                <ul>

                                    <li>
                                        <div class="middle-section" id="search-bar">
                                            <input class="search-bar" type="text" placeholder="{{ __('Rechercher') }}">

                                            <button class="search-button">

                                                <img class="search-icon" src="{{ asset('images/icons/search-icon-red.svg')}} " alt="">

                                                <div class="tooltip">
                                                    {{ __('Rechercher') }}
                                                </div>

                                            </button>

                                        </div>
                                    </li>

                                    <li id="language-section">

                                        <nav class="site-nav">
                                            <ul id="site-menu" class="site-menu" style="">
                                                <li>
                                                    <a href="cart.html" style="width: 50px">
                                                        <img class="lang" src="{{ asset('images/languages/fr.png')}} " alt="">

                                                    </a>
                                                    <ul class="dropdown-menu-col-1" style="background-color: white">
                                                        <div class="d-flex flex-column">
                                                            <div class="p-2"><a href="lang/fr">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="p-2">
                                                                            <img class="lang-select" src="{{ asset('images/languages/fr.png')}}  " alt="">
                                                                        </div>

                                                                        <div class="p-2">
                                                                            Français
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="p-2"><a href="lang/en">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="p-2">
                                                                            <img class="lang-select" src="{{ asset('images/languages/en.png')}}  " alt="">
                                                                        </div>

                                                                        <div class="p-2">
                                                                            English
                                                                        </div>
                                                                    </div>
                                                                </a></div>

                                                        </div>

                                                    </ul>
                                                </li>


                                            </ul>
                                        </nav>

                                    </li>
                                </ul>
                            </div>
                            <div class="mob-menu-open toggle-menu">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>



        <!-- Single Recipe Main Banner Area Start Here -->
        <div style="margin-top: 90px">

        </div>
        <section class="single-recipe-main-banner">
            <div class="rc-carousel nav-control-layout4" data-loop="true" data-items="5" data-margin="5" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                @foreach ($recipe->images as $image)
                <div class="item-figure">
                    <img src="{{Storage::url($image->path)}}" alt="Banner">
                </div>
                @endforeach
            </div>
        </section>
        <!-- Single Recipe Main Banner Area End Here -->
        <!-- Single Recipe Without Sidebar Area Start Here -->
        <section class="single-recipe-wrap-layout2 padding-bottom-80">
            <div class="container">
                <div class="single-recipe-layout2">
                    <div class="ctg-name " style="font-size:30px"> Secret Poisson</div>
                    <h2 class="item-title">{{ $recipe->name_recipe }}</h2>
                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-5">
                        <ul class="entry-meta">
                            <li class="single-meta"><a href="#"><i class="far fa-calendar-alt"></i>Nov 14,
                                    2018</a></li>
                            <li class="single-meta"><a href="#"><i class="fas fa-user"></i>by <span>Kazi
                                        Fahim</span></a></li>
                            <li class="single-meta">
                                <ul class="item-rating">
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-empty"><i class="fas fa-star"></i></li>
                                    <li><span>9<span> / 10</span></span> </li>
                                </ul>
                            </li>
                            <li class="single-meta"><a href="#"><i class="fas fa-heart"></i><span>02</span>
                                    Likes</a>
                            </li>
                        </ul>
                        <ul class="action-item">
                            <li><button><i class="fas fa-print"></i></button></li>
                            <li><button><i class="fas fa-expand-arrows-alt"></i></button></li>
                            <li class="action-share-hover"><button><i class="fas fa-share-alt"></i></button>
                                <div class="action-share-wrap">
                                    <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" title="skype"><i class="fab fa-skype"></i></a>
                                    <a href="#" title="rss"><i class="fas fa-rss"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="item-feature">
                        <ul>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media d-flex">
                                        <div class="feature-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">TEMPS PREP</div>
                                            <div class="feature-sub-title">{{ $recipe->time }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media d-flex">
                                        <div class="feature-icon">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">TEMPS CUISSON</div>
                                            <div class="feature-sub-title">45 Mins</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media d-flex">
                                        <div class="feature-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">SERVICE</div>
                                            <div class="feature-sub-title">{{ $recipe->number_person }} person</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media d-flex">
                                        <div class="feature-icon">
                                            <i class="far fa-eye"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">VUES</div>
                                            <div class="feature-sub-title">3,450</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="item-description">{{ $recipe->description_recipe }}</p>
                    <div class="making-elements-wrap">
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="ingridients-wrap">
                                    <h3 class="item-title"><i class="fas fa-list-ul"></i>Ingredients</h3>
                                    <div class="adjust-servings">
                                        <div class="servings-title">Adjust Servings</div>
                                        <form class="servings-quantity">
                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                                <div class="btn-quantity-select">
                                                    <button class="quantity-plus" type="button">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button class="quantity-minus" type="button">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @foreach ($recipe->ingredients as $index=>$ingredient)
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">{{ $recipe->ingredients[$index]->pivot->quantity }} {{ $ingredient->ingredient_name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="col-xl-6 col-12">
                                <div class="nutrition-wrap" style="background-color: #fde0a5">
                                    <h3 class="item-title"><i class="fas fa-info"></i>Nutrition</h3>
                                    <ul class="nutrition-list">
                                        <li>
                                            <div class="nutrition-name">Calories</div>
                                            <div class="nutrition-value">329</div>
                                        </li>
                                        <li>
                                            <div class="nutrition-name">Sugar</div>
                                            <div class="nutrition-value">10.5g</div>
                                        </li>
                                        <li>
                                            <div class="nutrition-name">Protein</div>
                                            <div class="nutrition-value">22.5g</div>
                                        </li>
                                        <li>
                                            <div class="nutrition-name">Fat</div>
                                            <div class="nutrition-value">02g</div>
                                        </li>
                                        <li>
                                            <div class="nutrition-name">Carbs</div>
                                            <div class="nutrition-value">18g</div>
                                        </li>
                                        <li>
                                            <div class="nutrition-name">Food Fat</div>
                                            <div class="nutrition-value">0.1</div>
                                        </li>

                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="direction-wrap-layout2">
                        <div class="section-heading2 heading-dark">
                            <h2 class="item-heading">Étapes de préparation</h2>
                        </div>
                        @foreach ($recipe->steps as $index=>$step)
                        @if($index == 0)
                        @continue

                        @endif
                        <div class="direction-box-layout2">
                            <div class="serial-number">
                                <h4 class="number-title">{{ $index }}</h4><span>Étape</span>
                            </div>
                            <div class="item-content">
                                <span class="item-time"><i class="far fa-clock"></i>{{ $step->duration }}</span>
                                <p>{{ $step->description }}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="tag-share">
                        <ul>
                            <li>
                                <ul class="inner-tag">
                                    <li>Tags:</li>
                                    <li>
                                        <a href="#">Spices poisson,</a>
                                    </li>
                                    <li>
                                        <a href="#">Poulet,</a>
                                    </li>
                                    <li>
                                        <a href="#">Secret</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="inner-share">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="recipe-author">
                        <div class="media media-none--xs d-flex align-items-center">
                            <div>
                                <img src="img/blog/author9.jpg" alt="Blog Author" class="rounded-circle media-img-auto" style="width: 200px">
                            </div>

                            <div class="media-body">
                                <h4 class="author-title">Michel Jack</h4>
                                <h5 class="author-sub-title">Written by</h5>
                                <p>I love cooking and blogging. Using a fork, break salmon. Halve reserved
                                    potatoes and eggs crosswise. The of something of did require met of
                                    help have someone.</p>
                                <ul class="author-social">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="next-prev-post">
                        <div class="prev-post">
                            <a href="#" class="item-figure"><img src="img/blog/prev-post.jpg" alt="Post"></a>
                            <div class="item-content">
                                <p>RECETTE PRÉCEDENTE</p>
                                <h3 class="post-title"><a href="#">Boulettes de viandes</a></h3>
                            </div>
                        </div>
                        <div class="next-post">
                            <div class="item-content">
                                <p>RECETTE SUIVANTE</p>
                                <h3 class="post-title"><a href="#">Fufu & sauce pistache</a></h3>
                            </div>
                            <a href="#" class="item-figure"><img src="img/blog/next-post.jpg" alt="Post"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Recipe Without Sidebar Area End Here -->
        <!-- Instagram Start Here -->
        <section class="instagram-feed-wrap">

            <ul class="instagram-feed-figure">
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure1.jpg" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure2.jpg" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure3.jpg" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure4.jpg" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure5.jpg" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure6.jpg" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure7.jpg" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html.htm"><img src="img/social-figure/social-figure8.jpg" alt="Social"></a>
                </li>
            </ul>
        </section>
        <!-- Instagram End Here -->
        <!-- FOOTER-3
			============================================= -->
        <footer id="footer-3" class="footer-division footer-bg">


            <div class="d-md-flex flex-row justify-content-around footer-text-secrets">
                <div class="p-2">
                    <div class="d-flex  flex-column">
                        <div class="p-2">
                            <img src="{{ asset("images/logos/logo-one.png") }}" width="200px" alt="footer-logo">
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="">
                                <p class="footer-text-secrets">{{ __('L\'alliee de la femme') }} <br> {{ __('ambitieuse et belle') }}</p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="align-self-center p-2">
                    <div class="d-flex flex-column ">
                        <a href="{{ route('about') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('A Propos') }}</div>
                        </a>
                        <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Mentions légales') }}</div>
                        <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Données personnelles') }}</div>
                    </div>
                </div>
                <div class="align-self-center p-2 ">
                    <div class="d-flex flex-column">
                        <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Mentions sanitaires') }}</div>
                        <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Évènements') }}</div>
                        <a href="{{ route('contact') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Nous Contacter') }}</div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <a href="#" class="ico-facebook text-white"><i class="fab  fa-facebook-f"></i></a>
                    <a href="#" class="ico-instagram text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="blocfooter">
                        <div class="col-md-12 ">
                            <!-- FOOTER COPYRIGHT -->
                            <div class="footer-copyright fs-3 fw-bold">
                                <p> Copyright © 2023 Secret Spices. All rights reserved. Powered by K-SOFT TECHNOLOGIES </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End row -->
    </div> <!-- End container -->
    </footer> <!-- END FOOTER-3 -->

    </div>


    <!-- Jquery Js -->
    <script src="{{ asset('js-recipe/jquery-3.3.1.min.js')}} "></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('js-recipe/popper.min.js')}} "></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('js-recipe/bootstrap.min.js')}} "></script>
    <!-- Plugins Js -->
    <script src="{{ asset('js-recipe/plugins.js')}} "></script>
    <!-- Owl Carousel Js -->
    <script src="{{ asset('js-recipe/owl.carousel.min.js')}}"></script>
    <!-- Smoothscroll Js -->
    <script src="{{ asset('js-recipe/smoothscroll.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js-recipe/main.js')}} "></script>
</body>

</html>
