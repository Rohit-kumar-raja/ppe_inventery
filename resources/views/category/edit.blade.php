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
                            <h4 class="card-title">Edit Category </h4>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="/category/update/{{$category-> id}}">
                                <div class="row">
                                    @csrf

                                    <div class="col-sm-12">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name=" name"
                                            value="{{  $category-> name}}">
                                    </div>

                                    <div class="col-sm-12">
                                        <label>Description:</label>
                                        <textarea class="form-control" name="description"
                                            placeholder="Enter Address">{{ $category ->description }}</textarea>
                                    </div>

                                    <div class="col-sm-12">
                                        <label>IS/EN Code:</label>
                                        <input type="text" class="form-control" placeholder="Enter IS/EN Code"
                                            name=" isencode" >
                                    </div>

                                    <div class="col-sm-12">
                                        <label>Short Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter Short Name"
                                            name=" shortname" >
                                    </div>

                                    <div class="col-sm-12">
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