<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $page_name = 'Area';
    public function index()
    {
        $area = area::get();
        return view('area.index',['area' => $area]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $area = new area;
        $area->name = $request->name;
        $area->address = $request->address;
        $area->contact = $request->contact;
        $area->email = $request->email;
        $area->description = $request->description;
        $area->save();
        return redirect('area/index')->with('save',$this->page_name.' Added Successfully !!! ');
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
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = area::where('id',$id)->first();
        return view('/area/edit',['area' => $area]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $area = area::where('id',$id)->first();
        $area->name = $request->name;
        $area->address = $request->address;
        $area->contact = $request->contact;
        $area->email = $request->email;
        $area->description = $request->description;
        $area->save();
        return redirect('/area/index')->with('update',$this->page_name.' Updated Successfully !!! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = area::where('id',$id)->first();
        $area->delete();
        return redirect('/area/index')->with('delete',$this->page_name.' Deleted Successfully !!! ');;
    }
}
