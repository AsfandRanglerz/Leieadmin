@extends('admin.layouts.master')
@section('title','Edit TermsConditions')
@section('content')

    @include('admin.Errors.errors')

    <div class="content" style="margin-top:50px;">

        <div class="container-fluid" style="margin-top: -50px;padding-bottom: 30px;">

            <div class="card card-primary ">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('termsConditions.update',$termcondition->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-12 form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."  >{{$termcondition->description}}</textarea>
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
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description');
    </script>
@endsection
