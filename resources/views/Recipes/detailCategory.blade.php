@extends('layouts.app')
@section('title')
Categorie : {{ $category->category_name }}
@endsection
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center product-title">
        <h1>Nos Recettes {{ $category->category_name }}</h1>
        <h2 class="horizontal-line-two"></h2>
        <p class="fs-5 ">
            {{ __('Parce que viande blanche, viande rouge et poisson  ne s’assaisonnent pas de la même façon, «Secret»  se décline en 3 produits specifiques qui nous permettent de realiser plusieurs repas africains, europeens, exotiques et des barbecues.') }}
        </p>
    </div>
</div>

<div class="container" style="margin-top: 50px;">


    <div class="horizontal-line-receipt"></div>

    <div style="margin-bottom: 50px;">

    </div>

    <div class="container">

        <div class="horizontal-line-receipt" style="margin-bottom: 50px; margin-top:50px;"></div>

        <div style="margin-bottom: 50px;">

        </div>

        {{-- <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2"> {{ __('Cuisine Africaine') }}</h1>
    </div> --}}


    <div class="row">
        @foreach($recipes as $r)
        <div class="col-md-3">

            <a href="{{ route('recipe.detail',['category'=>$r->category->slug,'slug'=>$r->slug]) }}">
                <div class="p-1">
                    @foreach($r->images as $image)

                    <img src="{{ Storage::url($r->images[0]->path)}}" style="width:100%" alt="">
                    @endforeach
                </div>
            </a>
            <div class="row">

                <div class="col-9 fs-5 fw-bold">
                    <a href="{{ route('recipe.detail',['category'=>$r->category->slug,'slug'=>$r->slug]) }}">
                        {{ ucfirst($r->name_recipe) }}
                    </a>

                </div>
                <div class="col-3 text-end">
                    <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                </div>
            </div>


            <div class="p-1">
                <p style="width:100%" class="fs-6 fw-normal">{{ $r->description_recipe }}</p>
            </div>


        </div>

        @endforeach



    </div>

</div>
<div style="margin-bottom: 50px;">
</div>

<div class="horizontal-line-receipt" style="margin-bottom: 50px; margin-top:50px;"></div>





<!-- PAGE PAGINATION
			============================================= -->

</div>
</div>

<div class="container" id="receipts-mobile">



    <!-- START CAROUSSEL Top Receipts MOBILE -->




    <!-- START CAROUSSEL Cuisine Africaine MOBILE -->
    {{-- <div id="carouselCuisineAfricane" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach($recipes as $recipe)
            <div class="carousel-item active">




                <div class="p-1">
                    <img src="{{ asset('images/pouletsauceverte.jpg')}}" class="img-fluid" alt="">
</div>







</div>
@endforeach


</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselCuisineAfricane" data-bs-slide="prev">
    <img src="{{ asset('images/arrow-testimonial.PNG') }}" alt="" srcset="">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselCuisineAfricane" data-bs-slide="next">
    <img src="{{ asset('images/arrow-right.PNG') }}" alt="" srcset="">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>

</div> <!-- END CAROUSSEL --> --}}


</div>



<section style="margin-top:10px">
    <div class="row justify-content-center" style="background-image:url('/images/bg-opacity.png');">
        <div class="col-8">
            <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%;" controls>
                <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
            </video>
        </div>

    </div>
</section>




@endsection
