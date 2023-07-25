@extends('layouts.admin.app')
@section('title')
Listes des Recettes
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.recipe.create') }}">Ajouter une Recette</a></li>
                                <li class="breadcrumb-item active">Recettes</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Recette</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-5">
                                    <a href="{{ route('admin.recipe.create') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Ajouter une Recette</a>
                                </div>
                                <div class="col-sm-7">
                                    <div class="text-sm-end">
                                        <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                                        <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                        <button type="button" class="btn btn-light mb-2">Export</button>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">

                                @if(Session::get("success"))
                                <div class="alert alert-primary" role="alert">

                                </div>
                                <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{ Session::get("success") }}</strong>
                                </div>
                                @endif

                                @if(Session::get("fail"))
                                <div class="alert alert-danger" role="alert">

                                </div>
                                <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{ Session::get("fail") }}</strong>
                                </div>
                                @endif
                                <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="all" style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th class="all">Recettes</th>
                                            <th class="all">Categorie</th>
                                            <th style="width: 85px;">Temps de Preparation</th>
                                            <th style="width: 85px;">Nombre de Personnes</th>
                                            <th style="width: 85px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($recipes as $recipe)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                @foreach ($recipe->images as $image)
                                                <img src="{{ Storage::url($image->path) }}" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                                @endforeach

                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html.htm" class="text-body">{{$recipe->name_recipe}}</a>
                                                    <br>

                                                </p>
                                            </td>
                                            <td>
                                                {{ $recipe->category->category_name }}
                                            </td>
                                            <td>
                                                {{ $recipe->time }}
                                            </td>
                                            <td>
                                                {{ $recipe->number_person }}
                                            </td>

                                            <td class="table-action">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <div class="text-center">
                                                Aucune Recette disponible
                                            </div>

                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

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
