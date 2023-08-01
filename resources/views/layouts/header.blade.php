		<!-- HEADER-3
		============================================= -->
		<header id="header-3" class="header navik-header header-transparent header-shadow">
		    <div class="container">


		        <!-- NAVIGATION MENU -->
		        <div class="navik-header-container">

		            <!-- CALL BUTTON -->
		            <div class="callusbtn">
		                <a href="/recettes">
		                    <span class="flaticon-salad-1" style="color:#fde0a5"></span>
		                </a>

		            </div>


		            <!-- LOGO IMAGE -->
		            <div class="logo" data-mobile-logo="{{ asset('images/logos/logo-one.png') }}" data-sticky-logo="{{ asset('images/logos/logo-one.png') }}">
		                <a href="{{ route('homepage') }}"><img src="{{ asset('images/logos/logo-one.png') }}" width="345px" alt="header-logo"></a>
		            </div>


		            <!-- BURGER MENU -->
		            <div class="burger-menu text-white">
		                <div class="line-menu line-half first-line"></div>
		                <div class="line-menu"></div>
		                <div class="line-menu line-half last-line"></div>
		            </div>



		            <!-- MAIN MENU -->
		            <nav class="navik-menu menu-caret navik-yellow">
		                <ul class="top-list">

		                    <!-- DROPDOWN MENU -->
		                    <li><a href="{{ route('product.index')}}" class="ubuntu_bold text-white" style="font-size: 15px">{{ __('Produits') }}</a>
		                        <ul>
		                            @foreach($weights as $weight)
		                            <li><a href="{{ route('product.detailByWeight',$weight->weight_name) }}">{{ $weight->weight_name }} G </a></li>
		                            @endforeach

		                        </ul>
		                    </li>
		                    <div class="horizontal-mobile-line">

		                    </div>
		                    <!-- DROPDOWN MENU -->
		                    <li><a class="ubuntu_bold text-white" href="{{ route('recipe.index') }}" style="font-size: 15px">{{ __('Recettes') }}</a>
		                        <!-- <ul>

		                            @foreach ($categories as $category)
		                            <li><a href="{{ route('recipe.detailByCategory',$category->category_name) }}">{{ $category->category_name }}</a></li>
		                            @endforeach

		                        </ul> -->



		                    </li>
		                    <div class="horizontal-mobile-line"></div>
		                    <li><a class="ubuntu_bold text-white" href="{{ route('recipes-videos') }}" style="font-size: 15px">{{ __('Recettes vidéos') }}</a>
		                        <!-- <ul>



		                        </ul> -->



		                    </li>
		                    <div class="horizontal-mobile-line">

		                    </div>
		                    <!-- MEGA MENU -->
		                    <li><a class="ubuntu_bold text-white" href="{{ route('engagement')}}" style="font-size: 15px">{{ __('Engagement') }}</a>
		                        <ul>
		                            <li><a href="{{ route('engagement')}}#environement">{{ __('Environement') }}</a></li>
		                            <li><a href="{{ route('engagement')}}#process">{{ __('Process de fabrication') }}</a></li>
		                            <li><a href="{{ route('engagement')}}#ingredients">{{ __('Origines ingrédients') }}</a></li>
		                        </ul>
		                    </li> <!-- END MEGA MENU -->

		                    <div class="horizontal-mobile-line">

		                    </div>
		                    <!-- DROPDOWN MENU -->


		                    </li>

		                    <!-- DROPDOWN MENU -->
		                    <!--<li><a href="{{ route('blog')}}" style="font-size: 16px; color:white">Blog</a>-->

		                    </li>

		                    <li>
		                        <div class="middle-section" id="search-bar">
		                            <input class="search-bar" type="text" placeholder="{{ __('Rechercher') }}">

		                            <button class="search-button">

		                                <img class="search-icon" src="{{ asset('images/icons/search-icon-red.svg')}} " alt="">

		                                <div class="tooltip">
		                                    {{ __('Rechercher') }}
		                                </div>

		                            </button>

		                        </div>
		                    </li>


		                    <li id="language-section">
		                        <a>
		                            <img class="lang" src="{{ asset('images/languages/'.$current_locale.'.png')}} " alt="">

		                        </a>
		                        <ul>
		                            <li>
		                                <a href="{{ route('changeLang',"fr") }}">
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
		                            <li><a href="{{ route('changeLang',"en") }}">
		                                    <div class="d-flex align-items-center">
		                                        <div class="">
		                                            <img class="lang-select" src="{{ asset('images/languages/en.png')}}  " alt="">
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
