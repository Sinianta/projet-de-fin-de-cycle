@extends('clients.templete')

@section('bannier')

<!-- SUB BANNER SECTION -->
<section class="sub-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sub-banner-text">
                    <h1 class="text-white mb-lg-4 mb-3">La page d'ajout des places</h1>
                    {{-- <div class="breadcrum">
                        <span class="font-weight-normal d-inline-block text-white">Home / </span>
                        <span class="breadcrum-active font-weight-normal d-inline-block text-white">Single Post</span>
                    </div> --}}
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
            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 d-md-flex align-items-lg-start align-items-md-center">
                <div class="about-service-section-img-content position-relative wow bounceIn" data-wow-duration="2s">
                    <figure class="about-service-section-shape-img-2 mb-0 position-absolute">
                        <img class="img-fluid" src="assets/images/about-service-section-shape-img-2.png" alt="">
                    </figure>
                    <figure class="about-service-section-main-img mb-0 position-relative">
                        <img class="img-fluid" src="assets/images/contact-page-support-section-img.png" alt="">
                    </figure>
                    {{-- <div class="counter-box position-absolute">
                        <figure class="plus-icon float-left mb-0">
                            <img class="img-fluid" src="assets/images/client-icon.png" alt="">
                        </figure>
                        <span class="number count d-inline-block">1675</span>
                        <span class="suffix d-inline-block">+</span>
                        <span class="customer d-block">Trusted Clients</span>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 text-md-left text-center">
                <div class="about-service-section-text position-relative">
                    <figure class="about-service-section-shape-img-1 mb-0 position-absolute">
                        <img class="img-fluid" src="assets/images/about-service-section-shape-img-1.png" alt="">
                    </figure>
                    <h2 class="mb-lg-4 mb-md-3 mb-2">contacter directement</h2>
                    <p>Nous contacter directement en cas d'urgence via email ou appelle téléphonique.</p>
                    <div class="contact-box hover-effect">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <figure class="mb-0 text-center">
                                    <img class="img-fluid" src="assets/images/email-icon.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-9 col-12">
                                <h4 class="font-weight-bold">Email:</h4>
                                <a class="d-block text-decoration-none text-size-16" href="mailto:support@hotline.com">parking.auto@gmail.com</a>
                                <a class="d-block text-decoration-none text-size-16" href="mailto:customers@hotline.com">ousmane.sinianta@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-box hover-effect">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <figure class="mb-0 text-center">
                                    <img class="img-fluid" src="assets/images/phone-icon.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-9 col-12">
                                <h4 class="font-weight-bold">Phone:</h4>
                                <a class="d-block text-decoration-none text-size-16" href="tel:+12345678901">+221 77 633 32 37</a>
                                <a class="d-block text-decoration-none text-size-16" href="tel:+23456789012">+221 70 532 37 83</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="contact-box hover-effect mb-0">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <figure class="mb-0 text-center">
                                    <img class="img-fluid" src="assets/images/mail-icon.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-9 col-12">
                                <h4 class="font-weight-bold">Mailing Address:</h4>
                                <span class="d-block text-size-16">121 King Street Melbourne, 3000, Australia</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
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
                    <h2 class="mb-lg-4 mb-md-3 mb-2">Faire un demande d'annulation </h2>
                    <p>Demander l'annulation de votre reservation si besoin en laissant le motif.</p>
                    @if (session('nom'))
                        <div class="alert alert-success">{{ session('demande envoyer') }}</div>
                    @endif
                    <div class="contact-form">
                        <form  method="get" action="{{ route('persoreserver.create') }}">
                            @csrf
                            <div class="form-group">
                                <label for="date_entrer">Code de la reservarion:* </label>
                                <input type="text" class="form-control"  name="code" id="code" placeholder="code">
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="upper " for="modif">Motif*:</label>
                                        <input type="text" class="form-control required" name="modif" rows="10" placeholder="Entrer le motif" id="motif" aria-required="true">
                                        {{-- <textarea class="form-control required" name="modif" type="text" rows="10" placeholder="Entrer le motif" id="motif" aria-required="true"></textarea> --}}
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
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
                        <img class="img-fluid" src="assets/images/photo-1.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
