<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $page_name = 'Feedback';
    public function index(){
        $feedback = Feedback::get();
        return view('feedback.index',['feedback' => $feedback]);
    }

    Public function save(Request $request){
        $feedback = new Feedback();
        $feedback->subject = $request->subject;
        $feedback->description = $request->description;
        $feedback->empid = $request->empid;
        $feedback->save();
        return redirect('feedback/index');
    }
    
    public function destroy($id){
        $feedback = Feedback::where('id',$id)->first();
        $feedback->delete();
        return redirect('/feedback/index');
    }

}