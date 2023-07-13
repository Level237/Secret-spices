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
		                    <li><a href="{{ route('product')}}" style="font-size: 16px; color:white">Produits</a>
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
		                    <li>
		                        <div class="dropdown">
		                            @foreach($available_locales as $locale_name => $available_locale)

		                            @if($available_locale === $current_locale)


		                            <button style="background: none;border:none;bottom:40px;position:relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
		                                <img class="lang" src="images/languages/{{ $locale_name  }}.png" alt="">
		                            </button>

		                            @else
		                            <ul class="dropdown-menu">

		                                <div class="d-flex">
		                                    <li><img class="lang" src="images/languages/{{ $locale_name  }}.png" alt=""></li>
		                                    <li><a href="lang/{{ $available_locale }}"><button class="dropdown-item" type="button">{{ $locale_name }}</button></a></li>

		                                </div>


		                            </ul>

		                            @endif

		                            @endforeach
		                        </div>
		                    </li>







		                </ul>

		            </nav> <!-- END MAIN MENU -->


		        </div> <!-- END NAVIGATION MENU -->


		    </div> <!-- End container -->
		</header> <!-- END HEADER-3 -->
