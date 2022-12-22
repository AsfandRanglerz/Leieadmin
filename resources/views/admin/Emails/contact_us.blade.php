@component('mail::message')
    <h3>Hi,You have a message.</h3>
    <br>
        Name: {{$detail['first_name']}}{{$detail['last_name']}}<br>
        Phone:{{$detail['phone']}}<br>
        Message:{{$detail['description']}}<br>
    Thanks,
    {{ config('app.name') }}
@endcomponent
