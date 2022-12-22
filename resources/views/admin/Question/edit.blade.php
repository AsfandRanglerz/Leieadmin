@extends('admin.layouts.master')
@section('title','Edit Question')
@section('content')

    @include('admin.Errors.errors')

    <div class="content" style="margin-top:50px;">

        <div class="container-fluid" style="margin-top: -50px;padding-bottom: 30px;">

            <div class="card card-primary ">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('question.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="section_name" value="get started">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-12 form-group">
                                <label>Title</label>
                                <textarea name="question" class="form-control" rows="3" placeholder="Enter ..." required>{{$data->question}}</textarea>
                                @error('question') <span class="text-danger">{{$errors->first('question')}}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 form-group">
                                <label>Description</label>
                                <textarea name="answer" class="form-control" rows="3" placeholder="Enter ..." required>{{$data->answer}}</textarea>
                                @error('answer') <span class="text-danger">{{$errors->first('answer')}}</span> @enderror
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>


                    </div>



                </form>
            </div>


        </div>
    </div>

@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'answer');
    </script>

@endsection

