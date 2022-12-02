<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add {{ $page }}</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/admin/save">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="created_at" value="{{ date('Y-m-d h:i:s') }}">
                        <div class="col-sm-6">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>

                        <div class="col-sm-6">
                            <label>Email Address:</label>
                            <input type="text" class="form-control" placeholder="Enter email" name="email">
                        </div>

                        <div class="col-sm-6">
                            <label>Phone:</label>
                            <input type="text" class="form-control" placeholder="Enter phone" name="phone">
                        </div>

                        <div class="col-sm-6">
                            <label>Type Of Admin:</label>
                            <select class="form-control"name="type">
                                <option selected disabled> -Select- </option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->type }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Select for Admin:</label>
                            <select type="text" class="form-control" name="worker_id"> 
                                <option selected disabled > - Select - </option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label>Pasword :</label>
                            <input type="text" class="form-control" placeholder="Enter Password" name="password">
                        </div>
                        <div class="col-sm-6">
                            <label> Confirm Pasword :</label>
                            <input type="password" class="form-control" placeholder="Enter Confirm Password"
                                name="confirmation_password">
                        </div>
                    </div>
                    <hr>
                    <h2 class="title border bg-warning text-center rounded-pill p-1">All Permissions</h2>
                    <hr>
                    <div class="card-body">
                        <!-- Minimal style -->
                        <div class="row">
                            @foreach ($all_routes as $route)
                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <div class="card card-primary">
                                            <div class="border text-center bg-primary">
                                                <h4 class="card-title pt-2">{{ $route->getName() }}</h4>
                                            </div>
                                            <div class="card-body ">
                                                <!-- Minimal style -->
                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <!-- checkbox -->
                                                        <div class="icheck-primary ">
                                                            <input type="checkbox" id="checkboxPrimary1_1"
                                                                name="permission[]" value="3_1">
                                                            <label for="checkboxPrimary1_1">Show</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <!-- checkbox -->

                                                        <div class="icheck-primary ">
                                                            <input type="checkbox" id="checkboxPrimary1_1"
                                                                name="permission[]" value="3_1">
                                                            <label for="checkboxPrimary1_1">Edit</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <!-- checkbox -->

                                                        <div class="icheck-primary ">
                                                            <input type="checkbox" id="checkboxPrimary1_1"
                                                                name="permission[]" value="3_1">
                                                            <label for="checkboxPrimary1_1">Delete</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <!-- checkbox -->

                                                        <div class="icheck-primary ">
                                                            <input type="checkbox" id="checkboxPrimary1_1"
                                                                name="permission[]" value="3_1">
                                                            <label for="checkboxPrimary1_1">Status</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
