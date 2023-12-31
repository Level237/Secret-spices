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
    <link href="{{ asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('css/added-style.css')}}" rel="stylesheet">
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
        <header class="header-one d-lg-block d-md-block d-none">
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
                                    <li><a href="{{ route('products')}}"> <span style="font-size:16px; text-transform: uppercase;"> {{ __('Produits')}} </span> <i class="fa fa-angle-down"></i> </a>
                                        <ul class="dropdown-menu-col-1">

                                            @foreach($weights as $weight)
                                            <li><a href="{{ route('product.detailByWeight',$weight->weight_name) }}">{{ $weight->weight_name }} G </a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/recettes" style="font-size:16px; text-transform: uppercase;">{{ __('Recettes')}}</a>

                                    </li>
                                    <li><a href="/engagements" style="font-size:16px; text-transform: uppercase;">{{ __('Engagement') }}<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="{{ route('engagement')}}#environement">{{ __('Environement') }}</a></li>
                                            <li><a href="{{ route('engagement')}}#process">{{ __('Process de fabrication') }}</a></li>
                                            <li><a href="{{ route('engagement')}}#ingredients">{{ __('Origines ingrédients') }}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                    <li><a href="{{ route('event') }}" style="font-size: 16px; color:white; text-transform: uppercase;">{{ __('Évènements') }}</a>
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
                                                    <a style="width: 50px">
                                                        <img class="lang" src="{{ asset('images/languages/'.$current_locale.'.png')}} " alt="">

                                                    </a>
                                                    <ul class="dropdown-menu-col-1" style="background-color: white">
                                                        <div class="d-flex flex-column">
                                                            <div class="p-2"><a href="{{ route('changeLang','fr') }}">
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
                                                            <div class="p-2"><a href="{{ route('changeLang','en') }}">
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

        <!-- Header Area Start Here -->
        <header id="header-3" class="header navik-header header-transparent header-shadow d-lg-none d-md-none">
            <div class="container">


                <!-- NAVIGATION MENU -->
                <div class="navik-header-container">

                    <!-- CALL BUTTON -->
                    <div class="callusbtn">
                        <a href="/recettes">
                            <span class="flaticon-salad-1" style="color:#fde0a5"></span>
                        </a>

                    </div>


                    <!-- LOGO IMAGE -->
                    <div class="logo" data-mobile-logo="{{ asset('images/logos/logo-one.png') }}" data-sticky-logo="{{ asset('images/logos/logo-one.png') }}">
                        <a href="{{ route('homepage') }}"><img src="{{ asset('images/logos/logo-one.png') }}" width="345px" alt="header-logo"></a>
                    </div>


                    <!-- BURGER MENU -->
                    <div class="burger-menu text-white">
                        <div class="line-menu line-half first-line"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu line-half last-line"></div>
                    </div>



                    <!-- MAIN MENU -->
                    <nav class="navik-menu menu-caret navik-yellow">
                        <ul class="top-list">

                            <!-- DROPDOWN MENU -->
                            <li><a href="{{ route('product.index')}}" class="ubuntu_bold text-white" style="font-size: 15px">{{ __('Produits') }}</a>
                                <ul>
                                    @foreach($weights as $weight)
                                    <li><a href="{{ route('product.detailByWeight',$weight->weight_name) }}">{{ $weight->weight_name }} G </a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <div class="horizontal-mobile-line">

                            </div>
                            <!-- DROPDOWN MENU -->
                            <li><a class="ubuntu_bold text-white" href="{{ route('recipe.index') }}" style="font-size: 15px">{{ __('Recettes') }}</a>
                                <!-- <ul>

		                            @foreach ($categories as $category)
		                            <li><a href="{{ route('recipe.detailByCategory',$category->category_name) }}">{{ $category->category_name }}</a></li>
		                            @endforeach

		                        </ul> -->



                            </li>
                            <div class="horizontal-mobile-line"></div>
                            <li><a class="ubuntu_bold text-white" href="{{ route('recipes-videos') }}" style="font-size: 15px">{{ __('Recettes vidéos') }}</a>
                                <!-- <ul>



		                        </ul> -->



                            </li>
                            <div class="horizontal-mobile-line">

                            </div>
                            <!-- MEGA MENU -->
                            <li><a class="ubuntu_bold text-white" href="{{ route('engagement')}}" style="font-size: 15px">{{ __('Engagement') }}</a>
                                <ul>
                                    <li><a href="{{ route('engagement')}}#environement">{{ __('Environement') }}</a></li>
                                    <li><a href="{{ route('engagement')}}#process">{{ __('Process de fabrication') }}</a></li>
                                    <li><a href="{{ route('engagement')}}#ingredients">{{ __('Origines ingrédients') }}</a></li>
                                </ul>
                            </li> <!-- END MEGA MENU -->

                            <div class="horizontal-mobile-line">

                            </div>
                            <!-- DROPDOWN MENU -->


                            </li>

                            <!-- DROPDOWN MENU -->
                            <!--<li><a href="{{ route('blog')}}" style="font-size: 16px; color:white">Blog</a>-->

                            </li>

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
                                <a>
                                    <img class="lang" src="{{ asset('images/languages/'.$current_locale.'.png')}} " alt="">

                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('changeLang',"fr") }}">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="lang-select" src="{{ asset('images/languages/fr.png')}} " alt="">
                                                </div>

                                                <div class="p-2">
                                                    Français
                                                </div>
                                            </div>


                                        </a>
                                    </li>
                                    <li><a href="{{ route('changeLang',"en") }}">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="lang-select" src="{{ asset('images/languages/en.png')}}  " alt="">
                                                </div>

                                                <div class="p-2">
                                                    English
                                                </div>
                                            </div>
                                        </a></li>

                                </ul>
                            </li>







                        </ul>

                    </nav> <!-- END MAIN MENU -->


                </div> <!-- END NAVIGATION MENU -->


            </div> <!-- End container -->
        </header> <!-- END HEADER-3 -->



        <!-- Single Recipe Main Banner Area Start Here -->

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
                    <div class="ctg-name " style="font-size:30px"> {{ __('Détail de la Recette')}}</div>
                    <h2 class="item-title">Recette de {{ ucfirst($recipe->name_recipe) }}</h2>
                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-5">
                        <ul class="entry-meta">
                            <li class="single-meta"><a href="#"><i class="far fa-calendar-alt"></i>{{ $recipe->created_at->format('d M y') }}</a></li>
                            <li class="single-meta"><a href="#"><i class="fas fa-user"></i>by <span>Secret Spices
                                    </span></a></li>
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
                            {{-- <li class="single-meta"><a href="#"><i class="fas fa-heart"></i><span>02</span>
                                    Likes</a>
                            </li> --}}
                        </ul>
                        {{-- <ul class="action-item">
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
                        </ul> --}}
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
                                            <div class="feature-title">{{ __('TEMPS PREP')}}</div>
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
                                            <div class="feature-title">{{ __('TEMPS CUISSON')}}</div>
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
                                            <div class="feature-sub-title">{{ $recipe->number_person }} {{ __('Têtes')}}</div>
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
                                            <div class="feature-title">{{ __('VUES')}}</div>
                                            <div class="feature-sub-title">10</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @if($current_locale=='fr')

                    <p class="item-description">


                        {{ $recipe->description_recipe }}</p>

                    @endif
                    @if($current_locale=='en')

                    <p class="item-description">


                        {{ $recipe->description_recipe_en }}</p>

                    @endif
                    <div class="making-elements-wrap">
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="ingridients-wrap">
                                    <h3 class="item-title"><i class="fas fa-list-ul"></i>{{ __('Ingrédients')}}</h3>
                                    {{--<div class="adjust-servings">
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
                                    </div>--}}


                                    <div class="row">
                                        @foreach ($recipe->ingredients as $index=>$ingredient)
                                        <div class="col-sm-4 col-lg-4">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox{{ $index }}" type="checkbox">
                                                <label for="checkbox{{ $index  }}">
                                                    {{ $recipe->ingredients[$index]->pivot->quantity }} {{ $ingredient->ingredient_name }}</label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>


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
                            <h2 class="item-heading">{{ __('Étapes de préparation')}}</h2>
                        </div>
                        @foreach ($recipe->steps as $index=>$step)

                        <div class="direction-box-layout2" style="text-align: center">
                            <div class="serial-number">
                                <h4 class="number-title" style="text-align: center">{{ $index }}</h4><span>{{ __('Étape')}}</span>
                            </div>
                            <div class="item-content">
                                <span class="item-time"><i class="far fa-clock"></i>{{ $step->duration }}</span>

                                @if($current_locale==='fr')
                                <p>{{ $step->description }}</p>
                                @endif
                                @if($current_locale==='en')
                                <p>{{ $step->description_en }}</p>
                                @endif

                            </div>
                        </div>
                        @endforeach

                    </div>
                    {{-- <div class="tag-share">
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
                    </div> --}}
                    {{-- <div class="recipe-author">
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
                    </div> --}}
                    {{-- <div class="next-prev-post">
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
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Single Recipe Without Sidebar Area End Here -->
        <!-- Instagram Start Here -->
        <section class="instagram-feed-wrap">

            <ul class="instagram-feed-figure">

                @foreach ($randomRecipe as $r)
                <li>
                    <a href="{{ route('recipe.detail',['category'=>$r->category->slug,'slug'=>$r->slug]) }}">
                        <img src="{{ Storage::url($r->images[0]->path) }}" alt="Social">
                    </a>*

                </li>
                @endforeach

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

                        <div class="col">
                            <a href="#" class="ico-facebook text-white"><i class="fab  fa-facebook-f"></i></a>
                            <a href="#" class="ico-instagram text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="align-self-center p-2">
                    <div class="d-flex flex-column ">
                        <a href="{{ route('about') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('A Propos') }}</div>
                        </a>
                        <a href="{{ route('legal') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Mentions légales') }}</div>
                        </a>
                        <a href="{{ route('personnal-data') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Données personnelles') }}</div>
                        </a>
                    </div>
                </div>
                <div class="align-self-center p-2 ">
                    <div class="d-flex flex-column">
                        <a href="{{ route('galery') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Galerie Vidéos') }}</div>
                        </a>
                        <a href="{{ route('event') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Évènements') }}</div>
                        </a>
                        <a href="{{ route('contact') }}" class="text-white">
                            <div class="p-2"><i class="fas fa-angle-right" style="color:#fde0a5"></i> {{ __('Nous Contacter') }}</div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">

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
    <script src="{{ asset('js/menu.js')}} "></script>
</body>

</html>
