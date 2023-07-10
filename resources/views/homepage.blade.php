@extends('layouts.app')
@section('title', __('Secret Spices'))
@section('content')


<!-- HERO-6
			============================================= -->
<section id="hero-6" class="hero-section division">


    <!-- SLIDER -->
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
                                        Faciliter la cuisine <br> avec des assaisonnements <br> déjà prêts.
                                    </h5>




                                </div>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- End container -->
                </div> <!-- End Image Caption -->

            </li> <!-- END SLIDE #1 -->
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
    <div class="container d-sm-none d-lg-block d-md-block">
        <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Nos idées de recettes faciles</h1>
        </div>

        <div class="row d-flex align-items-center mb-4">


            <!-- PROMO IMAGE-1 -->
            <div class="col-md-4">
                <a href="menu-3.html">


                    <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                    <div class="row mt-3">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-6">
                            <span class="text-center fs-5 fw-normal">Poulet roti à l'orange et aux epinards</span>
                        </div>
                    </div>

                </a>
            </div>


            <!-- PROMO IMAGE-2 -->
            <div class="col-md-4">
                <a href="menu-3.html">


                    <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                    <div class="row mt-3">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-6">
                            <span class="text-center fs-5 fw-normal">Poulet roti à l'orange et aux epinards</span>
                        </div>
                    </div>

                </a>
            </div>


            <!-- PROMO IMAGE-3 -->
            <div class="col-md-4">
                <a href="menu-3.html">


                    <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                    <div class="row mt-3">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-6">
                            <span class="text-center fs-5 fw-normal">Poulet roti à l'orange et aux epinards</span>
                        </div>
                    </div>

                </a>
            </div>


            <!-- PROMO IMAGE-4 -->


        </div> <!-- End row -->


    </div> <!-- End container -->

    <div class="d-lg-none d-md-none d-block">
        <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> Nos idées de recettes faciles</h1>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide ms-5 mr-50">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/recette1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/recette1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/recette1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</div> <!-- END PROMO-3 -->
<div class="text-center " style="margin-top:60px">
    <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">Découvrir Plus de recettes</button>

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

<section class="container" style="margin-top:60px">
    <div class="row align-items-center">
        <div class="col-6  d-lg-block d-none">
            <img src="{{ asset('images/gamme.png') }}" class="img-fluid" alt="spices">
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="d-flex flex-row">
                <div class="vertical-line align-middle"></div>
                <h2 class="ms-2 fs-1"> Une large gamme <br> des épices secret</h2>

            </div>
            <div class="row mt-10">
                <div class="col-12">
                    <span class="fs-5">
                        Lorem ipsum dolor sit amet,consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.Ut enim ad minim veniam,quis nostrud
                        aliquip ex ea commodo consequat.
                    </span>

                </div>
            </div>
            <div class="row mt-20">

                <div class="">

                    <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">Découvrir Nos Produits</button>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-gray-spices mt-100" style="padding-bottom:45px;padding-top:45px">

    <div class="ms-4 mr-40  border p-5">

        <div class="ms-1">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="d-flex flex-row">
                        <div class="vertical-line-secondary align-middle"></div>
                        <h3 class="ms-2 fs-1">Découvrez <br>
                            notre programme<br>
                            pour une agriculture<br>
                            regénératrice</h3>

                    </div>
                    <div class="row ms-3">
                        <div class="col-12">
                            <span class="fs-5 ubuntu_regular">
                                Lorem ipsum dolor sit amet,consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.Ut enim ad minim veniam,quis nostrud
                                aliquip ex ea commodo consequat.
                            </span>

                        </div>
                    </div>
                    <div class="row ms-3">
                        <div class="col-6 mt-3 col-sm-12 col-md-12">



                            <button type="button" class="  bg-secondary-spices text-primary-spices fw-bold fs-5 px-5 p-3 border border-0">En Savoir Plus</button>
                        </div>
                    </div>
                </div>
                <div class="col-7 d-lg-block d-none">
                    <img src="{{ asset('images/engagement.jpg') }}" class="img-fluid" alt="spices">
                </div>
            </div>

        </div>
    </div>

</section>

























<!-- START CAROUSSEL TESTIMONIALS -->

<div class="carousel-inner">

    <div class="container" style="margin-top: 70px">

        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Title 	-->
                    <h2 class="fs-1 red-color testimonial-title font-costyle">Nous Adorons Secret Spices</h2>

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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
                                <img src="images/testimonial-1.png" class="author-picture" alt="testimonial-avatar">

                                <!-- Author name -->
                                <p class="author-title">Mama Yvonne
                                </p>

                                <!-- Text -->
                                <p class="author-testimonial">" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor
                                    egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "
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
    <section id="blog-1" class="wide-60 blog-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Title 	-->
                        <h2 class="h2-xl red-color">Événements & Restauration</h2>

                        <!-- Text -->
                        <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                            primis libero tempus, blandit a cursus varius magna
                        </p>

                    </div>
                </div>
            </div>


            <!-- BLOG POSTS HOLDER -->
            <div class="row">


                <!-- BLOG POST #1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="images/blog/caravane.jpg" alt="blog-post-image">
                            </div>
                        </div>

                        <!-- BLOG POST TITLE -->
                        <div class="blog-post-txt">

                            <!-- Post Title -->
                            <h5 class="h5-lg coffee-color"><a href="single-post.html">Secret à New Deido</a></h5>

                            <!-- Post Text -->
                            <p class="grey-color">Quaerat neque purus ipsum neque dolor primis tempus impedit</p>

                        </div>

                    </div>
                </div> <!-- END  BLOG POST #1 -->


                <!-- BLOG POST #2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="images/blog/caravane.jpg" alt="blog-post-image">
                            </div>
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Title -->
                            <h5 class="h5-lg coffee-color"><a href="single-post.html">Secret à Bonamoussadi</a></h5>

                            <!-- Post Text -->
                            <p class="grey-color">Neque dolor primis libero tempus impedit tempor sapien gravida</p>

                        </div>

                    </div>
                </div> <!-- END  BLOG POST #2 -->


                <!-- BLOG POST #3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="images/blog/caravane.jpg" alt="blog-post-image">
                            </div>
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Title -->
                            <h5 class="h5-lg coffee-color"><a href="single-post.html">Secret au marché de PK14</a></h5>

                            <!-- Post Text -->
                            <p class="grey-color">Impedit tempor at donec sapien ipsum a neque dolor primis libero</p>

                        </div>

                    </div>
                </div> <!-- END  BLOG POST #3 -->


            </div> <!-- END BLOG POSTS HOLDER -->


        </div> <!-- End container -->
    </section> <!-- END BLOG-1 -->


    <!-- ABOUT-7
			============================================= -->
    <section id="about-7" class="bg-05 about-section division">
        <div class="container white-color">
            <div class="abox-4-wrapper ico-80">
                <div class="row d-flex align-items-center">


                    <!-- BANNER TEXT -->
                    <div class="col-md-7 col-lg-6">
                        <div class="banner-3-txt coffee-color">

                            <!-- Title  -->
                            <h4 class="h4-xl color-white" style="color: #fff">Téléchargez l'application mobile et</h4>
                            <h2 class="color-white" style="color: #fff">accèdez à nos recettes</h2>

                            <!-- Text -->
                            <p class="p-md" style="color: #fff">Aliquam a augue suscipit, luctus neque purus ipsum and neque dolor primis libero tempus,
                                blandit varius
                            </p>

                            <!-- Store Badges -->
                            <div class="stores-badge">

                                <!-- AppStore -->
                                <a href="#" class="store">
                                    <img class="appstore-original" src="images/appstore.png" alt="appstore-logo">
                                </a>

                                <!-- Google Play -->
                                <a href="#" class="store">
                                    <img class="googleplay-original" src="images/googleplay.png" alt="googleplay-logo">
                                </a>

                            </div>

                        </div>
                    </div>


                    <!-- BANNER IMAGE -->
                    <div class="col-md-5 col-lg-6">
                        <div class="banner-3-img">
                            <img class="img-fluid" src="images/e-shop.png" alt="banner-image">
                        </div>
                    </div>


                </div> <!-- End row -->
            </div>
        </div> <!-- End container -->
    </section> <!-- END ABOUT-7 -->




    <!-- CONTACTS-3
			============================================= -->
    <section id="contacts-3" class="bg-fixed wide-60 contacts-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Title 	-->
                        <h2 class="h2-xl red-color">NOS POINTS DE VENTES</h2>

                        <!-- Text -->
                        <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                            primis libero tempus, blandit a cursus varius magna
                        </p>

                    </div>
                </div>
            </div>


            <div class="row">


                <!-- LOCATION-1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-3 text-center">

                        <!-- Image -->
                        <div class="hover-overlay">
                            <img class="img-fluid" src="images/location-1.jpg" alt="location-image">
                        </div>

                        <!-- Text -->
                        <div class="cbox-3-txt">

                            <!-- Location -->
                            <h5 class="h5-xl red-color">Downtown</h5>

                            <!-- Phone -->
                            <h6 class="h6-xl coffee-color">Phone: <span><a href="tel:123456789">789-654-3210</a></span></h6>

                            <!-- Address -->
                            <h6 class="h6-lg mt-20 coffee-color">Address</h6>
                            <p class="grey-color">8721 M Central Avenue,</p>
                            <p class="grey-color">Los Angeles, CA 90036</p>

                            <!-- Working Hours -->
                            <p class="grey-color">Daily 11AM - 10PM</p>

                        </div>

                    </div>
                </div>


                <!-- LOCATION-2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-3 text-center">

                        <!-- Image -->
                        <div class="hover-overlay">
                            <img class="img-fluid" src="images/location-2.jpg" alt="location-image">
                        </div>

                        <!-- Text -->
                        <div class="cbox-3-txt">

                            <!-- Location -->
                            <h5 class="h5-xl red-color">Central City</h5>

                            <!-- Phone -->
                            <h6 class="h6-xl coffee-color">Phone: <span><a href="tel:123456789">789-456-0123</a></span></h6>

                            <!-- Address -->
                            <h6 class="h6-lg mt-20 coffee-color">Address</h6>
                            <p class="grey-color">148 D Central Avenue,</p>
                            <p class="grey-color">Los Angeles, CA 90012</p>

                            <!-- Working Hours -->
                            <p class="grey-color">Daily 11AM - 10PM</p>

                        </div>

                    </div>
                </div>


                <!-- LOCATION-3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-3 text-center">

                        <!-- Image -->
                        <div class="hover-overlay">
                            <img class="img-fluid" src="images/location-3.jpg" alt="location-image">
                        </div>

                        <!-- Text -->
                        <div class="cbox-3-txt">

                            <!-- Location -->
                            <h5 class="h5-xl red-color">Hollywood</h5>

                            <!-- Phone -->
                            <h6 class="h6-xl coffee-color">Phone: <span><a href="tel:123456789">789-645-0123</a></span></h6>

                            <!-- Address -->
                            <h6 class="h6-lg mt-20 coffee-color">Address</h6>
                            <p class="grey-color">678 W Hollywood Way,</p>
                            <p class="grey-color">Burbank CA 91505</p>

                            <!-- Working Hours -->
                            <p class="grey-color">Daily 10AM - 10PM</p>

                        </div>

                    </div>
                </div>

            </div> <!-- End row -->


        </div> <!-- End container -->
    </section> <!-- END CONTACTS-3 -->

    @endsection
