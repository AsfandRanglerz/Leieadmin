@extends('admin.layouts.master')
@section('title','Edit logo')
@section('content')

    @include('admin.Errors.errors')

    <div class="content" style="margin-top:50px;">

        <div class="container-fluid" style="margin-top: -50px;padding-bottom: 30px;">

            <div class="card card-primary ">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ url('admin/section/update-logo',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="section_name" value="get started">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">

                                            <input type="file" onchange="loadFile(event)"  name="logo" class="custom-file-input" value="{{$data->logo}}">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            @error('logo') <span class="text-danger">{{$errors->first('logo')}}</span> @enderror
                                        </div>
                                    </div>
                                    <div><img src="{{asset('public/uploads/'.$data->logo)}}" width="250" height="250" class="mt-1" id="output"></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>


                    </div>



                </form>
            </div>


        </div>
    </div>
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
{{--@section('script')--}}
{{--    <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        CKEDITOR.replace( 'description');--}}
{{--    </script>--}}
{{--    <script>--}}
{{--        CKEDITOR.replace( 'title');--}}
{{--    </script>--}}
{{--@endsection--}}

