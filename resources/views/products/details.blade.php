@extends('layouts.app')
@section('title', __('Détail Produit'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
</div>

<div class="container" style="margin-top: 50px;">


    <div class="d-flex flex-row bd-highlight mb-5 align-items-center ">
        <div class="p-2 bd-highlight center-gamut1"><i class="fas fa-angle-right fs-4" style="color: #c70609"> 35 Gr</i> </div>
        <div class="p-2 bd-highlight"><i class="fas fa-angle-right fs-4" style="color: #c70609"></i></div>
        <div class="p-2 bd-highlight">
            <h1>{{ __('Epice Poulet') }}</h1>
        </div>
    </div>

    <div class="row align-items-center" style="margin-top:50px;">

        <div class="col-md-5 col-sm-5 col-lg-5">
            <img src="{{ asset('images/products/secret-poisson-large.png')}}" style="width:100%" alt="">
        </div>

        <div class="col-md-7 col-sm-7 col-lg-7">

            <div class="row">
                <h1>Secret<br> {{ __('Epice Poulet 35 Gr') }}</h1>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" style="background-color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ __('Présentation') }}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color:#fde0a5;">
                            <strong>

                                {{ __('Utilisé pour l’assaisonnement des volailles et viandes blanches, la sauce pour poulet relève parfaitement le goût de vos plats tout en leur donnant une saveur et un arôme qui vous feront saliver de bonheur.') }}

                            </strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" style="background-color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{ __('Valeurs nutritionnelles') }}
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color:#fde0a5;">
                            <strong>{{ __('les epices vous apportent des complement en Protéine, Sodium, Énergie') }}</strong> .
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" style="background-color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{ __('Ingrédients') }}
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color:#fde0a5;">
                            <strong>{{ __('Ail, Oignon, Njansan, Poivre blanc de Penja, Céléri.') }}</strong> <code></code>,
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top:30px">
                <h2 class="horizontal-line-one"></h2>
                <div class="row">
                    <h4>{{ __('Idées de recette avec cette épice') }}</h4>
                </div>
            </div>
            <div class="row" style="margin-top:10px">
                <div class="col">
                    <a href="menu-3.html">


                        <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">

                        <div class="row mt-3">
                            <div class="col-1">

                            </div>
                            <div class="col-11">
                                <span class="text-center fs-5 fw-normal">Poulet roti à l'orange <br> et aux epinards</span>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col">
                    <a href="menu-3.html">


                        <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                        <div class="row mt-3">
                            <div class="col-1">

                            </div>
                            <div class="col-11">
                                <span class="text-center fs-5 fw-normal">Poulet roti à l'orange<br> et aux epinards</span>
                            </div>
                        </div>

                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="row" style="margin-top:30px;">
        <div class="d-flex flex-row mb-3 mt-3">
            <div class="vertical-line align-middle"></div>
            <h3 class="ms-2">{{ __('Autres Epices de la même Gamme') }} </h3>
        </div>
    </div>

    <div class="d-sm-flex  flex-row">
        <div class="d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/secret-viande.png')}}" width="150px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices Viande
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

        <div class="d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/secret-poisson.png')}}" width="150px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices Poisson
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

    <div style="margin-bottom: 50px;">

    </div>

    <div class="row">
        <div class="col-sm3 center-gamut">
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> 250 Gr</i>
        </div>
    </div>


    <div class="row" style="margin-top:30px;">

        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center text-center">
                <img src="{{ asset('images/products/simulation-viande.png')}}" style="width:50%" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices Viande
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

        <div class="col d-flex flex-column product-row">

            <div class="p-2 align-self-center text-center">
                <img src="{{ asset('images/products/simulation-poulet.png')}}" style="width:50%" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poulet
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center text-center">
                <img src="{{ asset('images/products/simulation-poisson.png')}}" style="width:50%" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poisson
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2  d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

    <div style="margin-bottom: 50px;">

    </div>

    <div class="row">
        <div class="col-sm3 center-gamut">
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> 450 Gr</i>
        </div>
    </div>

    <div class="row" style="margin-top:30px;">

        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center text-center">
                <img src="{{ asset('images/products/pot-viande.png')}}" style="width:50%" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices Viande
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

        <div class="col d-flex flex-column product-row">

            <div class="p-2 align-self-center text-center">
                <img src="{{ asset('images/products/pot-viande.png')}}" style="width:50%" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poulet
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center text-center">
                <img src="{{ asset('images/products/pot-poulet.png')}}" style="width:50%" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poisson
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2  d-flex justify-content-between">

                <div class="p-2">
                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
                </div>

                <div class="p-2">
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

    <div style="margin-bottom: 50px;">

    </div>

</div>
<section style="margin-top:60px">
    <div class="row justify-content-center" style="background-image:url('/images/bg-opacity.png');">
        <div class="col-8">
            <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%;" controls>
                <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
            </video>
        </div>

    </div>
</section>




@endsection
