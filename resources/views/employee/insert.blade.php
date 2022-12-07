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
                            <h4 class="card-title">Add {{ $page }} </h4>
                        </div>
        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="/employee/store">
                                <div class="row">
                                    @csrf
                                    <input type="hidden" name="created_at" value="{{ date('Y-m-d h:i:s') }}">

                                    <div class="col-sm-4">
                                        <label>Designation</label>
                                        <select type="text" class="form-control" placeholder="Enter Employee ID"
                                            name="designation_id">
                                            <option value="{{ $designation_id }}">{{ $page }}</option>
                                        </select>
                                    </div>

<<<<<<< HEAD
                        <div class="col-sm-4">
                            <label>Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter name" name=" name">
                        </div>

                        <div class="col-sm-4">
                            <label>Area:</label>
                            <!-- <input type="text" class="form-control"  placeholder="Enter Area" name=" area"> -->
                            <select name="area" class="form-control">
                                <option selected disabled>Select Area</option>
                                @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Applying For Position:</label>
                            <input type="text" class="form-control"  placeholder="Enter Applying For Position" name=" position">
                        </div>

                        <div class="col-sm-4">
                            <label>Father Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Father Name" name=" fathername">
                        </div>       

                        <div class="col-sm-4">
                            <label>Phone Number:</label>
                            <input type="number" class="form-control"  placeholder="Enter Phone Number" name=" mobile">
                        </div>  

                        <div class="col-sm-4">
                            <label>Marital Status:</label>
                            {{-- <input type="text" class="form-control"  placeholder="Enter Marital Status" name=" maritalstatus"> --}}
                            <select name="maritalstatus" class="form-control">
                                <option selected value="">Select Marital Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                            </select>
                        </div> 

                        <div class="col-sm-4">
                            <label>DOB:</label>
                            <input type="date" class="form-control"  placeholder="Enter DOB" name=" dob">
                        </div> 

                        <div class="col-sm-4">
                            <label>Place Of Birth:</label>
                            <input type="text" class="form-control"  placeholder="Enter Place Of Birth" name=" placebirth">
                        </div> 

                        <div class="col-sm-4">
                            <label>Qualification:</label>
                            <input type="text" class="form-control"  placeholder="Enter Qualification" name=" qualification">
                        </div> 

                        <div class="col-sm-4">
                            <label>Experience:</label>
                            <input type="text" class="form-control"  placeholder="Enter Experience" name=" exp">
                        </div> 

                        <div class="col-sm-4">
                            <label>Last Company:</label>
                            <input type="text" class="form-control"  placeholder="Enter Last Company" name=" lastcompany">
                        </div> 




                        <div class="col-sm-4">
                            <label>PAN NO:</label>
                            <input type="text" class="form-control"  placeholder="Enter PAN NO" name=" pan_no">
                        </div> 

                        <div class="col-sm-4">
                            <label> Adhar No:</label>
                            <input type="number" class="form-control"  placeholder="Enter Adhar No" name=" adhar_no">
                        </div> 

                        <div class="col-sm-4">
                            <label> Bank Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Bank Name" name=" bank_name">
                        </div> 





                        <div class="col-sm-4">
                            <label>Photo:</label>
                            <input type="file" class="form-control-file border"  name=" photo">
                        </div> 

                        <div class="col-sm-4">
                            <label>Adhar:</label>
                            <input type="file" class="form-control-file border"  name=" adhar">
                        </div> 

                        <div class="col-sm-4">
                            <label>PAN:</label>
                            <input type="file" class="form-control-file border"  name=" pan">
                        </div> 

                        <div class="col-sm-4">
                            <label>Passbook:</label>
                            <input type="file" class="form-control-file border"  name=" passbook">
                        </div> 
                                            

                        <div class="col-sm-4">
                            <label>Status:</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div> 
=======
                                    <div class="col-sm-4">
                                        <label>Area</label>
                                        <select required type="text" class="form-control"
                                            placeholder="Enter Employee ID" name="area_id">
                                            <option selected disabled> -Select- </option>
                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
>>>>>>> 1930c2bf03f4874fa9459255f179e10ad4373c49


                                    <div class="col-sm-4">
                                        <label>Employee ID:</label>
                                        <input type="text" class="form-control" placeholder="Enter Employee ID"
                                            name="empid">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter name"
                                            name="name">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Area:</label>
                                        <input type="text" class="form-control" placeholder="Enter Area"
                                            name="area">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Applying For Position:</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Applying For Position" name="position">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Father Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter Father Name"
                                            name="fathername">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Phone Number:</label>
                                        <input type="number" class="form-control" placeholder="Enter Phone Number"
                                            name="mobile">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Marital Status:</label>
                                        <select type="text" class="form-control" name="maritalstatus">
                                            <option selected disabled> -Select - </option>
                                            <option value="single">single</option>
                                            <option value="married">married</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>DOB:</label>
                                        <input type="date" class="form-control" placeholder="Enter DOB"
                                            name="dob">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Place Of Birth:</label>
                                        <input type="text" class="form-control" placeholder="Enter Place Of Birth"
                                            name="placebirth">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Qualification:</label>
                                        <input type="text" class="form-control" placeholder="Enter Qualification"
                                            name="qualification">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Experience:</label>
                                        <input type="text" class="form-control" placeholder="Enter Experience"
                                            name="exp">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Last Company:</label>
                                        <input type="text" class="form-control" placeholder="Enter Last Company"
                                            name="lastcompany">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Photo:</label>
                                        <input type="file" class="form-control-file border" name="photo">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Adhar:</label>
                                        <input type="file" class="form-control-file border" name="adhar">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>PAN:</label>
                                        <input type="file" class="form-control-file border" name="pan">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Passbook:</label>
                                        <input type="file" class="form-control-file border" name="passbook">
                                    </div>


                                    <div class="col-sm-4">
                                        <label>Status:</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-8">
                                        <label>Address:</label>
                                        <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 p-2 text-center">
                                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
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
