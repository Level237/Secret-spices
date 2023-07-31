
@extends('layouts.app')
@section('title', __('Recettes vidéos'))
@section('content')
<!-- PAGE HERO
			============================================= -->
<div id="videos-recipes-page" class="page-hero-section division">
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
        <div class="col-sm-6 col-lg-6">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                   

                    <video loop="loop" poster="{{ asset('images/thumbnails/poulet-roti.png')}}" style="width: 100%; " controls>
                        <source src="{{asset('video/poulet-roti.mp4')}}" type="video/mp4">
                    </video>


                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('Poulet Rôti')}}</h5>




                </div>

            </div>
        </div> <!-- END MENU ITEM #1 -->


        <!-- MENU ITEM #2 -->
        <div class="col-sm-6 col-lg-6">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                    

                    <video loop="loop" poster="{{ asset('images/thumbnails/gamba-legumes.png')}}" style="width: 100%; " controls>
                        <source src="{{asset('video/gamba-legumes.mp4')}}" type="video/mp4">
                    </video>



                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('Gamba aux légumes')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->


        <!-- MENU ITEM #3 -->
        <div class="col-sm-6 col-lg-6">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                  

                    <video loop="loop" poster="{{ asset('images/thumbnails/poisson-marinee.png')}}" style="width: 100%; " controls>
                        <source src="{{asset('video/poisson-marine.mp4')}}" type="video/mp4">
                    </video>



                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('Poisson Mariné')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #3 -->


        <!-- MENU ITEM #4 -->
        <div class="col-sm-6 col-lg-6">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                   

                    <video loop="loop" poster="{{ asset('images/thumbnails/bar-four.png')}}" style="width: 100%; " controls>
                        <source src="{{asset('video/bar-four.mp4')}}" type="video/mp4">
                    </video>



                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('Bar au four')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #4 -->


    </div> <!-- End row -->

    
</div>
@endsection