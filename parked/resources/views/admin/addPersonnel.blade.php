@extends('admin.templete')


  @section('bannier')

  <!-- SUB BANNER SECTION -->
  <section class="sub-banner-section">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                  <div class="sub-banner-text">
                      <h1 class="text-white mb-lg-4 mb-3">Gestion des personnels</h1>
                      <div class="breadcrum">
                        <span class="font-weight-normal d-inline-block text-white">Ajouter des  </span>
                          <span class="breadcrum-active font-weight-normal d-inline-block text-white">Personnels</span>
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
<section class="customer-base-section about-page-customer-base-section contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-2 order-2 text-md-left text-center">
                <div class="customer-base-section-text position-relative">
                    <figure class="contact-form-shape-img-1 mb-0 position-absolute">
                        <img class="img-fluid" src="assets/images/contact-form-shape-img-1.png" alt="">
                    </figure>
                    <h2 class="mb-lg-4 mb-md-3 mb-2">Souhaiteriez vous ajouter des personnels</h2>
                    <p>Ajouter une nouvelle personnel à partir du formulaire suivant.</p>
                    @if (session('passe'))
                    <div class="alert alert-danger">son password: {{ session('passe') }}</div>
                @endif
                    <div class="contact-form">
                        <form  method="POST" action="{{ route('user.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prénom Nom" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email:" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="parking_id">Son parking*: <small>(optionel)</small></label>
                                <select id="parking_id" class="form-control select-option" name="parking_id">
                                    @foreach ($parking as $parkings)
                                        <option selected value='{{$parkings->id}}'>{{ $parkings->etiquette}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="submitform-button">
                                <button type="submit" id="submit" class="submitform-btn hover-effect d-block">Enregistré</button>
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
                        <img class="img-fluid" src="assets/images/agent.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
