@extends('layouts.app')
@section('title', __('Galerie Vidéos'))
@section("meta_title","Galerie Vidéos: SECRET SPICES")
@section("meta_description","Secret spices- Découvrez Toutes Nos Galeries Vidéos ")
@section("meta_image",asset('images/meta/meta3.png'))
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




                <iframe width="415" height="315" src="https://www.youtube.com/embed/wU5MpahDWDI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>




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




                <iframe width="415" height="315" src="https://www.youtube.com/embed/GrL30k8LrVk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>





                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('Secret Epices - Condiments 100% naturels')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->

        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->

                <iframe width="415" height="315" src="https://www.youtube.com/embed/4eBMVHfIlwM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>




                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('Quand les filles de PAKGNE visitent l\'usine Secret épices')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->
        <!-- MENU ITEM #3 -->
        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->




                <iframe width="415" height="315" src="https://www.youtube.com/embed/8W2jioWFzCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>





                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('Rencontre avec la GUGA DU KWAT (Promotrice du Made in Cameroun)')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->
        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->




                <iframe width="415" height="315" src="https://www.youtube.com/embed/3rj_BL2Dasg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>





                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('SECRET épices et Mami Ton')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->
        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->




                <video width="415" height="315" poster="{{ asset('images/poster.png')}}" controls>
                    <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
                </video>





                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('SECRET SPICES BURKINA FASO')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->

        <!-- MENU ITEM #2 -->
        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->




                <video width="415" height="315" poster="{{ asset('images/poster1.png')}}" controls>
                    <source src="{{asset('video/pakgne.mp4')}}" type="video/mp4">
                </video>





                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __('SECRET SPICES & MURIEL BLANCHE')}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->

        <div class="col-sm-4 col-lg-4">
            <div class="menu-7-item">

                <!-- IMAGE -->




                <iframe width="415" height="315" src="https://www.youtube.com/embed/wD5vbz19HYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>





                <!-- TEXT -->
                <div class="menu-7-txt rel">

                    <!-- Title -->
                    <h5 class="h5-sm coffee-color text-primary-spices">{{ __("L'ASTUCE par Ritha E-mah")}}</h5>





                </div>

            </div>
        </div> <!-- END MENU ITEM #2 -->

    </div> <!-- End row -->


</div>
@endsection
