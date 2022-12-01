<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public $page_name = 'Admin Management';
    public function index()
    {
        $all_admin = User::where('status', 1)->get();
        $types = Worker::distinct('type')->get();
        $routeCollection = Route::getRoutes();
        return view('admin.index', [
            'admins' => $all_admin,
            'page' => $this->page_name,
            'all_routes' => $routeCollection,
            'types' => $types
        ]);
    }
}
