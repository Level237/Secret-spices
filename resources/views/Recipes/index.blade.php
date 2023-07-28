@extends('layouts.app')
@section('title', __('Nos Recettes'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center product-title">
        <h1>{{ __('Recettes') }}</h1>
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

        @foreach ($recipes as $index => $recipe)

        @foreach ($categories as $category)

        @if($category->id == $index)
        <div class="d-flex flex-row mb-3">
            <div class="vertical-line align-middle"></div>
            <h1 class="ms-2">{{ $category->category_name }}</h1>
        </div>
        @endif
        @endforeach



        <div class="row">
            @foreach($recipe as $r)
            <div class="col-md-3">

                <a href="{{ route('recipe.detail',['category'=>$r->category->category_name,'name'=>$r->name_recipe]) }}">
                    <div class="p-1">
                        @foreach($r->images as $image)

                        <img src="{{ Storage::url($r->images[0]->path)}}" style="width:100%" alt="">
                        @endforeach
                    </div>
                </a>
                <div class="row">

                    <div class="col-9 fs-5 fw-bold">
                        <a href="{{ route('recipe.detail',['category'=>$r->category->category_name,'name'=>$r->name_recipe]) }}">
                            {{ ucfirst(Str::limit($r->name_recipe, 19)) }}
                        </a>

                    </div>
                    <div class="col-3 text-end">
                        <i class="fa fa-eye" style="font-size:18px; color:black"></i> <span class="fs-6 fw-bold">1.5k</span>
                    </div>
                </div>


                <div class="p-1">
                    <p style="width:100%" class="fs-6 fw-normal">{{ ucfirst(Str::limit($r->description_recipe, 50))  }}</p>
                </div>


            </div>

            @endforeach
            {{-- <div class="text-center " style="margin-top:15px">
                <button type="button" class=" fs-5 fw-bold px-5  bag-primary text-white p-3 border border-0">{{ __('Découvrir Plus de recettes') }}</button>
        </div> --}}
    </div>

    <div class="horizontal-line-receipt" style="margin-bottom: 50px; margin-top:50px;"></div>

    <div style="margin-bottom: 50px;">

    </div>





    @endforeach
</div>
</div>

{{-- <div class="container" id="receipts-mobile">


    @foreach ($recipes as $index => $recipe)

    @foreach ($categories as $category)

    @if($category->id == $index)

    <div class="horizontal-line-receipt"></div>
    <div class="d-flex flex-row mb-3" style="margin-top:50px;">
        <div class="vertical-line align-middle"></div>
        <h1 class="ms-2"> {{ $category->category_name }}</h1>
</div>
@endif
@endforeach




<!-- START CAROUSSEL Cuisine Africaine MOBILE -->
<div id="carouselCuisineAfricane" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        @foreach($recipe as $r)
        <div class="carousel-item active">

            <div class="container">
                <div class="row">

                    <div class="col">
                        <a href="{{ route('recipe.detail',['category'=>$r->category->category_name,'name'=>$r->name_recipe]) }}">
                            <div class="p-1">
                                @foreach($r->images as $image)

                                <img src="{{ Storage::url($r->images[0]->path)}}" style="width:100%" alt="">
                                @endforeach
                            </div>
                        </a>

                        <div class="row">
                            <div class="col-9 fs-5 fw-bold">
                                <a href="{{ route('recipe.detail',['category'=>$r->category->category_name,'name'=>$r->name_recipe]) }}">
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

                </div>
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

</div> <!-- END CAROUSSEL -->
@endforeach

</div>

<div style="margin-bottom: 50px;"></div> --}}


<div class="container-fluid mt-40 d-lg-block d-md-block d-none">
    <div class="row justify-content-center" style="background-image:url('/images/bg-video.jpg');">
        <div class="col-8">
            <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%; " controls>
                <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
            </video>
        </div>

    </div>
</div>
<section class="container d-lg-none d-md-none mt-40">
    <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%;" controls>
        <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
    </video>
</section>




@endsection
