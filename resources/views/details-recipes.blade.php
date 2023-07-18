@extends('layouts.app')
@section('title', __('Detail Recette'))
@section('content')

<main>

    <section style=" background-image: url({{ asset('images/recette1.jpg') }});background-size: cover;height: 300px;background-position: center;">
    </section>

    <section class="container mt-50">

        <div>
            <div>
                <h1 class="text-primary-spices fs-0">Poulet Roti à l'Orange</h1>
            </div>

            <div class="w-50 d-flex">

                <div>
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">Facile à reproduire</span>
                </div>
                <div class="ms-3"><i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">45mns</span></div>
                <div class="ms-3">
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">02 personnes</span>
                </div>
            </div>
        </div>

        <div class="container mt-50 ms-4">


            <div>
                <h2>

                    .Ingredients
                </h2>

            </div>
            <div class="container ms-3">
                <p class="fs-5">

                    - Lorem ipsum dolor sit amet,consectetur adipiscing eli
                </p>
                <p class="fs-5">

                    - Lorem ipsum dolor sit amet,consectetur adipiscing eli
                </p>
                <p class="fs-5">

                    - Lorem ipsum dolor sit amet,consectetur adipiscing eli
                </p>
                <p class="fs-5">

                    - Lorem ipsum dolor sit amet,consectetur adipiscing eli
                </p>
                <p class="fs-5">

                    - Lorem ipsum dolor sit amet,consectetur adipiscing eli
                </p>
                <p class="fs-5">

                    - Lorem ipsum dolor sit amet,consectetur adipiscing eli
                </p>
                <p class="fs-5">

                    - Lorem ipsum dolor sit amet,consectetur adipiscing eli
                </p>
            </div>
        </div>
    </section>

    <section class=" mt-50" style="padding-bottom:45px;padding-top:45px;background-color: #fae6e7;">

        <div class="container">
            <div class="ms-5 fs-5">
                <h2>Préparation</h2>
                <div class="container ms-3">
                    <p class="fs-5">
                        Lorem ipsum dolor sitamet,consectetur adipiscing elit,sed do eiusmod tempor
                        ut labore et dolore magna aliqua.Ut enim ad minim veniam,quis nostrud aliquip
                        commodo consequat.
                    </p>
                    <p class="fs-5">
                        Vivamus eleifend magna ante, ut condimentum nisi placerat ac. Vestibulum pharetra eget nulla non pharetra. Vivamus eget lacinia tellus. Nulla facilisi. Nulla ultricies interdum tellus quis tempus. Aliquam venenatis tincidunt erat. Nullam suscipit ante vel quam viverra, et rutrum tortor dignissim. Ut consequat auctor elit et cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum mollis velit vel pulvinar mollis.
                    </p>
                    <p class="fs-5">
                        Cras sed risus augue. Curabitur et nulla a nisl mattis mollis. Proin in metus vel lorem iaculis consequat vulputate ac est. Aliquam ornare vehicula elit, eu sagittis nunc. Donec ut enim imperdiet, eleifend erat ut, luctus lectus. Vivamus rutrum lacus sed augue ultrices lacinia. Praesent quis sapien non nisi suscipit tincidunt.
                    </p>
                    <p class="fs-5">
                        Mauris hendrerit urna quis nibh volutpat pulvinar. Cras volutpat dictum ante, a tincidunt turpis bibendum nec. Mauris sodales felis condimentum tempor semper. Vivamus venenatis leo sagittis dui mattis, a finibus ligula lobortis. Duis quis diam egestas, ullamcorper tellus eget, luctus mauris. Ut eu elementum dolor. Sed posuere, purus aliquet pharetra lacinia, nisl felis placerat urna, nec rhoncus dolor justo id urna. Aenean eu mattis augue. Etiam scelerisque aliquet metus, et bibendum nulla maximus nec. Vestibulum consectetur volutpat vulputate. Nulla eu nisl odio.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="container mt-50">

        <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> {{ __('Recettes associées')}}</h1>
        </div>
        <div class="row d-flex align-items-center mb-4">


            <!-- PROMO IMAGE-1 -->
            <div class="col-md-3">



                <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                <div class="row mt-3 align-items-center">
                    <div class="col-9 fs-5 fw-bold">
                        <a href="menu-3.html">
                            Poulet roti à l'orange
                        </a>
                    </div>
                    <div class="col-3 text-end">
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                <div class="p-1">
                    <p style="width:90%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p>
                </div>

            </div>


            <!-- PROMO IMAGE-2 -->
            <div class="col-md-3">



                <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                <div class="row mt-3 align-items-center">
                    <div class="col-9 fs-5 fw-bold">
                        <a href="menu-3.html">
                            Poulet roti à l'orange
                        </a>
                    </div>
                    <div class="col-3 text-end">
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                <div class="p-1">
                    <p style="width:90%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p>
                </div>

            </div>


            <!-- PROMO IMAGE-3 -->
            <div class="col-md-3">



                <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                <div class="row mt-3 align-items-center">
                    <div class="col-9 fs-5 fw-bold">
                        <a href="menu-3.html">
                            Poulet roti à l'orange
                        </a>
                    </div>
                    <div class="col-3 text-end">
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                <div class="p-1">
                    <p style="width:90%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p>
                </div>

            </div>

            <div class="col-md-3">



                <img class="img-fluid" src="{{ asset('images/recette1.jpg') }}" alt="promo-image">
                <div class="row mt-3 align-items-center">
                    <div class="col-9 fs-5 fw-bold">
                        <a href="menu-3.html">
                            Poulet roti à l'orange
                        </a>
                    </div>
                    <div class="col-3 text-end">
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>
                <div class="p-1">
                    <p style="width:90%" class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut commodi pariatur, ipsa est dolorum aperiam </p>
                </div>

            </div>
            <!-- PROMO IMAGE-4 -->
            <div class="text-center" style="margin-top:60px">
                <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3  border border-0">Découvrir Plus de recettes</button>

            </div>

        </div> <!-- End row -->
    </section>

   
</main>
<div style="margin-bottom: 50px;"></div>
    <section style="margin-top:60px">
    <div class="container-fluid mt-40">
    <div class="row justify-content-center" style="background-image:url('/images/bg-opacity.png');">
         <div class="col-8">
             <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%;"  controls>
                    <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
            </video>
        </div>
        
    </div>
</div>
@endsection
