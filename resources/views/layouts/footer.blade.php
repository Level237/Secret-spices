			<!-- FOOTER-3
			============================================= -->
			<footer id="footer-3" class="footer-division footer-bg">


			    <div class="d-md-flex flex-row justify-content-around">
			        <div class="p-2">
			            <div class="d-flex  flex-column">
			                <div class="p-2">
			                    <img src="{{ asset("images/logos/logo-one.png") }}" width="350px" alt="footer-logo">
			                </div>
			                <div class="d-flex flex-column align-items-center">
			                    <div class="">
			                        <p class="fs-5 fw-bold">{{ __('L\'alliee de la femme') }} <br> {{ __('ambitieuse et belle') }}</p>
			                    </div>

			                </div>
			                <div class="align-self-center">
			                    <a href="https://www.facebook.com/mysecretspices" target="_blank" class="ico-facebook text-white"><i class="fab  fa-facebook-f text-white"></i></a>
			                    <a href="https://www.instagram.com/secretducmr/?hl=fr" target="_blank" class="ico-instagram"><i class="fab fa-instagram text-white"></i></a>
			                </div>
							
							

							

			            </div>
			        </div>
			        <div class="align-self-center p-2">
			            <div class="d-flex flex-column ">
			                <a href="{{ route('about') }}" class="text-white">
			                    <div class="p-2 fs-5 fw-normal"><i class="fas fa-angle-right"></i> {{ __('A Propos') }}</div>
			                </a>
			                <a href="{{ route('legal') }}" class="text-white">
			                    <div class="p-2 fs-5 fw-normal"><i class="fas fa-angle-right"></i> {{ __('Mentions Légales') }}</div>
			                </a>

			                <a href="{{ route('personnal-data') }}" class="text-white">
			                    <div class="p-2 fs-5 fw-normal"><i class="fas fa-angle-right"></i> {{ __('Données personnelles') }}</div>
			                </a>

			            </div>
			        </div>
			        <div class="align-self-center p-2">
			            <div class="d-flex flex-column">
                            <a href="{{ route('galery') }}" class="text-white">
                                <div class="p-2 fs-5 fw-normal"><i class="fas fa-angle-right"></i> {{ __('Galerie Vidéos') }}</div>
                            </a>
							<a href="{{ route('event') }}" class="text-white">
			                	<div class="p-2 fs-5 fw-normal"><i class="fas fa-angle-right"></i> {{ __('Évènements') }}</div>
							</a>
							<a href="/contact" class="text-white">
			                	<div class="p-2 fs-5 fw-normal"><i class="fas fa-angle-right"></i> {{ __('Nous Contacter') }}</div>
							</a>
			            </div>
						
						<div class="dropdown" id="dropdown-language">
								<button class="btn btn-secondary dropdown-toggle" style="border-color:#c70609; background-color:#c70609; color:white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									@if(app()->getLocale() == "en")
										<span class = "p-2 fs-5 fw-normal"> English</span>
									@else
										<span class = "p-2 fs-5 fw-normal"> Français</span>
									@endif
									
								</button>
								<ul class="dropdown-menu">
									
									<li>
										<a class="dropdown-item" href="{{ route('changeLang',"fr") }}">
											<div class="d-flex align-items-center">
												<div class="">
													<img class="lang-select" src="{{ asset('images/languages/fr.png')}} " alt="">
												</div>

												<div class="p-2">
														Français
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="{{ route('changeLang',"en") }}">
											<div class="d-flex align-items-center">
		                                        <div class="">
		                                            <img class="lang-select" src="{{ asset('images/languages/en.png')}}  " alt="">
		                                        </div>

		                                        <div class="p-2">
		                                            English
		                                        </div>
		                                    </div>
										</a>
									</li>
								</ul>
								</div>
		                    
			        </div>

			    </div>
				

			    <!--<div class="row">

			        <div class="col">
			            <a href="#" class="ico-facebook text-white"><i class="fab  fa-facebook-f"></i></a>
			            <a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a>
			        </div>
			    </div> -->

			    <div class="container-fluid">
			        <div class="row">
			            <div class="blocfooter">
			                <div class="col-md-12">
			                    <!-- FOOTER COPYRIGHT -->
			                    <div class="footer-copyright fs-4 fw-bold">
			                        <p> Copyright © 2023 SECRET SPICES. All rights reserved. Powered by K-SOFT TECHNOLOGIES </p>
			                    </div>
			                </div>
			            </div>
			        </div>

			    </div> <!-- End row -->
			    </div> <!-- End container -->
			</footer> <!-- END FOOTER-3 -->
