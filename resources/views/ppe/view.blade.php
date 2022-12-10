                                        <!-- The Modal View-->
                                        <div class="modal fade" id="myModal_view{{ $ppe->id }}">
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
                                                        <form>
                                                            <div class="row">
                                                                @csrf
                                                                <div class="col-sm-4">
                                                                    <label>Category Id:</label>
                                                                    <select disabled name="category_id"
                                                                        class="form-control">
                                                                        <option selected disabled
                                                                            value="{{ $ppe->categories->id }}">
                                                                            {{ $ppe->categories->name }}
                                                                        </option>
                                                                    </select>

                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label> Seelect Store:</label>
                                                                    <select disabled type="text" class="form-control"
                                                                        placeholder="Enter email" name="store_id">
                                                                        <option selected disabled
                                                                            value="{{ $ppe->store->id }}">
                                                                            {{ $ppe->store->name }}</option>

                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Date:</label>
                                                                    <input disabled type="date" class="form-control"
                                                                        name=" date" value="{{ $ppe->date }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Name:</label>
                                                                    <input disabled type="text" class="form-control"
                                                                        name=" name" placeholder="Enter Name"
                                                                        value="{{ $ppe->name }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Quantity:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name=" qty" placeholder="Enter qty"
                                                                        value="{{ $ppe->qty }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Inward:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name=" qty" placeholder="Enter qty"
                                                                        value="{{ $ppe->qty }}">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Outward:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name=" qty" placeholder="Enter qty"
                                                                        value="{{ $ppe->outward }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Net Quantity:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name="qty" placeholder="Enter qty"
                                                                        value="{{ $ppe->qty-$ppe->outward }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Procurment Date:</label>
                                                                    <input disabled type="date" class="form-control"
                                                                        name=" procurment_date"
                                                                        placeholder="Enter procurment_date"
                                                                        value="{{ $ppe->procurment_date }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Percentage Of Min Avg:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name=" percentage_of_min_avg"
                                                                        placeholder="Enter percentage_of_min_avg"
                                                                        value="{{ $ppe->percentage_of_min_avg }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Nature Of Obs:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name=" nature_of_obs"
                                                                        placeholder="Enter nature_of_obs"
                                                                        value="{{ $ppe->nature_of_obs }}">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Amc:</label>
                                                                    <input disabled type="text" class="form-control"
                                                                        name=" amc" placeholder="Enter amc"
                                                                        value="{{ $ppe->amc }}">
                                                                </div>


                                                                <div class="col-sm-4">
                                                                    <label>Calibrate:</label>
                                                                    <input disabled type="text" class="form-control"
                                                                        name=" calibrate" placeholder="Enter calibrate"
                                                                        value="{{ $ppe->calibrate }}">
                                                                </div>


                                                                <div class="col-sm-4">
                                                                    <label>Issue Frequency:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name=" issue_frequency"
                                                                        placeholder="Enter issue_frequency"
                                                                        value="{{ $ppe->issue_frequency }}">
                                                                </div>


                                                                <div class="col-sm-4">
                                                                    <label>Esisn_no:</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        name=" esisn_no" placeholder="Enter esisn_no"
                                                                        value="{{ $ppe->esisn_no }}">
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Procurmnt Freq Date:</label>
                                                                    <input disabled type="date" class="form-control"
                                                                        name=" procurmnt_freq_dt"
                                                                        placeholder="Enter procurmnt_freq_dt"
                                                                        value="{{ $ppe->procurmnt_freq_dt }}">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Status:</label>
                                                                    <select disabled name="status"
                                                                        class="form-control">
                                                                        <option value="1">Active</option>
                                                                        <option value="0">Deactive</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>Description:</label>
                                                                    <textarea disabled type="text" class="form-control" name="description" placeholder="Enter description"> {{ $ppe->description }}</textarea>
                                                                </div>

                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- // the model view end -->
