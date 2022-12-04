<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($designation_id)
    {
        $employee = Employee::where('designation_id',$designation_id)->get();
        return view('/employee/index',['employee' => $employee,'page'=>$designation_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = employee::get();
        return view('/employee/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
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
    public function destroy(Employee $employee)
    {
        //
    }
}
