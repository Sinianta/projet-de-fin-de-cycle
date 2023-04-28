@extends('layouts.app')

@section('content')


<section id="get-started" class="get-started section-bg">
    <div class="container border border-warning">

      <div class="row justify-content-between gy-4 ">

<form class="row g-3 " method="POST" action="{{ route('register') }}">
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Prenom et nom*:</label>
      <div>
        <input type="text" class="form-control border border-warning @error('name') is-invalid @enderror" value="{{ old('prenom') }}" id="inputEmail4" name="name" autocomplete="name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>

    <div class="col-12">
      <label for="email" class="form-label">Email*:</label>
      <input type="email" class="form-control border border-warning" name="email" id="email" placeholder="exemple@gmail.com" autocomplete="email">
    </div>
    <div class="col-12">
      <label for="password" class="form-label">Mot de passe*:</label>
      <input type="password" class="form-control border border-warning" name="password" id="password" autocomplete="password">
    </div>
    <div class="col-12">
        <label for="password-confirm" class="form-label">Confirmer le mot de passe*:</label>
        <input type="password" class="form-control border border-warning" name="password_confirmation" id="password-confirm" autocomplete="passord-confirm">
      </div>


    <div class="col-12 d-grid gap-2">
      <button type="submit" class="btn btn-warning">{{ __('Register') }}</button>
    </div>
</form>
</div>

</div>
</section>
  @endsection
