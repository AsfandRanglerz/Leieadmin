@extends('admin.layouts.master')
@section('title','Plan')
@section('content')
    @include('admin.Errors.errors')

    <div class="card text-left">
        <div class="card-body">
            <h4 class="card-title mb-3">Plan List</h4>
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
                                        style="width: 132.531px;">Plane
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 239.844px;">Description
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
                                @php
                                $plan1=0
                                @endphp
                                @foreach($db_plane1 as $plan)
                                    <tr>
                                        @if($plan1==0)
                                            @php
                                                $plan1=1
                                            @endphp
                                        <td> {{'Simple rental contract'}}</td>
                                            @else
                                            <td></td>
                                        @endif
                                        <td> {{$plan->description}}</td>

                                        <td>
                                            <button class="btn bg-transparent _r_btn border-0" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                <a class="dropdown-item" href="{{route('plan.edit',$plan->id)}}">
                                                    <i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>
                                                    Edit Plan
                                                </a>
                                                <a class="dropdown-item" href="#" onclick="deleteRecord({{$plan->id}})">
                                                    <i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>
                                                    Delete Plan
                                                </a>
                                                <form id="del_form{{$plan->id}}" action="{{route('plan.destroy',$plan->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @php
                                    $plan2=0
                                @endphp
                                @foreach($db_plane2 as $plan)
                                    <tr>
                                        @if($plan2==0)
                                            @php
                                                $plan2=1
                                            @endphp
                                            <td> {{'Rent guarantee'}}</td>
                                        @else
                                            <td></td>
                                        @endif
                                        <td> {{$plan->description}}</td>

                                        <td>
                                            <button class="btn bg-transparent _r_btn border-0" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                <a class="dropdown-item" href="{{route('plan.edit',$plan->id)}}">
                                                    <i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>
                                                    Edit Plan
                                                </a>
                                                <a class="dropdown-item" href="#" onclick="deleteRecord({{$plan->id}})">
                                                    <i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>
                                                    Delete Plan
                                                </a>
                                                <form id="del_form{{$plan->id}}" action="{{route('plan.destroy',$plan->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @php
                                    $plan3=0
                                @endphp
                                @foreach($db_plane3 as $plan)
                                    <tr>
                                        @if($plan3==0)
                                            @php
                                                $plan3=1
                                            @endphp
                                            <td> {{'Recommended'}}</td>
                                        @else
                                            <td></td>
                                        @endif
                                        <td> {{$plan->description}}</td>

                                        <td>
                                            <button class="btn bg-transparent _r_btn border-0" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                <a class="dropdown-item" href="{{route('plan.edit',$plan->id)}}">
                                                    <i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>
                                                    Edit Plan
                                                </a>
                                                </a>
                                                <a class="dropdown-item" href="#" onclick="deleteRecord({{$plan->id}})">
                                                    <i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>
                                                    Delete Plan
                                                </a>
                                                <form id="del_form{{$plan->id}}" action="{{route('plan.destroy',$plan->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
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
    </script>
@endsection
