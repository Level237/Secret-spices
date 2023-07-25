@extends('layouts.admin.app')
@section('title')
Ajouter un Evenement
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.events.index') }}">Evenements</a></li>
                                <li class="breadcrumb-item active">Ajouter un Evenement</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter un Evenement</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Nom de l'evenement</label>
                                    <input type="text" id="simpleinput" name="name_event" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Date de l'evenement</label>
                                    <input type="date" id="simpleinput" name="date_event" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Lieu de l'evenement</label>
                                    <input type="text" id="simpleinput" name="lieu_event" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description de l'évenement</label>
                                    <textarea class="form-control" id="example-textarea" name="description_event" rows="5"></textarea>
                                </div>



                                <div class="fallback mb-4">
                                    <label for="example-textarea" class="form-label">Image(s) de l'évenement</label>
                                    <input name="path" class="form-control" type="file" multiple />
                                </div>




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
