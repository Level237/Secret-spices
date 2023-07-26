@extends('layouts.app')
@section('title', __('Nos Produits'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center product-title">
        <h1>{{ __('Découvrez toute la gamme') }} <br>{{ __('des épices SECRET') }} </h1>
    </div>

    @foreach($products as $product)
    <div class="row">
        <div class="col-sm3 center-gamut">
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> 35 Gr</i>
        </div>
    </div>

    <div class="row mb-5" style="margin-top:30px;">

        @foreach($product as $p)
        <div class="col d-flex flex-column product-row">

            <div class="p-2 fs-4 fw-normal align-self-center">
                @foreach($p->images as $i)
                <img src="{{ Storage::url($i->path)}}" width="250px" alt="">
                @endforeach

            </div>

            <div class="p-2 secret-spices">
                {{ $p->product_name}}
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
    @endforeach




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
