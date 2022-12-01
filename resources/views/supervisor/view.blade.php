<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{ $supervisor-> id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Supervisor View Detail</h6>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="POST" >
                                                        <div class="row">
                                                            @csrf

                                                            <div class="col-sm-6">
                                                                <label>Name:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Name" name=" name"
                                                                    value="{{ $supervisor-> name}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Email:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Name" name=" name"
                                                                    value="{{ $supervisor-> email}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Phone No:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Phone No" name=" phone"
                                                                    value="{{ $supervisor-> phone}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Employee UID No:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Employee UID No" name=" empno"
                                                                    value="{{ $supervisor-> empno}}">
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <label>Address:</label>
                                                                <textarea class="form-control" name="address"
                                                                    placeholder="Enter Address"
                                                                    readonly>{{$supervisor ->address }}</textarea>
                                                            </div>
                                                                                                                        

                                                            <div class="col-sm-12">
                                                                <label>Description:</label>
                                                                <textarea class="form-control" name="description"
                                                                    placeholder="Enter Address"
                                                                    readonly>{{$supervisor ->description }}</textarea>
                                                            </div>


                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- // the model view end -->