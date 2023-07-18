@extends('layouts.app')
@section('title', __('Nos Recettes'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
 </div>

 <div class="container" style="margin-top: 50px;">
     <div class="row justify-content-center product-title">
         <h1>Recettes</h1>
          <h2 class="horizontal-line-two"></h2>
         <p class="fs-5 ">
            Parce que viande blanche, viande rouge et poisson
            ne s’assaisonnent pas de la même façon, «Secret»
            se décline en 3 produits specifiques qui nous permettent de realiser plusieurs repas africains, europeens, exotiques et des barbecues. </p>
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
                 <img src="{{ asset('images/poulet DG.jpg')}}" style="width: 300px ; height:250px"  alt="">
            </div>

            <div class="p-1 d-flex flex-row justify-content-between align-items-center">
                 <div class="fs-5 fw-bold">
                    POULET DG
                 </div>
                 <div>
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                 </div>

            </div>

            <div class="p-1">
                <p style="width: 300px;" class="fs-6 fw-normal">
                    <b><i style="color: #c70609">Pour 6 personnes</i></b> <br>
                    <b>Préparation</b> : 20 min <br>
                    <b>Cuisson</b> : 40 à 45 min
                </p>
            </div>


        </div>
        <div class="p-3 d-flex flex-column">

            <div class="p-1">
                 <img src="{{ asset('images/Folon.png')}}" style="width: 300px; height:260px"  alt="">
            </div>

            <div class="p-1 d-flex flex-row justify-content-between align-items-center">
                 <div class="fs-5 fw-bold">
                    FOLON Sauté
                 </div>
                 <div>
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                 </div>

            </div>

            <div class="p-1">
                <p style="width: 300px;" class="fs-6 fw-normal">
                    <b><i style="color: #c70609">Pour 5 personnes</i></b> <br>
                    <b>Préparation</b> : 30 min <br>
                    <b>Cuisson</b> :  45 min
                </p>
            </div>

        </div>

        <div class="p-3 d-flex flex-column">

            <div class="p-1">
                 <img src="{{ asset('images/maquereau grille.jpg')}}" style="width: 300px; height:250px"  alt="">
            </div>

            <div class="p-1 d-flex flex-row justify-content-between align-items-center">
                 <div class="fs-5 fw-bold">
                    Maquereau grillé et purée de patate
                 </div>
                 <div>
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                 </div>

            </div>

            <div class="p-1">
                <p style="width: 300px;" class="fs-6 fw-normal">
                    <b><i style="color: #c70609">Pour 4 personnes</i></b> <br>
                    <b>Préparation</b> : 20 min <br>
                    <b>Cuisson</b> : 40 min
                </p>
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
                    <img src="{{ asset('images/fufu.jpg')}}" style="width:100%; height:250px"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Fufu & sauce pistache
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>


                <div class="p-1">
                    <p style="width: 300px;" class="fs-6 fw-normal">
                        <b><i style="color: #c70609">Pour 5 personnes</i></b> <br>
                        <b>Préparation</b> : 45 min <br>
                        <b>Cuisson</b> :30 min
                    </p>
                </div>


        </div>
        <div class="col-md-3">


                <div class="p-1">
                    <img src="{{ asset('images/rizsaute.png')}}" style="width:100%; height:250px"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Riz cantonais
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width: 300px;" class="fs-6 fw-normal">
                        <b><i style="color: #c70609">Pour 2 personnes</i></b> <br>
                        <b>Préparation</b> : 15 min <br>
                        <b>Cuisson</b> : 30 min
                    </p>
                </div>


        </div>
        <div class="col-md-3">


                <div class="p-1">
                    <img src="{{ asset('images/pouletsauceverte.jpg')}}" style="width:100%; height:250px"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Poulet à la sauce verte
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width: 300px;" class="fs-6 fw-normal">
                        <b><i style="color: #c70609">Pour 3 personnes</i></b> <br>
                        <b>Préparation</b> : 20 min <br>
                        <b>Cuisson</b> : 40 min
                    </p>
                </div>


        </div>
        <div class="col-md-3">


                <div class="p-1">
                    <img src="{{ asset('images/boulettes.jpg')}}" style="width:100%; height:250px"  alt="">
                </div>

                <div class="row">
                    <div class="col-9 fs-5 fw-bold">
                        Boulettes de viandes
                    </div>
                    <div class="col-3 text-end" >
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>

                <div class="p-1">
                    <p style="width: 300px;" class="fs-6 fw-normal">
                        <b><i style="color: #c70609">Pour 6 personnes</i></b> <br>
                        <b>Préparation</b> : 30 min <br>
                        <b>Cuisson</b> : 40 min
                    </p>
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
    <div class="row justify-content-center" style="background-image:url('/images/bg-opacity.png');">
         <div class="col-8">
             <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%;"  controls>
                    <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
            </video>
        </div>
        
    </div>
</section>




    @endsection
