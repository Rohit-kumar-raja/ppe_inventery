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
                            <h4 class="card-title">Edit PPE </h4>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{ route('ppe.update', $ppe->id) }}">
                                <div class="row">
                                    @csrf
                                    <div class="col-sm-4">
                                        <label>Category Id:</label>
                                        <select name="category_id" class="form-control">
                                            <option value="{{ $ppe->categories->id }}">{{ $ppe->categories->name }}
                                            </option>
                                            @foreach ($category as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                    <div class="col-sm-4">
                                        <label> Seelect Store:</label>
                                        <select type="text" class="form-control" placeholder="Enter email"
                                            name="store_id">
                                            {{-- <option value="{{ $pee }}">{{ $ppe }}</option> --}}
                                            @foreach ($stores as $store)
                                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Date:</label>
                                        <input type="date" class="form-control" name=" date"
                                            value="{{ $ppe->date }}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" name=" name"
                                            placeholder="Enter Name" value="{{ $ppe->name }}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Quantity:</label>
                                        <input type="number" class="form-control" name=" qty"
                                            placeholder="Enter qty" value="{{ $ppe->qty }}">
                                    </div>




                                    <div class="col-sm-4">
                                        <label>Procurment Date:</label>
                                        <input type="date" class="form-control" name=" procurment_date"
                                            placeholder="Enter procurment_date" value="{{ $ppe->procurment_date }}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Percentage Of Min Avg:</label>
                                        <input type="number" class="form-control" name=" percentage_of_min_avg"
                                            placeholder="Enter percentage_of_min_avg"
                                            value="{{ $ppe->percentage_of_min_avg }}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Nature Of Obs:</label>
                                        <input type="number" class="form-control" name=" nature_of_obs"
                                            placeholder="Enter nature_of_obs" value="{{ $ppe->nature_of_obs }}">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Amc:</label>
                                        <input type="text" class="form-control" name=" amc"
                                            placeholder="Enter amc" value="{{ $ppe->amc }}">
                                    </div>


                                    <div class="col-sm-4">
                                        <label>Calibrate:</label>
                                        <input type="text" class="form-control" name=" calibrate"
                                            placeholder="Enter calibrate" value="{{ $ppe->calibrate }}">
                                    </div>


                                    <div class="col-sm-4">
                                        <label>Issue Frequency:</label>
                                        <input type="number" class="form-control" name=" issue_frequency"
                                            placeholder="Enter issue_frequency" value="{{ $ppe->issue_frequency }}">
                                    </div>


                                    <div class="col-sm-4">
                                        <label>Esisn_no:</label>
                                        <input type="number" class="form-control" name=" esisn_no"
                                            placeholder="Enter esisn_no" value="{{ $ppe->esisn_no }}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Procurmnt Freq Date:</label>
                                        <input type="date" class="form-control" name=" procurmnt_freq_dt"
                                            placeholder="Enter procurmnt_freq_dt"
                                            value="{{ $ppe->procurmnt_freq_dt }}">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Status:</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Description:</label>
                                        <textarea type="text" class="form-control" name="description"
                                            placeholder="Enter description" > {{ $ppe->description }}</textarea>
                                    </div>
                                    <hr>
                                    <div class="col-sm-12 text-center p-2">
                                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                    </div>
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
