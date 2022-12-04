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
                            <h4 class="card-title">Edit {{ $page  }} </h4>
                        </div>
                        <!-- <a class="btn btn-primary add-list btn-sm text-white"  data-toggle="modal" data-target="#myModal"><i
                                class="las la-plus mr-3"></i>Add Company</a>  -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="/employee/update/{{$employee->id}}">
                                <div class="row">
                                    @csrf

                                    <div class="col-sm-4">
                                        <label>Employee ID:</label>
                                        <input type="text" class="form-control" placeholder="Enter Employee ID"
                                            name=" empid" value="{{$employee->empid}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter name" name=" name"
                                            value="{{$employee->name}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Area:</label>
                                        <input type="text" class="form-control" placeholder="Enter Area" name=" area"
                                            value="{{$employee->area}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Applying For Position:</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Applying For Position" name=" position"
                                            value="{{$employee->position}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Father Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter Father Name"
                                            name=" fathername" value="{{$employee->fathername}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Phone Number:</label>
                                        <input type="number" class="form-control" placeholder="Enter Phone Number"
                                            name=" mobile" value="{{$employee->mobile}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Marital Status:</label>
                                        <input type="text" class="form-control" placeholder="Enter Marital Status"
                                            name=" maritalstatus" value="{{$employee->maritalstatus}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>DOB:</label>
                                        <input type="date" class="form-control" placeholder="Enter DOB" name=" dob"
                                            value="{{$employee->dob}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Place Of Birth:</label>
                                        <input type="text" class="form-control" placeholder="Enter Place Of Birth"
                                            name=" placebirth" value="{{$employee->placebirth}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Qualification:</label>
                                        <input type="text" class="form-control" placeholder="Enter Qualification"
                                            name=" qualification" value="{{$employee->qualification}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Experience:</label>
                                        <input type="text" class="form-control" placeholder="Enter Experience"
                                            name=" exp" value="{{$employee->exp}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Last Company:</label>
                                        <input type="text" class="form-control" placeholder="Enter Last Company"
                                            name=" lastcompany" value="{{$employee->lastcompany}}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Photo:</label>
                                        <input type="file" class="form-control-file border" name=" photo">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Adhar:</label>
                                        <input type="file" class="form-control-file border" name=" adhar">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>PAN:</label>
                                        <input type="file" class="form-control-file border" name=" pan">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Passbook:</label>
                                        <input type="file" class="form-control-file border" name=" passbook">
                                    </div>


                                    <div class="col-sm-4">
                                        <label>Status:</label>
                                        <select name="status" class="form-control">
                                            <option value="{{$employee->status}}">{{$employee->status}}
                                            </option>
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-8">
                                        <label>Address:</label>
                                        <textarea class="form-control" name="address" placeholder="Enter Address"
                                            >{{$employee->address}}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<x-foot />
<x-footer />