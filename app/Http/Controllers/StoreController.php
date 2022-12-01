<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public $page_name = 'Store';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.index', ['store' =>  Store::get(), 'page' => $this->page_name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        Store::insert($request->except('_token'));
        return redirect('/store/index')->with('store',$this->page_name.' Added Successfully !!! ');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $store = Store::where('id', $id)->first();
        $store->name = $request->name;
        $store->address = $request->address;
        $store->description = $request->description;
        $store->status = $request->status;
        $store->save();
        return redirect('/store/index')->with('update',$this->page_name.' Updated Successfully !!! ');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $store = Store::where('id', $id)->first();
        return view('store.edit', ['store' => $store, 'page' => $this->page_name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::where('id', $id)->first();
        $store->delete();
        return redirect('/store/index')->with('delete',$this->page_name.' Deleted Successfully !!! ');;
    }
}
