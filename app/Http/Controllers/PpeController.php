<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ppe;
use App\Models\PpeReStock;
use Illuminate\Http\Request;
use App\Models\Store;


class PpeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $page_name = 'PPE';
    public function index()
    {
        $stores = Store::where('status', 1)->get();
        $category = Category::get();

        return view('ppe.index', ['ppe' =>  Ppe::get(), 'stores' => $stores, 'category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        ppe::insert($request->except('_token'));
        return redirect('/ppe/index')->with('save', $this->page_name . ' Inserted Successfully !!!');
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
    public function edit($id)
    {
        $ppe = ppe::find($id);
        $stores = Store::where('status', 1)->get();
        $category = Category::get();
        return view('ppe.edit', ['ppe' => $ppe, 'stores' => $stores, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ppe  $ppe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ppe = ppe::where('id', $id)->first();
        $ppe->name = $request->name;
        $ppe->description = $request->description;
        $ppe->status = $request->status;
        $ppe->save();
        return redirect('/ppe/index')->with('update', $this->page_name . ' Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ppe  $ppe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppe = ppe::where('id', $id)->first();
        $ppe->delete();
        return redirect('/ppe/index')->with('delete', $this->page_name . ' Deleted Successfully !!!');
    }

    public function restock(Request $request)
    {
       // dd($request);
        PpeReStock::insert($request->except('_token'));
        ppe::where('id',$request->ppe_id)->update(['qty'=>ppe::find($request->ppe_id)->qty+$request->qty]);
        return back()->with('store', $this->page_name . ' Re Stock Added Successfully !!!');
    }
}
