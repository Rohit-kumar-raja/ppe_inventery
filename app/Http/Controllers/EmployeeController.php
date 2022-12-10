<?php

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Designation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index($designation_id)
    {
        $employee = Employee::where('designation_id', $designation_id)->get();
        $designation_name = Designation::find($designation_id)->name;
        return view('/employee/index', ['employee' => $employee, 'page' => $designation_name, 'designation_id' => $designation_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($designation_id)
    {
        $designation_name = Designation::find($designation_id);
        $areas = Area::where('status', 1)->get();
        return view('employee.insert', [
            'page' => $designation_name->name,
            'designation_id' => $designation_id,
            'areas' => $areas,

        ]);
    }


    public function store(Request $request)
    {
        Employee::insert($request->except('_token'));
        return redirect('/employee/index');
    }


    public function edit($id)
    {
        $employee = employee::where('id', $id)->first();
        return view('/employee/edit', ['employee' => $employee]);
    }


    public function update(Request $request, $id)
    {
        $employee = employee::where('id', $id)->first();
        $employee->empid = $request->empid;
        $employee->area = $request->area;
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->fathername = $request->fathername;
        $employee->mobile = $request->mobile;
        $employee->address = $request->address;
        $employee->mobile = $request->mobile;
        $employee->maritalstatus = $request->maritalstatus;
        $employee->dob = $request->dob;
        $employee->placebirth = $request->placebirth;
        $employee->qualification = $request->qualification;
        $employee->exp = $request->exp;
        $employee->lastcompany = $request->lastcompany;
        $employee->photo = $request->photo;
        $employee->adhar = $request->adhar;
        $employee->pan = $request->pan;
        $employee->passbook = $request->passbook;
        $employee->status = $request->status;
        $employee->save();
        return redirect('/employee/index');
    }

    public function destroy($id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee->delete();
        return redirect('employee/index');
    }
}
