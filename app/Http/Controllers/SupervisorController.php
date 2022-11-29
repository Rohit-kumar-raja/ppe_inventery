<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use App\Models\Worker;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisor = Worker::get();
        return view('/supervisor/index',['supervisor' => $supervisor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $supervisor = new Worker;
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->phone = $request->phone;
        $supervisor->address = $request->address;
        $supervisor->empno = $request->empno;
        $supervisor->type = "supervisor";
        $supervisor->description = $request->description;
        $supervisor->save();
        return redirect('/supervisor/index');
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
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Supervisor $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $worker = Worker::where('id',$id)->first();
        return view('supervisor/edit',['worker' => $worker]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supervisor = Worker::where('id',$id)->first();
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->phone = $request->phone;
        $supervisor->address = $request->address;
        $supervisor->empno = $request->empno;
        $supervisor->description = $request->description;
        $supervisor->save();
        return redirect('/supervisor/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supervisor = Worker::where('id',$id)->first();
        $supervisor->delete();
        return redirect('/supervisor/index');

    }
}
