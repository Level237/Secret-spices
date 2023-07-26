@extends('layouts.app')
@section('title', __('Engagements'))
@section('content')


<section>
    <div id="blog-page" class="page-hero-section division">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="hero-txt text-center white-color">



                        <!-- Title -->
                        <h2 class="h2-xl">Engagements</h2>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END PAGE HERO -->
</section>

<section class="container mt-25">

    <div class="row">
        <div class="col-3">

        </div>

        <div class="col-6">
            <p>Texte introductif
                Présenter l’ engagement générique de Secret Spices
                de faire mieux que la concurrence susceptibles d’ajouter des composants
                nocifs pour la santé de l’homme.</p>
        </div>

        <div class="col-3">

        </div>
    </div>

</section>

<section class="container mb-300">
    <h2 class="">Environnement</h2>

    <h2 style=" background-color: #c70609;
        height: 5px;
        width: 100px;">
    </h2>
    <div class="row align-items-center">
        <div class="col-6">
            <img src="{{ asset('images/gamme.png') }}" alt="spices">
        </div>



        <div class="col-6">

            NosProduits sont sains grace à une production
            controllée et assurée par notre réseau d’agriculteurs. Aucun pesticides et engrais chimiques
            n’ont été utilisés pendant leur production.d’où
            les oucis du respect de l’environnement et de la
            santé humaine
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sed ipsa, in, aspernatur veritatis, velit dolorem inventore fuga natus quisquam facere unde nobis asperiores enim veniam! Saepe sit iure distinctio?


        </div>
    </div>
</section>

</h2>
<section class="container">
    <h2 class="">Origine des Ingrédients</h2>

    <h2 style=" background-color: #c70609;
    height: 5px;
    width: 100px;">
</section>
</main>
<!-- PAGE HERO
			============================================= -->


@endsection
