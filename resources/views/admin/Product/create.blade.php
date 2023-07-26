@extends('layouts.admin.app')
@section('title')
Ajouter un Produit
@endsection

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Produits</a></li>
                                <li class="breadcrumb-item active">Ajouter un Produit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter un produit</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Nom du Produit</label>
                                    <input type="text" id="simpleinput" name="product_name" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description Produit</label>
                                    <textarea class="form-control" id="example-textarea" name="product_description" rows="5"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Grammage Produit</label>
                                    <select class="form-select" name="weight_id" id="example-select">
                                        @foreach ($weights as $weight)
                                        <option value={{$weight->id}}>{{$weight->weight_name}} g</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="fallback mb-4">
                                    <input name="path" class="form-control" type="file" />
                                </div>




                                <button type="submit" class="btn bag-primary text-white" style="background-color: #c70609">Enregistrer</button>


                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->

                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">

                                <div id="form">
                                    <h3 class="text-center">Ingredients</h3>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Ingredients</label>
                                        <input type="text" id="simpleinput" name="ingredient_name[]" class="form-control">

                                    </div>

                                </div>

                                <button type="button" onclick="addIngredient()" class="btn bag-primary text-white" style="background-color: #c70609">Ajouter un Ingredient</button>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->

            </form>

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())

                    </script> © Hyper - Coderthemes.com
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<script>
    let i = 0;
    let j = 1;

    function addIngredient() {
        i = i + 1;
        const newDiv = document.createElement(`div`);
        newDiv.setAttribute('id', `ingredient`);
        const div = document.getElementById('form');
        newDiv.innerHTML = `
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Ingredients</label>
                                        <input type="text" id="simpleinput" name="ingredient_name[]" class="form-control">

                                    </div> <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Quantité</label>
                                        <input type="number" min="1" max="10" id="simpleinput" name="quantity[]" class="form-control">

                                    </div>`
        div.appendChild(newDiv);


    }

    function addSteps() {
        j = j + 1;
        const newDiv = document.createElement(`div`);
        newDiv.setAttribute('id', `step`);
        const div = document.getElementById('form2');
        newDiv.innerHTML = `
        <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Etape ${j}</label>
                                        <input type="text" id="simpleinput" name="steps[]" class="form-control">

                                    </div>`
        div.appendChild(newDiv);
    }

</script>
@endsection
