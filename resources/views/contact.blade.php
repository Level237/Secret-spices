@extends('layouts.app')
@section('title', __('Nous Contacter'))
@section('content')
 <!-- PAGE HERO
	============================================= -->	
	<div id="contacts-page" class="page-hero-section division">
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
												    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
												    	<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl">Contact Us</h2>

							</div>
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- End container --> 
			</div>	<!-- END PAGE HERO -->	
    			<!-- CONTACTS-5
			============================================= -->
			<section id="contacts-5" class="wide-80 contacts-section division">	
				<div class="container">


					<!-- CONTACT INFO
					============================================= -->
					<div class="row">
						<div class="col-xl-10 offset-xl-1">
							<div class="row">	


								<!-- LOCATION -->
								<div class="col-md-4">
									<div class="cbox-5">
									
										<!-- Title -->
										<h5 class="h5-lg">Location</h5>

										<!-- Address -->
										<p class="p-md">8721 M Central Avenue,</p>
										<p class="p-md">Los Angeles, CA 90036,</p>  
										<p class="p-md">United States</p>

									</div>
								</div>


								<!-- QUICK CONTACTS -->
								<div class="col-md-4">
									<div class="cbox-5">
									
										<!-- Title -->
										<h5 class="h5-lg">Working Hours</h5>

										<!-- Text -->
										<p class="p-md">Mon-Fri: 9:00AM - 10:00PM</p>
										<p class="p-md">Saturday: 10:00AM - 8:30PM</p>
										<p class="p-md">Sunday: 12:00PM - 5:00PM</p>

									</div>
								</div>


								<!-- WORKING HOURS -->
								<div class="col-md-4">
									<div class="cbox-5">
									
										<!-- Title -->	
										<h5 class="h5-lg">Working Hours</h5>

										<!-- Title -->	
										<p class="p-md">P: +12 3 3456 7890</p>
										<p class="p-md">F: +12 9 8765 4321</p>
										<p class="p-md">E: <a href="mailto:yourdomain@mail.com" class="yellow-color">hello@yourdomain.com</a></p>

									</div>
								</div>


							</div>
			 			</div>
				 	</div>	<!-- END CONTACT INFO -->



					<!-- GOOGLE MAP
					============================================= -->
					<div class="row">
				 		<div class="col-md-12">
					 		<div id="gmap">
								<div class="google-map">
						 			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.838357620288!2d144.95358331497258!3d-37.81725497975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2zMTIxIEtpbmcgU3QsIE1lbGJvdXJuZSBWSUMgMzAwMCwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1605805230806!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

						 		</div>
						 	</div>
					 	</div>
					 </div>	<!-- END GOOGLE MAP -->


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1">
							<div class="section-title mb-40 text-center">	

								<!-- Title 	-->	
								<h2 class="h2-xl">Get in Touch</h2>	

								<!-- Text -->	
								<p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
								   primis libero tempus, blandit a cursus varius magna
								</p>
									
							</div>	
						</div>
					</div>


					<!-- CONTACT FORM -->	
				 	<div class="row">
				 		<div class="col-lg-10 offset-lg-1">
				 			<div class="form-holder">
								<form name="contactform" class="row contact-form">
																						
									<!-- Form Input -->
					                <div class="col-md-12 col-lg-6">
					                	<input type="text" name="name" class="form-control name" placeholder="Your Name*"> 
					                </div>
					                  
					                <!-- Form Input -->        
					               <div class="col-md-12 col-lg-6">
					                	<input type="email" name="email" class="form-control email" placeholder="Email Address*"> 
					                </div>

					                <!-- Form Input -->   
									<div class="col-md-12">
										<input type="text" name="subject" class="form-control subject" placeholder="What's this about?"> 
									</div>
	
									<!-- Form Textarea -->	        
					                <div class="col-md-12">
					                	<textarea name="message" class="form-control message" rows="6" placeholder="Your Message ..."></textarea>
					                </div> 
					                                            
					                <!-- Form Button -->
					                <div class="col-md-12 mt-5 text-right">  
					                	<button type="submit" class="btn btn-md btn-red tra-red-hover submit">Send Message</button> 
					                </div>
					                                                              
					                <!-- Form Message -->
					                <div class="col-md-12 contact-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>	
																							
								</form>	

				 			</div>	
				 		</div>	
				 	</div>  <!-- END CONTACT FORM -->	


				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-5 -->

@endsection