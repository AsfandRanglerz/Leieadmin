@component('mail::message')
Your invitation for open lease has been cancelled!

@component('mail::button', ['url' => asset('client/login')])
Sign in
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
