@extends('admin.templete')

@section('bannier')

<!-- SUB BANNER SECTION -->
<section class="sub-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sub-banner-text">
                    <h1 class="text-white mb-lg-4 mb-3">Gestion des Parkings</h1>
                    <div class="breadcrum">
                        <span class="font-weight-normal d-inline-block text-white">Ajouter des </span>
                        <span class="breadcrum-active font-weight-normal d-inline-block text-white">Parkings</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('corp')
<!-- MAIN SECTION -->
<section class="blog-posts single-post">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div id="blog" class="single-post01">
                    <div class="post-item">
                        <div class="post-item-wrap">
<div class="respond-form" id="respond">
    <div class="respond-comment text-uppercase font_weight_600">
        Ajouter <span>Un parking</span>
        <!--respond-comment-->
    </div>
    <form class="form-gray-fields" action="{{ route('administrateur.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="upper font_weight_600" for="etiquette">Etiquette*:</label>
                    <input class="form-control required" name="etiquette" placeholder="Entrer etiquette" id="etiquette" aria-required="true" type="text" required>
                    <!--form-group-->
                </div>
                <!--col-->
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="upper font_weight_600" for="adresse">Adresse*:</label>
                    <input class="form-control required " placeholder="Entrer adresse" id="adresse" aria-required="true" type="text" name="adresse" required>
                    <!--form-group-->
                </div>
                <!--col-->
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="upper font_weight_600" for="adresse">Nombre de place*:</label>
                    <input class="form-control required " id="adresse" aria-required="true" type="integer" name="nbrPlace" required>
                    <!--form-group-->
                </div>
                <!--col-->
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="upper font_weight_600" for="description">Description</label>
                    <textarea class="form-control required" name="description" rows="9" placeholder="Entrer description" id="description" aria-required="true" required></textarea>
                    <!--form-group-->
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group text-center">
                    <button class="btn font_weight_600" type="submit">Valider</button>
                    <!--form-group-->
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
        <!--form-gray-fields-->
    </form>
    <!--respond-form-->
</div>
</div>
<!--post-item-->
</div>
<!--single-post01-->
</div>
<!--col-->
</div>

</div>
</div>
<!--container-->
</section>

@endsection
