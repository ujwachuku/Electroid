@component('mail::message')
# Your account is ready

Hi there {{ $user->name }}, your new account is ready, you should receive another email with a link to set your password, or you can click the button below to reset the password yourself.

@component('mail::button', ['url' => 'localhost:8000/password/reset?email=' . $user->email])
Reset My Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
