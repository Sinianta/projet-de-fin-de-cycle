@extends('admin.templete')

@section('bannier')

<!-- SUB BANNER SECTION -->
<section class="sub-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sub-banner-text">
                    <h1 class="text-white mb-lg-4 mb-3">consultation des personnels</h1>
                    <div class="breadcrum">
                        <span class="font-weight-normal d-inline-block text-white">Liste </span>
                        <span class="breadcrum-active font-weight-normal d-inline-block text-white">des Personnels</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('corp')


  <section class="services-section position-relative">
    <div class="container">
        <div class="row">
            <div class="services-section-inner text-center position-relative">
                <h2 class="mb-lg-4 mb-md-3 mb-2">Liste des personnels</h2>
                <p class="mb-0">tous les personnels des différents parkings, il possible d'en supprimer en cas de besoin.</p>
                <figure class="services-section-shape-img-1 mb-0 position-absolute">
                    <img class="img-fluid" src="assets/images/services-section-shape-img-1.png" alt="">
                </figure>
            </div>
        </div>
        <div class="row">
            @foreach ($personnel as $user)
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4 text-md-left text-center">
                <div class="services-section-plan-box hover-effect">
                    <figure>
                        <img src="assets/images/logo-personnel.png" alt="">
                    </figure>
                    <h4 class="font-weight-bold">{{$user->name}}</h4>
                    <p class="text-size-16">Email: {{$user->email}}</p>
                    <a class="d-inline-block text-decoration-none" href="#">
                        <form class="d-inline" action="{{route('user.destroy',compact('user'))}}"  method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn outline-none post-meta-category"><a>Supprimer</a> </button>
                        </form>
                    </a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
@endsection
