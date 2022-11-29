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
                            <h4 class="card-title">Edit Store </h4>
                        </div>
                        <!-- <a class="btn btn-primary add-list btn-sm text-white"  data-toggle="modal" data-target="#myModal"><i
                                class="las la-plus mr-3"></i>Add Company</a>  -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="/store/save/{{$store-> id}}">
                                <div class="row">
                                    @csrf

                                    <div class="col-sm-12">
                                        <label>Name:</label>
                                        <input type="text" class="form-control"  placeholder="Enter Name"
                                            name=" name" value="{{ $store-> name}}">
                                    </div>

                                    <div class="col-sm-12">
                                        <label>Address:</label>
                                        <textarea class="form-control" name="address" placeholder="Enter Address"
                                            >{{$store ->address }}</textarea>
                                    </div>

                                    <div class="col-sm-12">
                                        <label>Description:</label>
                                        <textarea class="form-control" name="description" placeholder="Enter Address"
                                            >{{$store ->description }}</textarea>
                                    </div>

                                    <div class="col-sm-12">
                                        <label>Status:</label>
                                        <select name="status" class="form-control">
                                            <option selected readonly>{{$store->status}}</option>
                                            <option value="active" >Active</option>
                                            <option value="deactive" >Deactive</option>
                                        </select>
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