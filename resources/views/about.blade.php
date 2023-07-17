@extends('layouts.app')
@section('title', __('A Propos'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
 </div>

 <div class="container" style="margin-top: 50px;">
     <div class="row justify-content-center product-title">
        <h2 class="fs-1 red-color testimonial-title font-costyle">{{ __('A Propos de') }}</h2>
         <h1>Secret Spices</h1>
          <h2 class="horizontal-line-two"></h2>
          <img src="{{ asset('images/spices1.jpg') }}" style="max-height: 400px; margin-top:30px;" alt="Image A Propos">
    </div>

     <div class="margin-space">

        <div class="row mb-3">
            <h1 style="color:#c70609">Qui sommes nous?</h1>
        </div>

        <div class="row margin-space">
            <p>
                «SECRET» est une composition d’épices avec à la
                base l’ail et l’oignon, présentée sous une texture
                semi-coulante à utiliser dans l’assaisonnement des
                plats.
                Conçu avec pour objectif de réduire le temps de
                cuisine mais également de faire de la cuisine un
                art accessible à tous, «Secret» contient déjà tout ce
                qu’il faut pour assaisonner votre viande, votre
                poulet ou votre poisson.
                Parce que viande blanche, viande rouge et poisson
                ne s’assaisonnent pas de la même façon, «Secret»
                se décline en 3 recettes.
            </p>
        </div>

        <div class="row margin-space">
            <p>
           </p>
        </div>

     </div>
     <div class="margin-space">

        <div class="row mb-3">
            <h1 style="color:#c70609">L'origine de l'idée</h1>
        </div>

        <div class="row margin-space">
            <p>
                Reconnue dans ce petit
                village du Cameroun comme l’une des meilleures
                cuisinières, KEUNI savait marier les épices du
                terroir ce qui lui permettait de donner ce goût peu
                commun à ses plats.
                Le secret des savoureux mariages d’épices de notre
                arrière grand-mère nous a été transmis de mère en
                fille. Je me suis inspirée de ces recettes pour créer
                les épices « Secret ».
                « SECRET » c’est avant tout l’occasion de rendre
                honneur à cette femme qui nous a transmis à ma
                mère, mes tantes, mes cousines et moi cette passion
                pour la cuisine et surtout pour les épices.
            </p>
        </div>

        <div class="row margin-space">
            <p>
           </p>
        </div>

     </div>
     <div class="margin-space">

        <div class="row mb-3">
            <h1 style="color:#c70609">Une recherche continue d'idées novatrices</h1>
        </div>

        <div class="row margin-space">
            <p>
                «SECRET» est une composition d’épices avec à la
                base l’ail et l’oignon, présentée sous une texture
                semi-coulante à utiliser dans l’assaisonnement des
                plats.
                 .
        </p>
        </div>

        <div class="row margin-space">
            <p>
                Conçu avec pour objectif de réduire le temps de
                cuisine mais également de faire de la cuisine un
                art accessible à tous, «Secret» contient déjà tout ce
                qu’il faut pour assaisonner votre viande, votre
                poulet ou votre poisson.
                Parce que viande blanche, viande rouge et poisson
                ne s’assaisonnent pas de la même façon, «Secret»
                se décline en 3 recettes.
           </p>
        </div>

     </div>


 </div>




    <div style="margin-bottom: 50px;"></div>
    <section style="margin-top:60px">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/spices1.jpg" style="max-height: 600px" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section>




    @endsection
