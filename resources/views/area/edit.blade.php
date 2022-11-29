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
                            <h4 class="card-title">Edit Area </h4>
                        </div>
                        <!-- <a class="btn btn-primary add-list btn-sm text-white"  data-toggle="modal" data-target="#myModal"><i
                                class="las la-plus mr-3"></i>Add Company</a>  -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <form method="POST" action="/area/update/{{$area->id}}">
                    <div class="row">
                        @csrf

                        <div class="col-sm-12">
                            <label>Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name=" name" value="{{$area->name}}">
                        </div>

                        <div class="col-sm-12">
                            <label>Address:</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address">{{$area->address}}</textarea>
                        </div>

                        <div class="col-sm-12">
                            <label>Contact:</label>
                            <input type="text" class="form-control"  placeholder="Enter Contact No"
                                name=" contact" value="{{$area->contact}}">
                        </div>

                        <div class="col-sm-12">
                            <label>Email:</label>
                            <input type="text" class="form-control"  placeholder="Enter Email" name=" email" value="{{$area->email}}">
                        </div>

                        <div class="col-sm-12">
                            <label>Description:</label>
                            <textarea class="form-control" name="description"
                                placeholder="Enter Description">{{$area->description}}</textarea>
                        </div>
                        <div class="col-sm-6">
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