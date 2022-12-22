@extends('admin.layouts.master')
@section('content')

    @include('admin.Errors.errors')
    <div class="card text-left">
        <div class="card-body">
            <h4 class="card-title mb-3">User List</h4>
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
                                        style="width: 132.531px;">Street Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 239.844px;">Street Number
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 104.875px;">Zip Code
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                        rowspan="1" colspan="1" aria-sort="descending"
                                        aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                        City
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                        rowspan="1" colspan="1" aria-sort="descending"
                                        aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                        Commune
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                        rowspan="1" colspan="1" aria-sort="descending"
                                        aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                        Usage Number
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                        rowspan="1" colspan="1" aria-sort="descending"
                                        aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                        Farm Number
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                        rowspan="1" colspan="1" aria-sort="descending"
                                        aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                        Fixed Number
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="deafult_ordering_table"
                                        rowspan="1" colspan="1" aria-sort="descending"
                                        aria-label="Age: activate to sort column ascending" style="width: 49.9844px;">
                                        Section Number
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
                                @foreach($data as $user)
                                    <tr>
                                        <td> {{$user->street_name}}</td>
                                        <td> {{$user->street_number}}</td>
                                        <td> {{$user->zip_code}}</td>
                                        <td> {{$user->city}}</td>
                                        <td> {{$user->commune}}</td>
                                        <td> {{$user->usage_number}}</td>
                                        <td> {{$user->farm_number}}</td>
                                        <td> {{$user->fixed_number}}</td>
                                        <td> {{$user->section_number}}</td>
                                        <td>
                                            <button class="btn bg-transparent _r_btn border-0" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                <a class="dropdown-item" href="{{route('admin-property.edit',$user->id)}}">
                                                    <i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>
                                                    Edit Property
                                                </a>
                                                <a class="dropdown-item" href="#" onclick="deleteRecord({{$user->id}})">
                                                    <i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>
                                                    Delete Property
                                                </a>
                                                <form id="del_form{{$user->id}}" action="{{route('admin-property.destroy',$user->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                            @if($user->status=='block')
                                                <a href="{{url('admin/admin-property/unblock'.$user->id)}}">
                                                    <i class="fa fa-lock text-danger" style="cursor: pointer;font-size: 15px;"  aria-hidden="true"></i>
                                                </a>

                                            @else
                                                <span class="mt-5">
                                                    <i class="fa fa-unlock " style="color: green;cursor: pointer;font-size: 15px;" onclick="blockProperty({{$user->id}})" aria-hidden="true"></i>
                                                </span>
                                            @endif

                                            <form id="block_form{{$user->id}}" action="{{url('admin/admin-property/block'.$user->id)}}" method="post">
                                                @csrf
                                                @method('get')
                                            </form>
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
@endsection
@section('script')
    <script>
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
        function blockProperty(id)
        {
            Swal.fire({
                title: 'Are you sure?',
                text: "You  are able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, block it!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('block_form'+id).submit();
                }
            })
        }
    </script>
@endsection
