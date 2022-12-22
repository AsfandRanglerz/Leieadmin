@extends('frontend.frontend_panel.user_panel')
@section('content')
    <h4>All leases</h4>
{{--    {{$data}}--}}
    <p><span class="fa fa-home"></span> - <span class="text-muted"> Your leases</span></p>
    @include('frontend.front_panel_files.common.all_leases_block')
@endsection
