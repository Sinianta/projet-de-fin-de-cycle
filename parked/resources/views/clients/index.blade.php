@extends('clients.templete')

@section('bannier')
    <!-- BANNER -->
<section class="home-banner-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-left text-center">
                <div class="home-banner-text-setting wow slideInLeft" data-wow-duration="2s">
                    <div class="home-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Bienvenu a auto parking, Reserver facilement une place!</h1>
                        <p class="text-white">Vous pouvez reserver une place de stationnement sécurisé et satisfaisant sans complication. Pour se faire veillez suivre tous les étaps.</p>
                    </div>
                    <div class="home-banner-button list-inline">
                        <div class="free-outer list-inline-item">
                            <a href="#services-section" class="free hover-effect">Je veux reserver!!</a>
                        </div>
                        <div class="list-inline-item">
                            <a class="play-icon hover-effect" href="#video-section"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="banner-img-content position-relative">

                    <figure class="banner-arrow-img mb-0 position-absolute wow slideInRight" data-wow-duration="2s">
                        <img src="assets/images/banners-arrow-img.png" alt="">
                    </figure>
                    <div class="banner-map-img position-absolute wow swing" data-wow-duration="2s">

                    </div>
                    <figure class="banner-img mb-0 position-relative">
                        <img src="assets/images/home-bannier-imag.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('corp')


<!-- SERVICES SECTION -->
<section class="services-section position-relative" id="services-section">
    <div class="container">
        <div class="row">
            <div class="services-section-inner text-center position-relative">
                <h2 class="mb-lg-4 mb-md-3 mb-2">Les Parkings disponibles</h2>
                <p class="mb-0">Veillez choisir un parking qui vous convient. Toutefoi Si il y a pas de place disponible, vous pouvez choisir une autre.</p>
                <figure class="services-section-shape-img-1 mb-0 position-absolute">
                    <img class="img-fluid" src="assets/images/services-section-shape-img-1.png" alt="">
                </figure>
            </div>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
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
                    <form action="{{url('reserver')}}" method="get">
                        @csrf
                        <div class="form-group" style="display: none">
                            <input type="number" class="form-control"  name="parking_id" id="parking_id" value="{{$parkings->id}}">
                        </div>
                        <div class="submitform-button">
                            <a>
                                <button type="submit" id="submit" class="btn font_weight_600">Reserver ici</button>

                            </a>
                        </div>
                    </form>

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
