<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designation = Designation::get();
        return view('designation/index', ['designation' => $designation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $designation = new Designation();
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->status = $request->status;
        $designation->save();
        return redirect('/designation/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $status = designation::find($id);
        if ($status->status == 1) {
            designation::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            designation::where('id', $id)->update(['status' => '1']);
            return redirect()->back()->with('status1', 'Status Successfully Activated');
        }
    }



    public function edit($id)
    {
        $designation = designation::where('id', $id)->first();
        return view('designation.edit', ['designation' => $designation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $designation = designation::where('id', $id)->first();
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->status = $request->status;
        $designation->save();
        return redirect('/designation/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designation = designation::where('id', $id)->first();
        $designation->delete();
        return redirect('/designation/index');
    }
}
