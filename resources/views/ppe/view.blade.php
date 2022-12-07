                                        
                                        <!-- The Modal View-->
                                        <div class="modal fade" id="myModal_view{{  $ppe-> id}}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h6 class="modal-title">PPE View Detail</h6>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="POST" action="/ppe/save">
                                                        <div class="row">
                                                            @csrf
                                                            <div class="col-sm-4">
                                                                <label>Category Id:</label>                                                                
                                                                <select name="status" class="form-control">
                                                                    <option value="{{ $ppe->cat_id }}" selected readonly>{{ $ppe->cat_id }}</option>
                                                                                                                                    
                                                                </select>                                
                                                            </div>                      
                                    
                                                            <div class="col-sm-4">
                                                                <label>Date:</label>
                                                                <input type="date" class="form-control"  name=" date" value="{{ $ppe->date }}" readonly>
                                                            </div>
                                    
                                                            <div class="col-sm-4">
                                                                <label>Name:</label>
                                                                <input type="text" class="form-control"  name=" name" placeholder="Enter Name" value="{{ $ppe->name }}" readonly>
                                                            </div>
                                    
                                                            <div class="col-sm-4">
                                                                <label>Quantity:</label>
                                                                <input type="number" class="form-control"  name=" qty" placeholder="Enter qty" value="{{ $ppe->quantity }}" readonly>
                                                            </div>
                                    
                                                            <div class="col-sm-4">
                                                                <label>Out Of Stock Date:</label>
                                                                <input type="date" class="form-control"  name=" out_of_stock_dt" placeholder="Enter Out Of Stock date" value="{{ $ppe->out_of_stock_dt }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Inward:</label>
                                                                <input type="number" class="form-control"  name=" inward" placeholder="Enter inward" value="{{ $ppe->inward }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Outward:</label>
                                                                <input type="number" class="form-control"  name=" outward" placeholder="Enter outward" value="{{ $ppe->outward }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Net:</label>
                                                                <input type="number" class="form-control"  name=" net" placeholder="Enter net" value="{{ $ppe->net }}" readonly>
                                                            </div>
                                    
                                                            <div class="col-sm-4">
                                                                <label>Place Order:</label>
                                                                <input type="number" class="form-control"  name=" placeorder" placeholder="Enter placeorder" value="{{ $ppe->placeorder }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Procurment Date:</label>
                                                                <input type="date" class="form-control"  name=" procurment_date" placeholder="Enter procurment_date" value="{{ $ppe->procurment_date }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Percentage Of Min Avg:</label>
                                                                <input type="number" class="form-control"  name=" percentage_of_min_avg" placeholder="Enter percentage_of_min_avg" value="{{ $ppe->percentage_of_min_avg }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Strore Id:</label>
                                                                <input type="number" class="form-control"  name=" strore_id" placeholder="Enter strore_id" value="{{ $ppe->strore_id }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Nature Of Obs:</label>
                                                                <input type="number" class="form-control"  name=" nature_of_obs" placeholder="Enter nature_of_obs" value="{{ $ppe->nature_of_obs }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Amc:</label>
                                                                <input type="text" class="form-control"  name=" amc" placeholder="Enter amc" value="{{ $ppe->amc }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Calibrate:</label>
                                                                <input type="text" class="form-control"  name=" calibrate" placeholder="Enter calibrate" value="{{ $ppe->calibrate }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Issue Frequency:</label>
                                                                <input type="number" class="form-control"  name=" issue_frequency" placeholder="Enter issue_frequency" value="{{ $ppe->issue_frequency }}" readonly>
                                                            </div>
                                    
                                    
                                                            <div class="col-sm-4">
                                                                <label>Description:</label>
                                                                <input type="text" class="form-control"  name=" description" placeholder="Enter description" value="{{ $ppe->description }}" readonly>
                                                            </div>
                                    
                                                            <div class="col-sm-4">
                                                                <label>Esisn No:</label>
                                                                <input type="number" class="form-control"  name=" esisn_no" placeholder="Enter esisn_no" value="{{ $ppe->esisn_no }}" readonly>
                                                            </div>
                                    
                                                            <div class="col-sm-4">
                                                                <label>Procurmnt Freq Date:</label>
                                                                <input type="date" class="form-control"  name=" procurmnt_freq_dt" placeholder="Enter procurmnt_freq_dt" value="{{ $ppe->procurmnt_freq_dt }}" readonly>
                                                            </div>
                                    
                                                        
                                                            <div class="col-sm-4">
                                                                <label>Status:</label>
                                                                <select name="status" class="form-control">
                                                                    <option value="{{ $ppe->status }}" selected disabled>{{ $ppe->status }}</option>
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
                                    <!-- // the model view end -->