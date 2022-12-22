@extends('admin.layouts.master')
@section('content')
    @include('admin.Errors.errors')
    <style>
        .nav-tabs .active{
            background-color: #673499 !important;
            color: white !important;
        }
    </style>
    <div class="card text-left">
        <div class="card-body">
            <h4 class="card-title mb-3">User List</h4>
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tenants</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Land Lord</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table-responsive">
                        <div id="deafult_ordering_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="display table table-striped table-bordered dataTable"
                                           id="deafult_ordering_table" style="width:100%" role="grid"
                                           aria-describedby="deafult_ordering_table_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 132.531px;">Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 239.844px;">Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 104.875px;">Phone
                                            </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                                rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                                Gender
                                            </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                                rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--{{dd($data)}}--}}
                                        @foreach($tenants as $user)
                                            <tr>
                                                <td> {{$user->name}}</td>
                                                <td> {{$user->email}}</td>
                                                <td> {{$user->phone}}</td>
                                                <td> {{$user->gender}}</td>
                                                <td>
                                                    <button class="btn bg-transparent _r_btn border-0" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="_dot _r_block-dot bg-dark"></span><span
                                                            class="_dot _r_block-dot bg-dark"></span><span
                                                            class="_dot _r_block-dot bg-dark"></span></button>
                                                    <div class="dropdown-menu" x-placement="bottom-start">
                                                        <a class="dropdown-item" href="{{url('admin/edit-user/'.$user->id)}}">
                                                            <i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>
                                                            Edit User
                                                        </a>
                                                        <a class="dropdown-item" href="#" onclick="deleteRecord({{$user->id}})">
                                                            <i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>
                                                            Delete User
                                                        </a>
                                                        <form id="del_form{{$user->id}}" action="{{url('admin/delete-user/'.$user->id)}}" method="post">
                                                            @csrf
        {{--                                                    @method('DELETE')--}}
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-responsive">
                        <div id="deafult_ordering_table2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="display table table-striped table-bordered dataTable"
                                           id="deafult_ordering_table2" style="width:100%" role="grid"
                                           aria-describedby="deafult_ordering_table2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 132.531px;">Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 239.844px;">Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 104.875px;">Phone
                                            </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                                rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                                Gender
                                            </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                                rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--{{dd($data)}}--}}
                                        @foreach($land_lords as $user)
                                            <tr>
                                                <td> {{$user->name}}</td>
                                                <td> {{$user->email}}</td>
                                                <td> {{$user->phone}}</td>
                                                <td> {{$user->gender}}</td>
                                                <td>
                                                    <button class="btn bg-transparent _r_btn border-0" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="_dot _r_block-dot bg-dark"></span><span
                                                            class="_dot _r_block-dot bg-dark"></span><span
                                                            class="_dot _r_block-dot bg-dark"></span></button>
                                                    <div class="dropdown-menu" x-placement="bottom-start">
                                                        <a class="dropdown-item" href="{{url('admin/edit-user/'.$user->id)}}">
                                                            <i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>
                                                            Edit User
                                                        </a>
                                                        <a class="dropdown-item" href="#" onclick="deleteRecord({{$user->id}})">
                                                            <i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>
                                                            Delete User
                                                        </a>
                                                        <form id="del_form{{$user->id}}" action="{{url('admin/delete-user/'.$user->id)}}" method="post">
                                                            @csrf
                                                            {{--                                                    @method('DELETE')--}}
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        } );
        function deleteRecord(id)
        {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('del_form'+id).submit();
                }
            })
        }
    </script>
@endsection
