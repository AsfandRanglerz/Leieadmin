@component('mail::message')
<h3>Your Password has been reset.</h3><br>
@component('mail::button', ['url' => $data])
Click Here to Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
