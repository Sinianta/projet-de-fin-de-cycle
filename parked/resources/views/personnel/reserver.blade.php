
@extends('Personnel.templete')

@section('bannier')

<!-- SUB BANNER SECTION -->
<section class="sub-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sub-banner-text">
                    <h1 class="text-white mb-lg-4 mb-3">Géstion des reservations</h1>
                    <div class="breadcrum">
                        <span class="font-weight-normal d-inline-block text-white">Faire </span>
                        <span class="breadcrum-active font-weight-normal d-inline-block text-white">Une reservation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('corp')
<!-- MAIN SECTION -->
<section class="blog-posts single-post .text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div id="blog" class="single-post01">
                    <div class="post-item">
                        <div class="post-item-wrap">
<div class="respond-form" id="respond">
    <div class="respond-comment text-uppercase font_weight_600">
        Reserver <span>Une Place</span>
        <!--respond-comment-->
    </div>
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
    <form class="form-gray-fields" action="{{ route('persoreserver.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper " for="date_res">Date de la reservation:</label>
                    <input class="form-control  @error('date_res') is-invalid @enderror" name="date_res"  id="date_res" aria-="true" type="date" required autocomplete="date_res" min="{{ today()->format('Y-m-d') }}">
                    @error('date_res')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="date_arrive">Date d'arrivé*:</label>
                    <input class="form-control  @error('date_arrive') is-invalid @enderror" name="date_arrive"  id="date_arrive" aria-="true" type="time" required autocomplete="date_arrive">
                    @error('date_arrive')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="date_depart">Date de départ*:</label>
                    <input class="form-control  @error('date_depart') is-invalid @enderror"  id="date_depart" aria-="true" type="time" name="date_depart" required autocomplete="date_depart" >
                    @error('date_depart')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="prenom">Prenom du propiétaire*:</label>
                    <input class="form-control  @error('prenom') is-invalid @enderror" placeholder="Entrer votre prenom" id="prenom" aria-="true" type="text" name="prenom" required autocomplete="prenom">
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="nom">Nom du propiétaire*:</label>
                    <input class="form-control @error('nom') is-invalid @enderror" placeholder="Entrer Votre nom" id="nom" aria-="true" type="text" name="nom" required autocomplete="nom">
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="email">Email du propiétaire*:</label>
                    <input class="form-control  @error('email') is-invalid @enderror" placeholder="exemple@gmail.com" id="email" aria-="true" type="email" name="email" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="telphone">Numero de téléphone du propiétaire*:</label>
                    <input class="form-control @error('telphone') is-invalid @enderror" placeholder="+22177.......7" id="telphone" aria-="true" type="text" name="telphone" required autocomplete="telphone">
                    @error('telphone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="nin">Numero Identité National*:</label>
                    <input class="form-control  @error('nin') is-invalid @enderror"  id="nin" aria-="true" type="text" name="nin" required autocomplete="nin">
                    @error('nin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="plaque">Plaque d'immatricule*:</label>
                    <input class="form-control  @error('plaque') is-invalid @enderror" id="plaque" aria-="true" type="text" name="plaque" required autocomplete="plaque">
                    @error('plaque')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="upper font_weight_600" for="marque">Marque de le voiture*:</label>
                    <input class="form-control  @error('marque') is-invalid @enderror" placeholder="Bugatti" id="marque" aria-="true" type="text" name="marque" required autocomplete="marque">
                    @error('marque')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors }}</strong>
                        </span>
                    @enderror
                </div>
                <!--col-->
            </div>
            <div class="col-lg-6" style="display: none">
                <div class="form-group">
                    <input class="form-control" id="place_id" aria-="true" type="integer" value="{{$id}}" name="place_id" >

                </div>
                <!--col-->
            </div>

            <div class="col-lg-6" style="display: none">
                <div class="form-group">
                    <input class="form-control" id="parking_id" aria-="true" type="integer" value="{{Auth::user()->parking_id}}" name="parking_id" >

                </div>
                <!--col-->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group text-center">
                    <button class="btn font_weight_600" type="submit">Valider</button>

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
