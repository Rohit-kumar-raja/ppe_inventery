
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Worker</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/worker/save">
                    <div class="row">
                        @csrf

                        <div class="col-sm-6">
                            <label>Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name=" name">
                        </div>

                        <div class="col-sm-6">
                            <label>Email:</label>
                            <input type="email" class="form-control"  placeholder="Enter email" name=" email">
                        </div>

                        <div class="col-sm-6">
                            <label>Phone No:</label>
                            <input type="text" class="form-control"  placeholder="Enter Phone No" name=" phone">
                        </div>

                        <div class="col-sm-6">
                            <label>Employee UID No:</label>
                            <input type="text" class="form-control"  placeholder="Enter Employee UID No" name=" empno">
                        </div>

                        <div class="col-sm-12">
                            <label>Address:</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                        </div>                        
                    
                        <div class="col-sm-12">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
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
<!-- // model -->