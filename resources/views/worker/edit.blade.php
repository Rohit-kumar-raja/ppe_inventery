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
                            <h4 class="card-title">Edit Worker </h4>
                        </div>
                        <!-- <a class="btn btn-primary add-list btn-sm text-white"  data-toggle="modal" data-target="#myModal"><i
                                class="las la-plus mr-3"></i>Add Company</a>  -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="/worker/update/{{$worker->id}}">
                                <div class="row">
                                    @csrf

                                    <div class="col-sm-6">
                                        <label>Name:</label>
                                        <input type="text" class="form-control"  placeholder="Enter Name"
                                            name=" name" value="{{ $worker-> name}}">
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Email:</label>
                                        <input type="text" class="form-control"  placeholder="Enter Name"
                                            name=" email" value="{{ $worker-> email}}">
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Phone No:</label>
                                        <input type="text" class="form-control"  placeholder="Enter Phone No"
                                            name=" phone" value="{{ $worker-> phone}}">
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Employee UID No:</label>
                                        <input type="text" class="form-control" 
                                            placeholder="Enter Employee UID No" name=" empno"
                                            value="{{ $worker-> empno}}">
                                    </div>

                                    <div class="col-sm-12">
                                        <label>Address:</label>
                                        <textarea class="form-control" name="address" placeholder="Enter Address"
                                            >{{$worker ->address }}</textarea>
                                    </div>


                                    <div class="col-sm-12">
                                        <label>Description:</label>
                                        <textarea class="form-control" name="description" placeholder="Enter Address"
                                            >{{$worker ->description }}</textarea>
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