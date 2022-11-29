<?php

namespace App\Http\Controllers;

use App\Models\ppe;
use Illuminate\Http\Request;

class PpeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ppe.index',['ppe' =>  Ppe::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ppe = new ppe;
        $ppe->name = $request->name;
        $ppe->description = $request->description;
        $ppe->status = $request->status;
        $ppe->save();
        return redirect('/ppe/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ppe  $ppe
     * @return \Illuminate\Http\Response
     */
    public function show(ppe $ppe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ppe  $ppe
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $ppe = ppe::where('id',$id)->first();
        return view('ppe.edit',['ppe'=>$ppe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ppe  $ppe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $ppe = ppe::where('id',$id)->first();
        $ppe->name = $request->name;
        $ppe->description = $request->description;
        $ppe->status = $request->status;
        $ppe->save();
        return redirect('/ppe/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ppe  $ppe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ppe $ppe)
    {
        //
    }
}
