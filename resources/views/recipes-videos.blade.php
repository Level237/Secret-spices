
@extends('layouts.app')
@section('title', __('Recettes vidéos'))
@section('content')
<!-- PAGE HERO
			============================================= -->
<div id="engagement-page" class="page-hero-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="hero-txt text-center white-color">

                    <!-- Breadcrumb -->
                    <div id="breadcrumb">
                        <div class="row">
                            <div class="col">
                                <div class="breadcrumb-nav">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="demo-1.html">{{ __('Accueil')}}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ __('Recettes vidéos')}}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Title -->
                    <h2 class="h2-xl">{{ __('Recettes vidéos')}}</h2>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END PAGE HERO -->

<div class="container mt-30">
    <div class="row title_environnement mb-20">
        <h1>{{ __('Nos Recettes') }}</h1>
        <h2 class="horizontal-line-three"></h2>

    </div>

    <div class="row">


        <!-- MENU ITEM #1 -->
        <div class="col-sm-6 col-lg-3">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                    <!-- Image -->
                    <img class="img-fluid" src="{{ asset('images/thumbnails/poulet-roti.png')}}" height="300px" alt="menu-image">




                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color">{{ __('Poulet Rôti')}}</h5>




                </div>

            </div>
        </div> <!-- END MENU ITEM #1 -->


        <!-- MENU ITEM #2 -->
        <div class="col-sm-6 col-lg-3">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                    <!-- Image -->
                    <img class="img-fluid" src="{{ asset('images/thumbnails/gamba-legumes.png')}}" height="300px" alt="menu-image">





                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color">{{ __('Gamba aux légumes')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->


        <!-- MENU ITEM #3 -->
        <div class="col-sm-6 col-lg-3">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                    <!-- Image -->
                    <img class="img-fluid" src="{{ asset('images/thumbnails/poisson-marinee.png')}}" alt="menu-image">





                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color">{{ __('Poisson Mariné')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #3 -->


        <!-- MENU ITEM #4 -->
        <div class="col-sm-6 col-lg-3">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                    <!-- Image -->
                    <img class="img-fluid" src="{{ asset('images/thumbnails/bar-four.png')}}" alt="menu-image">





                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color">{{ __('Bar au four')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #4 -->


    </div> <!-- End row -->


</div>
@endsection