@extends('layouts.app')
@section('title')
Produit {{ $weight->weight_name }}g
@endsection
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

        </div>
    </div>



    <div class="row" style="margin-top:30px;">

        @foreach($products as $product)
        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center text-center">
                <img src="{{ asset('images/products/simulation-viande.png')}}" style="width:50%" alt="">
            </div>

            <div class="p-2 secret-spices">
                {{ $product->product_name }}
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
