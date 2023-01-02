<div class="modal fade" id="myModal_view{{ $ppe_request->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">{{ $page }} View Detail</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">

                <div class="row">
                    @csrf
                    <div class="col-sm-6">
                        <label>Date:</label>
                        <input type="text" class="form-control" disabled placeholder="Enter Name" name=" name"
                            value="{{ date('d-M-Y', strtotime($ppe_request->date)) }}">
                    </div>

                    <div class="col-sm-6">
                        <label>Store :</label>
                        <input type="text" class="form-control" disabled placeholder="Enter Area" name=" area"
                            value="{{ $ppe_request->store->name }}">
                    </div>

                    <div class="col-sm-6">
                        <label>Requested By :</label>
                        <input type="text" class="form-control" disabled placeholder="Enter City" name=" city"
                            value="{{ $ppe_request->user->name }}">
                    </div>

                    <div class="col-sm-6">
                        <label>Required By Which Date:</label>
                        <input type="text" class="form-control" disabled placeholder="Enter District"
                            name=" discrict"
                            value="{{ date('d-M-Y', strtotime($ppe_request->required_by_which_date)) }}">
                    </div>

                    <div class="col-sm-6">
                        <label>Approved By :</label>
                        <input type="text" class="form-control" disabled placeholder="Enter State" name=" state"
                            value="{{ $ppe_request->approved_by->name ?? '' }}">
                    </div>


                    <div class="col-sm-6">
                        <label>Approed Date:</label>
                        <input type="text" class="form-control" disabled placeholder="Enter Pincode" name=" pincode"
                            value="{{ $ppe_request->approved_date }}">
                    </div>
                    <div class="col-sm-12 mt-4 p-3">
                        <div class="row border">
                            <div class="col-1 border-right "> <b class="fw-bold">S.no</b></div>
                            <div class="col-3  border-right "> <b class="fw-bold">PPE Name</b> </div>
                            <div class="col-2  border-right "> <b class="fw-bold"> Requested Qty</b> </div>
                            <div class="col-2  border-right "> <b class="fw-bold"> Received Qty</b> </div>
                            <div class="col-4 "> <b class="fw-bold">Remarks</b> </div>
                        </div>
                        @php
                            $ppe_item = DB::table('ppe_request_items')
                                ->where('pee_requested_id', $ppe_request->id)
                                ->get();
                        @endphp
                        @foreach ($ppe_item as $item)
                            <div class="row border">
                                <div class="col-1 border-right"> {{$loop->iteration}}</div>
                                <div class="col-3  border-right"> {{ DB::table('ppes')->find($item->ppe_id)->name}} </div>
                                <div class="col-2  border-right"> {{$item->request_qty}} </div>
                                <div class="col-2  border-right"> {{$item->received_qty}} </div>
                                <div class="col-4"> {{$item->remarks}} </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
