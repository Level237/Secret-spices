<div class="wrapper">


    <!-- ========== Topbar Start ========== -->
    @include('layouts.admin.navbar')
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- Brand Logo Light -->
        <a href="index.html.htm" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ asset('images/logo Secret-01.png') }}" alt="logo" width="60" height="60">
            </span>
            <span class="logo-sm">
                <img src="{{ asset('images/logo secret bg.png') }}" alt="small logo" width="50">
            </span>
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html.htm" class="logo logo-dark">
            <span class="logo-lg">
                <img src="{{ asset('images/logo secret bg.png') }}" alt="dark logo">
            </span>
            <span class="logo-sm">
                <img src="{{ asset('images/logo secret bg.png') }}" alt="small logo">
            </span>
        </a>

        <!-- Sidebar Hover Menu Toggle Button -->
        <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
            <i class="ri-checkbox-blank-circle-line align-middle"></i>
        </div>

        <!-- Full Sidebar Menu Close Button -->
        <div class="button-close-fullsidebar">
            <i class="ri-close-fill align-middle"></i>
        </div>

        <!-- Sidebar -left -->
        <div class="h-100" id="leftside-menu-container" data-simplebar="">
            <!-- Leftbar User -->
            <div class="leftbar-user">
                <a href="pages-profile.html.htm">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                    <span class="leftbar-user-name mt-2">Dominic Keller</span>
                </a>
            </div>

            <!--- Sidemenu -->
            <ul class="side-nav">

                <li class="side-nav-title">Navigation</li>

                <li class="side-nav-item">
                    <a href="{{ route('dashboard') }}" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Dashboards </span>
                    </a>

                </li>

                <li class="side-nav-title">Menu Principal</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> Produits</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('admin.product.create') }}">Creer un Produit</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.product.index') }}">Listes des Produits</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarRecipe" aria-expanded="false" aria-controls="sidebarRecipe" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span>Recettes</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarRecipe">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-ecommerce-products.html.htm">Creer une Recette</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-products-details.html.htm">Listes des Recettes</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a href="{{ route('admin.weight.index') }}" class="side-nav-link">
                        <i class="uil-comments-alt"></i>
                        <span> Gammes de Produits</span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="apps-chat.html.htm" class="side-nav-link">
                        <i class="uil-comments-alt"></i>
                        <span> Categories</span>
                    </a>
                </li>
                <li class="side-nav-title">Actualités</li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm" class="side-nav-link">
                        <i class="uil uil-tachometer-fast"></i>

                        <span> Evenements </span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="crm-projects.html.htm">Creer un evenement</a>
                            </li>
                            <li>
                                <a href="crm-orders-list.html.htm">Listes des evenements</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> Blocs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-ecommerce-products.html.htm">Creer un article</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-products-details.html.htm">Listes des Articles</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <!-- end Help Box -->


            </ul>
            <!--- End Sidemenu -->

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    @yield('content')

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
