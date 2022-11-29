<x-layout />
<x-navbar />
<x-aside />
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">List {{ $page }} </h4>
                        </div>
                        <a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                            data-target="#myModal"><i class="las la-plus mr-3"></i>Add {{ $page }}</a>
                    </div>
                
                    <div class="card-body">
                        @if (session('store'))
                        <div class="alert alert-success">
                            {{ session('store') }}
                        </div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                    @endif
                    @if (session('update'))
                        <div class="alert alert-success">
                            {{ session('update') }}
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-secondary">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('status1'))
                        <div class="alert alert-success">
                            {{ session('status1') }}
                        </div>
                    @endif
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>Area</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Pincode</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($company as $company)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->area }}</td>
                                            <td>{{ $company->city }}</td>
                                            <td>{{ $company->state }}</td>
                                            <td>{{ $company->pincode }}</td>
                                            <td>
                                                <div class="d-flex align-items-center list-action">
                                                    <a class="badge badge-info mr-2" data-toggle="modal"
                                                        data-target="#myModal_view{{ $company->id }}"><i
                                                            class="fa fa-eye  mr-0"></i></a>
                                                    <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"  data-toggle="modal" data-target="#myModal_view"><i class="fa fa-eye  mr-0"></i></a> -->
                                                    <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"
                                                        href="/company/list/edit/{{ $company->id }}"><i
                                                            class="fa fa-pen  mr-0"></i></a>
                                                    <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"
                                                        href="/company/delete/{{ $company->id }}"><i
                                                            class="fa fa-trash mr-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- The Modal View-->
                                        @include('company.view')
                                        <!-- // the model view end -->
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>Area</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Pincode</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('company.insert')
<!-- // model -->
<x-foot />
<x-footer />
