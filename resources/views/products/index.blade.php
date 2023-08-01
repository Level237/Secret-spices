@extends('layouts.app')
@section('title', __('Nos Produits'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center product-title">
        <h1>{{ __('Découvrez toute la gamme') }} <br>{{ __('des épices SECRET') }} </h1>
    </div>

    @foreach($products as $index => $product)

    @foreach($weights as $weight)

    @if($weight->id == $index)
    <div class="row">
        <div class="col-sm3 center-gamut">
            <i class="fas fa-angle-right fs-4" style="color: #c70609"> {{ $weight->weight_name }} Gr</i>
        </div>
    </div>

    @endif
    @endforeach




    <div class="row mb-5" style="margin-top:30px;">

        @foreach($product as $p)

        <div class="col d-flex flex-column product-row">


            <div class="p-2 fs-4 fw-normal align-self-center">
                <a href="{{ route('product.detail',['name'=>$p->product_name,'gamme'=>$p->weight->weight_name]) }}">
                    @foreach($p->images as $i)
                    <img src="{{ Storage::url($i->path)}}" width="250px" alt="">
                    @endforeach
                </a>
            </div>

            <div class="p-2 secret-spices">
                <a href="{{ route('product.detail',['name'=>$p->product_name,'gamme'=>$p->weight->weight_name]) }}">
                    {{ $p->product_name}}
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
    @endforeach




</div>
<div class="container-fluid mt-40 d-lg-block d-md-block d-none">
    <div class="row justify-content-center" style="background-image:url('/images/bg-video.jpg');">
        <div class="col-8">
            <video loop="loop" poster="{{ asset('images/poster-secret.png') }}" style="width: 100%; " controls>
                <source src="{{asset('video/epice-secret.mp4')}}" type="video/mp4">
            </video>
        </div>

    </div>
</div>
<section class="container d-lg-none d-md-none mt-40">
    <video loop="loop" poster="{{ asset('images/poster-secret.png') }}" style="width: 100%;" controls>
        <source src="{{asset('video/epice-secret.mp4')}}" type="video/mp4">
    </video>
</section>




@endsection
