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


            <!-- MENU ITEM #1 -->

            <div class="col-lg-3"></div>
            <div class="col-sm-12 col-lg-8">
                <div class="menu-6-item bg-white">

                    <!-- IMAGE -->
                    <div class="menu-6-img rel">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ Storage::url($eventPending->images[0]->path) }}" alt="menu-image">

                            <!-- Zoom Icon -->
                            <div class="menu-img-zoom ico-25">
                                <a href="{{ Storage::url($eventPending->images[0]->path) }}" class="image-link">
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


                        <!-- Title -->
                        <h5 class="h5-sm">{{ $eventPending->name_event }}</h5>

                        <!-- Description -->
                        <p class="grey-color">{{ $eventPending->description_event }}</p>
                        {{ $eventPending->date_event->format('d M Y') }}
                        <!-- Price -->
                        {{-- <div class="menu-6-price bg-coffee" style="background-color:#c70609;">
                            <h5 class="h5-xs yellow-color text-white">En Savoir Plus</h5>
                        </div> --}}

                        <!-- Add To Cart -->
                        <div class="add-to-cart bg-yellow ico-10">
                            <a href="{{ route('contact') }}"><span class="fa fa-calendar"></span> Participer</a>
                        </div>

                    </div>

                </div>
            </div> <!-- END MENU ITEM #1 -->





        </div> <!-- End row -->
        <div class="row">
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

                        {{ $event->date_event->format('d M Y') }}


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
