@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => asset('leases-detail/'.$id)])
open
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
