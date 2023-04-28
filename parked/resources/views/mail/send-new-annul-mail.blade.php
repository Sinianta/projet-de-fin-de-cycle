@component('mail::message')
# Une nouvelle demande d'annulation

Bonjour {{$personnel->name}},
Une nouvelle demande d'annulation a été soumette par : {{$reservation->prenom}} {{$reservation->nom}} pour la reservation
avec le code : {{$reservation->code}}

@component('mail::button', ['url' => url('personnel')])
Traiter la demande
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
