@component('mail::message')

    <h3>Please Click button for Email Confirmation</h3>

@component('mail::button', ['url' => $data])
Confirm Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
