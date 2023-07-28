@extends('layouts.app')
@section('title', __('Évènements'))
@section('content')
<!-- PAGE HERO
			============================================= -->
<div id="blog-page" class="page-hero-section division">
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
                                            <li class="breadcrumb-item"><a href="demo-1.html">Accueil</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">ÉVÈNEMENTS</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Title -->
                    <h2 class="h2-xl">Nos Évènements</h2>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END PAGE HERO -->



<!-- MENU-6
			============================================= -->
<section id="menu-6" class="wide-70 menu-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-40 text-center">

                    <!-- Title 	-->
                    <h2 class="h2-xl red-color">Très bientôt</h2>

                    <!-- Text -->
                    <p class="p-xl">Les Evenements à ne pas manquer chez Secret Spices
                    </p>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-7 col-12 mb-lg-0 mb-4">

                <!-- Article -->
                <article class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <a href="{{ route('event') }}" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                        <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                            <i class="bx bx-bookmark"></i>
                        </a>
                        <img src="{{ Storage::url($eventPending->images[0]->path) }}" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-4">
                        <div class="d-flex align-items-start ms-4 mt-3">

                            <div style="border: 2px solid red;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px">
                                <div class="fs-2 fw-bold">
                                    <span class="text-primary-spices">{{ $eventPending->date_event->format('d') }}</span>

                                </div>
                                <span class="fs-6 fw-bold">
                                    {{ $eventPending->date_event->format('M') }}
                                </span>

                            </div>

                            <div class="ms-3">
                                <div class="row">

                                    <h2>{{ $eventPending->name_event }}</h2>

                                </div>

                                <div class="flex-nowrap">

                                    {{ $eventPending->description_event }}


                                </div>
                                <div class="mt-10">
                                    <a href="{{ route('contact') }}"> <button type="button" class=" bag-primary text-white fw-bold  px-5 p-3 border border-0">Participer</button></a>
                                </div>

                                {{-- <div class="row">
                                    <span class="text-primary-spices">
                                        {{ __('Lire la suite') }}
                                </span>

                            </div> --}}



                        </div>

                    </div>
            </div>

            </article>
        </div>
        <div class="row mt-25">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-40 text-center">

                    <!-- Title 	-->
                    <h2 class="h2-xl red-color">Autres evenements</h2>

                    <!-- Text -->


                </div>
            </div>
        </div>
        <div class="row">


            <!-- MENU ITEM #1 -->

            @foreach ($otherEvent as $event)
            <div class="col-sm-12 col-lg-6">
                <div class="menu-6-item bg-white">

                    <!-- IMAGE -->
                    <div class="menu-6-img rel">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ Storage::url($event->images[0]->path) }}" alt="menu-image">

                            <!-- Zoom Icon -->
                            <div class="menu-img-zoom ico-25">
                                <a href="{{ Storage::url($event->images[0]->path) }}" class="image-link">
                                    <span class="bi bi-fullscreen"></span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- TEXT -->
                    <div class="menu-6-txt rel">

                        <!-- Rating -->
                        <div class="item-rating">
                            <div class="stars-rating stars-lg">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>

                        <!-- Like Icon -->


                        <!-- Title -->
                        <h5 class="h5-sm">{{ $event->name_event }}</h5>

                        <!-- Description -->
                        <p class="grey-color">{{ $event->description_event }}</p>

                        <!-- Price -->




                        <!-- Add To Cart -->


                    </div>

                </div>
            </div> <!-- END MENU ITEM #1 -->
            @endforeach






        </div> <!-- End row -->


    </div> <!-- End container -->
</section> <!-- END MENU-6 -->
<!-- PAGE PAGINATION
			============================================= -->

@endsection
