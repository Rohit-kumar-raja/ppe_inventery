
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog  modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add PPE</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/ppe/save">
                    <div class="row">
                        @csrf
                        <div class="col-sm-4">
                            <label>Category Id:</label>
                            {{-- <input type="text" class="form-control" placeholder="Enter Category Id" name=" cat_id"> --}}
                            <select name="status" class="form-control">
                                <option value="" selected disabled>Select Status</option>
                                @foreach($category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                
                            </select>

                        </div>                      

                        <div class="col-sm-4">
                            <label>Date:</label>
                            <input type="date" class="form-control"  name=" date" >
                        </div>

                        <div class="col-sm-4">
                            <label>Name:</label>
                            <input type="text" class="form-control"  name=" name" placeholder="Enter Name">
                        </div>

                        <div class="col-sm-4">
                            <label>Quantity:</label>
                            <input type="number" class="form-control"  name=" qty" placeholder="Enter qty">
                        </div>

                        <div class="col-sm-4">
                            <label>Out Of Stock Date:</label>
                            <input type="date" class="form-control"  name=" out_of_stock_dt" placeholder="Enter Out Of Stock date">
                        </div>


                        <div class="col-sm-4">
                            <label>Inward:</label>
                            <input type="number" class="form-control"  name=" inward" placeholder="Enter inward">
                        </div>


                        <div class="col-sm-4">
                            <label>Outward:</label>
                            <input type="number" class="form-control"  name=" outward" placeholder="Enter outward">
                        </div>


                        <div class="col-sm-4">
                            <label>Net:</label>
                            <input type="number" class="form-control"  name=" net" placeholder="Enter net">
                        </div>

                        <div class="col-sm-4">
                            <label>Place Order:</label>
                            <input type="number" class="form-control"  name=" placeorder" placeholder="Enter placeorder">
                        </div>


                        <div class="col-sm-4">
                            <label>Procurment Date:</label>
                            <input type="date" class="form-control"  name=" procurment_date" placeholder="Enter procurment_date">
                        </div>


                        <div class="col-sm-4">
                            <label>Percentage Of Min Avg:</label>
                            <input type="number" class="form-control"  name=" percentage_of_min_avg" placeholder="Enter percentage_of_min_avg">
                        </div>


                        <div class="col-sm-4">
                            <label>Strore Id:</label>
                            <input type="number" class="form-control"  name=" strore_id" placeholder="Enter strore_id">
                        </div>


                        <div class="col-sm-4">
                            <label>Nature Of Obs:</label>
                            <input type="number" class="form-control"  name=" nature_of_obs" placeholder="Enter nature_of_obs">
                        </div>


                        <div class="col-sm-4">
                            <label>Amc:</label>
                            <input type="text" class="form-control"  name=" amc" placeholder="Enter amc">
                        </div>


                        <div class="col-sm-4">
                            <label>Calibrate:</label>
                            <input type="text" class="form-control"  name=" calibrate" placeholder="Enter calibrate">
                        </div>


                        <div class="col-sm-4">
                            <label>Issue Frequency:</label>
                            <input type="number" class="form-control"  name=" issue_frequency" placeholder="Enter issue_frequency">
                        </div>


                        <div class="col-sm-4">
                            <label>Description:</label>
                            <input type="text" class="form-control"  name=" description" placeholder="Enter description">
                        </div>

                        <div class="col-sm-4">
                            <label>Esisn No:</label>
                            <input type="number" class="form-control"  name=" esisn_no" placeholder="Enter esisn_no">
                        </div>

                        <div class="col-sm-4">
                            <label>Procurmnt Freq Date:</label>
                            <input type="date" class="form-control"  name=" procurmnt_freq_dt" placeholder="Enter procurmnt_freq_dt">
                        </div>

                    
                        <div class="col-sm-4">
                            <label>Status:</label>
                            <select name="status" class="form-control">
                                <option value="" selected disabled>Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
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