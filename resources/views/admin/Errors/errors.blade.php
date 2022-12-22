{{--@if ($errors->any())--}}
{{--    @foreach ($errors->all() as $error)--}}
{{--        <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Error!</strong> {{$error}}--}}
{{--            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--@endif--}}
@if(session()->has('message'))
    <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> {{session('message')}}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
@if(session()->has('err_message'))
    <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Error!</strong> {{session('err_message')}}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
