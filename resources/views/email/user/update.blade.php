@component('mail::message')
# Profile Updated

Hi there {{ $user->name }}, your login profile was updated. To ensure your profile login remain secure, you are required to change your password. Please use the link below to login and change your password.

@component('mail::button', ['url' => 'localhost:8000/login'])
Change Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
