                                        <!-- The Modal View-->
                                        <div class="modal fade" id="restock{{ $ppe->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">PPE Re Stock</h6>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('ppe.restock') }}">
                                                            <div class="row">
                                                                <div class="col-7 border-right ">
                                                                    <div class="row">
                                                                        @csrf

                                                                        <input type="hidden" name="ppe_id"
                                                                            value="{{ $ppe->id }}">
                                                                        <input type="hidden" name="created_at"
                                                                            value="{{ date('Y-m-d h:i:s') }}"
                                                                            id="">
                                                                        <div class="col-sm-6">
                                                                            <label>Date:</label>
                                                                            <input readonly type="date"
                                                                                class="form-control" name="date"
                                                                                value="{{ date('Y-m-d') }}">
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <label>Quantity:</label>
                                                                            <input type="number" class="form-control"
                                                                                name=" qty" placeholder="Enter qty"
                                                                                value="{{ $ppe->qty }}">
                                                                        </div>
                                                                        <div class="col-sm-12 p-2 text-center">
                                                                            <button type="submit"
                                                                                class="btn btn-primary mt-2">Submit</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5 p-3">
                                                                    <h5>Re Stock Date</h5>
                                                                    @php
                                                                        $restocks = DB::table('ppe_re_stocks')->where('ppe_id', $ppe->id)->get();
                                                                    @endphp

                                                                    <ul style="number">
                                                                        @foreach ($restocks as $re)
                                                                            <li> {{ date('d-M-Y',strtotime($re->date)) }}  -  {{ $re->qty }} Qty</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- // the model view end -->
