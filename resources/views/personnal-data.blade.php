@extends('layouts.app')
@section('title', __('Données personnelles'))
@section('content')

<div id="space-hero-header" style="margin-top: 150px">
 </div>

 <div class="container" style="margin-top: 50px;">


    <div class="margin-space">

        <div class="row mb-3">
            <h1 style="color:#c70609"> {{ __('Données personnelles') }}</h1>
        </div>

        <div class="row margin-space">
            <p>
                {{ __("Chez SECRET SPICES accessible à l'adresse http://secret-spices.net/,  l'une de nos principales priorités est la confidentialité de nos visiteurs. Ce document de politique de confidentialité contient des types d'informations qui sont collectées et enregistrées par SECRET SPICES et comment nous l'utilisons.") }}
            </p>
        </div>

        <div class="row margin-space">
            <p>
                {{ __("Si vous avez des questions supplémentaires ou souhaitez plus d'informations sur notre politique de confidentialité, n'hésitez pas à nous contacter. Cette politique de confidentialité s'applique uniquement à nos activités en ligne et est valable pour les visiteurs de notre site Web en ce qui concerne les informations qu'ils partagent et/ou collectent dans SECRET SPICES. Cette politique ne s'applique pas aux informations collectées hors ligne ou via des canaux autres que ce site Web.") }}
           </p>
        </div>

        <div class="row mb-3">
            <h3 style="color:black"> {{ __('Consentement') }}</h3>
            <p>
                {{ __('En utilisant notre site Web, vous consentez par la présente à notre politique de confidentialité et acceptez ses conditions.') }}
           </p>
        </div>

        <div class="row mb-3">
            <h3 style="color:black"> {{ __('Informations que nous collectons') }}</h3>
            <p>
                {{ __('Les informations personnelles que vous êtes invité à fournir, et les raisons pour lesquelles vous êtes invité à les fournir, vous seront précisées au moment où nous vous demanderons de fournir vos informations personnelles') }}.
           </p>
           <p>
            {{ __('Si vous nous contactez directement, nous pouvons recevoir des informations supplémentaires vous concernant telles que votre nom, votre adresse e-mail, votre numéro de téléphone, le contenu du message et/ou des pièces jointes que vous pouvez nous envoyer, et toute autre information que vous pouvez choisir de fournir') }}.
           </p>
           <p>
            {{ __("Lorsque vous créez un compte, nous pouvons vous demander vos coordonnées, y compris des éléments tels que le nom, le nom de l'entreprise, l'adresse, l'adresse e-mail et le numéro de téléphone") }}.
           </p>
        </div>

        <div class="row mb-3">
            <h3 style="color:black"> {{ __('Comment nous utilisons vos informations') }}</h3>
            <p>
                {{ __('Nous utilisons les informations que nous recueillons de diverses manières, notamment pour') }} :
           </p>
           <ul>
                <li> - {{ __('Fournir, exploiter et maintenir notre site Web') }} </li>
                <li> - {{ __('Améliorer, personnaliser et développer notre site Web') }} </li>
                <li> - {{ __('Comprendre et analyser la façon dont vous utilisez notre site Web') }} </li>
                <li> - {{ __('Développer de nouveaux produits, services, caractéristiques et fonctionnalités') }} </li>
                <li> - {{ __("Communiquer avec vous, directement ou par l'intermédiaire de l'un de nos partenaires") }},
                    {{ __("y compris pour le service client, pour vous fournir des mises à jour et d'autres informations") }}  <br>
                    {{ __("relatives au site Web, et à des fins de marketing et de promotion") }} </li>
                <li> - {{ __('Vous envoyer des e-mails') }} </li>
                <li> - {{ __('Détecter et prévenir la fraude') }} </li>
           </ul>
          
        </div>

        <div class="row mb-3">
            <h3 style="color:black"> {{ __('Fichiers Journaux') }}</h3>
            <p>
                {{ __("SECRET SPICES suit une procédure standard d'utilisation des fichiers journaux. Ces fichiers enregistrent les visiteurs lorsqu'ils visitent des sites Web. Toutes les sociétés d'hébergement le font et une partie de l'analyse des services d'hébergement. Les informations collectées par les fichiers journaux incluent les adresses IP (protocole Internet), le type de navigateur, le fournisseur d'accès Internet (FAI), l'horodatage, les pages de renvoi/sortie et éventuellement le nombre de clics. Ceux-ci ne sont liés à aucune information personnellement identifiable. Le but de l'information est d'analyser les tendances, d'administrer le site, de suivre les mouvements des utilisateurs sur le site Web et de recueillir des informations démographiques") }}.
           </p>
        </div>
        <div class="row mb-3">
            <h3 style="color:black"> {{ __('Cookies et balises Web') }}</h3>
            <p>
                {{ __("Comme tout autre site Web, SECRET SPICES utilise des 'cookies'. Ces cookies sont utilisés pour stocker des informations, y compris les préférences des visiteurs et les pages du site Web auxquelles le visiteur a accédé ou visité. Les informations sont utilisées pour optimiser l'expérience des utilisateurs en personnalisant le contenu de notre page Web en fonction du type de navigateur des visiteurs et/ou d'autres informations.") }}
           </p>
        </div>

        

        <div class="row mb-3">
            <h3 style="color:black"> {{ __('Politiques de confidentialité des tiers') }} </h3>
            <p>
                {{ __("La politique de confidentialité de ne s'applique pas aux autres annonceurs ou sites Web. Ainsi, nous vous conseillons de consulter les politiques de confidentialité respectives de ces serveurs publicitaires tiers pour des informations plus détaillées. Il peut inclure leurs pratiques et instructions sur la façon de se retirer de certaines options") }}.
           </p>
           <p>
            {{ __('Vous pouvez choisir de désactiver les cookies via les options de votre navigateur. Pour connaître des informations plus détaillées sur la gestion des cookies avec des navigateurs Web spécifiques, vous pouvez les trouver sur les sites Web respectifs des navigateurs') }}.
           </p>
            <p>
                {{ __("Notez que SECRET SPICES n'a aucun accès ni aucun contrôle sur ces cookies qui sont utilisés par des annonceurs tiers") }}.
            </p>
        </div>

       
        

     </div>


     <div class="margin-space">

        

        <div class="row margin-space">

        </div>

        <div class="row margin-space">

        </div>

     </div>


 </div>




    <div style="margin-bottom: 50px;"></div>
    <section style="margin-top:60px">
    <div class="container-fluid mt-40">
    <div class="row justify-content-center" style="background-image:url('/images/bg-opacity.png');">
         <div class="col-8">
             
        </div>

    </div>
</div>
</section>




    @endsection
