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
            <p>Quas vitae, facilis quam, rem nobis maiores adipisci voluptatum error facere eveniet 
                itaque velit iste in dolore laborum aspernatur dicta sint nostrum ea ipsum modi molestias voluptatibus. 
                Tempora, temporibus quod? 
            at quo obcaecati illum maxime, laudantium voluptate repudiandae laborum provident iste, eligendi nemo praesentium et.
        </p>
        </div>

        <div class="row margin-space">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa Illum ab ea aspernatur dolorem! Modi, deleniti quam.
            Iusto ut doloremque mollitia, nostrum laborum quasi velit suscipit saepe numquam eos soluta voluptatum. 
            Odio rem modi veniam ratione rerum veritatis aperiam tenetur et. Nostrum itaque natus ipsa sint esse.
           </p>
        </div>

     </div>
     <div class="margin-space">

        <div class="row mb-3">
            <h1 style="color:#c70609">L'origine de l'idée</h1>
        </div>

        <div class="row margin-space">
            <p>Quas vitae, facilis quam, rem nobis maiores adipisci voluptatum error facere eveniet 
                itaque velit iste in dolore laborum aspernatur dicta sint nostrum ea ipsum modi molestias voluptatibus. 
                Tempora, temporibus quod? 
            at quo obcaecati illum maxime, laudantium voluptate repudiandae laborum provident iste, eligendi nemo praesentium et.
        </p>
        </div>

        <div class="row margin-space">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa Illum ab ea aspernatur dolorem! Modi, deleniti quam.
            Iusto ut doloremque mollitia, nostrum laborum quasi velit suscipit saepe numquam eos soluta voluptatum. 
            Odio rem modi veniam ratione rerum veritatis aperiam tenetur et. Nostrum itaque natus ipsa sint esse.
           </p>
        </div>

     </div>
     <div class="margin-space">

        <div class="row mb-3">
            <h1 style="color:#c70609">Une recherche continue d'idées novatrices</h1>
        </div>

        <div class="row margin-space">
            <p>Quas vitae, facilis quam, rem nobis maiores adipisci voluptatum error facere eveniet 
                itaque velit iste in dolore laborum aspernatur dicta sint nostrum ea ipsum modi molestias voluptatibus. 
                Tempora, temporibus quod? 
            at quo obcaecati illum maxime, laudantium voluptate repudiandae laborum provident iste, eligendi nemo praesentium et.
        </p>
        </div>

        <div class="row margin-space">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa Illum ab ea aspernatur dolorem! Modi, deleniti quam.
            Iusto ut doloremque mollitia, nostrum laborum quasi velit suscipit saepe numquam eos soluta voluptatum. 
            Odio rem modi veniam ratione rerum veritatis aperiam tenetur et. Nostrum itaque natus ipsa sint esse.
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
