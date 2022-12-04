<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{ $employee-> id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Employee View Detail</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        @csrf

                        <div class="col-sm-4">
                            <label>Employee ID:</label>
                            <input type="text" class="form-control" placeholder="Enter Employee ID" name=" empid" readonly value="{{$employee->empid}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" name=" name" readonly value="{{$employee->name}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Area:</label>
                            <input type="text" class="form-control" placeholder="Enter Area" name=" area" readonly value="{{$employee->area}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Applying For Position:</label>
                            <input type="text" class="form-control" placeholder="Enter Applying For Position" name=" position"  readonly value="{{$employee->position}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Father Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Father Name" name=" fathername"  readonly value="{{$employee->fathername}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Phone Number:</label>
                            <input type="number" class="form-control" placeholder="Enter Phone Number" name=" mobile"  readonly value="{{$employee->mobile}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Marital Status:</label>
                            <input type="text" class="form-control" placeholder="Enter Marital Status" name=" maritalstatus" readonly value="{{$employee->maritalstatus}}"> 
                        </div>

                        <div class="col-sm-4">
                            <label>DOB:</label>
                            <input type="date" class="form-control" placeholder="Enter DOB" name=" dob" readonly value="{{$employee->dob}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Place Of Birth:</label>
                            <input type="text" class="form-control" placeholder="Enter Place Of Birth" name=" placebirth"  readonly value="{{$employee->placebirth}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Qualification:</label>
                            <input type="text" class="form-control" placeholder="Enter Qualification" name=" qualification" readonly value="{{$employee->qualification}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Experience:</label>
                            <input type="text" class="form-control" placeholder="Enter Experience" name=" exp" readonly value="{{$employee->exp}}">
                        </div>

                        <div class="col-sm-4">
                            <label>Last Company:</label>
                            <input type="text" class="form-control" placeholder="Enter Last Company" name=" lastcompany" readonly value="{{$employee->lastcompany}}">
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
                                <option readonly value="{{$employee->status}}">{{$employee->status}}</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>


                        <div class="col-sm-8">
                            <label>Address:</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address" readonly >{{$employee->address}}</textarea>
                        </div>

                       
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- // the model view end -->