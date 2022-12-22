@extends('admin.layouts.master')
@section('title','Content')
@section('content')

    @include('admin.Errors.errors')

    <div class="content" style="margin-top:50px;">

        <div class="container-fluid" style="margin-top: -50px;padding-bottom: 30px;">

            <div class="card card-primary ">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('section.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="section_name" value="rent collection">
                    <div class="card-body">

                        <input type="hidden" name="title" value="Static">
                        <input type="hidden" name="description" value="Static">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"  onchange="loadFile(event)" name="image" class="custom-file-input" value="{{$data->image}}" >
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                        </div>
                                    </div>
                                    <div><img src="{{asset('public/uploads/'.$data->image)}}" width="250" height="250" class="mt-1" id="output"></div>
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


