@component('mail::message')

Selamat bergabung dengan SIANGSA! Mari kita ciptakan lingkungan yang lebih baik.

@component('mail::button', ['url' => 'http://siangsa.com'])
Masuk Siangsa
@endcomponent

@component('mail::panel', ['url' => ''])
Mari selamatkan lingkungan kita mulai dari diri sendiri.
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
