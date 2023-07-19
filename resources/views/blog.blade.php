@extends('layouts.app')
@section('title', __('Blog'))
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
												    	<li class="breadcrumb-item active" aria-current="page">Notre Blog</li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl">Articles du blog</h2>

							</div>
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- End container --> 
			</div>	<!-- END PAGE HERO -->	




			<!-- BLOG POSTS LISTING
			============================================= -->
			<section id="blog-listing" class="wide-60 blog-page-section division">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 offset-xl-1">


							<!-- BLOG POST #1 --> 
							<div class="blog-post">
								<div class="row">
									
									<!-- BLOG POST IMAGE -->
						 			<div class="col-lg-8 blog-post-img">
						 				<div class="hover-overlay"> 
											<img class="img-fluid" src="images/blog/img-08.jpg" alt="blog-post-image">
										</div>	
									</div>

									<!-- BLOG POST TEXT -->
									<div class="col-lg-4 blog-post-txt">

										<!-- Post Link -->
										<h4 class="h4-xs"><a href="single-post.html">Quaerat neque purus ipsum a neque dolor</a></h4>

										<!-- Post Text -->
										<p class="grey-color">
										   Aliqum  mullam blandit tempor at sapien gravida donec ipsum justo lectus aenean magna...
										</p>

										<!-- Post Meta -->
										<div class="blog-post-meta grey-color">
											<span><i class="fas fa-comment"></i> 15</span>
											<span><i class="fas fa-heart"></i> 8</span>							
										</div>

									</div>	<!-- END BLOG POST TEXT -->

								</div>   <!-- End row -->
							</div>	<!-- END BLOG POST #1 -->


							<!-- BLOG POSTS CATEGORY --> 
							<h5 class="h5-xl posts-category">Articles Récents</h5>


							<!-- BLOG POSTS HOLDER -->
						 	<div class="row">


						 		<!-- BLOG POST #2 -->
						 		<div class="col-md-6 col-lg-4">
						 			<div id="sp-2-1" class="blog-post">

						 				<!-- BLOG POST IMAGE -->
							 			<div class="blog-post-img">
							 				<div class="hover-overlay"> 
												<img class="img-fluid" src="images/blog/img-01.jpg" alt="blog-post-image">
											</div>	
										</div>

						 				<!-- BLOG POST TITLE -->
										<div class="blog-post-txt">

											<!-- Post Title -->
											<h5 class="h5-lg"><a href="single-post.html">Quaerat neque purus ipsum neque dolor</a></h5>

											<!-- Post Text -->
											<p class="grey-color">Quaerat neque purus ipsum neque dolor primis tempus impedit</p>

											<!-- Post Meta -->
											<div class="blog-post-meta grey-color">
												<span><i class="fas fa-comment"></i> 3</span>
												<span><i class="fas fa-heart"></i> 11</span>							
											</div>

										</div>

									</div>
						 		</div>	<!-- END  BLOG POST #1 -->


						 		<!-- BLOG POST #3 -->
						 		<div class="col-md-6 col-lg-4">
						 			<div id="sp-2-2" class="blog-post">

						 				<!-- BLOG POST IMAGE -->
							 			<div class="blog-post-img">
							 				<div class="hover-overlay"> 
												<img class="img-fluid" src="images/blog/img-02.jpg" alt="blog-post-image">
											</div>	
										</div>

						 				<!-- BLOG POST TEXT -->
										<div class="blog-post-txt">

											<!-- Post Title -->
											<h5 class="h5-lg"><a href="single-post.html">Tempor blandit sapien at gravida donec ipsum</a></h5>

											<!-- Post Text -->
											<p class="grey-color">Neque dolor primis libero tempus impedit tempor sapien gravida</p>

											<!-- Post Meta -->
											<div class="blog-post-meta grey-color">
												<span><i class="fas fa-comment"></i> 7</span>
												<span><i class="fas fa-heart"></i> 15</span>							
											</div>

										</div>

									</div>
						 		</div>	<!-- END  BLOG POST #2 -->


						 		<!-- BLOG POST #4 -->
						 		<div class="col-md-6 col-lg-4">
						 			<div id="sp-2-3" class="blog-post">

						 				<!-- BLOG POST IMAGE -->
							 			<div class="blog-post-img">
							 				<div class="hover-overlay"> 
												<img class="img-fluid" src="images/blog/img-03.jpg" alt="blog-post-image">
											</div>	
										</div>

						 				<!-- BLOG POST TEXT -->
										<div class="blog-post-txt">

											<!-- Post Title -->
											<h5 class="h5-lg"><a href="single-post.html">Neque dolor primis a libero tempus a tempor</a></h5>

											<!-- Post Text -->
											<p class="grey-color">Impedit tempor at donec sapien ipsum a neque dolor primis libero</p>

											<!-- Post Meta -->
											<div class="blog-post-meta grey-color">
												<span><i class="fas fa-comment"></i> 8</span>
												<span><i class="fas fa-heart"></i> 13</span>							
											</div>

										</div>

									</div>
						 		</div>	<!-- END  BLOG POST #3 -->


							</div>	<!-- END BLOG POSTS HOLDER -->


							<!-- BLOG POSTS CATEGORY --> 
							<h5 class="h5-xl posts-category">Articles Populaires</h5>


							<!-- BLOG POST #5 --> 
							<div class="blog-post b-bottom">
								<div class="row">
								
									<!-- BLOG POST IMAGE -->
						 			<div class="col-lg-8 blog-post-img">
						 				<div class="hover-overlay"> 
											<img class="img-fluid" src="images/blog/img-09.jpg" alt="blog-post-image">
										</div>	
									</div>

									<!-- BLOG POST TEXT -->
									<div class="col-lg-4 blog-post-txt">

										<!-- Post Link -->
										<h4 class="h4-xs">
											<a href="single-post.html">At ultrice ligula tempus auctor ipsum mauris</a>
										</h4>

										<!-- Post Text -->
										<p class="grey-color">
										   Aliqum  mullam blandit tempor a sapien and gravida donec at justo sapien gravida donec ipsum...
										</p>

										<!-- Post Meta -->
										<div class="blog-post-meta grey-color">
											<span><i class="fas fa-comment"></i> 6</span>
											<span><i class="fas fa-heart"></i> 20</span>							
										</div>

									</div>	<!-- END BLOG POST TEXT -->

								</div>   <!-- End row -->
							</div>	<!-- END BLOG POST #5 -->


							<!-- BLOG POST #6 --> 
							<div class="blog-post">
								<div class="row">
								
									<!-- BLOG POST IMAGE -->
						 			<div class="col-lg-8 blog-post-img">
						 				<div class="hover-overlay"> 
											<img class="img-fluid" src="images/blog/img-10.jpg" alt="blog-post-image">
										</div>	
									</div>

									<!-- BLOG POST TEXT -->
									<div class="col-lg-4 blog-post-txt">

										<!-- Post Link -->
										<h4 class="h4-xs">
											<a href="single-post.html">Donec ipsum porta justo velna vitae </a>
										</h4>

										<!-- Post Text -->
										<p class="grey-color">
										   Aliqum  mullam blandit tempor a sapien and gravida donec at justo sapien gravida donec ipsum...
										</p>

										<!-- Post Meta -->
										<div class="blog-post-meta grey-color">
											<span><i class="fas fa-comment"></i> 13</span>
											<span><i class="fas fa-heart"></i> 8</span>							
										</div>

									</div>	<!-- END BLOG POST TEXT -->

								</div>   <!-- End row -->
							</div>	<!-- END BLOG POST #6 -->


						</div>
					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END BLOG POSTS LISTING -->




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