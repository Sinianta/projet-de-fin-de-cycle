@extends('admin.templete')

@section('bannier')
    <!-- BANNER -->
    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Gestion des Parkings</h1>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Liste des  </span>
                            <span class="breadcrum-active font-weight-normal d-inline-block text-white">Parkings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('corp')


<!-- SERVICES SECTION -->
<section class="services-section position-relative">
    <div class="container">
        <div class="row">
            <div class="services-section-inner text-center position-relative">
                <h2 class="mb-lg-4 mb-md-3 mb-2">Les parkings disponibles</h2>
                <p class="mb-0">A partir de la liste des parkings ci-dessous vous pouvez supprimer des parkiings.</p>
                <figure class="services-section-shape-img-1 mb-0 position-absolute">
                    <img class="img-fluid" src="assets/images/services-section-shape-img-1.png" alt="">
                </figure>
            </div>
        </div>
        <div class="row">
            @foreach ($parking as $parkings)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4 text-md-left text-center">
                <div class="services-section-plan-box hover-effect">
                    <figure>
                        <h2>{{ $parkings->etiquette}}</h2>
                        {{-- <img src="assets/images/services-section-plan-box-img-1.png" alt=""> --}}
                    </figure>
                    <h4 class="font-weight-bold">{{ $parkings->adresse}}</h4>
                    <p class="text-size-16">{{ $parkings->description}}</p>
                    <a class="d-inline-block text-decoration-none" href="">
                            <form class="d-inline" action="{{ route('administrateur.destroy', $parkings->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="divider"></div>

        </div>

        <figure class="services-section-shape-img-2 mb-0 position-absolute">
            <img class="img-fluid" src="assets/images/services-section-shape-img-2.png" alt="">
        </figure>
    </div>
</section>

@endsection
