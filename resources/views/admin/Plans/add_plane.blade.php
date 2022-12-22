@extends('admin.layouts.master')
@section('title','Add Plan')
@section('content')

    @include('admin.Errors.errors')
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Add Plan</div>
            <form action="{{route('plan.store')}}" method="POST" autocomplete="off">
                @csrf

                <div class="row">
                    <div class="col-md-6 form-group mb-3">

                        <div class="form-group">
                            <label for="sel1">Plan</label>
                            <select class="form-control" id="sel1" name="plan">
                                <option value="">Select Plan</option>
                              <option value="1">Rental contract</option>
                              <option value="2">Rent guarantee</option>
                              <option value="3">Recommended</option>

                            </select>
                          </div>
                        @error('first_name') <span class="text-danger">This field is required</span> @enderror
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="firstName">Description</label>
                        <input class="form-control" id="firstName" name="description[]" type="text" placeholder="Enter description" >
                        @error('first_name') <span class="text-danger">This field is required</span> @enderror
                    </div>
                </div>

                <div class="row mt-n3">
                    <div class="col-11">

                    </div>
                    <div class="col-1">
                        <a class=" myclass" type="button" style="float: right;"><i class="fa fa-plus " aria-hidden="true"></i></a>
                    </div>
                </div>

                <div id="append_id">

                </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary " type="submit">Submit</button>
                    </div>

            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".myclass").click(function(){
                var op="";
                op+='<div class="row mb-3 mt-2" id="main_id">';
                op+='<div class="col-11">';
                op+='<input class="form-control" id="firstName" name="description[]" type="text" placeholder="Enter description" >';
                op+='</div>';
                op+='<div class="col-1 mt-1">';
                op+='<a class="remove" type="button" style="float: left;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                op+='</div>';
                op+='</div>';
                $("#append_id").append(op);
            });
            $(document).on('click','.remove', function(event){

                $(this).closest('#main_id').remove();

            });

        });
    </script>
@endsection
