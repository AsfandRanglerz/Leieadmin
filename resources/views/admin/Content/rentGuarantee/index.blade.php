@extends('admin.layouts.master')
@section('title','Content')
@section('content')
    @include('admin.Errors.errors')
    <div class="card text-left">
        <div class="card-body">
            <h4 class="card-title mb-3">Content</h4>
            <div class="table-responsive">
                <div id="deafult_ordering_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="display table table-striped table-bordered dataTable text-center"
                                   id="deafult_ordering_table" style="width:100%" role="grid"
                                   aria-describedby="deafult_ordering_table_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 239.844px;">Title
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="deafult_ordering_table" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 239.844px;">Image
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

                                @forelse($data as $detail)
                                    <tr>
                                        <td> {!! $detail->title !!}</td>

                                        <td> @if($detail->image) <img src="{{asset('public/uploads/'.$detail->image)}}"  height="60px" width="90px" class="elevation-2" alt="Profession Image">@else N/A @endif</td>
                                        <td> {!! $detail->description !!}</td>
                                        <td>
                                            <button class="btn bg-transparent _r_btn border-0" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span><span
                                                    class="_dot _r_block-dot bg-dark"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                <a class="dropdown-item" href="{{route('section.edit',$detail->id)}}">
                                                    <i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>
                                                    Edit
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


