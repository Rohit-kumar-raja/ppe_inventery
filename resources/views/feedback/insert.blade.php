
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Feedback</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/feedback/save">
                    <div class="row">
                        @csrf
                        <div class="col-sm-12">
                            <label>Subject:</label>
                            <input type="text" class="form-control" placeholder="Enter Subject" name=" subject">
                        </div>                      

                        <div class="col-sm-12">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
                        </div>

                        <div class="col-sm-12">
                            <label>Employee ID:</label>
                            <input type="text" class="form-control" placeholder="Enter Employee ID" name=" empid">
                        </div>

                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- // model -->