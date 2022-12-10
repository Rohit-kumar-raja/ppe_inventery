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
                            <h4 class="card-title">PPE List</h4>
                        </div>


                        <a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                            data-target="#myModal"><i class="las la-plus mr-3"></i>Add PPE</a>
                    </div>
                    <div class="card-body">
                        @if (session('save'))
                            <div class="alert alert-success">
                                {{ session('save') }}
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
                                        <th> Date</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Store</th>
                                        <th>Quantity</th>
                                        <th>Inward</th>
                                        <th>Outward</th>
                                        <th>Net Quantity:</th>
                                        <th>Percentage Of Min Avg</th>
                                        <th>Nature Of Obs</th>
                                        <th>Amc</th>
                                        <th>Calibrate</th>
                                        <th>ssue Frequency</th>
                                        <th>Es/isn No</th>
                                        <th>Procurmnt Freq Date</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ppe as $ppe)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d-M-Y',strtotime($ppe->date)) }}</td>
                                            <td>{{ $ppe->name }}</td>
                                            <td>{{ $ppe->categories->name}}</td>
                                            <td>{{ $ppe->store->name}}</td>
                                            <td>{{ $ppe->qty }}</td>
                                            <td>{{ $ppe->qty }}</td>
                                            <td>{{ $ppe->outward }}</td>
                                            <td>{{ $ppe->qty-$ppe->outward  }}</td>
                                            <td>{{ $ppe->percentage_of_min_avg }}</td>
                                            <td>{{ $ppe->nature_of_obs }}</td>
                                            <td>{{ $ppe->amc }}</td>
                                            <td>{{ $ppe->calibrate }}</td>
                                            <td>{{ $ppe->issue_frequency }}</td>
                                            <td>{{ $ppe->esisn_no }}</td>
                                            <td>{{ date('d-M-Y',strtotime($ppe->procurmnt_freq_dt)) }}</td>

                                            <td>{{ $ppe->description }}</td>
                                            <td>{{ $ppe->status }}</td>
                                            <td>
                                                <div class="d-flex align-items-center list-action">
                                                    <a class="badge badge-info mr-2" data-toggle="modal"
                                                    data-target="#restock{{$ppe->id}}">Re Stock</a>

                                                    <a class="badge badge-info mr-2" data-toggle="modal"
                                                        data-target="#myModal_view{{ $ppe->id }}"><i
                                                            class="fa fa-eye  mr-0"></i></a>
                                                    <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"  data-toggle="modal" data-target="#myModal_view"><i class="fa fa-eye  mr-0"></i></a> -->
                                                    <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"
                                                        href="/ppe/edit/{{ $ppe->id }}"><i
                                                            class="fa fa-pen  mr-0"></i></a>
                                                    <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"
                                                        href="/ppe/destroy/{{ $ppe->id }}"><i
                                                            class="fa fa-trash mr-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        @include('ppe.view')
                                        @include('ppe.restock')

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S.no</th>
                                        <th> Date</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Store</th>
                                        <th>Quantity</th>
                                        <th>Inward</th>
                                        <th>Outward</th>
                                        <th>Net Quantity:</th>
                                        <th>Percentage Of Min Avg</th>
                                        <th>Nature Of Obs</th>
                                        <th>Amc</th>
                                        <th>Calibrate</th>
                                        <th>ssue Frequency</th>
                                        <th>Es/isn No</th>
                                        <th>Procurmnt Freq Date</th>
                                        <th>Description</th>
                                        <th>Status</th>
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


@include('ppe.insert')
<x-foot />
<x-footer />
