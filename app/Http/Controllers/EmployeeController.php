<?php

namespace App\Http\Controllers;

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
        return redirect()->back()->with('save','Employee Added Successfully !!! ');
    }


    public function edit($id)
    {

        $employee = employee::where('id', $id)->first();
        $page=Designation::find($employee->designation_id)->name;
        $areas = Area::where('status', 1)->get();
        return view('/employee/edit', ['data' => $employee,'page'=>$page,'designation_id'=>$employee->designation_id, 'areas' => $areas,]);
    }


    public function update(Request $request, $id)
    {
        $employee = employee::where('id', $id)->update($request->except('_token'));
       
        return redirect()->route('employee',$request->designation_id);
    }

    public function destroy($id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee->delete();
        return redirect('employee/index');
    }
}
