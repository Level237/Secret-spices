@extends('layouts.admin.app')
@section('title')
Modification Produit
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
                                <li class="breadcrumb-item active">Modifier un Produit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Mise à jour Produit</h4>
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
                                    <label for="simpleinput" class="form-label">Nom du Produit</label>
                                    <input type="text" id="simpleinput" name="product_name" value={{ $product->product_name }} class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description Produit</label>
                                    <textarea class="form-control" id="example-textarea" name="product_description" rows="5">{{ $product->product_name }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Grammage Produit</label>
                                    <select class="form-select" name="weight_id" id="example-select">
                                        @foreach ($weights as $weight)
                                        <option value={{$weight->id}} @selected($product->weight_id==$weight->id)>{{$weight->weight_name}} g</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="fallback mb-4">
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
