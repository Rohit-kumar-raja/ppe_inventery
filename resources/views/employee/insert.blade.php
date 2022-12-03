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
                            <h4 class="card-title">Add Employee </h4>
                        </div>
                        <!-- <a class="btn btn-primary add-list btn-sm text-white"  data-toggle="modal" data-target="#myModal"><i
                                class="las la-plus mr-3"></i>Add Company</a>  -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                <form method="POST" action="/employee/store">
                    <div class="row">
                        @csrf

                        <div class="col-sm-4">
                            <label>Employee ID:</label>
                            <input type="text" class="form-control"  placeholder="Enter Employee ID" name=" empid">
                        </div>

                        <div class="col-sm-4">
                            <label>Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter name" name=" name">
                        </div>

                        <div class="col-sm-4">
                            <label>Area:</label>
                            <input type="text" class="form-control"  placeholder="Enter Area" name=" area">
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
                            <input type="text" class="form-control"  placeholder="Enter Marital Status" name=" maritalstatus">
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


                        <div class="col-sm-8">
                            <label>Address:</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
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
        </div>
    </div>
</div>


<x-foot />
<x-footer />