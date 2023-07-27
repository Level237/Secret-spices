@extends('layouts.app')
@section('title', __('Engagements'))
@section('content')
	<!-- PAGE HERO
			============================================= -->	
			<div id="engagement-page" class="page-hero-section division">
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
												    	<li class="breadcrumb-item active" aria-current="page">Engagements</li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl">Engagements</h2>

							</div>
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- End container --> 
			</div>	<!-- END PAGE HERO -->	

		

        			<!-- MENU-6
			============================================= -->
			<section id="menu-6" class="wide-70 menu-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row" id="environement">	
						<div class="col-lg-10 offset-lg-1">
							<div class="section-title mb-40 text-center">	

								<!-- Text -->	
								<p class="p-xl fs-2 text-black">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
								   primis libero tempus, blandit a cursus varius magna
								</p>
									
							</div>	
						</div>
					</div>


					<div class="row" id="ingredients">

						<div class="row title_environnement mb-20" >
								<h1>{{ __('Environnement') }}</h1>
								<h2 class="horizontal-line-three"></h2>
								
						</div>
						<!-- MENU ITEM #1 -->
						<div class="col-sm-12 col-lg-6">
							
							<!-- Image -->
								<img class="img-fluid" src="{{  asset('images/engagement/BRK_2011_niebe_accir_recolte_01.jpg')}}" alt="menu-image">
						
						</div>	<!-- END MENU ITEM #1 -->


						<!-- MENU ITEM #2 -->
						<div class="col-sm-12 col-lg-6 my-auto">
							 <p class="fs-5 text-black"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sit et iste, nisi esse consequuntur deleniti numquam quae labore voluptatum aperiam pariatur natus porro dolorem corporis? Assumenda qui et illum!Ipsum quisquam, numquam rem iure fugit saepe beatae aliquid ipsa nam sit perspiciatis eius velit iusto quaerat temporibus iste tempore commodi recusandae at inventore error? Dolorem fugit velit repudiandae facere?</p>
							 <p class="fs-5 text-black"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sit et iste, nisi esse consequuntur deleniti numquam quae labore voluptatum aperiam pariatur natus porro dolorem corporis? Assumenda qui et illum!Ipsum quisquam, numquam rem iure fugit saepe beatae aliquid ipsa nam sit perspiciatis eius velit iusto quaerat temporibus iste tempore commodi recusandae at inventore error? Dolorem fugit velit repudiandae facere?</p>
						</div>	<!-- END MENU ITEM #2 -->


					</div>	  <!-- End row -->	
		
				</div>	   <!-- End container -->
			</section>	<!-- END MENU-6 -->
				
			<!-- ABOUT-3
			============================================= -->
			<section id="about-3" class="wide-60 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						


						<!-- ABOUT TEXT -->
						<div class="col-md-7 col-lg-6">
							<div class="about-3-txt mb-40">

								<!-- Title -->	
								<h2 class="h2-sm title_environnement">Poivre blanc de Penja. <br> Meileur Poivre au monde</h2>

								<!-- Text -->
								<p class="p-md fs-5 text-black">Introduit au Cameroun par Antoine Decré, le Poivre blanc de Penja est devenu en 2013 la première Indication
									Géographique Protégée (IGP) du continent africain. Il est devenu le poivre le plus prisé par les grands chefs cuisiniers du monde.
								</p>

								<!-- List -->	
								<ul class="txt-list">

									<li class="list-item">
										<p class="p-md fs-5 text-black">Nos sauces réussissent à allier le piquant du poivre blanc
														de Penja et la douceur du Djanssang 
										</p>
									</li>

									<li class="list-item">
										<p class="p-md fs-5 text-black">« SECRET » se décline en 3 recettes : Sauce Poulet, Sauce
Viande et Sauce Poisson. </p>
									</li>

								

								</ul>

							</div>
						</div>	<!-- END ABOUT TEXT -->	

						<!-- ABOUT IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="about-3-img text-center mb-40">
								<img class="img-fluid" src="{{ asset('images/engagement/poivre-de-penja.jpg')}}" alt="about-image">
							</div>
						</div>


					</div>	   <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-3 -->

			<div class="container" >
				<div class="row title_environnement mb-20">
								<h1>{{ __('Autres Ingrédients') }}</h1>
								<h2 class="horizontal-line-three"></h2>
								
						</div>
			
				<div class="row">


									<!-- MENU ITEM #1 -->
									<div class="col-sm-6 col-lg-3">
										<div class="menu-7-item">

											<!-- IMAGE -->
											<div class="menu-7-img rel">
					
												<!-- Image -->
												<img class="img-fluid" src="{{ asset('images/engagement/oignons2-155448.png')}}" height="300px" alt="menu-image">

												
												

											</div>

											<!-- TEXT -->
											<div class="menu-7-txt rel">

												<!-- Title -->
												<h5 class="h5-sm coffee-color">Oignon</h5>

												


											</div>

										</div>
									</div>	<!-- END MENU ITEM #1 -->


									<!-- MENU ITEM #2 -->
									<div class="col-sm-6 col-lg-3">
										<div class="menu-7-item">

											<!-- IMAGE -->
											<div class="menu-7-img rel">
					
												<!-- Image -->
												<img class="img-fluid" src="{{ asset('images/engagement/ail.png')}}" height="300px" alt="menu-image">

												

												

											</div>

											<!-- TEXT -->
											<div class="menu-7-txt rel">

												<!-- Title -->
												<h5 class="h5-sm coffee-color">Ail</h5>

												

												

											</div>

										</div>
									</div>	<!-- END MENU ITEM #2 -->


									<!-- MENU ITEM #3 -->
									<div class="col-sm-6 col-lg-3">
										<div class="menu-7-item">

											<!-- IMAGE -->
											<div class="menu-7-img rel">
					
												<!-- Image -->
												<img class="img-fluid" src="{{ asset('images/engagement/pebe.png')}}" alt="menu-image">

												

												

											</div>

											<!-- TEXT -->
											<div class="menu-7-txt rel">

												<!-- Title -->
												<h5 class="h5-sm coffee-color">Pebe</h5>

												

												

											</div>

										</div>
									</div>	<!-- END MENU ITEM #3 -->


									<!-- MENU ITEM #4 -->
									<div class="col-sm-6 col-lg-3">
										<div class="menu-7-item">

											<!-- IMAGE -->
											<div class="menu-7-img rel">
					
												<!-- Image -->
												<img class="img-fluid" src="{{ asset('images/engagement/1.png')}}" alt="menu-image">

												

												

											</div>

											<!-- TEXT -->
											<div class="menu-7-txt rel">

												<!-- Title -->
												<h5 class="h5-sm coffee-color">Clou de girofe</h5>

												

												

											</div>

										</div>
									</div>	<!-- END MENU ITEM #4 -->


				</div>  <!-- End row -->
				<div class="row">


								<!-- MENU ITEM #1 -->
								<div class="col-sm-6 col-lg-3">
									<div class="menu-7-item">

										<!-- IMAGE -->
										<div class="menu-7-img rel">
				
											<!-- Image -->
											<img class="img-fluid" src="{{ asset('images/engagement/2.png')}}" alt="menu-image">

											
										

										</div>

										<!-- TEXT -->
										<div class="menu-7-txt rel">

											<!-- Title -->
											<h5 class="h5-sm coffee-color">Poivre blanc</h5>

											

											

										</div>

									</div>
								</div>	<!-- END MENU ITEM #1 -->


								<!-- MENU ITEM #2 -->
								<div class="col-sm-6 col-lg-3">
									<div class="menu-7-item">

										<!-- IMAGE -->
										<div class="menu-7-img rel">
				
											<!-- Image -->
											<img class="img-fluid" src="{{ asset('images/engagement/djansang.png')}}" alt="menu-image">

											

											

										</div>

										<!-- TEXT -->
										<div class="menu-7-txt rel">

											<!-- Title -->
											<h5 class="h5-sm coffee-color">Njanssang</h5>

											

											

										</div>

									</div>
								</div>	<!-- END MENU ITEM #2 -->


								<!-- MENU ITEM #3 -->
								<div class="col-sm-6 col-lg-3">
									<div class="menu-7-item">

										<!-- IMAGE -->
										<div class="menu-7-img rel">
				
											<!-- Image -->
											<img class="img-fluid" src="{{ asset('images/engagement/3.png')}}" alt="menu-image">

										</div>

										<!-- TEXT -->
										<div class="menu-7-txt rel">

											<!-- Title -->
											<h5 class="h5-sm coffee-color">Rondelles</h5>

											

											

										</div>

									</div>
								</div>	<!-- END MENU ITEM #3 -->


								<!-- MENU ITEM #4 -->
								<div class="col-sm-6 col-lg-3">
									<div class="menu-7-item">

										<!-- IMAGE -->
										<div class="menu-7-img rel">
				
											<!-- Image -->
											<img class="img-fluid" src="{{ asset('images/engagement/essesse-ou-quatre-4-cotes.png')}}" alt="menu-image">

											

										

										</div>

										<!-- TEXT -->
										<div class="menu-7-txt rel">

											<!-- Title -->
											<h5 class="h5-sm coffee-color">Quatre cotés</h5>

											

										</div>

									</div>
								</div>	<!-- END MENU ITEM #4 -->


			</div>  <!-- End row -->

			</div>

			<!-- Process de fabrication
			============================================= -->
			<div id="process">

			
			<section id="about-3" class="wide-60 about-section division" style="background-color:#f9f9f9">
				<div class="container">
					<div class="row d-flex align-items-center">

						<!-- ABOUT IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="about-3-img text-center mb-40">
								<img class="img-fluid" src="{{ asset('images/engagement/process-fabrication.jpg')}}"  alt="about-image">
							</div>
						</div>
						


						<!-- ABOUT TEXT -->
						<div class="col-md-7 col-lg-6">
							<div class="about-3-txt mb-40">

								<!-- Title -->	
								<h2 class="h2-sm title_environnement">Processus de Transformation</h2>

								<!-- Text -->
								<p class="p-md fs-5 text-black">Semper lacus cursus porta primis ligula risus tempus and sagittis ipsum mauris lectus laoreet 
								   purus ipsum tempor enim ipsum porta justo integer ultrice aligula lectus aenean magna and pulvinar purus at 
								   pretium	gravida 
								</p>

								<!-- List -->	
								<ul class="txt-list">

									<li class="list-item">
										<p class="p-md fs-5 text-black">Fringilla risus, luctus mauris orci auctor purus euismod pretium
										   purus pretium ligula rutrum tempor sapien
										</p>
									</li>

									<li class="list-item">
										<p class="p-md fs-5 text-black">Quaerat sodales sapien euismod purus blandit</p>
									</li>

									

								</ul>

							</div>
						</div>	<!-- END ABOUT TEXT -->	

						


					</div>	   <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-3 -->
			</div>

@endsection