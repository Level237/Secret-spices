@extends('layouts.app')
@section('title', __('A Propos'))
@section("meta_title","A Propos de SECRET SPICES")
@section("meta_description","«SECRET» est une composition d’épices avec à la base l’ail et l’oignon,«SECRET» se décline en 3 recettes.")
@section("meta_image",asset('images/meta/meta3.png'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center product-title">
        <h2 class="fs-1 red-color testimonial-title font-costyle">{{ __('A Propos de') }}</h2>
        <h1>SECRET Spices</h1>
        <h2 class="horizontal-line-two"></h2>
        <img src="{{ asset('images/about-1.png') }}" style=" margin-top:30px;" alt="Image A Propos">
    </div>

    <div class="">

        <div class="row mb-3">
            <h1 style="color:#c70609">{{ __('Qui sommes nous') }}?</h1>
        </div>

        <div class="row ">
            <p>

                {{ __('«SECRET» est une composition d’épices avec à la base l’ail et l’oignon, présentée sous une texture semi-coulante à utiliser dans l’assaisonnement des plats. Conçu avec pour objectif de réduire le temps de  cuisson, mais également de faire de la cuisine, un art accessible à tous, «SECRET» contient déjà tout ce qu’il faut pour assaisonner votre viande, votre poulet ou votre poisson. Parce que viande blanche, viande rouge et poisson ne s’assaisonnent pas de la même façon, «SECRET» se décline en 3 recettes') }}.
            </p>
        </div>

        <div class="row margin-space">
            <p>
            </p>
        </div>

    </div>
    <div class="">

        <div class="row mb-3">
            <h1 style="color:#c70609">{{ __('L\'origine de l\'idée') }}</h1>
        </div>

        <div class="row ">
            <p>
                {{ __('Reconnue dans ce petit village du Cameroun comme l’une des meilleures cuisinières, KEUNI savait marier les épices du terroir ce qui lui permettait de donner ce goût peu commun à ses plats Le SECRET des savoureux mariages d’épices de notre arrière-grand-mère nous a été transmis de mère en fille.Je me suis inspirée de ces recettes pour créer les épices « SECRET ».« SECRET », c’est avant tout l’occasion de rendre honneur à cette femme qui nous a transmis à ma mère, mes tantes, mes cousines et moi cette passion pour la cuisine et surtout pour les épices') }}.

            </p>
        </div>

        <div class="row margin-space">
            <p>
            </p>
        </div>

    </div>
    <div class="">

        <div class="row mb-3">
            <h1 style="color:#c70609">{{ __('Une recherche continue d\'idées novatrices') }}</h1>
        </div>

        <div class="row ">
            <p>
                {{ __('En-dehors du poivre blanc de Penja, « SECRET » met à l’honneur d’autres épices africaines telles que : le Njanssang, le Pébè, les rondelles et le poivre noir de Penja') }}.

            </p>
        </div>

        <div class="row ">
            <p>
                {{ __('Nos sauces réussissent à allier le piquant du poivre blanc de Penja et la douceur du Njanssang (l’une des épices star du continent) afin de créer une explosion de saveurs faisant ressortir les arômes délicatement boisés et mus- qués de ce poivre fin') }}.
                <br>
                {{ __('« SECRET » se décline en 03 recettes : Saveur Poulet, Saveur Viande et Saveur Poisson. 03 saveurs qui vous feront voyager sur le continent mère tandis que vous dégusterez vos plats réalisés à base d’épices « SECRET »') }}.

            </p>
        </div>

    </div>


</div>




<div style="margin-bottom: 50px;"></div>
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
