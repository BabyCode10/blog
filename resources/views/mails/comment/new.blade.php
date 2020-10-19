@component('mail::message')
New Comment in Post : {{ $title }}

Comment: {{ $comment }}

@component('mail::button', ['url' => $url])
Click me to see
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
