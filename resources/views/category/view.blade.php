<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{  $category-> id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Category View Detail</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        @csrf

                        <div class="col-sm-12">
                            <label>Name:</label>
                            <input type="text" class="form-control" readonly placeholder="Enter Name" name=" name"
                                value="{{  $category-> name}}">
                        </div>

                        <div class="col-sm-12">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" placeholder="Enter Address"
                                readonly>{{ $category ->description }}</textarea>
                        </div>

                        <div class="col-sm-12">
                            <label>IS/EN Code:</label>
                            <input type="text" class="form-control" placeholder="Enter IS/EN Code" name=" isencode"  value="{{  $category-> isencode}}" readonly>
                        </div>


                        <div class="col-sm-12">
                            <label>Short Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Short Name" name=" shortname"  value="{{  $category-> shortname}}" readonly>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- // the model view end -->