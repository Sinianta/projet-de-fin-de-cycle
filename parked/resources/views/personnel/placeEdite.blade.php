@extends('personnel.templete')

@section('bannier')

<!-- SUB BANNER SECTION -->
<section class="sub-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sub-banner-text">
                    <h1 class="text-white mb-lg-4 mb-3">Blog - Single Post</h1>
                    <div class="breadcrum">
                        <span class="font-weight-normal d-inline-block text-white">Home / </span>
                        <span class="breadcrum-active font-weight-normal d-inline-block text-white">Single Post</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('corp')
<section class="about-service-section contact-page-support-section">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>

<!-- CONTACT FORM SECTION -->
<section class="customer-base-section about-page-customer-base-section contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-2 order-2 text-md-left text-center">
                <div class="customer-base-section-text position-relative">
                    <figure class="contact-form-shape-img-1 mb-0 position-absolute">
                        <img class="img-fluid" src="assets/images/contact-form-shape-img-1.png" alt="">
                    </figure>
                    <h2 class="mb-lg-4 mb-md-3 mb-2">How Can We Help Your Business To Grow?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscinge lit sed do eiusm tempor incididunt ut labore.</p>
                    <div class="contact-form">
                        <form  method="POST" action="{{ route('place.update', compact('place')) }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="date_entrer"> Numero de la place:* </label>
                                <input type="text" class="form-control"  name="numero" id="numero" placeholder="A-12" value="{{ old('numero') ?? $place->numero }}">
                            </div>
                            <div class="form-group" style="display: none">
                                <input type="number" class="form-control"  name="parking_id" id="parking_id" value="{{ old('parking_id') ?? $place->parking_id }}">
                            </div>
                            <div class="submitform-button">
                                <button type="submit" id="submit" class="submitform-btn hover-effect d-block">Soumettre</button>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
            <div class="col-xl-1 order-xl-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 order-xl-2 order-lg-2 order-md-2 order-sm-1 order-1 d-md-flex align-items-lg-start align-items-md-center">
                <div class="customer-base-section-img-content position-relative wow bounceIn" data-wow-duration="2s">
                    <figure class="customer-base-section-shape-img-2 mb-0 position-absolute">
                        <img class="img-fluid" src="assets/images/customer-base-section-shape-img-2.png" alt="">
                    </figure>
                    <figure class="customer-base-section-main-img mb-0 text-right position-relative">
                        <img class="img-fluid" src="assets/images/contact-form-section-img.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
