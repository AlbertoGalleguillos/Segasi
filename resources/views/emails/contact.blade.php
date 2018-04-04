@component('mail::message')
# Hola !

Su solicitud de contacto ha sido ingresada satisfactoriamente,
nuestros especialistas se pondrán en contacto cuanto antes.

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Saludos Cordiales,<br>
Equipo {{ config('app.name') }}
@endcomponent
