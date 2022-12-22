@component('mail::message')
Ranglerz
{{--{{dd($data)}}--}}
<h3>Your Password has been reset.</h3>
Click below link for reset your password.
<br>
@component('mail::button', ['url' => $data])
Reset Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
