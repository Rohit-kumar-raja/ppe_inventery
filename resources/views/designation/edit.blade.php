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
                            <h4 class="card-title">Edit Designation </h4>
                        </div>
                        <!-- <a class="btn btn-primary add-list btn-sm text-white"  data-toggle="modal" data-target="#myModal"><i
                                class="las la-plus mr-3"></i>Add Company</a>  -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="/designation/update/{{$designation->id}}">
                                <div class="row">
                                    @csrf

                                    <div class="col-sm-6">
                                        <label>Name:</label>
                                        <input type="text" class="form-control"  placeholder="Enter Name"
                                            name=" name" value="{{ $designation-> name}}">
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Status:</label>
                                       <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Description:</label>
                                        <textarea class="form-control" name="description" placeholder="Enter Description"
                                            >{{$designation ->description }}</textarea>
                                    </div>
                                    <div class="col-sm-12 text-center p-3">
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