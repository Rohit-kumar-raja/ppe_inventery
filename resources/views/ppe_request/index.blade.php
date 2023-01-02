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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>S.no</th>
                                        <th >Date</th>
                                        <th>Store</th>
                                        <th>Requested By</th>
                                        <th>Required By Which Date</th>
                                        <th>Approved By</th>
                                        <th>Approved Date</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $ppe_request)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d-M-Y', strtotime($ppe_request->date)) }}</td>
                                            <td>{{ $ppe_request->store->name }}</td>
                                            <td>{{ $ppe_request->user->name }}</td>
                                            <td>{{ date('d-M-Y', strtotime($ppe_request->required_by_which_date)) }}
                                            </td>
                                            <td>{{ $ppe_request->approved_by->name ?? '' }}</td>
                                            <td>{{ $ppe_request->approved_date }}</td>
                                            <td>{{ $ppe_request->description }}</td>
                               
                                            <td>
                                                <div class="d-flex align-items-center list-action text-center ">
                                                    <a class="badge badge-info mr-2" data-toggle="modal" data-original-title="Edit"
                                                        data-target="#myModal_view{{ $ppe_request->id }}"><i
                                                            class="fa fa-eye  mr-0"></i></a>
                                                    <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"
                                                        href="{{ route('ppe_request.edit', $ppe_request->id) }}"><i
                                                            class="fas fa-edit  mr-0"></i></a>
                                                    <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"
                                                        href="{{ route('ppe_request.delete', $ppe_request->id) }}"><i
                                                            class="fas fa-trash-alt mr-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- The Modal View-->
                                        @include('ppe_request.view')
                                        <!-- // the model view end -->
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Date</th>
                                        <th>Store</th>
                                        <th>Requested By</th>
                                        <th>Required By Which Date</th>
                                        <th>Approved By</th>
                                        <th>Approved Date</th>
                                        <th>Description</th>
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
<!-- // model -->
<x-foot />
<x-footer />
@include('ppe_request.insert')
