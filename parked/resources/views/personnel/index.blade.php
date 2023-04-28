@extends('personnel.templete')

@section('bannier')

<!-- SUB BANNER SECTION -->
<section class="sub-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sub-banner-text">
                    <h1 class="text-white mb-lg-4 mb-3">consultation des places</h1>
                    <div class="breadcrum">
                        <span class="font-weight-normal d-inline-block text-white">Liste </span>
                        <span class="breadcrum-active font-weight-normal d-inline-block text-white">des Places</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('corp')

<section class=" blog-posts">

    <div id="blog" class="col-xl-12">
       <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          @foreach ($places as $place)
          <div class="col-xl-2 col-lg-6">
            <div class="float-left w-100 post-item border mb-4">
               <div class="post-item-wrap position-relative">
                  <div id="blogslider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <h3>{{$place->numero}}</h3>

                     </div>

                  </div>

                  @if ($place->disponibilite == 'Libre')
                    <form class="d-inline" action="{{route('place.destroy', compact('place')) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn outline-none post-meta-category"><a>Supprimer</a> </button>
                    </form>
                  @else
                  <form class="d-inline" action="{{route('place.update', compact('place')) }}" method="post">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn outline-none post-meta-category"><a>Libérer</a> </button>
                </form>
                  @endif


                  <div class="post-item-description">
                     <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Créer le : {{$place->created_at}}</span>
                     {{-- <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span> --}}
                     <h4>Pour le moment, cette place est : <a href="#">{{$place->disponibilite}}</a></h4>
                     @if ($place->disponibilite == 'Libre')
                     <form action="{{url('perserver')}}" method="get">
                        @csrf
                        <input type="integer" name="place_id" value="{{$place->id}}" style="display: none">
                        <button class="btn border-0 rounded-0 outline-none">
                            <a class="item-link">Reserver la place <i class="fa fa-arrow-right"></i></a>

                        </button>
                     </form>
                            {{-- <a href="single-post.html" class="item-link">Reserver la place <i class="fa fa-arrow-right"></i></a> --}}

                     @else
                     <a class="item-link">Impossible de resever!! </a>

                     @endif
                     <!--post-item-description-->
                  </div>
                  <!--post-item-wrap-->
               </div>
               <!--post-item-->
            </div>
            <!--col-->
         </div>
        @endforeach

        <!--blog-->
     </div>
  </section>
@endsection
