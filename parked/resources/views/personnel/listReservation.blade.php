@extends('personnel.templete')

@section('bannier')

<!-- SUB BANNER SECTION -->
<section class="sub-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sub-banner-text">
                    <h1 class="text-white mb-lg-4 mb-3">Voir la list des places</h1>

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
<section class="container">
    <div class=" row card-body p-0">
        <div class="table-responsive">
            <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Client</th>
                        <th>Date concerné</th>
                        <th>place</th>
                        <th>Action</th>
                        <th>état</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                        <td>{{$reservation->code}}</td>
                        <td><a href="javascript:void()" class="mr-2 bg-primary rounded-circle text-center text-uppercase d-inline-block"></a> <span class="text-pale-sky">{{$reservation->prenom}} {{$reservation->nom}}</span>
                        </td>
                        <td class="text-muted">Pour le:{{$reservation->date_res}}</td>
                        <td><a href="javascript:void()" class="text-primary">{{$reservation->place_numero}}</a></td>
                        <td>
                            @if ($reservation->etat == 'En cour')
                        <form class="d-inline" action="{{route('reservation.update', compact('reservation')) }}" method="post">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-danger">Arrêté</button>
                        </form>
                        @else
                            <span class="text-pale-sky"></span>
                        @endif
                        </td>


                        <td><span class="label label-xl label-rounded label-warning">{{$reservation->etat}}</span>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
