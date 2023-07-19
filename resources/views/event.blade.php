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
					</div>	  <!-- End row -->
				</div>	   <!-- End container --> 
			</div>	<!-- END PAGE HERO -->	

		<!-- SECTION TITLE -->	
					<div class="row mt-60">	
						<div class="col-lg-10 offset-lg-1">
							<div class="section-title mb-40 text-center">	

								<!-- Title 	-->	
								<h2 class="h2-xl red-color">Les plus populaires</h2>	

								<!-- Text -->	
								<p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
								   primis libero tempus, blandit a cursus varius magna
								</p>
									
							</div>	
						</div>
					</div>
        <!-- Blog Events -->
        <section class="container mb-5 py-lg-5 d-lg-block d-none">

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

        			<!-- MENU-6
			============================================= -->
			<section id="menu-6" class="wide-70 menu-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1">
							<div class="section-title mb-60 text-center">	

								<!-- Title 	-->	
								<h2 class="h2-xl red-color">Très bientôt</h2>	

								<!-- Text -->	
								<p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
								   primis libero tempus, blandit a cursus varius magna
								</p>
									
							</div>	
						</div>
					</div>


					<div class="row">


						<!-- MENU ITEM #1 -->
						<div class="col-sm-12 col-lg-6">
							<div class="menu-6-item bg-white">

								<!-- IMAGE -->
								<div class="menu-6-img rel">
									<div class="hover-overlay">

										<!-- Image -->
										<img class="img-fluid" src="images/offer-1.jpg" alt="menu-image">

										<!-- Zoom Icon -->
										<div class="menu-img-zoom ico-25">
											<a href="images/offer-1.jpg" class="image-link">
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
									<div class="like-ico ico-25">
										<a href="#"><span class="fa fa-heart"></span></a>
									</div>

									<!-- Title -->
									<h5 class="h5-sm">Event 1</h5>

									<!-- Description -->	
									<p class="grey-color">Chicken breast, chilli sauce, tomatoes, pickles, coleslaw</p>

									<!-- Price -->
									<div class="menu-6-price bg-coffee" style="background-color:#c70609;">
										<h5 class="h5-xs yellow-color text-white" >En Savoir Plus</h5>
									</div>

									<!-- Add To Cart -->
									<div class="add-to-cart bg-yellow ico-10">
										<a href="product-single.html"><span class="fa fa-calendar"></span> Participer</a>
									</div>

								</div>

							</div>
						</div>	<!-- END MENU ITEM #1 -->


						<!-- MENU ITEM #2 -->
						<div class="col-sm-12 col-lg-6">
							<div class="menu-6-item bg-white">

								<!-- IMAGE -->
								<div class="menu-6-img rel">
									<div class="hover-overlay">

										<!-- Image -->
										<img class="img-fluid" src="images/offer-2.jpg" alt="menu-image">	

										<!-- Zoom Icon -->
										<div class="menu-img-zoom ico-25">
											<a href="images/offer-2.jpg" class="image-link">
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
											<i class="far fa-star"></i>
										</div>		
									</div>

									<!-- Like Icon -->
									<div class="like-ico ico-25">
										<a href="#"><span class="fa fa-heart"></span></a>
									</div>

									<!-- Title -->
									<h5 class="h5-sm">Event 2</h5>

									<!-- Description -->	
									<p class="grey-color">House beef patty, cheddar cheese, bacon, onion, mustard</p>

									<!-- Price -->
									<div class="menu-6-price bg-coffee" style="background-color:#c70609;">
										<h5 class="h5-xs yellow-color text-white" >En Savoir Plus</h5>
									</div>

									<!-- Add To Cart -->
									<div class="add-to-cart bg-yellow ico-10">
										<a href="product-single.html"><span class="fa fa-calendar"></span> Participer</a>
									</div>

								</div>

							</div>
						</div>	<!-- END MENU ITEM #2 -->


					</div>	  <!-- End row -->	

					<div class="row">


						<!-- MENU ITEM #1 -->
						<div class="col-sm-12 col-lg-6">
							<div class="menu-6-item bg-white">

								<!-- IMAGE -->
								<div class="menu-6-img rel">
									<div class="hover-overlay">

										<!-- Image -->
										<img class="img-fluid" src="images/offer-3.jpg" alt="menu-image">

										<!-- Zoom Icon -->
										<div class="menu-img-zoom ico-25">
											<a href="images/offer-3.jpg" class="image-link">
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
									<div class="like-ico ico-25">
										<a href="#"><span class="fa fa-heart"></span></a>
									</div>

									<!-- Title -->
									<h5 class="h5-sm">Event 3</h5>

									<!-- Description -->	
									<p class="grey-color">Chicken breast, chilli sauce, tomatoes, pickles, coleslaw</p>

									<!-- Price -->
									<div class="menu-6-price bg-coffee" style="background-color:#c70609;">
										<h5 class="h5-xs yellow-color text-white" >En Savoir Plus</h5>
									</div>

									<!-- Add To Cart -->
									<div class="add-to-cart bg-yellow ico-10">
										<a href="product-single.html"><span class="fa fa-calendar"></span> Participer</a>
									</div>

								</div>

							</div>
						</div>	<!-- END MENU ITEM #1 -->


						<!-- MENU ITEM #2 -->
						<div class="col-sm-12 col-lg-6">
							<div class="menu-6-item bg-white">

								<!-- IMAGE -->
								<div class="menu-6-img rel">
									<div class="hover-overlay">

										<!-- Image -->
										<img class="img-fluid" src="images/offer-4.jpg" alt="menu-image">	

										<!-- Zoom Icon -->
										<div class="menu-img-zoom ico-25">
											<a href="images/offer-4.jpg" class="image-link">
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
											<i class="far fa-star"></i>
										</div>		
									</div>

									<!-- Like Icon -->
									<div class="like-ico ico-25">
										<a href="#"><span class="fa fa-heart"></span></a>
									</div>

									<!-- Title -->
									<h5 class="h5-sm">Event 4</h5>

									<!-- Description -->	
									<p class="grey-color">House beef patty, cheddar cheese, bacon, onion, mustard</p>

									<!-- Price -->
									<div class="menu-6-price bg-coffee" style="background-color:#c70609;">
										<h5 class="h5-xs yellow-color text-white" >En Savoir Plus</h5>
									</div>

									<!-- Add To Cart -->
									<div class="add-to-cart bg-yellow ico-10">
										<a href="product-single.html"><span class="fa fa-calendar"></span> Participer</a>
									</div>

								</div>

							</div>
						</div>	<!-- END MENU ITEM #2 -->


					</div>	  <!-- End row -->	

					<div class="row">


						<!-- MENU ITEM #1 -->
						<div class="col-sm-12 col-lg-6">
							<div class="menu-6-item bg-white">

								<!-- IMAGE -->
								<div class="menu-6-img rel">
									<div class="hover-overlay">

										<!-- Image -->
										<img class="img-fluid" src="images/offer-5.jpg" alt="menu-image">

										<!-- Zoom Icon -->
										<div class="menu-img-zoom ico-25">
											<a href="images/offer-5.jpg" class="image-link">
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
									<div class="like-ico ico-25">
										<a href="#"><span class="fa fa-heart"></span></a>
									</div>

									<!-- Title -->
									<h5 class="h5-sm">Event 5</h5>

									<!-- Description -->	
									<p class="grey-color">Chicken breast, chilli sauce, tomatoes, pickles, coleslaw</p>

									<!-- Price -->
									<div class="menu-6-price bg-coffee" style="background-color:#c70609;">
										<h5 class="h5-xs yellow-color text-white" >En Savoir Plus</h5>
									</div>

									<!-- Add To Cart -->
									<div class="add-to-cart bg-yellow ico-10">
										<a href="product-single.html"><span class="fa fa-calendar"></span> Participer</a>
									</div>

								</div>

							</div>
						</div>	<!-- END MENU ITEM #1 -->


						<!-- MENU ITEM #2 -->
						<div class="col-sm-12 col-lg-6">
							<div class="menu-6-item bg-white">

								<!-- IMAGE -->
								<div class="menu-6-img rel">
									<div class="hover-overlay">

										<!-- Image -->
										<img class="img-fluid" src="images/offer-6.jpg" alt="menu-image">	

										<!-- Zoom Icon -->
										<div class="menu-img-zoom ico-25">
											<a href="images/offer-6.jpg" class="image-link">
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
											<i class="far fa-star"></i>
										</div>		
									</div>

									<!-- Like Icon -->
									<div class="like-ico ico-25">
										<a href="#"><span class="fa fa-heart"></span></a>
									</div>

									<!-- Title -->
									<h5 class="h5-sm">Event 6</h5>

									<!-- Description -->	
									<p class="grey-color">House beef patty, cheddar cheese, bacon, onion, mustard</p>

									<!-- Price -->
									<div class="menu-6-price bg-coffee" style="background-color:#c70609;">
										<h5 class="h5-xs yellow-color text-white" >En Savoir Plus</h5>
									</div>

									<!-- Add To Cart -->
									<div class="add-to-cart bg-yellow ico-10">
										<a href="product-single.html"><span class="fa fa-calendar"></span> Participer</a>
									</div>

								</div>

							</div>
						</div>	<!-- END MENU ITEM #2 -->


					</div>	  <!-- End row -->	
				</div>	   <!-- End container -->
			</section>	<!-- END MENU-6 -->
				<!-- PAGE PAGINATION
			============================================= -->
			<div class="bg-color-01 page-pagination division">
				<div class="container">
					<div class="row">	
						<div class="col-md-12">

							<nav aria-label="Page navigation">
								<ul class="pagination justify-content-center">
									<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
								    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">4</a></li>
								    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>	
							</nav>					

						</div>
					</div>  <!-- End row -->	
				</div> <!-- End container -->
			</div>	<!-- END PAGE PAGINATION -->
@endsection