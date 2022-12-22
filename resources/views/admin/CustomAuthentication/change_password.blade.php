@extends('admin.layouts.master')

@section('content')
@include('admin.Errors.errors')
    <form action="{{url('/change-password')}}" method="POST">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Password</h5>
        </div>
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <input class="form-control" type="password" placeholder="Enter Old Password" name="old_password" autocomplete="false">
                @error('old_password')
                <span class="text-danger">This field is required</span>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control  @error('password') is-invalid @enderror" type="password" placeholder="Enter New Password" name="password" autocomplete="false">
            </div>
            <div class="form-group">
                <input class="form-control  @error('password') is-invalid @enderror" type="password" placeholder="Re-Enter New Password" name="password_confirmation" autocomplete="false">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>
        <button class="btn btn-primary" type="submit">
            Save changes
        </button>
    </form>


@endsection
