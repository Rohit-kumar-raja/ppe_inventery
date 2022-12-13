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
                            <h6 class="card-title">Edit {{ $page }} </h6>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{ route('admin.update', $data->id) }}">
                                <div class="row">
                                    @csrf
                                    <input type="hidden" name="updated_at" value="{{ date('Y-m-d h:i:s') }}">
                                    <input type="hidden" value="{{$data->id}}" name="user_id">
                                    <div class="col-sm-6">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" value="{{ $data->name }}"
                                            placeholder="Enter Name" name="name">
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Email Address:</label>
                                        <input type="text" value="{{ $data->email }}" class="form-control"
                                            placeholder="Enter email" name="email">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Phone:</label>
                                        <input type="text" value="{{ $data->phone }}" class="form-control"
                                            placeholder="Enter phone" name="phone">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Type Of Admin:</label>
                                        <select class="form-control"name="type">
                                            <option value="{{ $data->type }}"> {{ $data->type}} </option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Select for Admin:</label>
                                        <select type="text" class="form-control" name="pepole_id">
                                            <option value="{{ $data->emp->id }}"> {{ $data->emp->name}} </option>
                                            @foreach ($emps as $emp)
                                                <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Pasword :</label>
                                        <input type="text" class="form-control" placeholder="Enter Password"
                                            name="password">
                                    </div>
                                    <div class="col-sm-4">
                                        <label> Confirm Pasword :</label>
                                        <input type="password" class="form-control" placeholder="Enter Confirm Password"
                                            name="password_confirmation">
                                    </div>
                                </div>
                                <hr>
                                <h2 class="title border bg-warning text-center rounded-pill p-1">All Permissions</h2>
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
                                                                    <input type="checkbox" id="dashboard"
                                                                        {{ get_permission('dashboard', $data->id) == 1 ? 'checked' : '' }}
                                                                        name="permission_name[]" value="dashboard">
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
                                                                    <input type="checkbox" id="company"
                                                                        {{ get_permission('company', $data->id) == 1 ? 'checked' : '' }}
                                                                        name="permission_name[]" value="company">
                                                                    <label for="company">Show</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="company.save"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('company.save', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="company.save">
                                                                    <label for="company.save">Add</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="company.edit"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('company.edit', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="company.edit">
                                                                    <label for="company.edit">Edit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="company.destroy"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('company.destroy', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="company.destroy">
                                                                    <label for="company.destroy">Delete</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="company.status"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('company.status', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="company.status">
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
                                                                        name="permission_name[]"
                                                                        {{ get_permission('store', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="store">
                                                                    <label for="store">Show</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="store.save"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('store.save', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="store.save">
                                                                    <label for="store.save">Add</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="store.edit"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('store.edit', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="store.edit">
                                                                    <label for="store.edit">Edit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="store.destroy"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('store.destroy', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="store.destroy">
                                                                    <label for="store.destroy">Delete</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="store.status"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('store.status', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="store.status">
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
                                                                        name="permission_name[]"
                                                                        {{ get_permission('area', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="area">
                                                                    <label for="area">Show</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="area.save"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('area.save', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="area.save">
                                                                    <label for="area.save">Add</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="area.edit"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('area.edit', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="area.edit">
                                                                    <label for="area.edit">Edit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="area.destroy"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('area.destroy', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="area.destroy">
                                                                    <label for="area.destroy">Delete</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="area.status"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('area.status', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="area.status">
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
                                                                        name="permission_name[]"
                                                                        {{ get_permission('category', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="category">
                                                                    <label for="category">Show</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="category.save"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('category.save', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="category.save">
                                                                    <label for="category.save">Add</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="category.edit"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('category.edit', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="category.edit">
                                                                    <label for="category.edit">Edit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="category.destroy"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('category.destroy', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="category.destroy">
                                                                    <label for="category.destroy">Delete</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="category.status"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('category.status', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="category.status">
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
                                                                        name="permission_name[]"
                                                                        {{ get_permission('ppe', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="ppe">
                                                                    <label for="ppe">Show</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="ppe.save"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('ppe.save', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="ppe.save">
                                                                    <label for="ppe.save">Add</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="ppe.edit"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('ppe.edit', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="ppe.edit">
                                                                    <label for="ppe.edit">Edit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="ppe.destroy"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('ppe.destroy', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="ppe.destroy">
                                                                    <label for="ppe.destroy">Delete</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="ppe.status"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('ppe.status', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="ppe.status">
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
                                                                        name="permission_name[]"
                                                                        {{ get_permission('designation', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="designation">
                                                                    <label for="designation">Show</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="designation.save"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('designation.save', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="designation.save">
                                                                    <label for="designation.save">Add</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="designation.edit"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('designation.edit', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="designation.edit">
                                                                    <label for="designation.edit">Edit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="designation.destroy"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('designation.destroy', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="designation.destroy">
                                                                    <label for="designation.destroy">Delete</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="designation.status"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('designation.status', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="designation.status">
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
                                                                        name="permission_name[]"
                                                                        {{ get_permission('employee', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="employee">
                                                                    <label for="employee">Show</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="employee.save"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('employee.save', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="employee.save">
                                                                    <label for="employee.save">Add</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->
                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="employee.edit"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('employee.edit', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="employee.edit">
                                                                    <label for="employee.edit">Edit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="employee.destroy"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('employee.destroy', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="employee.destroy">
                                                                    <label for="employee.destroy">Delete</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <!-- checkbox -->

                                                                <div class="icheck-primary ">
                                                                    <input type="checkbox" id="employee.status"
                                                                        name="permission_name[]"
                                                                        {{ get_permission('employee.status', $data->id) == 1 ? 'checked' : '' }}
                                                                        value="employee.status">
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
        </div>
    </div>
</div>


<x-foot />
<x-footer />
