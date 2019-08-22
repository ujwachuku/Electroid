@component('mail::message')
# Your account is ready

Hi there {{ $user->name }}, your new account is ready, please use your email address to login.

@component('mail::button', ['url' => 'localhost:8000/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
