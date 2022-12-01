<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{  $ppe-> id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h6 class="modal-title">PPE View Detail</h6>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="POST">
                                                        <div class="row">
                                                            @csrf

                                                            <div class="col-sm-12">
                                                                <label>Name:</label>
                                                                <input type="text" class="form-control" readonly
                                                                    placeholder="Enter Name" name=" name"
                                                                    value="{{  $ppe-> name}}">
                                                            </div>
                                                            
                                                            <div class="col-sm-12">
                                                                <label>Description:</label>
                                                                <textarea class="form-control" name="description"
                                                                    placeholder="Enter Address"
                                                                    readonly>{{ $ppe ->description }}</textarea>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <label>Status:</label>
                                                                <select name="status" class="form-control">
                                                                    <option value="" selected disabled>
                                                                        {{ $ppe->status}}</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- // the model view end -->