
@extends('layouts.app')
@section('title', __('Galerie Vidéos'))
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
                                            <li class="breadcrumb-item active" aria-current="page">{{ __('Galerie Vidéos')}}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Title -->
                    <h2 class="h2-xl">{{ __('Galerie Vidéos')}}</h2>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END PAGE HERO -->

<div class="container mt-30">
    <div class="row title_environnement mb-20">
        <h1>{{ __('Nos Vidéos') }}</h1>
        <h2 class="horizontal-line-three"></h2>

    </div>

    <div class="row">


        <!-- MENU ITEM #1 -->
        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                   

                    <video loop="loop" poster="{{ asset('images/poster-secret.png')}}" style="width: 100%; " controls>
                        <source src="{{asset('video/epice-secret.mp4')}}" type="video/mp4">
                    </video>


                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('CLIP SECRET SPICES')}}</h5>




                </div>

            </div>
        </div> <!-- END MENU ITEM #1 -->


        <!-- MENU ITEM #2 -->
        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                    

                    <video loop="loop" poster="{{ asset('images/poster.png')}}" style="width: 100%; " controls>
                        <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
                    </video>



                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('SECRET SPICES BURKINA FASO')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->


        <!-- MENU ITEM #3 -->
        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->
                <div class="menu-7-img rel">

                  

                    <video loop="loop" poster="{{ asset('images/secret-mami-ton.png')}}" style="width: 100%; " controls>
                        <source src="{{asset('video/secret-mami-ton.mp4')}}" type="video/mp4">
                    </video>



                </div>

                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('SECRET SPICES & MAMI TON')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #3 -->


     


    </div> <!-- End row -->

    
</div>
@endsection