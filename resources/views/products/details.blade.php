@extends('layouts.app')
@section('title')
{{$product->product_name}}:{{ $weight->weight_name }}g
@endSection
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
</div>

<div class="container" style="margin-top: 50px;">


    <div class="d-flex flex-row bd-highlight mb-5 align-items-center ">
        <div class="col-sm3 center-gamut">
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> {{ $weight->weight_name }} Gr</i>
        </div>
        <div class="p-2 bd-highlight"><i class="fas fa-angle-right fs-4" style="color: #c70609"></i></div>
        <div class="p-2 bd-highlight">
            <h1>{{$product->product_name}}</h1>
        </div>
    </div>

    <div class="row align-items-center" style="margin-top:50px;">

        <div class="col-md-5 col-sm-5 col-lg-5">
            @foreach($product->images as $i)
            <img src="{{Storage::url($i->path)}}" style="width:100%" alt="">
            @endforeach
        </div>

        <div class="col-md-7 col-sm-7 col-lg-7">

            <div class="row">
                <h1>Secret<br> {{$product->product_name}} : {{ $weight->weight_name }} Gr</h1>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" style="background-color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ __('Présentation') }}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color:#fde0a5;">
                            <strong>

                                {{ $product->product_description }}

                            </strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" style="background-color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{ __('Valeurs nutritionnelles') }}
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color:#fde0a5;">
                            <strong>{{ __('les epices vous apportent des complement en Protéine, Sodium, Énergie') }}</strong> .
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" style="background-color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{ __('Ingrédients') }}
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color:#fde0a5;">
                            @foreach ($product->ingredients as $ingredient)
                            <strong>{{ $ingredient->ingredient_name }}</strong> <code></code>,
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="row" style="margin-top:30px;">
        <div class="d-flex flex-row mb-3 mt-3">
            <div class="vertical-line align-middle"></div>
            <h3 class="ms-2">{{ __('Autres Epices de la même Gamme') }} </h3>
        </div>
    </div>

    <div class="d-sm-flex  flex-row">

        @foreach($otherProduct as $product)
        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center text-center">
                <a href="{{ route('product.detail',['name'=>$product->product_name,'gamme'=>$product->weight->weight_name]) }}">
                    @foreach($product->images as $i)
                    <img src="{{Storage::url($i->path)}}" style="width:50%" alt="">
                    @endforeach
                </a>
            </div>

            <div class="p-2 secret-spices">
                <a href="{{ route('product.detail',['name'=>$product->product_name,'gamme'=>$product->weight->weight_name]) }}">
                    {{ $product->product_name }}
                </a>
                <div class="horizontal-mobile-line-gray"></div>
            </div>

            <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

                <div class="p-2">

                    <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">

                </div>

                <div class="p-2">
                    <!-- Rating -->
                    <div class="review-rating">
                        <div class="stars-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>

    <div style="margin-bottom: 50px;">

    </div>

    {{-- <div class="row">
        <div class="col-sm3 center-gamut">
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> 250 Gr</i>
        </div>
    </div>


    <div class="row" style="margin-top:30px;">

        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center text-center">
                <img src="{{ asset('images/products/simulation-viande.png')}}" style="width:50%" alt="">
</div>

<div class="p-2 secret-spices">
    Secret <br>Epices Viande
    <div class="horizontal-mobile-line-gray"></div>
</div>

<div class="p-2 fs-4 fw-normal d-flex justify-content-between">

    <div class="p-2">
        <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
    </div>

    <div class="p-2">
        <!-- Rating -->
        <div class="review-rating">
            <div class="stars-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>

</div>
</div>

<div class="col d-flex flex-column product-row">

    <div class="p-2 align-self-center text-center">
        <img src="{{ asset('images/products/simulation-poulet.png')}}" style="width:50%" alt="">
    </div>

    <div class="p-2 secret-spices">
        Secret<br> Epices Poulet
        <div class="horizontal-mobile-line-gray"></div>
    </div>

    <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

        <div class="p-2">
            <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
        </div>

        <div class="p-2">
            <!-- Rating -->
            <div class="review-rating">
                <div class="stars-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="col d-flex flex-column product-row">

    <div class="p-2 fs-4 fw-normal align-self-center text-center">
        <img src="{{ asset('images/products/simulation-poisson.png')}}" style="width:50%" alt="">
    </div>

    <div class="p-2 secret-spices">
        Secret<br> Epices Poisson
        <div class="horizontal-mobile-line-gray"></div>
    </div>

    <div class="p-2  d-flex justify-content-between">

        <div class="p-2">
            <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
        </div>

        <div class="p-2">
            <!-- Rating -->
            <div class="review-rating">
                <div class="stars-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

<div style="margin-bottom: 50px;">

</div>

<div class="row">
    <div class="col-sm3 center-gamut">
        <i class="fas fa-angle-right fs-4" style="color: #c70609"> 450 Gr</i>
    </div>
</div>

<div class="row" style="margin-top:30px;">

    <div class="col d-flex flex-column product-row">

        <div class="p-2 fs-4 fw-normal align-self-center text-center">
            <img src="{{ asset('images/products/pot-viande.png')}}" style="width:50%" alt="">
        </div>

        <div class="p-2 secret-spices">
            Secret <br>Epices Viande
            <div class="horizontal-mobile-line-gray"></div>
        </div>

        <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

            <div class="p-2">
                <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
            </div>

            <div class="p-2">
                <!-- Rating -->
                <div class="review-rating">
                    <div class="stars-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col d-flex flex-column product-row">

        <div class="p-2 align-self-center text-center">
            <img src="{{ asset('images/products/pot-viande.png')}}" style="width:50%" alt="">
        </div>

        <div class="p-2 secret-spices">
            Secret<br> Epices Poulet
            <div class="horizontal-mobile-line-gray"></div>
        </div>

        <div class="p-2 fs-4 fw-normal d-flex justify-content-between">

            <div class="p-2">
                <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
            </div>

            <div class="p-2">
                <!-- Rating -->
                <div class="review-rating">
                    <div class="stars-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col d-flex flex-column product-row">

        <div class="p-2 fs-4 fw-normal align-self-center text-center">
            <img src="{{ asset('images/products/pot-poulet.png')}}" style="width:50%" alt="">
        </div>

        <div class="p-2 secret-spices">
            Secret<br> Epices Poisson
            <div class="horizontal-mobile-line-gray"></div>
        </div>

        <div class="p-2  d-flex justify-content-between">

            <div class="p-2">
                <img src="{{ asset('images/logos/logo-two.png')}}" width="150px" alt="">
            </div>

            <div class="p-2">
                <!-- Rating -->
                <div class="review-rating">
                    <div class="stars-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div style="margin-bottom: 50px;">

</div> --}}

</div>
<section style="margin-top:60px">
    <div class="row justify-content-center" style="background-image:url('/images/bg-opacity.png');">
        <div class="col-8">
            <video loop="loop" poster="{{ asset('images/poster.png') }}" style="width: 100%;" controls>
                <source src="{{asset('video/spot-secret.mp4')}}" type="video/mp4">
            </video>
        </div>

    </div>
</section>




@endsection
