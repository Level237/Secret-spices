@extends('layouts.app')
@section('title', __('Donnees personelles'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
 </div>

 <div class="container" style="margin-top: 50px;">


    <div class="margin-space">

        <div class="row mb-3">
            <h1 style="color:#c70609"> Donnees Personnelles</h1>
        </div>

        <div class="row margin-space">
            <p>
                L’édition et la direction  de Keuni Foods est assurée par Aicha Noucti, domicilié AKWA IMMEUBLE KADJI. Numéro de téléphone est +237 6 90 98 81 33 Adresse e-mail noucti.kadji@gmail.com. La personne est assujetie au RCS avec le numéro d'inscription XXXXXXXXXXXXX et son numéro de TVA intracommunautaire est le XXXXXXXXXXXX L'hébergeur de l’application est la société LWS, dont le siège social est situé au France, avec le numéro de téléphone 01 77 62 30 03
            </p>
        </div>

        <div class="row margin-space">
            <p>
           </p>
        </div>

     </div>


     <div class="margin-space">



        <div class="row margin-space">

        </div>

        <div class="row margin-space">

        </div>

     </div>
     <div class="margin-space">





        <div class="row margin-space">
            <p>
           </p>
        </div>

     </div>
     <div class="margin-space">



       

     </div>


 </div>




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
</section>




    @endsection
