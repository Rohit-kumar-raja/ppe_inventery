<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $page_name = 'Admin Management';
    public function index()
    {
        $all_admin = User::where('status', 1)->get();
        return view('admin.index', ['admins'=>$all_admin,'page' => $this->page_name]);
    }
}
