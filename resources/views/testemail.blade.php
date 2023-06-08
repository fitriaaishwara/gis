@component('mail::message')
{{-- # Pertanyaan Baru

Nama : {{ $offer['name'] }}
Email : {{ $offer['email'] }}
No Telepon : {{ $offer['phone'] }}
Subjek : {{ $offer['subject'] }}

@component('mail::panel')
    {{ $offer['message'] }}
@endcomponent --}}

@foreach ($messages as $item)
# {{ $item->categories->name}}

Nama : {{ $item->name }}
Email : {{ $item->email }}
No Telepon : {{ $item->phone }}
Subjek : {{ $item->subject }}

@component('mail::panel')
    {{ $item->message }}
@endcomponent

@endforeach


@endcomponent
