@extends('layouts.admin.app')
@section('title')
Ajouter une Recette
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.recipe.index') }}">Recettes</a></li>
                                <li class="breadcrumb-item active">Ajouter une recette</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter une Recette</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="{{ route('admin.recipe.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Nom de la Recette</label>
                                    <input type="text" id="simpleinput" name="product_name" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description Produit</label>
                                    <textarea class="form-control" id="example-textarea" name="product_description" rows="5"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Grammage Produit</label>
                                    <select class="form-select" name="weight_id" id="example-select">
                                        @foreach ($categories as $category)
                                        <option value={{$category->id}}>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="fallback mb-4">
                                    <label for="example-select" class="form-label">Ajouter un ou plusieurs images</label>
                                    <input name="images[]" class="form-control" type="file" multiple />
                                </div>




                                <button type="submit" class="btn bag-primary text-white" style="background-color: #c70609">Enregistrer</button>


                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">Ingredients</h3>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Ingredients</label>
                                    <input type="text" id="simpleinput" name="product_name" class="form-control">

                                </div>
                                <button type="button" class="btn bag-primary text-white" style="background-color: #c70609">Ajouter un Ingredient</button>
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
@endsection
