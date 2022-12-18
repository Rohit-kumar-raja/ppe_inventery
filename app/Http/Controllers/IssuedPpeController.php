<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\IssuedPpe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ppe;
use App\Models\PppRequest;
use App\Models\Store;

class IssuedPpeController extends Controller
{
    public $paga_name = "Issue PPE";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ppes = ppe::where('status', '1')->get();
        $emp = Employee::where('status', 1)->get();
        if (Auth::user()->type = "superadmin") {
            $issue_ppe =  IssuedPpe::all();
            $ppes = PppRequest::all();
        } else {
            $issue_ppe = IssuedPpe::where('issued_by', Auth::user()->id)->get();
            $ppes = PppRequest::where('user_id',Auth::user()->id)->where('status',1)->gat();
        }
        return view('ppe_issue.index', ['data' => $issue_ppe, 'page' => $this->paga_name, 'emp' => $emp, 'ppes' => $ppes]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IssuedPpe  $issuedPpe
     * @return \Illuminate\Http\Response
     */
    public function show(IssuedPpe $issuedPpe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IssuedPpe  $issuedPpe
     * @return \Illuminate\Http\Response
     */
    public function edit(IssuedPpe $issuedPpe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IssuedPpe  $issuedPpe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IssuedPpe $issuedPpe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IssuedPpe  $issuedPpe
     * @return \Illuminate\Http\Response
     */
    public function destroy(IssuedPpe $issuedPpe)
    {
        //
    }
}
