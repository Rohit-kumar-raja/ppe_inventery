<?php

namespace App\Http\Controllers;

use App\Models\ppe;
use App\Models\PppRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PppRequestController extends Controller
{

    public $page_name = 'Ppp Request';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::where('status', 1)->get();
        $ppes = ppe::where('status', 1)->get();
        if (Auth::user()->type == "superadmin") {
            $data = PppRequest::all();
        } else {
            $data = PppRequest::where('user_id', Auth::user()->id)->get();
        }
        return view('ppe_request.index', ['data' => $data, 'store' => $store, 'ppes' => $ppes, 'page' => $this->page_name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        PppRequest::insertGetId($request->except('_token'));
        return redirect()->route('ppe_request')->with('store', $this->page_name . ' Added Successfully !!! ');;
    }

    /**
     * PppRequest a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $PppRequest = PppRequest::where('id', $id)->first();
        $PppRequest->name = $request->name;
        $PppRequest->address = $request->address;
        $PppRequest->description = $request->description;
        $PppRequest->status = $request->status;
        $PppRequest->save();
        return redirect()->route('ppe_request')->with('update', $this->page_name . ' Updated Successfully !!! ');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PppRequest  $PppRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PppRequest $PppRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PppRequest  $PppRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $PppRequest = PppRequest::where('id', $id)->first();
        return view('PppRequest.edit', ['data' => $PppRequest, 'page' => $this->page_name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PppRequest  $PppRequest
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PppRequest  $PppRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PppRequest = PppRequest::destroy($id);
        return redirect()->route('ppe_request')->with('delete', $this->page_name . ' Deleted Successfully !!! ');;
    }
}
