<div class="modal fade" id="myModal_view{{ $ppe_request->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">{{ $page}} View Detail</h4>
                <button type="button" class="close"
                    data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        @csrf

                        <div class="col-sm-6">
                            <label>Name:</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter Name" name=" name"
                                value="{{ $ppe_request->name }}">
                        </div>

                        <div class="col-sm-6">
                            <label>Area:</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter Area" name=" area"
                                value="{{ $ppe_request->area }}">
                        </div>

                        <div class="col-sm-6">
                            <label>City:</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter City" name=" city"
                                value="{{ $ppe_request->city }}">
                        </div>

                        <div class="col-sm-6">
                            <label>District:</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter District" name=" discrict"
                                value="{{ $ppe_request->discrict }}">
                        </div>

                        <div class="col-sm-6">
                            <label>State:</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter State" name=" state"
                                value="{{ $ppe_request->state }}">
                        </div>


                        <div class="col-sm-6">
                            <label>Pincode:</label>
                            <input type="text" class="form-control" readonly
                                placeholder="Enter Pincode" name=" pincode"
                                value="{{ $ppe_request->pincode }}">
                        </div>

                        <div class="col-sm-6">
                            <label>Phone:</label>
                            <input type="number" class="form-control" readonly
                                placeholder="Enter Phone" name=" phone"
                                value="{{ $ppe_request->phone }}">
                        </div>

                        <div class="col-sm-6">
                            <label>Mobile:</label>
                            <input type="tel" class="form-control" readonly
                                placeholder="Enter Mobile" name=" mobile"
                                value="{{ $ppe_request->mobile }}">
                        </div>

                        <div class="col-sm-6">
                            <label>Email:</label>
                            <input type="email" class="form-control"
                                readonly placeholder="Enter Email"
                                name=" email"
                                value="{{ $ppe_request->email }}">
                        </div>


                        <div class="col-sm-6">
                            <label>Website:</label>
                            <input type="url" class="form-control"
                                readonly placeholder="Enter Website"
                                name=" website"
                                value="{{ $ppe_request->website }}">
                        </div>

                        <div class="col-sm-6">
                            <label>TIN:</label>
                            <input type="text" class="form-control"
                                readonly placeholder="Enter TIN"
                                name=" tin" value="{{ $ppe_request->tin }}">
                        </div>

                        <div class="col-sm-6">
                            <label>PAN:</label>
                            <input type="text" class="form-control"
                                readonly placeholder="Enter PAN"
                                name=" pan" value="{{ $ppe_request->pan }}">
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>