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
                            <h4 class="card-title">Store List</h4>
                        </div>
                        <a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                            data-target="#myModal"><i class="las la-plus mr-3"></i>Add Store</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($store as $store)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $store->name }}</td>
                                            <td>{{ $store->address }}</td>
                                            <td>{{ $store->description }}</td>
                                            <td>{{ $store->status }}</td>
                                            <td>
                                                <div class="d-flex align-items-center list-action">
                                                    <a class="badge badge-info mr-2" data-toggle="modal"
                                                        data-target="#myModal_view{{ $store->id }}"><i
                                                            class="fas fa-eye  mr-0"></i></a>
                                                    <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"  data-toggle="modal" data-target="#myModal_view"><i class="fa fa-eye  mr-0"></i></a> -->
                                                    <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"
                                                        href="/store/edit/{{ $store->id }}"><i
                                                            class="fas fa-edit  mr-0"></i></a>
                                                    <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"
                                                        href="/store/destroy/{{ $store->id }}"><i
                                                            class="fas fa-trash-alt mr-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- The Modal View-->
                                        <div class="modal fade" id="myModal_view{{ $store->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Store View Detail</h6>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form method="POST">
                                                            <div class="row">
                                                                @csrf

                                                                <div class="col-sm-12">
                                                                    <label>Name:</label>
                                                                    <input type="text" class="form-control" readonly
                                                                        placeholder="Enter Name" name=" name"
                                                                        value="{{ $store->name }}">
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <label>Address:</label>
                                                                    <textarea class="form-control" name="address" placeholder="Enter Address" readonly>{{ $store->address }}</textarea>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <label>Description:</label>
                                                                    <textarea class="form-control" name="description" placeholder="Enter Address" readonly>{{ $store->description }}</textarea>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <label>Status:</label>
                                                                    <select name="status" class="form-control">
                                                                        <option value="" selected disabled>
                                                                            {{ $store->status }}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- // the model view end -->
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>Address</th>
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
@include('store.insert')
<!-- // model -->
<x-foot />
<x-footer />
