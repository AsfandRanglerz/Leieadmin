@extends('frontend.frontend_panel.user_panel')
@section('content')
    <div class="property-pg">
        <h4>Add new property</h4>
        <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your
                properties</a> - <span class="text-muted">Create new property</span></p>
        <form action="{{url('/client/store-property')}}" method="post">
            @csrf
            <input type="hidden" name="check_return_pages" value="0">
            @include('frontend.front_panel_files.common.create_property_block')
            <div class="mt-md-5 mt-3 text-center">
                <button type="submit" id="property" class="btn btn-bg">Save this property</button>
            </div>
        </form>
    </div>
@endsection
