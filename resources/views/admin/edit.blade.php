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
                            <h6 class="card-title">Edit {{ $page}} </h6>
                        </div>                    
                       
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <form method="POST" action="/company/list/save/{{$companies-> id}}">
                    <div class="row">
                        @csrf
                        
                        <div class="col-sm-6">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name=" name" value="{{$companies-> name}}">
                        </div>

                        <div class="col-sm-6">
                            <label>Area:</label>
                            <input type="text" class="form-control" placeholder="Enter Area" name=" area" value="{{$companies-> area}}">
                        </div>

                        <div class="col-sm-6">
                            <label>City:</label>
                            <input type="text" class="form-control" placeholder="Enter City" name=" city" value="{{$companies-> city}}">
                        </div>

                        <div class="col-sm-6">
                            <label>District:</label>
                            <input type="text" class="form-control" placeholder="Enter District" name=" discrict" value="{{$companies-> discrict}}">
                        </div>

                        <div class="col-sm-6">
                            <label>State:</label>
                            <input type="text" class="form-control" placeholder="Enter State" name=" state" value="{{$companies-> state}}">
                        </div>


                        <div class="col-sm-6">
                            <label>Pincode:</label>
                            <input type="text" class="form-control" placeholder="Enter Pincode" name=" pincode" value="{{$companies-> pincode}}">
                        </div>

                        <div class="col-sm-6">
                            <label>Phone:</label>
                            <input type="number" class="form-control" placeholder="Enter Phone" name=" phone" value="{{$companies-> phone}}">
                        </div>

                        <div class="col-sm-6">
                            <label>Mobile:</label>
                            <input type="tel" class="form-control" placeholder="Enter Mobile" name=" mobile" value="{{$companies-> mobile}}">
                        </div>

                        <div class="col-sm-6">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name=" email" value="{{$companies-> email}}">
                        </div>


                        <div class="col-sm-6">
                            <label>Website:</label>
                            <input type="url" class="form-control" placeholder="Enter Website" name=" website" value="{{$companies-> website}}">
                        </div>

                        <div class="col-sm-6">
                            <label>TIN:</label>
                            <input type="text" class="form-control" placeholder="Enter TIN" name=" tin" value="{{$companies-> tin}}">
                        </div>

                        <div class="col-sm-6">
                            <label>PAN:</label>
                            <input type="text" class="form-control" placeholder="Enter PAN" name=" pan" value="{{$companies-> pan}}">
                        </div>

                      
                    </div>
                    <hr>
                    <div class="col-sm-12 text-center p-2">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
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