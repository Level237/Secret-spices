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
 </div>

<div class="container" style="margin-top: 50px;" id="receipts">
   

    <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Recettes les plus consultées</h1>
    </div>

    <div class="d-flex flex-row mb-3" >

        <div class="p-3 d-flex flex-column">

            <div class="p-1">
                 <img src="{{ asset('images/recette1.jpg')}}" style="width: 300px"  alt="">
            </div>

            <div class="p-1 d-flex flex-row justify-content-between align-items-center">
                 <div class="fs-5 fw-bold">
                    Poulet roti à l'orange
                 </div>
                 <div>
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                 </div>
                 
            </div>

            <div class="p-1">
                 <p style="width: 300px;" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
            </div>
           

        </div>
        <div class="p-3 d-flex flex-column">
            
            <div class="p-1">
                 <img src="{{ asset('images/recette1.jpg')}}" style="width: 300px"  alt="">
            </div>

            <div class="p-1 d-flex flex-row justify-content-between align-items-center">
                 <div class="fs-5 fw-bold">
                    Poulet roti à l'orange
                 </div>
                 <div>
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                 </div>
                 
            </div>

            <div class="p-1">
                 <p style="width: 300px;" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
            </div>
        
        </div>
        
        <div class="p-3 d-flex flex-column">
            
            <div class="p-1">
                 <img src="{{ asset('images/recette1.jpg')}}" style="width: 300px"  alt="">
            </div>

            <div class="p-1 d-flex flex-row justify-content-between align-items-center">
                 <div class="fs-5 fw-bold">
                    Poulet roti à l'orange
                 </div>
                 <div>
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                 </div>
                 
            </div>

            <div class="p-1">
                 <p style="width: 300px;" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
            </div>
        
        </div>

    </div>
 

    <div class="horizontal-line-receipt"></div>

    <div style="margin-bottom: 50px;">

    </div>

    <div class="container" >

    

    <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Cuisine Africaine</h1>
    </div>

    
    <div class="row">

        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                
                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>

        <div class="text-center " style="margin-top:15px">
            <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">Découvrir Plus de recettes</button>
        </div>
    </div>

     <div class="horizontal-line-receipt" style="margin-bottom: 50px; margin-top:50px;"></div>

    <div style="margin-bottom: 50px;">

    </div>

    <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Cuisine Occidentale</h1>
    </div>

     <div class="row">

        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                
                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>

        <div class="text-center " style="margin-top:15px">
            <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">Découvrir Plus de recettes</button>
        </div>
    </div>

    <div class="horizontal-line-receipt" style="margin-bottom: 50px; margin-top:50px;"></div>

    <div style="margin-bottom: 50px;">

    </div>

    <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Cuisine Exotique</h1>
    </div>

     <div class="row">

        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                
                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>

        <div class="text-center " style="margin-top:15px">
            <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">Découvrir Plus de recettes</button>
        </div>
    </div>
    <div class="horizontal-line-receipt" style="margin-bottom: 50px; margin-top:50px;"></div>

    <div style="margin-bottom: 50px;">

    </div>

    <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Barbecue</h1>
    </div>

     <div class="row">

        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                
                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>
        <div class="col-md-3">
         
            
                <div class="p-1">
                    <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet roti à l'orange
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                </div>
        

        </div>

        <div class="text-center " style="margin-top:15px">
            <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">Découvrir Plus de recettes</button>
        </div>
    </div>
    </div>
</div>

<div class="container" id="receipts-mobile">

    <div class="d-flex flex-row mb-3" id="top-rece">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Recettes les plus consultées</h1>
    </div>
    
     <!-- START CAROUSSEL Top Receipts MOBILE -->
    <div id="carouselTopReceipts" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTopReceipts" data-bs-slide="prev">
            <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTopReceipts" data-bs-slide="next">
            <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div> <!-- END CAROUSSEL  -->

     <div class="horizontal-line-receipt"></div>
    <div class="d-flex flex-row mb-3" style="margin-top:50px;">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Cuisine Africaine</h1>
    </div>

      <!-- START CAROUSSEL Cuisine Africaine MOBILE -->
    <div id="carouselCuisineAfricane" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCuisineAfricane" data-bs-slide="prev">
            <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCuisineAfricane" data-bs-slide="next">
            <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div> <!-- END CAROUSSEL -->

     <div class="horizontal-line-receipt"></div>
    <div class="d-flex flex-row mb-3" style="margin-top:50px;">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Cuisine Occidentale</h1>
    </div>

      <!-- START CAROUSSEL Cuisine Occidentale MOBILE -->
    <div id="carouselCuisineOccidentale" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCuisineOccidentale" data-bs-slide="prev">
            <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCuisineOccidentale" data-bs-slide="next">
            <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div> <!-- END CAROUSSEL  -->

     <div class="horizontal-line-receipt"></div>
    <div class="d-flex flex-row mb-3" style="margin-top:50px;">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Cuisine Exotique</h1>
    </div>

      <!-- START CAROUSSEL Cuisine Exotique MOBILE -->
    <div id="carouselCuisineExotique" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCuisineExotique" data-bs-slide="prev">
            <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCuisineExotique" data-bs-slide="next">
            <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div> <!-- END CAROUSSEL  -->

     <div class="horizontal-line-receipt"></div>
    <div class="d-flex flex-row mb-3" style="margin-top:50px;">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Barbecue</h1>
    </div>

      <!-- START CAROUSSEL Barbecue Africaine MOBILE -->
    <div id="carouselBarbecue" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="p-1">
                                <img src="{{ asset('images/recette1.jpg')}}" style="width:100%"  alt="">
                            </div>

                            <div class="row">
                                <div class="col-9 fs-5 fw-bold">
                                    Poulet roti à l'orange
                                </div>
                                <div class="col-3 text-end" >
                                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <p style="width:100%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBarbecue" data-bs-slide="prev">
            <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBarbecue" data-bs-slide="next">
            <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div> <!-- END CAROUSSEL TESTIMONIALS MOBILE -->


</div>

    <div style="margin-bottom: 50px;"></div>
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
