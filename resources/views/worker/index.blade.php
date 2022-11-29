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
                            <h4 class="card-title">Worker List</h4>
                        </div>


                        <a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                            data-target="#myModal"><i class="las la-plus mr-3"></i>Add Worker</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $worker as $worker)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $worker-> name}}</td>
                                        <td>{{ $worker-> email}}</td>
                                        <td>{{ $worker-> phone}}</td>
                                        <td>{{ $worker-> address}}</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="modal"
                                                    data-target="#myModal_view{{ $worker-> id}}"><i
                                                        class="fa fa-eye  mr-0"></i></a>
                                                <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"  data-toggle="modal" data-target="#myModal_view"><i class="fa fa-eye  mr-0"></i></a> -->
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit"
                                                    href="/worker/edit/{{ $worker-> id}}"><i
                                                        class="fa fa-pen  mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="/worker/delete/{{ $worker-> id}}"><i
                                                        class="fa fa-trash mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>



                                    <!-- The Modal View-->
                                    <div class="modal fade" id="myModal_view{{ $worker-> id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Worker View Detail</h6>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="POST" >
                                                        <div class="row">
                                                            @csrf

                                                            <div class="col-sm-6">
                                                                <label>Name:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Name" name=" name"
                                                                    value="{{ $worker-> name}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Email:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Name" name=" name"
                                                                    value="{{ $worker-> email}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Phone No:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Phone No" name=" phone"
                                                                    value="{{ $worker-> phone}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Employee UID No:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Employee UID No" name=" empno"
                                                                    value="{{ $worker-> empno}}">
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <label>Address:</label>
                                                                <textarea class="form-control" name="address"
                                                                    placeholder="Enter Address"
                                                                    readonly>{{$worker ->address }}</textarea>
                                                            </div>
                                                                                                                        

                                                            <div class="col-sm-12">
                                                                <label>Description:</label>
                                                                <textarea class="form-control" name="description"
                                                                    placeholder="Enter Address"
                                                                    readonly>{{$worker ->description }}</textarea>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
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





<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Worker</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/worker/save">
                    <div class="row">
                        @csrf

                        <div class="col-sm-6">
                            <label>Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name=" name">
                        </div>

                        <div class="col-sm-6">
                            <label>Email:</label>
                            <input type="email" class="form-control"  placeholder="Enter email" name=" email">
                        </div>

                        <div class="col-sm-6">
                            <label>Phone No:</label>
                            <input type="text" class="form-control"  placeholder="Enter Phone No" name=" phone">
                        </div>

                        <div class="col-sm-6">
                            <label>Employee UID No:</label>
                            <input type="text" class="form-control"  placeholder="Enter Employee UID No" name=" empno">
                        </div>

                        <div class="col-sm-12">
                            <label>Address:</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                        </div>                        
                    
                        <div class="col-sm-12">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
                        </div>

                        <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- // model -->
<x-foot />
<x-footer />