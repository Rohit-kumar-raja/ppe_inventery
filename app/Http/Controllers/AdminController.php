<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public $page_name = 'Admin Management';
    public function index()
    {
        $all_admin = User::all();
        $types = Worker::distinct('type')->get();
        $routeCollection = Route::getRoutes();
        return view('admin.index', [
            'admins' => $all_admin,
            'page' => $this->page_name,
            'all_routes' => $routeCollection,
            'types' => $types
        ]);
    }

    public function status($id)
    {
        $status = User::find($id);
        if ($status->status == 1) {
            User::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            User::where('id', $id)->update(['status' => '1']);
            return redirect()->back()->with('status1', 'Status Successfully Activated');
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $uesr_id =  User::insertGetId($request->except('_token', 'permission_name'));

        
        if (sizeof($request->permission_name) > 0) {
            foreach ($request->permission_name as $permission) {
                Permission::insert([
                    'name' => $permission,
                    'url' => route('$permission'),
                    'user_id' => $uesr_id,
                    'created_at' => date('Y-m-d h:i:s')
                ]);
            }
        }
    }
}
