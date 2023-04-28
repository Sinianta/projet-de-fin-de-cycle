@component('mail::message')
# Vos informantion de connexion

Bonjour {{$personnel->name}},
Désormé vous faites partie des personnels qui travail à auto.parking.

*Mot de passe:* __{{$passe}}__
*Email:* __{{$personnel->email}}__

@component('mail::button', ['url' => url('personnel')])
Se connecter
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
