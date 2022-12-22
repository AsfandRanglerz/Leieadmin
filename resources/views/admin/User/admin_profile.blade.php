@extends('admin.layouts.master')
@section('content')
    @include('admin.Errors.errors')
     <div class="card mb-4">
            <div class="card-body">
                <div class="card-title mb-3">User Profile</div>
                <form action="{{url('/admin/update-admin-profile/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="firstName1">Name</label>
                            <input class="form-control" id="firstName1" name="name" type="text" placeholder="Enter your first name" value="{{$data->name}}">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="lastName1">Email</label>
                            <input class="form-control" id="lastName1" type="email" name="email" placeholder="Enter your last name" value="{{$data->email}}">
                        </div>
                        <div class="col-md-3" >
                            <input type="file" name="file" onchange="loadFile(event)" accept="image/png, image/jpeg" >
{{--                            <span name="old" value="{{asset('public/images/'.$data->image)}}">{{asset('public/images/'.$data->image)}}</span>--}}
                            <div>
                                <img  @if($data->image) src="{{asset('public/images/'.$data->image)}}" id="output"  width="250" height="250" @else src="" id="output"  @endif>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
@section('script')
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
                output.height = 250;
                output.width = 250;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
    @endsection
