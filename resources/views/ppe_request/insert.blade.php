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
                        <div class="col-sm-4">
                            <label>Date :</label>
                            <input readonly type="text" class="form-control" placeholder="Enter Name"
                                value="{{ date('Y-m-d') }}" name="date">
                        </div>

                        <div class="col-sm-4">
                            <label>Select Store : </label>
                            <select type="text" class="form-control" placeholder="Enter email" name="email">
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Required By Which Date:</label>
                            <input type="date" class="form-control" name="required_by_which_date">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" placeholder="Write some instruction for order Request"></textarea>
                        </div>
                    </div>
                    <hr>
                    <h2 class="title border bg-warning text-center rounded-pill p-1">Request Item</h2>
                    <hr>
                    <div class="card-body">
                        <!-- Minimal style -->
                        <table class="table table-bordered" id="dynamic_field" style="overflow-y:auto;">
                            <thead>
                                <tr>
                                    <th data-field="S.NO" data-sortable="true" rowspan="2">S.no</th>
                                    <th data-field="SubjectName" data-sortable="true" rowspan="2">PPE Name </th>
                                    <th data-field="SubjectCode" data-sortable="true" rowspan="2">Quantity</th>
                                    <th data-field="ExamDate" data-sortable="true" rowspan="2">Remarks</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="5%">
                                        <input type="text" id="slno1" value="1" readonly
                                            class="form-control" />
                                    </td>
                                    <td width="30%"><select type="text" name="ppe_id[]"
                                            placeholder="Subject Name"class="form-control">

                                            <option selected disabled> -choose Ppe- </option>
                                            @foreach ($ppes as $ppe )
                                                <option value="{{$ppe->id}}">{{$pee->name}} - </option>
                                            @endforeach
                                        </select></td>
                                    <td width="25%"><input type="text" name="request_qty[]"
                                            placeholder="Subject Code" class="form-control" /></td>
                                    <td width="30%">
                                        <textarea name="remarks[]" placeholder="Exam Date" class="form-control"> </textarea>
                                    </td>

                                    <td width="5%"><button type="button" name="add" id="add"
                                            class="btn btn-success"><i class="fa fa-plus"
                                                aria-hidden="true"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
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
<script>
    $(document).ready(function() {
        var i = 1;

        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i +
                '" class="dynamic-added" ><td><input type="text" id="slno' + i + '" value="' + i +
                '" readonly class="form-control" style="border:none;" /></td>' +
                '<td><input type="text" name="subject_name[]" placeholder="Subject Name" class="form-control" /></td>' +
                '<td width="25%"><input type="text" name="subject_code[]" placeholder="Subject Code" class="form-control" /></td>' +
                '<td width="10%"><input type="date" name="exam_date[]" placeholder="Exam Date" class="form-control" /></td>' +
                '</td><td><button type="button" name="remove" id="' + i +
                '" class="btn btn-danger btn_remove">X</button></td>' +
                '</tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            i--;
            $('#row' + button_id + '').remove();
        });

    });
</script>
