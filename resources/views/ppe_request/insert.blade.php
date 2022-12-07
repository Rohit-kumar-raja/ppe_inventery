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
                <form method="POST" action="{{ route('admin.save') }}">
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
                                <option selected disabled> - Select - </option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label>Pasword :</label>
                            <input type="text" class="form-control" placeholder="Enter Password" name="password">
                        </div>
                        <div class="col-sm-6">
                            <label> Confirm Pasword :</label>
                            <input type="password" class="form-control" placeholder="Enter Confirm Password"
                                name="password_confirmation">
                        </div>
                    </div>
                    <hr>
                    <h2 class="title border bg-warning text-center rounded-pill p-1">Request Item</h2>
                    <hr>
                    <div class="card-body">
                        <!-- Minimal style -->
                        <div class="row">


                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">dashboard</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="dashboard" name="permission_name[]"
                                                            value="dashboard">
                                                        <label for="dashboard">Show</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">company</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="company" name="permission_name[]"
                                                            value="company">
                                                        <label for="company">Show</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="company.save"
                                                            name="permission_name[]" value="company.save">
                                                        <label for="company.save">Add</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="company.edit"
                                                            name="permission_name[]" value="company.edit">
                                                        <label for="company.edit">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="company.destroy"
                                                            name="permission_name[]" value="company.destroy">
                                                        <label for="company.destroy">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="company.status"
                                                            name="permission_name[]" value="company.status">
                                                        <label for="company.status">Status</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">Store</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="store"
                                                            name="permission_name[]" value="store">
                                                        <label for="store">Show</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="store.save"
                                                            name="permission_name[]" value="store.save">
                                                        <label for="store.save">Add</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="store.edit"
                                                            name="permission_name[]" value="store.edit">
                                                        <label for="store.edit">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="store.destroy"
                                                            name="permission_name[]" value="store.destroy">
                                                        <label for="store.destroy">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="store.status"
                                                            name="permission_name[]" value="store.status">
                                                        <label for="store.status">Status</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">Area</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="area"
                                                            name="permission_name[]" value="area">
                                                        <label for="area">Show</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="area.save"
                                                            name="permission_name[]" value="area.save">
                                                        <label for="area.save">Add</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="area.edit"
                                                            name="permission_name[]" value="area.edit">
                                                        <label for="area.edit">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="area.destroy"
                                                            name="permission_name[]" value="area.destroy">
                                                        <label for="area.destroy">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="area.status"
                                                            name="permission_name[]" value="area.status">
                                                        <label for="area.status">Status</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">category</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="category"
                                                            name="permission_name[]" value="category">
                                                        <label for="category">Show</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="category.save"
                                                            name="permission_name[]" value="category.save">
                                                        <label for="category.save">Add</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="category.edit"
                                                            name="permission_name[]" value="category.edit">
                                                        <label for="category.edit">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="category.destroy"
                                                            name="permission_name[]" value="category.destroy">
                                                        <label for="category.destroy">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="category.status"
                                                            name="permission_name[]" value="category.status">
                                                        <label for="category.status">Status</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">PEE</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="ppe"
                                                            name="permission_name[]" value="ppe">
                                                        <label for="ppe">Show</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="ppe.save"
                                                            name="permission_name[]" value="ppe.save">
                                                        <label for="ppe.save">Add</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="ppe.edit"
                                                            name="permission_name[]" value="ppe.edit">
                                                        <label for="ppe.edit">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="ppe.destroy"
                                                            name="permission_name[]" value="ppe.destroy">
                                                        <label for="ppe.destroy">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="ppe.status"
                                                            name="permission_name[]" value="ppe.status">
                                                        <label for="ppe.status">Status</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">Designation</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="designation"
                                                            name="permission_name[]" value="designation">
                                                        <label for="designation">Show</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="designation.save"
                                                            name="permission_name[]" value="designation.save">
                                                        <label for="designation.save">Add</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="designation.edit"
                                                            name="permission_name[]" value="designation.edit">
                                                        <label for="designation.edit">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="designation.destroy"
                                                            name="permission_name[]" value="designation.destroy">
                                                        <label for="designation.destroy">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="designation.status"
                                                            name="permission_name[]" value="designation.status">
                                                        <label for="designation.status">Status</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        <div class="border text-center bg-primary">
                                            <h4 class="card-title pt-2">Employee</h4>
                                        </div>
                                        <div class="card-body ">
                                            <!-- Minimal style -->
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="employee"
                                                            name="permission_name[]" value="employee">
                                                        <label for="employee">Show</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="employee.save"
                                                            name="permission_name[]" value="employee.save">
                                                        <label for="employee.save">Add</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <!-- checkbox -->
                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="employee.edit"
                                                            name="permission_name[]" value="employee.edit">
                                                        <label for="employee.edit">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="employee.destroy"
                                                            name="permission_name[]" value="employee.destroy">
                                                        <label for="employee.destroy">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- checkbox -->

                                                    <div class="icheck-primary ">
                                                        <input type="checkbox" id="employee.status"
                                                            name="permission_name[]" value="employee.status">
                                                        <label for="employee.status">Status</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
