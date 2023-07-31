@extends('layouts.app')
@section('title', __('Nous Contacter'))
@section('content')
<!-- PAGE HERO
	============================================= -->
<div id="contacts-page" class="page-hero-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="hero-txt text-center white-color">

                    <!-- Breadcrumb -->
                    <div id="breadcrumb">
                        <div class="row">
                            <div class="col">
                                <div class="breadcrumb-nav">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">{{ __('Accueil') }}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ __('Nous Contacter') }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Title -->
                    <h2 class="h2-xl">{{ __('Nous Contacter') }}</h2>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END PAGE HERO -->
<!-- CONTACTS-5
			============================================= -->
<section id="contacts-5" class="wide-80 contacts-section division">
    <div class="container">


        <!-- CONTACT INFO
					============================================= -->
        <div class="row">
            <div class="col-xl-10 offset-xl-1">

                @if(isset($success))
                <div class="row justify-content-center fs-4 mb-20" style="background-color:green; color:white; height:50px;">
                    <div class="col">
                        {{ $success }}
                    </div>
                </div>
                @endif
            </div>
            <div class="row">


                <!-- LOCATION -->
                <div class="col-md-4">
                    <div class="cbox-5">

                        <!-- Title -->
                        <h5 class="h5-lg">{{ __('Siège social') }}</h5>

                        <!-- Address -->
                        <p class="p-md">Zone Industrielle</p>
                        <p class="p-md">Douala</p>
                        <p class="p-md">Cameroun</p>

                    </div>
                </div>


                <!-- QUICK CONTACTS -->
                <div class="col-md-4">
                    <div class="cbox-5">

                        <!-- Title -->
                        <h5 class="h5-lg">{{ __('Horaires') }}</h5>

                        <!-- Text -->
                        <p class="p-md">Lundi à Vendredi: 08:00 - 17:00</p>
                        <p class="p-md">Samedi: 09:00 - 14:00</p>

                    </div>
                </div>


                <!-- WORKING HOURS -->
                <div class="col-md-4">
                    <div class="cbox-5">

                        <!-- Title -->
                        <h5 class="h5-lg">{{ __('Contacts') }}</h5>

                        <!-- Title -->
                        <p style="text-decoration:none" class="p-md">Phone: +237 696 48 70 22</p>
                        <p style="text-decoration:none" class="p-md">WhatsApp: +237 6 52 52 54 54</p>
                        <p class="p-md">Email: <a style="text-decoration:none" href="mailto:infos@secret-spices.net">infos@secret-spices.net</a></p>

                    </div>
                </div>


            </div>
        </div>
    </div> <!-- END CONTACT INFO -->


    <!-- SECTION TITLE -->
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="section-title mb-40 text-center">

                <!-- Title 	-->

                @if($errors->has('*'))
                <h4 class="h2-xl">{{ __('Erreur dans le formulaire') }}</h4>
                @foreach ($errors->all() as $error)
                <div style="background-color:red; color:white;">{{ $error }}</div>
                @endforeach
                @endif

                <h2 class="h2-xl">{{ __('Laissez un message') }}</h2>

                <!-- Text -->
                <p class="p-xl">{{ __("Besoin de plus d'informations ? Remplissez le formulaire correspondant ci-dessous. Nous vous répondrons dans les plus brefs délais") }}.
                </p>

            </div>
        </div>
    </div>


    <!-- CONTACT FORM -->
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="form-holder">
                <form action="{{ url('contact') }}" method="POST" class="row contact-form">
                    @csrf
                    <!-- Form Input -->
                    <div class="col-md-12 col-lg-6">
                        <input type="text" name="name" class="form-control name" placeholder="{{ __('Votre Nom') }}*" required>
                    </div>

                    <!-- Form Input -->
                    <div class="col-md-12 col-lg-6">
                        <input type="email" name="email" class="form-control email" placeholder="{{ __('Adresse Email') }}*" required>
                    </div>

                    <!-- Form Input -->
                    <div class="col-md-12">
                        <input type="text" name="subject" class="form-control subject" placeholder="{{ __('Sujet') }}*" required>
                    </div>

                    <!-- Form Textarea -->
                    <div class="col-md-12">
                        <textarea name="message" class="form-control message" rows="6" placeholder="{{ __('Votre Message') }} ..." required></textarea>
                    </div>

                    <!-- Form Button -->
                    <div class="col-md-12 mt-5 text-right">
                        <button type="submit" class="btn btn-md btn-red tra-red-hover submit">{{ __('Envoyer') }}</button>
                    </div>



                </form>

            </div>
        </div>
    </div> <!-- END CONTACT FORM -->


    </div> <!-- End container -->
</section> <!-- END CONTACTS-5 -->
<div style="margin-bottom: 50px;"></div>
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
