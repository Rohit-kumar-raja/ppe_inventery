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
                            <h4 class="card-title">List Company </h4>
                        </div>


                        <a class="btn btn-primary add-list btn-sm text-white" data-toggle="modal"
                            data-target="#myModal"><i class="las la-plus mr-3"></i>Add Company</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Area</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Pincode</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($company as $company)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$company-> name}}</td>
                                        <td>{{$company-> area}}</td>
                                        <td>{{$company-> city}}</td>
                                        <td>{{$company-> state}}</td>
                                        <td>{{$company-> pincode}}</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="modal"
                                                    data-target="#myModal_view{{$company-> id}}"><i
                                                        class="fa fa-eye  mr-0"></i></a>
                                                <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"  data-toggle="modal" data-target="#myModal_view"><i class="fa fa-eye  mr-0"></i></a> -->
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit"
                                                    href="/company/list/edit/{{$company-> id}}"><i
                                                        class="fa fa-pen  mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="/company/delete/{{$company-> id}}"><i
                                                        class="fa fa-trash mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>



                                    <!-- The Modal View-->
                                    <div class="modal fade" id="myModal_view{{$company-> id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Company View Detail</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="POST">
                                                        <div class="row">
                                                            @csrf

                                                            <div class="col-sm-6">
                                                                <label>Name:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Name" name=" name"
                                                                    value="{{$company-> name}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Area:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Area" name=" area"
                                                                    value="{{ $company-> area}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>City:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter City" name=" city"
                                                                    value="{{ $company-> city}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>District:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter District" name=" discrict"
                                                                    value="{{ $company-> discrict}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>State:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter State" name=" state"
                                                                    value="{{ $company-> state}}">
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <label>Pincode:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Pincode" name=" pincode"
                                                                    value="{{ $company-> pincode}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Phone:</label>
                                                                <input type="number" class="form-control" readonly
                                                                    placeholder="Enter Phone" name=" phone"
                                                                    value="{{ $company-> phone}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Mobile:</label>
                                                                <input type="tel" class="form-control" readonly
                                                                    placeholder="Enter Mobile" name=" mobile"
                                                                    value="{{ $company-> mobile}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Email:</label>
                                                                <input type="email" class="form-control" readonly
                                                                    placeholder="Enter Email" name=" email"
                                                                    value="{{ $company-> email}}">
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <label>Website:</label>
                                                                <input type="url" class="form-control" readonly
                                                                    placeholder="Enter Website" name=" website"
                                                                    value="{{ $company-> website}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>TIN:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter TIN" name=" tin"
                                                                    value="{{ $company-> tin}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>PAN:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter PAN" name=" pan"
                                                                    value="{{ $company-> pan}}">
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





<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Company</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/company/save">
                    <div class="row">
                        @csrf
                        <div class="col-sm-6">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name=" name">
                        </div>

                        <div class="col-sm-6">
                            <label>Area:</label>
                            <input type="text" class="form-control" placeholder="Enter Area" name=" area">
                        </div>

                        <div class="col-sm-6">
                            <label>City:</label>
                            <input type="text" class="form-control" placeholder="Enter City" name=" city">
                        </div>

                        <div class="col-sm-6">
                            <label>District:</label>
                            <input type="text" class="form-control" placeholder="Enter District" name=" discrict">
                        </div>

                        <div class="col-sm-6">
                            <label>State:</label>
                            <input type="text" class="form-control" placeholder="Enter State" name=" state">
                        </div>


                        <div class="col-sm-6">
                            <label>Pincode:</label>
                            <input type="text" class="form-control" placeholder="Enter Pincode" name=" pincode">
                        </div>

                        <div class="col-sm-6">
                            <label>Phone:</label>
                            <input type="number" class="form-control" placeholder="Enter Phone" name=" phone">
                        </div>

                        <div class="col-sm-6">
                            <label>Mobile:</label>
                            <input type="tel" class="form-control" placeholder="Enter Mobile" name=" mobile">
                        </div>

                        <div class="col-sm-6">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name=" email">
                        </div>


                        <div class="col-sm-6">
                            <label>Website:</label>
                            <input type="url" class="form-control" placeholder="Enter Website" name=" website">
                        </div>

                        <div class="col-sm-6">
                            <label>TIN:</label>
                            <input type="text" class="form-control" placeholder="Enter TIN" name=" tin">
                        </div>

                        <div class="col-sm-6">
                            <label>PAN:</label>
                            <input type="text" class="form-control" placeholder="Enter PAN" name=" pan">
                        </div>

                        <div class="col-sm-6">
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