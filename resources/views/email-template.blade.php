@component('mail::message')
# Pertanyaan Baru

Nama : {{ $offer['name'] }} <br>
Email : {{ $offer['email'] }} <br>
No Telepon : {{ $offer['phone'] }} <br>
Subjek : {{ $offer['subject'] }} <br>
<br>
Pesan :
<br>
@component('mail::panel')
    {{ $offer['message'] }}
@endcomponent


@endcomponent
