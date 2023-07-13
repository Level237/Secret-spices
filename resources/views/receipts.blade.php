@extends('layouts.app')
@section('title', __('Nos Recettes'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
 </div>

<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center product-title">
         <h1>Recettes</h1>
          <h2 class="horizontal-line-two"></h2>
         <p class="fs-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam excepturi voluptatibus, illum suscipit aspernatur. Alias adipisci vel repellendus, eveniet atque veniam nisi ut?Tempore, repudiandae. </p>
    </div>

    <div class="d-flex flex-row mb-3" >
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Recettes les plus consultées</h1>
    </div>

    <div class="d-flex flex-row  mb-3">
        <div class="p-3 d-flex flex-column">
            <img src="{{ asset('images/recette1.jpg')}}" style="width: 300px"  alt="">
        </div>
        <div class="p-3 "><img src="{{ asset('images/recette1.jpg')}}" style="width: 300px"  alt=""></div>
        <div class="p-3 "><img src="{{ asset('images/recette1.jpg')}}" style="width: 300px"  alt=""></div>
    </div>


    <div class="d-sm-flex  flex-row justify-content-start" style="margin-top:50px;">
        
        <div class="d-flex flex-column">
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/recette1.jpg')}}" style="width: 75%"  alt="">
            </div>

            <div class="p-2">
                Poulet roti à l'orange
            </div>

            <div class="p-2 fs-4 fw-normal">
                
                <p style="width:200px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, ipsam odit raesentium suscipit consectetur.</p>

            </div>
        </div>

        <div class="d-flex flex-column">
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/recette1.jpg')}}" style="width: 75%"  alt="">
            </div>

            <div class="p-2 ">
                Poulet roti à l'orange
                <div class="horizontal-mobile-line-gray" ></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex ">
                
               <div class="p-2 fs-4 fw-normal">
                
                <p style="width:200px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, ipsam odit raesentium suscipit consectetur.</p>

            </div>

            </div>
        </div>

        <div class="d-flex flex-column">
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/recette1.jpg')}}" style="width: 75%"  alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices  Poisson
                <div class="horizontal-mobile-line-gray" ></div>
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


    <div class="row">
        <div class="col-sm3 center-gamut">
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> 35 Gr</i>
        </div>
    </div>
  
    <div class="row mb-5" style="margin-top:30px;">
        
        <div class="col d-flex flex-column product-row">
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/secret-viande.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices  Viande
                <div class="horizontal-mobile-line-gray" ></div>
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
            
            <div class="p-2 align-self-center">
                <img src="{{ asset('images/products/secret-poulet.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poulet
                <div class="horizontal-mobile-line-gray" ></div>
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
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/secret-poisson.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poisson
                <div class="horizontal-mobile-line-gray" ></div>
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
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> 250 Gr</i>
        </div>
    </div>


    <div class="row" style="margin-top:30px;">
        
        <div class="col d-flex flex-column product-row">
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/simulation-viande.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices  Viande
                <div class="horizontal-mobile-line-gray" ></div>
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
            
            <div class="p-2 align-self-center">
                <img src="{{ asset('images/products/simulation-poulet.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poulet
                <div class="horizontal-mobile-line-gray" ></div>
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
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/simulation-poisson.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poisson
                <div class="horizontal-mobile-line-gray" ></div>
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
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/pot-viande.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret <br>Epices  Viande
                <div class="horizontal-mobile-line-gray" ></div>
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
            
            <div class="p-2 align-self-center">
                <img src="{{ asset('images/products/pot-viande.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poulet
                <div class="horizontal-mobile-line-gray" ></div>
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
            
            <div class="p-2 fs-4 fw-normal align-self-center">
                <img src="{{ asset('images/products/pot-poulet.png')}}" width="250px" alt="">
            </div>

            <div class="p-2 secret-spices">
                Secret<br> Epices Poisson
                <div class="horizontal-mobile-line-gray" ></div>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/spices1.jpg" style="max-height: 600px" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section>




    @endsection
