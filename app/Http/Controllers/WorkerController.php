<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $page_name = 'Worker';
    public function index()
    {
        $worker = Worker::where('type','worker')->get();
        return view('/worker/index',['worker' => $worker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $worker = new Worker;
        $worker->name = $request->name;
        $worker->email = $request->email;
        $worker->phone = $request->phone;
        $worker->address = $request->address;
        $worker->empno = $request->empno;
        $worker->type = "worker";
        $worker->description = $request->description;
        $worker->save();
        return redirect('/worker/index')->with('save',$this->page_name.' Added Successfully !!!');
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
    public function show(Worker $worker)
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
        return view('worker/edit',['worker' => $worker]);
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
        return redirect('/worker/index')->with('update',$this->page_name.' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = worker::where('id',$id)->first();
        $worker->delete();
        return redirect('/worker/index')->with('delete',$this->page_name.' Deleted Successfully');

    }
}
