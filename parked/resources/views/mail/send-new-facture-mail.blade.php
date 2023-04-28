@component('mail::message')
# Facture de la reservation

Bonjour {{$reservation->prenom}} {{$reservation->nom}} ,
Votre demande de reservation a bien été traité. Veillez recevoir la facture!

@component('mail::button', ['url' => url('facture',compact('reservation','montant'))])
Voir facture
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
