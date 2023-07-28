@extends('layouts.app')
@section('title', __('Secret Spices'))
@section('content')


<!-- HERO-6
			============================================= -->
<section id="hero-6" class="hero-section division">


    <!-- SLIDER -->
    <div id="space-hero-header" style="margin-top: 100px">

    </div>
    <div class="slider mt-1001">
        <ul class="slides">


            <!-- SLIDE #1 -->
            <li id="slide-1">

                <!-- Background Image -->
                <img src="{{ asset('images/slider/slide1.jpg') }}" alt="slide-background">

                <!-- Image Caption -->
                <div class="caption d-flex align-items-center left-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="caption-txt white-color">

                                    <!-- Title -->

                                    <h2 class="text-uppercase">Secret Spices</h2>

                                    <h2 class="horizontal-line">

                                    </h2>
                                    <h5 class="no-caption-txt ubuntu_regular">
                                        {{ __('Faciliter la cuisine') }} <br> {{ __('avec des assaisonnements') }} <br>{{ __('prêts à l\'emploi.') }}
                                    </h5>

                                </div>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- End container -->
                </div> <!-- End Image Caption -->

            </li> <!-- END SLIDE #1 -->
            <!-- SLIDE #1 -->
            <li id="slide-1">

                <!-- Background Image -->
                <img src="{{ asset('images/slider/slide2.jpg') }}" alt="slide-background">

                <!-- Image Caption -->
                <div class="caption d-flex align-items-center left-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="caption-txt white-color">

                                    <!-- Title -->

                                    <h2 class="text-uppercase">Caravane des épices</h2>

                                    <h2 class="horizontal-line">

                                    </h2>
                                    <h5 class="no-caption-txt ubuntu_regular">
                                        {{ __('Nous Venons') }} <br> {{ __('chez vous') }} <br>
                                    </h5>

                                </div>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- End container -->
                </div> <!-- End Image Caption -->

            </li> <!-- END SLIDE #1 -->


            <li id="slide-1">

                <!-- Background Image -->
                <img src="{{ asset('images/slider/slide3.jpg') }}" alt="slide-background" class="eng">

                <!-- Image Caption -->
                <div class="caption d-flex align-items-center left-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-5">

                            </div>
                            <div class="col-sm-7">
                                <div class="caption-txt white-color">


                                    <h2 class="text-uppercase">PROMESSE</h2>
                                    <h2 class="horizontal-line">



                                        </h2>
                                        <h5 class="no-caption-txt ubuntu_regular">
                                            {{ __('Parce que nous croyons a la transformation agricole') }}
                                        </h5>

                                    </h2>
                                </div>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- End container -->
                </div> <!-- End Image Caption -->

            </li>
        </ul>
    </div> <!-- END SLIDER -->


</section> <!-- END HERO-6 -->


<!-- PROMO-3
			============================================= -->


<div id="promo-3" class="pt-100 promo-section division">
    <div class="container  d-lg-block d-md-block d-none">
        <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> {{ __('Nos idées de recettes faciles')}}</h1>
        </div>

        <div class="row d-flex align-items-center mb-4">


            <!-- PROMO IMAGE-1 -->
            <div class="col-md-4">
                <a href="menu-3.html">


                    <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                    <div class="row mt-3">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-md-12 col-lg-6">
                            <span class="text-center fs-5 fw-normal">{{ __("Poulet roti à l'orange et aux epinards")}}</span>
                        </div>
                    </div>

                </a>
            </div>


            <!-- PROMO IMAGE-2 -->
            <div class="col-md-4">
                <a href="menu-3.html">


                    <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                    <div class="row mt-3">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-md-12 col-lg-6">
                            <span class="text-center fs-5 fw-normal">{{ __("Poulet roti à l'orange et aux epinards")}}</span>
                        </div>
                    </div>

                </a>
            </div>


            <!-- PROMO IMAGE-3 -->
            <div class="col-md-4">
                <a href="menu-3.html">


                    <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                    <div class="row mt-3">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-md-12 col-lg-6">
                            <span class="text-center fs-5 fw-normal">{{ __("Poulet roti à l'orange et aux epinards")}}</span>
                        </div>
                    </div>

                </a>
            </div>


            <!-- PROMO IMAGE-4 -->


        </div> <!-- End row -->


    </div> <!-- End container -->

    <div class="d-lg-none d-md-none container">
        <div class="text-center">

            <h1 class="ms-2"> {{ __('Nos idées de recettes faciles ')}}</h1>
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/recette1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/recette1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/recette1.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


</div> <!-- END PROMO-3 -->
<div class="text-center" style="margin-top:60px">
    <a href="/recettes"> <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3  border border-0">{{ __("Découvrir Plus de recettes")}}</button></a>

</div>



<div class="container-fluid mt-40">
    <div class="row justify-content-center" style="background-image:url('/images/bg-video.jpg');">
        <div class="col-8">
            <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%;" controls>
                <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
            </video>
        </div>

    </div>
</div>


<section class="container" style="margin-top:40px">
    <div class="row align-items-center">
        <div class="col-6  d-lg-block d-none">
            <img src="{{ asset('images/gamme.png') }}" class="img-fluid" alt="spices">
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="d-flex flex-row">
                <div class="vertical-line align-middle"></div>
                <h2 class="ms-2 fs-1"> {{ __('Une large gamme') }} <br> {{ __('des épices secret') }} </h2>

            </div>
            <div class="col-12  d-lg-none d-md-none">
                <img src="{{ asset('images/gamme.png') }}" class="img-fluid" alt="spices">
            </div>

            <div class="row mt-10">
                <div class="col-12">
                    <span class="fs-5">
                        {{ __("Découvrez nos formats super faciles d'utilisation pour réaliser vos délicieux plats sans colorants sans conservateurs, ni de traces animales.") }}

                    </span>

                </div>
            </div>
            <div class="row mt-20">

                <div class="">

                    <a href="/produits"><button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">{{ __('Découvrir Nos Produits') }}</button></a>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-gray-spices mt-3" style="padding-bottom:45px;padding-top:45px">

    <div class="ms-4 mr-40  border border-sm-none">

        <div class="ms-1">
            <div class="row align-items-center">


                <div class="col-12 d-lg-none d-md-none mb-3">

                    <img src="{{ asset('images/engagement.jpg') }}" class="img-fluid" alt="spices">

                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-row mt-3">
                        <div class="vertical-line-secondary align-middle"></div>
                        <h3 class="ms-2 fs-1">{{ __('Les epices secret') }} <br>
                            {{ __('avec vous') }} <br>
                            {{ __('de genérations en genérations') }}<br>
                        </h3>

                    </div>
                    <div class="row  ms-3 ms-sm-0">
                        <div class="col-12">
                            <span class="fs-5 ubuntu_regular">
                                {{ __("Parce que c'est l’occasion de conserver tout le savoir-faire culinaire de nos mamans") }} {{ __('de genérations en genérations') }}
                                {{ __("Nous croyons à un produit au service salvatrice à l'ère moderne qui conserve le goût naturel des intrants agricoles") }}

                            </span>

                        </div>
                    </div>
                    <div class="row ms-3 mb-4">
                        <div class="col-12 mt-3 col-sm-12 col-md-12">



                            <button type="button" class="  bg-secondary-spices text-primary-spices fw-bold fs-5 px-5 p-3 border border-0"> {{ __('En Savoir Plus') }}</button>
                        </div>
                    </div>
                </div>
                <div class="col-7 d-lg-block d-none">
                    <div class=" z-3 position-absolute   vertical-separator" style="right:5%;">

                    </div>
                    <img src="{{ asset('images/engagement.jpg') }}" class="img-fluid" alt="spices">

                </div>


            </div>

        </div>
    </div>

</section>


<div class="carousel-inner">

    <div class="container" style="margin-top: 70px">

        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Title 	-->
                    <h2 class="fs-1 red-color testimonial-title font-costyle">{{ __('Nous Adorons Secret Spices') }}</h2>

                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">


            <div class="carousel-item active">

                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/frank testimonial secret.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Franck Ulrich Juson
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" {{ __('Nous croyons à un produit au service salvatrice à l\'ère moderne qui conserve le goût naturel des intrants agricoles') }}"
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/cindy de bana.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Cindy de Bana
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial"> {{ __('Secret Spices , parfum irrésistible pour tous mes repas ! bon appétit mes convives') }}
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/patrick testimonials secret.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Patrick Dzieffo
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">{{ __("Waouh c'est vraiment un délice pour assaisonner le poisson et le poulet.Secret Spices ... C'est formidable") }}
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/Mouto Mpessa testimonials.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mouto Mpessa
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">{{ __('Avec secret Spices mon poulet et mon porc ont un goût incroyable') }}
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/Malvina Kuate.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Malvina Kuate
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">{{ __("Je mets Secret dans tous les repas ohhh en fonction de si c'est la viande, le poisson ou le poulet") }}
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/bristelle.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Bristelle Mbiafuh

                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">{{ __('Les temps ci je ne blague pas avec les épices secret ,je fais seulement les rôtis. Achhh le gout de ca ') }} "
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/Escha Monte.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Escha Monthé
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial"> {{ __('Avec Secret Spices cest le secret de la cuisine pour presque tous mes repas et grillades') }}
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/Blanche Nguenang.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Blanche Nguenang

                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">{{ __("Ca fait plus de 3 ans que j'utilise les epices secrets C'est mon partenaire de cuisine tous mes barbecues sont faits avec.") }}
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/Aicha Ahmed.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Aicha Hamed

                                </p>

                                <!-- Text -->
                                <p class="author-testimonial"> {{ __('Secret Spices moi aussi je vous remercie pour la joie que vous apportez à mes papilles') }}
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div></div>
                </div>

                <div class="col-md-4" id="temoignages">
                    <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0"> <a href="https://www.facebook.com/mysecretspices/reviews" target="_blank">{{ __('Découvrez plus de temoignages') }}</a> </button>
                </div>

                <div class="col-md-4">
                    <div></div>
                </div>

            </div>


        </div>

    </div> <!-- END CAROUSSEL TESTIMONIALS -->

    <!-- START CAROUSSEL TESTIMONIALS MOBILE -->
    <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/cindy de bana.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Cindy de Bana
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial"> {{ __('Secret Spices , parfum irrésistible pour tous mes repas ! bon appétit mes convives') }}

                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/Blanche Nguenang.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Blanche Nguenang
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" {{ __("Ca fait plus de 3 ans que j'utilise les epices secrets C'est mon partenaire de cuisine tous mes barbecues sont faits avec.") }}"
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="single-testimonial">
                                <!-- Testimonial Author Avatar -->
                                <img src="images/frank testimonial secret.jpg" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Frank Ulrich Juson
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">"{{ __('Voilà déjà 2ans que la fondatrice ma fait découvrir les secrets Spices encore un merci spécial a vous madame Aïcha.') }}"
                                </p>"
                                </p>

                                <!-- Rating -->
                                <div class="review-rating">
                                    <div class="stars-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
            <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
            <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div> <!-- END CAROUSSEL TESTIMONIALS MOBILE -->


    <!-- BLOG-1
			============================================= -->

    <div class="container mt-75">
        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Title 	-->
                    <h2 class="h2-xl red-secret">{{ __('Événements') }}</h2>

                    <!-- Text -->
                    <p class="p-xl">{{ __('Retrouvez nous dans nos differents marchés a Douala et a Yaounde pour un show explosif.') }}
                        "Secret" {{ __('se rapproche de vous profitez-en pour nous decouvrir et raffler de nombreux lots.') }}
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class=" mb-5 pt-5">


        <!-- Blog -->
        <section class="container mb-5 py-lg-5 d-lg-block ">

            <div class="row">
                <div class="col-lg-8 col-12 mb-lg-0 mb-4">

                    <!-- Article -->
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="{{ asset('images/blog/caravane.jpg') }}" class="card-img-top" alt="Image">
                        </div>
                        <div class="card-body pb-4">
                            <div class="d-flex align-items-start ms-4 mt-3">

                                <div style="border: 2px solid red" class="px-3">
                                    <div class="fs-2 fw-bold">
                                        <span class="text-primary-spices">12</span>

                                    </div>
                                    <span class="fs-6 fw-bold">
                                        Juillet
                                    </span>

                                </div>

                                <div class="ms-3">
                                    <div class="row">

                                        <h2> {{ __('La caravanne Secret Debarque chez Vous!') }}</h2>

                                    </div>

                                    <div class="flex-nowrap">

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur temporibus, modi, quasi impedit quia necessitatibus similique inventore aliquid, harum fugiat assumenda


                                    </div>
                                    <div class="row">
                                        <span class="text-primary-spices">
                                            {{ __('Lire la suite') }}
                                        </span>

                                    </div>



                                </div>

                            </div>
                        </div>

                    </article>
                </div>
                <div class="col">

                    <!-- Article -->
                    <article class="card  border-0 shadow-sm overflow-hidden mb-4" style="width:90%">
                        <div class="row g-0">
                            <img src="{{ asset("images/simulation1.jpg") }}" class="" style="width: 100%" alt="Image">
                            <div class="col-sm-12">
                                <div class="card-body">


                                    <div class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-start ms-3">

                                            <div style="border: 2px solid red;padding-left:10px;padding-right:10px" class="flex-shrink-1">
                                                <div class="fs-6 fw-bold">
                                                    <span class="text-primary-spices">12</span>

                                                </div>
                                                <span class="fs-6 fw-bold">
                                                    Juillet
                                                </span>

                                            </div>

                                            <div class="ms-3 w-100">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4>Secret For You</h4>
                                                    </div>
                                                </div>

                                                <div class="row" style="width:100%">
                                                    <div class="col-lg-12">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <span class="text-primary-spices">
                                                        {{ __('Lire la suite') }}
                                                    </span>

                                                </div>




                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="card  border-0 shadow-sm overflow-hidden mb-4" style="width:90%">
                        <div class="row g-0">
                            <img src="{{ asset('images/simulation2.jpg') }}" class="" style="width: 100%" alt="Image">
                            <div class="col-sm-12">
                                <div class="card-body">


                                    <div class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-start ms-3">

                                            <div style="border: 2px solid red;padding-left:10px;padding-right:10px" class="flex-shrink-1">
                                                <div class="fs-5 fw-bold">
                                                    <span class="text-primary-spices">30</span>

                                                </div>
                                                <span class="fs-6 fw-bold">
                                                    Aout
                                                </span>

                                            </div>

                                            <div class="ms-3 w-100">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4>Master Class With NdockBidi</h4>
                                                    </div>
                                                </div>

                                                <div class="row" style="width:100%">
                                                    <div class="col-lg-12">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <span class="text-primary-spices">
                                                        {{ __('Lire la suite') }}
                                                    </span>

                                                </div>




                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </section>

        @endsection
