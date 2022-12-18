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
                <form method="POST" action="{{ route('ppe_request.save') }}">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="created_at" value="{{ date('Y-m-d h:i:s') }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="col-sm-4">
                            <label>Date :</label>
                            <input readonly type="text" class="form-control" placeholder="Enter Name"
                                value="{{ date('Y-m-d') }}" name="date">
                        </div>

                        <div class="col-sm-4">
                            <label>Issued To :</label>
                            <input type="date" class="form-control" name="required_by_which_date">
                        </div>
                        <div class="col-sm-4">
                            <label>Select Ppe  :</label>
                            <select name="ppe_request_item_id" id="" class="form-control">
                                <option selected disabled > -Select Ppe From Requested Item- </option>
                                @foreach ($ppes as $ppe )
                                  <option value="{{$ppe->id}}">{{ $ppe->id}}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Issued To :</label>
                            <input type="date" class="form-control" name="required_by_which_date">
                        </div>


                        <div class="col-sm-12">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" placeholder="Write some instruction for order Request"></textarea>
                        </div>
                    </div>


                    <div class="col-sm-12 text-center p-2">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
