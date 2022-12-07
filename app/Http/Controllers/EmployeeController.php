<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $page_name = "Employee";
    public function index()
    {
        $employee = Employee::get();        
        return view('/employee/index',['employee' => $employee ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = employee::get();
        $areas = Area::where('status','1')->get();
        return view('/employee/insert',[ 'areas' => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // employee::insert($request->except('_token'));      
        
        
        $request->validate([
            'photo' => 'max:2048',
            'adhar' => 'max:2048',
            'pan' => 'max:2048',
            'passbook' => 'max:2048',
        ]);

        $id = Employee::insertGetId($request->except('_token'));

        // if ($request->file('photo')) {
        //     Employee::where('id', $id)->update([
        //         'photo' => $this->insert_image($request->file('photo'), 'matches'),
        //     ]);
        // }
        // if ($request->file('adhar')) {
        //     Employee::where('id', $id)->update([
        //         'adhar' => $this->insert_image($request->file('adhar'), 'matches'),
        //     ]);
        // }
        // if ($request->file('pan')) {
        //     Employee::where('id', $id)->update([
        //         'pan' => $this->insert_image($request->file('pan'), 'matches'),
        //     ]);
        // }
        // if ($request->file('passbook')) {
        //     Employee::where('id', $id)->update([
        //         'passbook' => $this->insert_image($request->file('passbook'), 'matches'),
        //     ]);
        // }


        return redirect('/employee/index')->with('save',$this->page_name.' Inserted Successfully !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = employee::where('id',$id)->first();
        return view('/employee/edit',['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = employee::where('id',$id)->first();
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::where('id',$id)->first();
        $employee->delete();
        return redirect('employee/index');
    }
}
