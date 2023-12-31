@extends('layouts.admin.app')
@section('title')
Ajouter une Categorie
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categorie</a></li>
                                <li class="breadcrumb-item active">Ajouter une Categorie</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter une Categorie</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Nom de la Categorie</label>
                                    <input type="text" id="simpleinput" name="category_name" class="form-control">
                                </div>
                                @error('category_name')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror

                                <button type="submit" class="btn bag-primary text-white" style="background-color: #c70609">Enregistrer</button>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->



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
