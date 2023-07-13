		<!-- HEADER-3
		============================================= -->
		<header id="header-3" class="header navik-header header-transparent header-shadow">
		    <div class="container">


		        <!-- NAVIGATION MENU -->
		        <div class="navik-header-container">


		            <!-- CALL BUTTON -->
		            <div class="callusbtn"><a href="tel:123456789"><i class="fas fa-phone"></i></a></div>


		            <!-- LOGO IMAGE -->
		            <div class="logo" data-mobile-logo="images/logos/logo-one.png" data-sticky-logo="images/logos/logo-one.png">
		                <a href="{{ route('homepage') }}"><img src="images/logos/logo-one.png" width="345px" alt="header-logo"></a>
		            </div>


		            <!-- BURGER MENU -->
		            <div class="burger-menu">
		                <div class="line-menu line-half first-line"></div>
		                <div class="line-menu"></div>
		                <div class="line-menu line-half last-line"></div>
		            </div>



		            <!-- MAIN MENU -->
		            <nav class="navik-menu menu-caret navik-yellow">
		                <ul class="top-list">

		                    <!-- DROPDOWN MENU -->
		                    <li><a href="{{ route('product')}}" style="font-size: 16px; color:white" class="ubuntu_bold">Produits</a>
		                        <ul>
		                            <li><a href="{{ route('product-detail') }}">35 G </a></li>
		                            <li><a href="{{ route('product-detail') }}">250 G</a></li>
		                            <li><a href="{{ route('product-detail') }}">450 G</a></li>
		                        </ul>
		                    </li>
		                    <div class="horizontal-mobile-line">

		                    </div>
		                    <!-- DROPDOWN MENU -->
		                    <li><a href="{{ route('receipts') }}" style="font-size: 16px; color:white">Recettes</a>
		                        <ul>
		                            <li><a href="{{ route('receipts') }}">Cuisine Afrique</a></li>
		                            <li><a href="{{ route('receipts') }}">Cuisine Occidentale</a></li>
		                            <li><a href="{{ route('receipts') }}">Cuisine Exotique</a></li>
		                            <li><a href="{{ route('receipts') }}">Barbecue</a></li>
		                        </ul>
		                    </li>
		                    <div class="horizontal-mobile-line">

		                    </div>
		                    <!-- MEGA MENU -->
		                    <li><a style="font-size: 16px; color:white" href="#">Engagement</a>
		                        <ul>
		                            <li><a href="{{ route('product-detail') }}">Environement</a></li>
		                            <li><a href="{{ route('product-detail') }}">Process de fabrication</a></li>
		                            <li><a href="{{ route('product-detail') }}">Origines ingrédients</a></li>
		                        </ul>
		                    </li> <!-- END MEGA MENU -->

		                    <div class="horizontal-mobile-line">

		                    </div>
		                    <!-- DROPDOWN MENU -->
		                    <li><a href="#" style="font-size: 16px; color:white">Évènements</a>

		                    </li>

		                     <!-- DROPDOWN MENU -->
		                    <li><a href="#" style="font-size: 16px; color:white">Blog</a>

		                    </li>

		                    <li>
		                        <div class="middle-section" id="search-bar">
		                            <input class="search-bar" type="text" placeholder="Rechercher">

		                            <button class="search-button">

		                                <img class="search-icon" src="images/icons/search-icon-red.svg" alt="">

		                                <div class="tooltip">
		                                    Search
		                                </div>

		                            </button>

		                        </div>
		                    </li>
		                    

							<li id="language-section">
								<a href="cart.html">
					        		<img class="lang" src="images/languages/{{$current_locale}}.png" alt=""> 
									
					        	</a>
								<ul>
		                        	<li>
										<a href="lang/fr">
											<div class="d-flex align-items-center">
												<div class="">
													<img class="lang-select" src="images/languages/fr.png" alt="">
												</div>

												<div class="p-2">
													Français 
												</div>
											</div>
											
											
										</a>
									</li>
									<li><a href="lang/en">
										<div class="d-flex align-items-center">
												<div class="">
													<img class="lang-select" src="images/languages/en.png" alt="">
												</div>

												<div class="p-2">
													English 
												</div>
											</div>
									</a></li>
		                        	
								</ul>
							</li>







		                </ul>

		            </nav> <!-- END MAIN MENU -->


		        </div> <!-- END NAVIGATION MENU -->


		    </div> <!-- End container -->
		</header> <!-- END HEADER-3 -->
