<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{ $worker-> id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Worker View Detail</h6>
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
                                                                    value="{{ $worker-> name}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Email:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Name" name=" name"
                                                                    value="{{ $worker-> email}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Phone No:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Phone No" name=" phone"
                                                                    value="{{ $worker-> phone}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Employee UID No:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Employee UID No" name=" empno"
                                                                    value="{{ $worker-> empno}}">
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <label>Address:</label>
                                                                <textarea class="form-control" name="address"
                                                                    placeholder="Enter Address"
                                                                    readonly>{{$worker ->address }}</textarea>
                                                            </div>
                                                                                                                        

                                                            <div class="col-sm-12">
                                                                <label>Description:</label>
                                                                <textarea class="form-control" name="description"
                                                                    placeholder="Enter Address"
                                                                    readonly>{{$worker ->description }}</textarea>
                                                            </div>


                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- // the model view end -->